<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userquestion extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_userq'] = $this->Model_p_pengguna->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/landingpage/userquestion',$data);
		
	}
	public function tambahUserquestion(){
		$nama =$this->input->post('nama',true);
		$email =$this->input->post('email');
		$institusi =$this->input->post('institusi');
		$pesan =$this->input->post('pesan');
$sql = $this->db->query("SELECT nama FROM tb_pertanyaan_pengguna where nama='$institusi'");
$cek_p_pengguna = $sql->num_rows();
if ($cek_p_pengguna > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Already Have</div>');

redirect(base_url('home'));
		}else{
	$data['data_p_pengguna']= $this->db->get_where('tb_pertanyaan_pengguna')->row_array();
$data=array(
			'nama'=> htmlspecialchars($nama),
		'email'=>$email,
	'institusi'=>$institusi,
	'pesan'=>$pesan);
$this->Model_p_pengguna->tambah_p_pengguna($data,'tb_pertanyaan_pengguna');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan data</div>');

	redirect(base_url('admin/userquestion'));
		}	
	}
  public function hapusUserquestion($id){
	$where=array('id'=> $id);
	$this->Model_p_pengguna->hapus_data($where,'tb_pertanyaan_pengguna');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus data</div>');

		redirect(base_url('admin/userquestion'));
	}
  }
