<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pangkalandata extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'logout?alert=belum_login');
		}
	}
	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/index');
		
	}
	public function universitas(){
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/universitas');
	}
	public function pemerintahan(){
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/pemerintahan');
	}
	public function swasta(){
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/swasta');
	}
}

