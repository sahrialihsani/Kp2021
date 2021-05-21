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
		$data['menu_beranda'] = "Home";
		$data['menu_tkami'] = "About Us";
		$data['menu_berita'] = "News";
		$data['menu_layanan'] = "Programs";
		$data['menu_hubungi'] = "Contact Us";
		$data['menu_bahasa'] = "Language";
		$data['beasiswa'] = "Scholarship & Global Opportunity";
		$data['pangkalan'] = "Cooperation Programs";
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['hero1_judul'] = "Welcome to Office of Partnership and International Affair";
		$data['hero1_keterangan'] = "Office of Partnership and International Affair is a Technical Implementation Unit responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['hero2_judul'] = "Welcome to Office of Partnership and International Affair";
		$data['hero2_keterangan'] = "Office of Partnership and International Affair is a Technical Implementation Unit responsible for unib cooperation relationships with local and foreign agencies/universities.";

		$this->load->view('template/header',$data);
		$this->load->view('index',$data);
		$this->load->view('template/footer');
	}

}

