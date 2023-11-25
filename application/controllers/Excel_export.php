<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php'; // Make sure this path is correct

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel_export extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Excel_export_model");
    }

    public function index()
    {
        $data["employee_data"] = $this->Excel_export_model->fetch_data();
        $this->load->view("excel_export_view", $data);
    }

    public function action()
    {
        $object = new Spreadsheet();
        $object->setActiveSheetIndex(0);

        $table_columns = array("Name", "Address", "Gender", "Designation", "Age");

        $column = 1;

        foreach ($table_columns as $field) {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        $employee_data = $this->Excel_export_model->fetch_data();

        $excel_row = 2;

        foreach ($employee_data as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->name);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->address);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->gender);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->designation);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->age);
            $excel_row++;
        }

        $writer = new Xlsx($object);
        $file_path = 'EmployeeData.xlsx'; // Define the file path

        $writer->save($file_path);

        // Set the appropriate headers for Excel download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="EmployeeData.xlsx"');
        readfile($file_path);
        unlink($file_path); // Clean up the temporary file
    }

    public function downloadPDF()
    {
        require_once(APPPATH . 'helpers/tcpdf/tcpdf.php');
        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setTitle('Dynamin PDF');

        $pdf->AddPage();
        //write code

        $html = '<h1>TCPDF</h1>';
        $html .= '<table id="employeeTable" class="table table-striped w-100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Designation</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>';
    }
}
