<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    public function signup($array){
        return $this->db->insert('users',$array);
    }

    public function signin($email,$pass){
        $this->db->where('email',$email);
        $this->db->where('password',$pass);
        return $this->db->get('users');
    }

}
