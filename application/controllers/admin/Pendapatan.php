<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendapatan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_pendapatan'] = $this->Model_pendapatan->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/pendapatan',$data);
		
	}
	public function tambahPendapatan(){
		$id_kerjasama =$this->input->post('id_kerjasama');
		$pendapatan =$this->input->post('pendapatan');
		
	$data['data_pendapatan']= $this->db->get_where('tb_pendapatan')->row_array();
$data=array(
		'id_kerjasama'=>$id_kerjasama,
		'pendapatan'=> $pendapatan);
$this->Model_pendapatan->tambah_pendapatan($data,'tb_pendapatan');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan data pendapatan</div>');
	redirect(base_url('admin/pendapatan'));
	}
	public function editPendapatan($id){
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$where = array('id'=>$id);
		$data['data_pendapatan']=$this->Model_pendapatan->edit_pendapatan($where,'tb_pendapatan')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/edit_pendapatan', $data);
		}
	public function ubah_pendapatan(){
		$data['data_pendapatan']= $this->db->get_where('tb_pendapatan')->row_array();
		$id=$this->input->post('id');
		$id_kerjasama =$this->input->post('id_kerjasama');
		$pendapatan =$this->input->post('pendapatan');
		$data=array(
		'id_kerjasama'=>$id_kerjasama,
		'pendapatan'=> $pendapatan);
			$where= array(
				'id'=>$id
			);
		$this->Model_pendapatan->update_data($where,$data,'tb_pendapatan');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah data pendapatan</div>');
			redirect(base_url('admin/pendapatan'));
	  }
	public function hapusPendapatan($id){
		$where=array('id'=> $id);
		$this->Model_pendapatan->hapus_data($where,'tb_pendapatan');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus data pendapatan</div>');
			redirect(base_url('admin/pendapatan'));
		}
}

