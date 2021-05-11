<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftarmitra extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index(){
		$data['hasil']=$this->Model_kerjasama->grafikNegara()->result();
		$this->load->view('template/headerlayanan');
		$this->load->view('daftarmitra',$data);
		$this->load->view('template/footer');

	}
	public function daftar(){
		$email =$this->input->post('email');
		$institusi =$this->input->post('institusi');
		$negara =$this->input->post('negara');
		$pesan =$this->input->post('pesan');
		$gambar =$this->input->post('gambar');
		$berkas =$this->input->post('berkas');

$sql = $this->db->query("SELECT institusi FROM tb_mitra where institusi='$institusi'");
$cek_mitra = $sql->num_rows();
if ($cek_mitra > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>There are the same institution with yours in our database</div>');
redirect(base_url('daftarmitra'));
		}else{
			$config['upload_path']='./assets/dua/img/mitra/';
			$config['allowed_types']='jpg|jpeg|png';
			$this->load->library('upload',$config);
				if($this->upload->do_upload('gambar')){
					$gambar=$this->upload->data('file_name');
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>gambar gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
				}
				$config['upload_path']='./assets/dua/berkas/mitra/';
				$config['allowed_types']='pdf|doc|docx';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('berkas')){
					$berkas=$this->upload->data('file_name');
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>file gagal diupload, masukan ekstensi pdf,doc,docx</div>');
				}
	$data['data_mitra']= $this->db->get_where('tb_mitra')->row_array();
$data=array(
		'email'=>$email,
	'institusi'=>$institusi,
	'id_negara'=>$negara,
	'pesan'=>$pesan,
	'status'=>"Menunggu",
	'gambar'=>$gambar,
	'berkas'=>$berkas);
$this->Model_mitra->tambah_mitra($data,'tb_mitra');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Success, please wait and check your email, until our staff check your data</div>');
	redirect(base_url('daftarmitra'));
	}
  }
  }
