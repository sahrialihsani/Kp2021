<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mobility extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_mobility'] = $this->Model_mobility->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/program/mobility',$data);
		
	}
	public function tambahStudentmob(){
		$nama =$this->input->post('nama');
		$email =$this->input->post('email');
		$status =$this->input->post('status');
		$berkas =$this->input->post('berkas');
		$sql = $this->db->query("SELECT nama FROM tb_mobility where nama='$nama'");
$cek_Studentmob = $sql->num_rows();
if ($cek_Studentmob > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Data ini sudah ada</div>');

redirect(base_url('admin/mobility'));
		}else{
			
			if($berkas=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/mobility/';
				$config['allowed_types']='pdf|doc|docx';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('berkas')){
					$berkas=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berkas gagal diupload, masukan ekstensi pdf,docx,doc</div>');
		
				}
		
			}
	$data['data_mobility']= $this->db->get_where('tb_mobility')->row_array();
$data=array(
		'nama'=>$nama,
		'email'=> $email,
		'status'=> $status,
	'berkas'=>$berkas);
$this->Model_mobility->tambah_mobility($data,'tb_mobility');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan Program mobility</div>');

	redirect(base_url('admin/mobility'));
	}
	}
	public function editStudentmob($id){
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$where = array('id'=>$id);
		
	$data['data_mobility']=$this->Model_mobility->edit_mobility($where,'tb_mobility')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/program/edit_mobility', $data);
	
		}
		public function ubah_mobility(){
				$data['data_mobility']= $this->db->get_where('tb_mobility')->row_array();
	
			$id=$this->input->post('id');
			$nama =$this->input->post('nama');
			$email =$this->input->post('email');
			$status =$this->input->post('status');
			$berkas =$this->input->post('berkas');
			if($berkas=''){
			
			}else{
					$config['upload_path']='./assets/dua/berkas/mobility/';
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
			'status'=> $status,
		'berkas'=>$berkas);
			$where= array(
				'id'=>$id
			);
		$this->Model_mobility->update_data($where,$data,'tb_mobility');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah Student mobility</div>');
	
			redirect(base_url('admin/mobility'));
	
	  }
	public function hapusStudentmob($id){
		$where=array('id'=> $id);
		$this->Model_mobility->hapus_data($where,'tb_mobility');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus Student mobility</div>');
	
			redirect(base_url('admin/mobility'));
		}
}

