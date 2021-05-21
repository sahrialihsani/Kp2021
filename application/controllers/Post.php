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
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$data['berita'] = "News";
		$data['beranda'] = "Home";
		$this->load->view('template/headerberita',$data);
		$this->load->view('post/index',$data);
		$this->load->view('template/footer',$data);
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
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$data['berita'] = "News";
		$data['beranda'] = "Home";
		$data['category'] = "Categories";
		$data['recent'] = "Recent Posts";
		$data['detail_post'] = $this->Model_berita->detail_berita($id);
		$data['data_kategori'] = $this->Model_kategori->tampil_data_all()->result();
		$data['data_berita_terbaru'] = $this->Model_berita->tampil_data_terbaru()->result();
		$this->load->view('template/headerberita',$data);
		$this->load->view('post/detailposting',$data);
		$this->load->view('template/footer',$data);
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
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$data['berita'] = "News";
		$data['berita_terkait'] = "Related News";
		$data['beranda'] = "Home";
		$data['data_select_kategori'] = $this->Model_berita->tampil_data_by_kategori($kategori)->result();
		$this->load->view('template/headerberita', $data);
		$this->load->view('post/kategori',$data);
		$this->load->view('template/footer',$data);
	}
}

