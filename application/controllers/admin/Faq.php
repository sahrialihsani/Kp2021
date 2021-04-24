<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faq extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_faq'] = $this->Model_faq->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/landingpage/faq',$data);
		
	}
	public function tambahFaq(){
		$pertanyaan =$this->input->post('pertanyaan');
		$jawaban =$this->input->post('jawaban');
$sql = $this->db->query("SELECT pertanyaan FROM tb_faq where pertanyaan='$pertanyaan'");
$cek_faq = $sql->num_rows();
if ($cek_faq > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Pertanyaan ini sudah ada</div>');

redirect(base_url('admin/faq'));
		}else{
	
	$data['data_faq']= $this->db->get_where('tb_faq')->row_array();
$data=array(
		'pertanyaan'=>$pertanyaan,
	'jawaban'=>$jawaban);
$this->Model_faq->tambah_faq($data,'tb_faq');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil meenambahkan faq</div>');

	redirect(base_url('admin/faq'));
	}
	}
	public function editFaq($id){
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$where = array('id'=>$id);
		
	$data['data_faq']=$this->Model_faq->edit_faq($where,'tb_faq')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/landingpage/edit_faq', $data);
	
		}
		public function ubah_faq(){
				$data['data_faq']= $this->db->get_where('tb_faq')->row_array();
	
			$id=$this->input->post('id');
			$pertanyaan =$this->input->post('pertanyaan');
			$jawaban =$this->input->post('jawaban');

		$data=array(
			'pertanyaan'=>$pertanyaan,
			'jawaban'=>$jawaban
		);
			$where=array(
				'id'=>$id
			);
		$this->Model_faq->update_data($where,$data,'tb_faq');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah faq</div>');
	
			redirect(base_url('admin/faq'));
	}
	public function hapusFaq($id){
		$where=array('id'=> $id);
		$this->Model_faq->hapus_data($where,'tb_faq');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus faq</div>');
	
			redirect(base_url('admin/faq'));
	}

}

