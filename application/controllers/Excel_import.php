<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php'; // Make sure this path is correct

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel_import extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Excel_import_model');
    }

    public function index()
    {
        $this->load->view("excel_import_view");
    }

    public function spreadsheet_import()
    {
        $upload_files = $_FILES['import_file']['name'];
        $extension = pathinfo($upload_files, PATHINFO_EXTENSION);

        // Load appropriate reader based on file extension
        if ($extension == 'csv') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else if ($extension == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else if ($extension == 'xlsx') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Invalid file format. Please upload a CSV, XLS, or XLSX file.</div>');
            redirect('Excel_import');
        }

        try {
            // Load spreadsheet data
            $spreadsheet = $reader->load($_FILES['import_file']['tmp_name']);
            $sheetdata = $spreadsheet->getActiveSheet()->toArray();

            $sheetcount = count($sheetdata);

            if ($sheetcount > 1) {
                $data = array();

                // Extract data from spreadsheet
                for ($i = 1; $i < $sheetcount; $i++) {
                    $name = isset($sheetdata[$i][0]) ? $sheetdata[$i][0] : '';
                    $address = isset($sheetdata[$i][1]) ? $sheetdata[$i][1] : '';
                    $gender = isset($sheetdata[$i][2]) ? $sheetdata[$i][2] : '';
                    $designation = isset($sheetdata[$i][3]) ? $sheetdata[$i][3] : '';
                    $age = isset($sheetdata[$i][4]) ? $sheetdata[$i][4] : '';

                    $data[] = array(
                        'name' => $name,
                        'address' => $address,
                        'gender' => $gender,
                        'designation' => $designation,
                        'age' => $age
                    );
                }

                // Insert data into the database
                $insertdata = $this->Excel_import_model->insert_batch($data);

                if ($insertdata) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success">Data Added Successfully.</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Not Added. Please Try Again.</div>');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning">No data found in the spreadsheet.</div>');
            }
        } catch (\Exception $e) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Error loading the spreadsheet: ' . $e->getMessage() . '</div>');
        }

        redirect('Excel_import');
    }
}
