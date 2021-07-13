<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftarmitra extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index(){
		$data['hasil']=$this->Model_kerjasama->grafikNegara()->result();
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
		$this->load->view('template/headerlayanan', $data);
		$this->load->view('daftarmitra',$data);
		$this->load->view('template/footer',$data);

	}
	
	public function daftar(){
$this->_rules();
		// if($this->form_validation->run()==FALSE){
		// 	$this->tambah();
		// }else{

            $email 		    = $this->input->post('email');
            $institusi 		= $this->input->post('institusi');
			$negara 		= $this->input->post('negara');
			$pesan 			= $this->input->post('pesan');
			// $file 				= $_FILES['file'];
			$gambar='';
			$berkas='';
			
			if (empty($_FILES['gambar']['name'])) {
			  // code...
			  $gambar='-';
			}
			else{
				$gambar = $_FILES['gambar'];
				$config['upload_path'] = './assets/dua/img/mitra/Gambar';
				$config['allowed_types']  = 'jpeg|jpg|png';
				$config['max_size']  = '2000';
				$config['file_name'] = "Mitra_".$institusi;
				$this->load->library('upload',$config);
				
				if($this->upload->do_upload('gambar')){
				  $gambar=$this->upload->data('file_name');
				}else
				{
					$error = array('error' => $this->upload->display_errors());
					var_dump($error);
					die();
	  
				}
	  }
	  if (empty($_FILES['berkas']['name'])){
		// code...
		$berkas='-';
	  }
	  else {
	  
	  
			$berkas = $_FILES['berkas'];
				$config2['upload_path'] = './assets/dua/img/mitra/File';
				$config2['allowed_types']  = 'doc|docx|pdf';
				$config['max_size']  = '2000';
				$config2['file_name'] = "Mitra_".$institusi;
				$this->upload->initialize($config2);
	  
				$this->load->library('upload',$config2);
				if(!$this->upload->do_upload('berkas')){
				  	echo "Upload Berkas Gagal";
					$error = array('error' => $this->upload->display_errors());
					var_dump($error);
					die();
				}else{
				  $berkas=$this->upload->data('file_name');
				}
	  }


			 $sql = $this->db->query("SELECT count(institusi) as surat FROM tb_mitra where institusi='$institusi'")->result();
			 $cek_surat='';
			 foreach($sql as $ss){
				 $cek_surat = $ss->surat;
			 }
			 
			if ($cek_surat > 0) {
 
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-message alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>File gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
			 redirect('daftarmitra');
			 }


			else {

 			$data = array(

                'email' 		    => $email,
                'institusi' 	    => $institusi,
				'id_negara' 		=> $negara,
				'pesan' 			=> $pesan,
                'gambar'       	=> $gambar,
				'berkas' 	=> $berkas,
 			);
			$this->db->insert('tb_mitra', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Success, please wait and check your email, until our staff check your data</div>');
			redirect('daftarmitra');
	}
  }
  	public function _rules()
	{
		
		$this->form_validation->set_rules('email','email','required',['required' => 'Email wajib di isi!']);
		$this->form_validation->set_rules('institusi','institusi','required',['required' => 'Institusi wajib di isi!']);
		$this->form_validation->set_rules('negara','negara','required',['required' => 'Negara di isi!']);
		$this->form_validation->set_rules('pesan','pesan','required',['required' => 'Pesan wajib di isi!']);
		
	}
  }
