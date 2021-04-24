<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_fakultas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='fakultas_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/dashboard/index');
		
	}

}

