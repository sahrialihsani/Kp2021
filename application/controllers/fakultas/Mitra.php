<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mitra extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_mitra'] = $this->Model_mitra->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/landingpage/mitra',$data);
		
	}
	public function tambahMitra(){
		$nama =$this->input->post('nama',true);
		$email =$this->input->post('email');
		$institusi =$this->input->post('institusi');
		$pesan =$this->input->post('pesan');

$sql = $this->db->query("SELECT institusi FROM tb_mitra where institusi='$institusi'");
$cek_mitra = $sql->num_rows();
if ($cek_mitra > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Mitra ini sudah ada</div>');

redirect(base_url('admin/mitra'));
		}else{
	
	$data['data_mitra']= $this->db->get_where('tb_mitra')->row_array();
$data=array(
			'nama'=> htmlspecialchars($nama),
		'email'=>$email,
	'institusi'=>$institusi,
	'pesan'=>$pesan);
$this->Model_mitra->tambah_mitra($data,'tb_mitra');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan mitra</div>');

	redirect(base_url('admin/mitra'));
	}
  }
  public function editMitra($id){
	$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
	$where = array('id'=>$id);
	
$data['data_mitra']=$this->Model_mitra->edit_mitra($where,'tb_mitra')->result();
	$this->load->view('admin/template/header');
	$this->load->view('admin/template/sidebar');
	$this->load->view('admin/landingpage/edit_mitra', $data);

	}
	public function ubah_mitra(){
			$data['data_mitra']= $this->db->get_where('tb_mitra')->row_array();

		$id=$this->input->post('id');
		$nama =$this->input->post('nama',true);
		$email =$this->input->post('email');
		$institusi =$this->input->post('institusi');
		$pesan =$this->input->post('pesan');
	$data=array(
			'nama'=> htmlspecialchars($nama),
		'email'=>$email,
	'institusi'=>$institusi,
	'pesan'=>$pesan);
		$where=array(
			'id'=>$id
		);
	$this->Model_mitra->update_data($where,$data,'tb_mitra');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah mitra</div>');

		redirect(base_url('admin/mitra'));

  }
  public function hapusMitra($id){
	$where=array('id'=> $id);
	$this->Model_mitra->hapus_data($where,'tb_mitra');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus mitra</div>');

		redirect(base_url('admin/mitra'));
	}
  }
