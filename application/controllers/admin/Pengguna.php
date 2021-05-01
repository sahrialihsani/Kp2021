<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengguna extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_pengguna'] = $this->Model_pengguna->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/dashboard/pengguna',$data);
		
	}
	public function tambahPengguna(){
		$nama =$this->input->post('nama');
		$email =$this->input->post('email');
		$password =$this->input->post('password');
		$status =$this->input->post('status');
		$foto =$this->input->post('foto');
		$sql = $this->db->query("SELECT nama FROM tb_admin where nama='$nama'");
$cek_Pengguna = $sql->num_rows();
if ($cek_Pengguna > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Pengguna ini sudah ada</div>');

redirect(base_url('admin/pengguna'));
		}else{
			
			if($foto=''){
		
		}else{
				$config['upload_path']='./assets/dua/img/profil/';
				$config['allowed_types']='png|jpg|jpeg';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('foto')){
					$foto=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>foto gagal diupload, masukan ekstensi png, jpg, jpeg</div>');
		
				}
		
			}
	$data['data_pengguna']= $this->db->get_where('tb_admin')->row_array();
$data=array(
		'nama'=>$nama,
		'email'=> $email,
		'password'=> $password,
		'password_hash'=> md5($password),
		'status'=> $status,
	'foto'=>$foto);
$this->Model_pengguna->tambah_pengguna($data,'tb_admin');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan data pengguna</div>');

	redirect(base_url('admin/pengguna'));
	}
	}
	public function editPengguna($id){
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$where = array('id'=>$id);
		
	$data['data_pengguna']=$this->Model_pengguna->edit_pengguna($where,'tb_admin')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/dashboard/edit_pengguna', $data);
	
		}
		public function ubah_pengguna(){
				$data['data_pengguna']= $this->db->get_where('tb_admin')->row_array();
	
			$id=$this->input->post('id');
			$nama =$this->input->post('nama');
			$email =$this->input->post('email');
			$password =$this->input->post('password');
			$status =$this->input->post('status');
			$foto =$this->input->post('foto');
			if($foto=''){
			
			}else{
					$config['upload_path']='./assets/dua/img/profil/';
					$config['allowed_types']='png|jpg|jpeg';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('foto')){
						$foto=$this->upload->data('file_name');
			
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>foto gagal diupload, masukan ekstensi png, jpg, jpeg</div>');
			
					}
			
				}
		$data=array(
			'nama'=>$nama,
			'email'=> $email,
			'password'=> $password,
			'password_hash'=> md5($password),
			'status'=> $status,
		'foto'=>$foto);
			$where= array(
				'id'=>$id
			);
		$this->Model_pengguna->update_data($where,$data,'tb_admin');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah data pengguna</div>');
	
			redirect(base_url('admin/pengguna'));
	
	  }
	public function hapusPengguna($id){
		$where=array('id'=> $id);
		$this->Model_pengguna->hapus_data($where,'tb_admin');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus Student pengguna</div>');
	
			redirect(base_url('admin/pengguna'));
		}
}

