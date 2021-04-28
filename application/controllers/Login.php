<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim', ['required' => 'Email harus di isi!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password harus di isi!']);

		$email = htmlspecialchars($this->input->post('email', TRUE));
		$password_hash = md5($this->input->post('password', TRUE));

		if ($this->form_validation->run() != false) {

			$where 		= array('email' => $email);
			$admin 		= $this->db->get_where('tb_admin', ['email' => $email],['status' => "Admin"])->row_array();
			$fakultas	= $this->db->get_where('tb_admin', ['email' => $email],['status' => "Fakultas"])->row_array();
			$notif		= $this->db->query("SELECT id,nama_kerjasama,DATEDIFF(tgl_akhir,CURRENT_DATE()) AS selisih FROM tb_kerjasama WHERE DATEDIFF(tgl_akhir,CURRENT_DATE())=1 and status='aktif'")->result();
			if ($password_hash == $admin['password_hash']) {
				$data = $this->M_login->index($where,'tb_admin')->row();
				$data_session = array(
					'id'		=> $data->id,
					'nama'		=> $data->nama,
					'email'		=> $data->email,
					'foto'		=>	$data->foto,
					'password'	=>	$data->password,
					'status'	=> 'admin_login',
					'notif'		=> $notif
				);
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message text-center"><b>Login Berhasil !,<br></b> Halaman ini akan dialihkan ke Halaman Admin</div>');
				redirect(base_url('admin/home_admin'));
		
			}else if($password_hash == $fakultas['password_hash']) {
				$data = $this->M_login->index($where,'tb_admin')->row();
				$data_session = array(
					'id'		=> $data->id,
					'nama'		=> $data->nama,
					'email'		=> $data->email,
					'foto'		=>	$data->foto,
					'password'	=>	$data->password,
					'status'	=> 'fakultas_login'
				);
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message text-center"><b>Login Berhasil !,<br></b> Halaman ini akan dialihkan ke Halaman Fakultas</div>');
				redirect(base_url('fakultas/home_fakultas'));

			}
			
			else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message text-center"><b>Login Gagal !,<br></b> User tidak ditemukan</div>');
				redirect(base_url('login'));
			}
		} else {
			$this->load->view('authentication/login');
		}
	}
	
	}
