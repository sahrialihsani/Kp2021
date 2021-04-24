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
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/jaringan',$data);
		
	}
	public function tambahOrganisasi(){
		$nama =$this->input->post('nama');
		$tahun =$this->input->post('tahun');


$sql = $this->db->query("SELECT nama FROM tb_organisasi where nama='$nama'");
$cek_organisasi = $sql->num_rows();
if ($cek_organisasi > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>organisasi ini sudah ada</div>');

redirect(base_url('admin/jaringan'));
		}else{
	
	$data['data_organisasi']= $this->db->get_where('tb_organisasi')->row_array();
$data=array('nama'=>$nama,'tahun'=>$tahun);
$this->Model_organisasi->tambah_organisasi($data,'tb_organisasi');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil meenambahkan organisasi</div>');


redirect(base_url('admin/jaringan'));
	}
	}
	public function editOrganisasi($id){
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$where = array('id'=>$id);
		
	$data['data_organisasi']=$this->Model_organisasi->edit_organisasi($where,'tb_organisasi')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit_organisasi', $data);
	
		}
		public function ubah_organisasi(){
				$data['data_organisasi']= $this->db->get_where('tb_organisasi')->row_array();
	
			$id=$this->input->post('id');
			$organisasi =$this->input->post('organisasi');
			$data=array('nama'=>$nama,'tahun'=>$tahun);

			$where=array(
				'id'=>$id
			);
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

