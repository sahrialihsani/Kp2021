<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentmob extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_studentmob'] = $this->Model_studentmob->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/program/studentmobility',$data);
		
	}
	public function tambahStudentmob(){
		$nama =$this->input->post('nama');
		$email =$this->input->post('email');
		$berkas =$this->input->post('berkas');
		$sql = $this->db->query("SELECT nama FROM tb_studentmob where nama='$nama'");
$cek_Studentmob = $sql->num_rows();
if ($cek_Studentmob > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Studentmob ini sudah ada</div>');

redirect(base_url('admin/studentmob'));
		}else{
			
			if($berkas=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/studentmob/';
				$config['allowed_types']='pdf|doc|docx';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('berkas')){
					$berkas=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berkas gagal diupload, masukan ekstensi pdf,docx,doc</div>');
		
				}
		
			}
	$data['data_studentmob']= $this->db->get_where('tb_studentmob')->row_array();
$data=array(
		'nama'=>$nama,
		'email'=> $email,
	'berkas'=>$berkas);
$this->Model_studentmob->tambah_studentmob($data,'tb_studentmob');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan Student mobility</div>');

	redirect(base_url('admin/studentmob'));
	}
	}
	public function editStudentmob($id){
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$where = array('id'=>$id);
		
	$data['data_studentmob']=$this->Model_studentmob->edit_studentmob($where,'tb_studentmob')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/program/edit_studentmob', $data);
	
		}
		public function ubah_studentmob(){
				$data['data_studentmob']= $this->db->get_where('tb_studentmob')->row_array();
	
			$id=$this->input->post('id');
			$nama =$this->input->post('nama');
			$email =$this->input->post('email');
			$berkas =$this->input->post('berkas');
			if($berkas=''){
			
			}else{
					$config['upload_path']='./assets/dua/berkas/studentmob/';
					$config['allowed_types']='pdf|doc|docx';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('berkas')){
						$berkas=$this->upload->data('file_name');
			
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berkas gagal diupload, masukan ekstensi pdf,doc,docx</div>');
			
					}
			
				}
		$data=array(
			'nama'=>$nama,
			'email'=> $email,
		'berkas'=>$berkas);
			$where= array(
				'id'=>$id
			);
		$this->Model_studentmob->update_data($where,$data,'tb_studentmob');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah Student mobility</div>');
	
			redirect(base_url('admin/studentmob'));
	
	  }
	public function hapusStudentmob($id){
		$where=array('id'=> $id);
		$this->Model_studentmob->hapus_data($where,'tb_studentmob');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus Student mobility</div>');
	
			redirect(base_url('admin/studentmob'));
		}
}

