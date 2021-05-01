<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class program extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_program'] = $this->Model_program->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/program/kerjasamaln',$data);
		
	}
	public function tambahProgram(){
		$nama =$this->input->post('nama');
		$keterangan =$this->input->post('keterangan');
		$tahun =$this->input->post('tahun');
		$berkas =$this->input->post('berkas');
		$sql = $this->db->query("SELECT nama FROM tb_program where nama='$nama'");
$cek_Program = $sql->num_rows();
if ($cek_Program > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Program ini sudah ada</div>');

redirect(base_url('admin/program'));
		}else{
			
			if($berkas=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/program/';
				$config['allowed_types']='pdf|doc|docx';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('berkas')){
					$berkas=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berkas gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
		
				}
		
			}
	$data['data_program']= $this->db->get_where('tb_program')->row_array();
$data=array(
		'nama'=>$nama,
		'keterangan'=> $keterangan,
		'tahun'=> $tahun,
	'berkas'=>$berkas);
$this->Model_program->tambah_program($data,'tb_program');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan Program</div>');

	redirect(base_url('admin/program'));
	}
	}
	public function editProgram($id){
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$where = array('id'=>$id);
		
	$data['data_program']=$this->Model_program->edit_program($where,'tb_program')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/program/edit_program', $data);
	
		}
		public function ubah_program(){
				$data['data_program']= $this->db->get_where('tb_program')->row_array();
	
			$id=$this->input->post('id');
			$nama =$this->input->post('nama');
			$keterangan =$this->input->post('keterangan');
			$tahun =$this->input->post('tahun');
			$berkas =$this->input->post('berkas');
			if($berkas=''){
			
			}else{
					$config['upload_path']='./assets/dua/berkas/program/';
					$config['allowed_types']='pdf|doc|docx';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('berkas')){
						$berkas=$this->upload->data('file_name');
			
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berkas gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
			
					}
			
				}
		$data=array(
			'nama'=>$nama,
			'keterangan'=> $keterangan,
			'tahun'=> $tahun,
		'berkas'=>$berkas);
			$where=array(
				'id'=>$id
			);
		$this->Model_program->update_data($where,$data,'tb_program');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah Program</div>');
	
			redirect(base_url('admin/program'));
	
	  }
	public function hapusProgram($id){
		$where=array('id'=> $id);
		$this->Model_program->hapus_data($where,'tb_program');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus Program</div>');
	
			redirect(base_url('admin/program'));
		}
}

