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
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$data['hero1_judul'] = "Welcome to Office of Partnership and International Affair";
		$data['hero1_keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['hero2_judul'] = "Welcome to Office of Partnership and International Affair";
		$data['hero2_keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['hero3_judul'] = "Welcome to Office of Partnership and International Affair";
		$data['hero3_keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['exchange_mhs']="Student Exchange Abroad";
		$data['exchange_dsn']="Lecturer Exchange abroad";
		$data['foreign_mhs']="Foreign Students";
		$data['cooperation']="Local and International Cooperation";	
		$data['upt'] = "Office of Partnership and International Affair";
		$data['unib'] = "University Of Bengkulu";
		$data['news'] = "News";
		$data['news_keterangan'] = "Office of Partnership and International Affair Always Keep up to date with the latest information, Please click the button below to visit the latest news";
		$data['our_programs'] = "Our Program";
		$data['programs_keterangan'] = "In accordance with the vision of The University of Bengkulu, namely To Become a World-class University in 2025, UPT KSLI has had international programs.";
		$data['cooperation'] = "Cooperation";
		$data['cooperation_keterangan'] = "University of Bengkulu has an extensive networks in collaboration with various agencies and universities both local and overseas.";
		$this->load->view('template/header',$data);
		$this->load->view('index',$data);
		$this->load->view('template/footer',$data);
	}

}

