<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$data['data_berita'] = $this->Model_berita->tampil_data_all()->result();
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
		$data['berita'] = "News";
		$data['beranda'] = "Home";
		$this->load->view('template/headerberita',$data);
		$this->load->view('post/index',$data);
		$this->load->view('template/footer');
	}
	public function detailberita($id)
	{	$data['menu_beranda'] = "Home";
		$data['menu_tkami'] = "About Us";
		$data['menu_berita'] = "News";
		$data['menu_layanan'] = "Programs";
		$data['menu_hubungi'] = "Contact Us";
		$data['menu_bahasa'] = "Language";
		$data['beasiswa'] = "Scholarship & Global Opportunity";
		$data['pangkalan'] = "Cooperation Programs";
		$data['jaringan'] = "Networking";
		$data['perjalanan'] = "Overseas Travel";
		$data['berita'] = "News";
		$data['beranda'] = "Home";
		$data['detail_post'] = $this->Model_berita->detail_berita($id);
		$data['data_kategori'] = $this->Model_kategori->tampil_data_all()->result();
		$data['data_berita_terbaru'] = $this->Model_berita->tampil_data_terbaru()->result();
		$this->load->view('template/headerberita',$data);
		$this->load->view('post/detailposting',$data);
		$this->load->view('template/footer');
}
	public function tampilKategori($kategori){
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
		$data['berita'] = "News";
		$data['berita_terkait'] = "Related News";
		$data['beranda'] = "Home";
		$data['data_select_kategori'] = $this->Model_berita->tampil_data_by_kategori($kategori)->result();
		$this->load->view('template/headerberita', $data);
		$this->load->view('post/kategori',$data);
		$this->load->view('template/footer');
	}
}

