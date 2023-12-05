<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function signup()
	{
		$this->form_validation->set_error_delimiters('<div class= "text-danger">','</div>');
		if ($this->form_validation->run('signup_valid') == false) 
		{
			$this->load->view('admin/signup');
		}else
		{
			$post = $this->input->post();
			$this->load->model('Admin_model');
			$result = $this->Admin_model->signup($post);
			if($result) {
				$this->session->set_flashdata('message','Signup Successfully Registered');
				$this->session->set_flashdata('msg_class','bg-success');
			}else {
				$this->session->set_flashdata('message','Please try again');
				$this->session->set_flashdata('msg_class','bg-danger');
			}
			return redirect ('Admin/login');
		}
	}		

	public function login()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger" >','</div>');
		if ($this->form_validation->run('login_valid') == false )
		{
			$this->load->view('admin/login');
		}else{
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			$this->load->model('Admin_model');
			$result = $this->Admin_model->signin($email,$pass);
			
			if ($result->num_rows() > 0) {
				$user = $result->row();
				$this->session->set_flashdata('user_id', $user->id);
				return redirect("Admin/dashboard");
			}else{
				$this->session->set_flashdata('error', 'Invalid email/password');
				return redirect("Admin/login");
			}
		}
	}
	public function dashboard(){
		$this->load->view('admin/dashboard');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Admin/login');
	}
}
