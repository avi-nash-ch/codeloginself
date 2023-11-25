<?php

class PdfController extends CI_Controller
{
    public function generate_pdf()
    {
        $this->load->library('mpdf_lib');

        $html = '<h1>Hello World</h1>'; // Your HTML content

        $this->mpdf_lib->generate($html, 'filename');
    }
}
