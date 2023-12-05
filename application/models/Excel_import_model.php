<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_import_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function insert_batch($data){
        $this->db->insert_batch('import_employee_details',$data);
        if($this->db->affected_rows() > 0){
            return 1;
        }else{
            return 0;
        }

    }
}