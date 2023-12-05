<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export_model extends CI_Model {
    
   // Constructor
   public function __construct() {
       parent::__construct();
       $this->load->database(); // Load the database library
   }

   // Fetch employee data from the database
   public function fetch_data() {
        $this->db->order_by("id", "DESC");
        $query = $this->db->get("employee");
        return $query->result(); // Returns an array of employee data
   }
}

