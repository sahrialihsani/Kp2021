<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
	}
	public function index()
	{
	     $this->load->database();
          $jumlah_data = $this->Model_berita->jumlah_data();
          $this->load->library('pagination');
        
          $config['base_url'] = base_url().'post/index/';
          $config['total_rows'] = $jumlah_data;
          $config['per_page'] = 6;
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
        
          $from = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
          $this->pagination->initialize($config);
          $data['beritaku'] = $this->Model_berita->data($config['per_page'],$from);
	    //batas
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
	public function tampilKategori($kategori = null){
	$this->load->database();

    $where = null;
    if($kategori != null):
      $where = array(
        'kategori' => str_replace('_',' ',$kategori)
      );
    endif;

    $jumlah_data = $this->Model_berita->jumlah_data($where);
    $this->load->library('pagination');
    $config['base_url'] = base_url().'post/tampilKategori/'.$kategori.'/';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = 6;
      $config['first_link']       = 'First';
      $config['last_link']        = 'Last';
      $config['next_link']        = 'Next';
      $config['prev_link']        = 'Prev';
      $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
      $config['full_tag_close']   = '</ul></nav></div>';
      $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
      $config['num_tag_close']    = '</span></li>';
      $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
      $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['prev_tagl_close']  = '</span>Next</li>';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tagl_close'] = '</span></li>';
      $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['last_tagl_close']  = '</span></li>';

    $from = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    $this->pagination->initialize($config);
    $data['beritaku'] = $this->Model_berita->data($config['per_page'],$from,$where);
    //batas
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

