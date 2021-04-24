<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message text-center">Anda berhasil logout</div>');
		redirect(base_url('login'));	
	}

}

