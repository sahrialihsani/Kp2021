<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'logout?alert=belum_login');
		}
	}
	public function index()
	{
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/dashboard/profil',$data);
		
	}
	public function ubah_profil()
	{
			$data['profile']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama','Full Name','required|trim');
		if($this->form_validation->run()==false){			
	
			$this->load->view('admin/template/header');
			$this->load->view('admin/template/sidebar');
			$this->load->view('admin/dashboard/ubah_profil',$data);
		}
		else{
			$nama=$this->input->post('nama');
			$email=$this->input->post('email');
			$password=$this->input->post('password');

$upload_image=$_FILES['foto']['name'];
			if($upload_image){
				$config['allowed_types']='gif|jpg|png|jpeg';
				$config['max_size']='10000';
				$config['upload_path']='./assets/dua/img/profil/';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('foto')){
					$old_image=$data['tb_admin']['foto'];
					if($old_image != 'default.jpg'){
						unlink(FCPATH . 'assets/dua/img/profil/' . $old_image);
					}
					$new_image =$this->upload->data('file_name');
					$this->db->set('foto',$new_image);
				}else{
	echo $this->upload->display_errors();
				}
			}
			$this->db->set('nama',$nama);
			$this->db->set('password_hash',md5($password));
			$this->db->set('password',$password);
			$this->db->where('email',$email);
			$this->db->update('tb_admin');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Profil berhasil diubah.</div>');

	 redirect('admin/profil');

		}
	}

}

