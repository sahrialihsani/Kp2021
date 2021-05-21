<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class downloaddata extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$data['menu_beranda'] = "Home";
		$data['menu_tkami'] = "About Us";
		$data['menu_berita'] = "News";
		$data['menu_layanan'] = "Programs";
		$data['menu_hubungi'] = "Contact Us";
		$data['menu_bahasa'] = "Language";
		$data['beasiswa'] = "Scholarship & Global Opportunity";
		$data['pangkalan'] = "Cooperation Programs";
		$data['jaringan'] = "Networking";
		$data['perjalanan'] = "Overseas Travel";
		$this->load->view('template/header',$data);
		$this->load->view('downloaddata');
		$this->load->view('template/footer');
	}

}

