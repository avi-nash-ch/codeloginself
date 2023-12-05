<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once FCPATH. '/vendor/autoload.php';  // Correct path to autoload.php

class Welcome extends CI_Controller
{
    public function index()
    {
        //$this->load->view('welcome_message');
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
    }
}
