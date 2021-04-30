<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftarmitra extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/headerlayanan');
		$this->load->view('daftarmitra');
		
	}
	public function daftar(){
		$nama =$this->input->post('nama',true);
		$email =$this->input->post('email');
		$institusi =$this->input->post('institusi');
		$pesan =$this->input->post('pesan');
		$gambar =$this->input->post('gambar');
		$file =$this->input->post('file');

$sql = $this->db->query("SELECT institusi FROM tb_mitra where institusi='$institusi'");
$cek_mitra = $sql->num_rows();
if ($cek_mitra > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Sudah ada mitra yang sama</div>');

redirect(base_url('daftarmitra'));
		}else{
			if($gambar=''){
			
			}else{
					$config['upload_path']='./assets/dua/img/mitra/';
					$config['allowed_types']='jpg|jpeg|png';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('gambar')){
						$gambar=$this->upload->data('file_name');
			
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>gambar gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
			
					}
				}
			if($file=''){
			
			}else{
					$config['upload_path']='./assets/dua/berkas/mitra/';
					$config['allowed_types']='pdf|doc|docx';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('file')){
					$gambar=$this->upload->data('file_name');
				
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>file gagal diupload, masukan ekstensi pdf,doc,docx</div>');
				
				}
			}
	
	$data['data_mitra']= $this->db->get_where('tb_mitra')->row_array();
$data=array(
			'nama'=> htmlspecialchars($nama),
		'email'=>$email,
	'institusi'=>$institusi,
	'pesan'=>$pesan,
	'status'=>"Menunggu",
	'gambar'=>$gambar,
	'file'=>$file);
$this->Model_mitra->tambah_mitra($data,'tb_mitra');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Success, please wait and check your email, until our staff check your data</div>');

	redirect(base_url('daftarmitra'));
	}
  }
  }
