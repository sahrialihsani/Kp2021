<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class programdanbea extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$data['total_program'] = $this->Model_program->total_data()->num_rows();
		$data['total_studentmob'] = $this->Model_studentmob->total_data()->num_rows();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/program/programbea',$data);
		
	}
}

