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
		$this->load->view('template/headerberita');
		$this->load->view('post/index',$data);
		$this->load->view('template/footer');
	}
	public function detailberita($id)
	{
		$data['detail_post'] = $this->Model_berita->detail_berita($id);
		$data['data_kategori'] = $this->Model_kategori->tampil_data_all()->result();
		$data['data_berita_terbaru'] = $this->Model_berita->tampil_data_terbaru()->result();
		$this->load->view('template/headerberita');
		$this->load->view('post/detailposting',$data);
		$this->load->view('template/footer');
}
}

