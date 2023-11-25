<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'vendor/autoload.php'; // Adjust the path as needed

use Mpdf\Mpdf;

class Mpdf_lib
{
    public function __construct()
    {
        $this->mpdf = new Mpdf();
    }

    public function generate($html, $filename = '', $stream = TRUE)
    {
        $this->mpdf->WriteHTML($html);

        if ($stream) {
            $this->mpdf->Output($filename . '.pdf', 'D'); // D for force download
        } else {
            return $this->mpdf->Output($filename . '.pdf', 'S'); // S for return as a string
        }
    }
}
