<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['total_program'] = $this->Model_program->total_data()->num_rows();
		$data['total_kerjasama'] = $this->Model_universitas->total_data_keseluruhan()->num_rows();
		$data['total_mitra'] = $this->Model_mitra->total_data()->num_rows();
		$data['total_organisasi'] = $this->Model_organisasi->total_data()->num_rows();

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/dashboard/index',$data);
		
	}

}

