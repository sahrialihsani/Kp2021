<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jaringan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_organisasi'] = $this->Model_organisasi->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/jaringan',$data);
		
	}
	public function tambahOrganisasi(){
		$nama =$this->input->post('nama');
		$tahun =$this->input->post('tahun');
		$keterangan =$this->input->post('keterangan');
		$gambar =$this->input->post('gambar');
$sql = $this->db->query("SELECT nama FROM tb_organisasi where nama='$nama'");
$cek_organisasi = $sql->num_rows();
if ($cek_organisasi > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>organisasi ini sudah ada</div>');

redirect(base_url('admin/jaringan'));
		}else{
			if($gambar=''){
		
			}else{
					$config['upload_path']='./assets/dua/img/organisasi/';
					$config['allowed_types']='jpg|jpeg|png';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('gambar')){
						$gambar=$this->upload->data('file_name');
			
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>gambar gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
			
					}
			
				}
	$data['data_organisasi']= $this->db->get_where('tb_organisasi')->row_array();
$data=array('nama'=>$nama,'tahun'=>$tahun,'keterangan'=>$keterangan,'gambar'=>$gambar);
$this->Model_organisasi->tambah_organisasi($data,'tb_organisasi');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan organisasi</div>');
redirect(base_url('admin/jaringan'));
	}
	}
	public function editOrganisasi($id){
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$where = array('id'=>$id);
		$data['data_organisasi']=$this->Model_organisasi->edit_organisasi($where,'tb_organisasi')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit_organisasi', $data);
		}
		public function ubah_organisasi(){
				$data['data_organisasi']= $this->db->get_where('tb_organisasi')->row_array();
	
			$id=$this->input->post('id');
			$nama =$this->input->post('nama');
			$tahun =$this->input->post('tahun');
			$keterangan =$this->input->post('keterangan');
			$gambar =$this->input->post('gambar');
			if($gambar=''){
			}else{
					$config['upload_path']='./assets/dua/img/organisasi/';
					$config['allowed_types']='jpg|jpeg|png';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('gambar')){
						$gambar=$this->upload->data('file_name');
			
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>gambar gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
			
					}
			
				}
			$data=array('nama'=>$nama,'tahun'=>$tahun,'keterangan'=>$keterangan,'gambar'=>$gambar);
			$where=array('id'=>$id);
		$this->Model_organisasi->update_data($where,$data,'tb_organisasi');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah organisasi</div>');
redirect(base_url('admin/jaringan'));
	}
	public function hapusOrganisasi($id){
		$where=array('id'=> $id);
		$this->Model_organisasi->hapus_data($where,'tb_organisasi');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus organisasi</div>');
	
		
redirect(base_url('admin/jaringan'));
	}

}