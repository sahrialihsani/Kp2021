<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$data['data_mitra'] = $this->Model_mitra->tampil_data()->result_array();
		$data['total_mitra'] = $this->Model_mitra->tampil_data()->num_rows();
		$data['data_staf'] = $this->Model_staf->tampil_data()->result_array();
		$data['data_berita'] = $this->Model_berita->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('index',$data);
		$this->load->view('template/footer');
	}

}

