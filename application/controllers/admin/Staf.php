<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staf extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'logout?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_staf'] = $this->Model_staf->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/landingpage/staf',$data);
	}
	public function tambahStaf(){
		$nip =$this->input->post('nip',true);
		$nama =$this->input->post('nama');
		$jabatan =$this->input->post('jabatan');

		$foto =$this->input->post('foto');
		
		$sql = $this->db->query("SELECT nama FROM tb_staf where nama='$nama'");
$cek_Staf = $sql->num_rows();
if ($cek_Staf > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Staf ini sudah ada</div>');

redirect(base_url('admin/staf'));
		}else{
			
			if($foto=''){
		
		}else{
				$config['upload_path']='./assets/dua/img/staf/';
				$config['allowed_types']='jpg|jpeg|png';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('foto')){
					$foto=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>foto gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
		
				}
		
			}
	$data['data_staf']= $this->db->get_where('tb_staf')->row_array();
$data=array(
			'nip'=> htmlspecialchars($nip),
		'nama'=>$nama,
		'jabatan'=>$jabatan,
	'foto'=>$foto);
$this->Model_staf->tambah_staf($data,'tb_staf');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan Staf</div>');

	redirect(base_url('admin/staf'));
	}
  }
  public function editStaf($id){
	$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
	$where = array('id'=>$id);
	
$data['data_staf']=$this->Model_staf->edit_staf($where,'tb_staf')->result();
	$this->load->view('admin/template/header');
	$this->load->view('admin/template/sidebar');
	$this->load->view('admin/landingpage/edit_staf', $data);

	}
	public function ubah_staf(){
			$data['data_staf']= $this->db->get_where('tb_staf')->row_array();

		$id=$this->input->post('id');
		$nip =$this->input->post('nip',true);
		$nama =$this->input->post('nama');
		$jabatan =$this->input->post('jabatan');
		$foto =$this->input->post('foto');
		if($foto=''){
		
		}else{
				$config['upload_path']='./assets/dua/img/staf/';
				$config['allowed_types']='jpg|jpeg|png';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('foto')){
					$foto=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>foto gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
		
				}
		
			}
	$data=array(
			'nip'=> htmlspecialchars($nip),
		'nama'=>$nama,
		'jabatan'=>$jabatan,
	'foto'=>$foto);
		$where=array(
			'id'=>$id
		);
	$this->Model_staf->update_data($where,$data,'tb_staf');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah Staf</div>');

		redirect(base_url('admin/staf'));

  }
  public function hapusStaf($id){
	$where=array('id'=> $id);
	$this->Model_staf->hapus_data($where,'tb_staf');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus Staf</div>');

		redirect(base_url('admin/staf'));
	}
}