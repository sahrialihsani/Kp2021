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
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/landingpage/mitra',$data);
		
	}	
	public function terima($id){
	$emailConfig = [
		'protocol' => 'smtp', 
		'smtp_host' => 'ssl://smtp.googlemail.com', 
		'smtp_port' => 465, 
		'smtp_user' => 'notiftesting7@gmail.com', 
		'smtp_pass' => 'testnotif123', 
		'mailtype' => 'html', 
		'charset' => 'iso-8859-1'
	];
	// Set your email information
	$from = [
		'email' => 'notiftesting7@gmail.com',
		'name' => 'testing notif'
	];
	$datailemail = $this->Model_mitra->detail_data($id);
	foreach ($datailemail as $row)
	{
		$to .=  $row->email;
	}
	$subject = 'Subject';
	$pesan = 'Keterangan';
	$this->load->library('email', $emailConfig);
	$this->email->set_newline("\r\n");
	// Set email preferences
	$this->email->from($from['email'], $from['name']);
	$this->email->to($to);
	$this->email->subject($subject);
	$this->email->message($pesan);
	if (!$this->email->send()) {
	redirect(base_url('admin/mitra'));
		
	} else {
		$data=array('status'=>'Diterima');
	$where = array('id'=>$id);
	$this->Model_mitra->update_data($where,$data,'tb_mitra');
	redirect(base_url('admin/mitra'));
	}
	}
	public function tolak($id){
		$data=array('status'=>'Ditolak');
		$where = array('id'=>$id);
		$this->Model_mitra->update_data($where,$data,'tb_mitra');
		redirect(base_url('admin/mitra'));
	
		}
	public function tambahMitra(){
		$nama =$this->input->post('nama',true);
		$email =$this->input->post('email');
		$institusi =$this->input->post('institusi');
		$pesan =$this->input->post('pesan');
		$gambar =$this->input->post('gambar');
$sql = $this->db->query("SELECT institusi FROM tb_mitra where institusi='$institusi'");
$cek_mitra = $sql->num_rows();
if ($cek_mitra > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Mitra ini sudah ada</div>');

redirect(base_url('admin/mitra'));
		}else{
			if($gambar=''){
			
			}else{
					$config['upload_path']='./assets/dua/img/mitra/';
					$config['allowed_types']='jpg|jpeg|png';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('gambar')){
						$gambar=$this->upload->data('file_name');
			
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>gambar gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
			
					}
				}
	
	$data['data_mitra']= $this->db->get_where('tb_mitra')->row_array();
$data=array(
			'nama'=> htmlspecialchars($nama),
		'email'=>$email,
	'institusi'=>$institusi,
	'pesan'=>$pesan,
	'status'=>"Menunggu",
	'gambar'=>$gambar);
$this->Model_mitra->tambah_mitra($data,'tb_mitra');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan mitra</div>');

	redirect(base_url('admin/mitra'));
	}
  }
//   public function editMitra($id){
// 	$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
// 	$where = array('id'=>$id);
	
// $data['data_mitra']=$this->Model_mitra->edit_mitra($where,'tb_mitra')->result();
// 	$this->load->view('admin/template/header');
// 	$this->load->view('admin/template/sidebar');
// 	$this->load->view('admin/landingpage/edit_mitra', $data);

// 	}
// 	public function ubah_mitra(){
// 			$data['data_mitra']= $this->db->get_where('tb_mitra')->row_array();

// 		$id=$this->input->post('id');
// 		$nama =$this->input->post('nama',true);
// 		$email =$this->input->post('email');
// 		$institusi =$this->input->post('institusi');
// 		$pesan =$this->input->post('pesan');
// 		$status =$this->input->post('status');
// 		$gambar =$this->input->post('gambar');
// 		if($gambar=''){
			
// 		}else{
// 				$config['upload_path']='./assets/dua/img/mitra/';
// 				$config['allowed_types']='jpg|jpeg|png';
// 				$this->load->library('upload',$config);
// 				if($this->upload->do_upload('gambar')){
// 					$gambar=$this->upload->data('file_name');
		
// 				}else{
// 				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>gambar gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
		
// 				}
// 			}

// 	$data=array(
// 			'nama'=> htmlspecialchars($nama),
// 		'email'=>$email,
// 	'institusi'=>$institusi,
// 	'pesan'=>$pesan,
// 	'status'=>$status,
// 	'gambar'=>$gambar);
// 		$where=array(
// 			'id'=>$id
// 		);
// 	$this->Model_mitra->update_data($where,$data,'tb_mitra');
// 	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah mitra</div>');

// 		redirect(base_url('admin/mitra'));

//   }
  public function hapusMitra($id){
	$where=array('id'=> $id);
	$this->Model_mitra->hapus_data($where,'tb_mitra');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus mitra</div>');

		redirect(base_url('admin/mitra'));
	}
	public function daftarMitra(){
		$nama =$this->input->post('nama',true);
		$email =$this->input->post('email');
		$institusi =$this->input->post('institusi');
		$pesan =$this->input->post('pesan');
		$gambar =$this->input->post('gambar');
		$file =$this->input->post('file');

$sql = $this->db->query("SELECT institusi FROM tb_mitra where institusi='$institusi'");
$cek_mitra = $sql->num_rows();
if ($cek_mitra > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Mitra ini sudah ada</div>');

redirect(base_url('admin/mitra'));
		}else{
			if($gambar=''){
			
			}else{
					$config['upload_path']='./assets/dua/img/mitra/';
					$config['allowed_types']='jpg|jpeg|png';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('gambar')){
						$gambar=$this->upload->data('file_name');
			
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>gambar gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
			
					}
				}
			if($file=''){
			
			}else{
					$config['upload_path']='./assets/dua/berkas/mitra/';
					$config['allowed_types']='pdf|doc|docx';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('file')){
					$gambar=$this->upload->data('file_name');
				
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>file gagal diupload, masukan ekstensi pdf,doc,docx</div>');
				
				}
			}
	
	$data['data_mitra']= $this->db->get_where('tb_mitra')->row_array();
$data=array(
			'nama'=> htmlspecialchars($nama),
		'email'=>$email,
	'institusi'=>$institusi,
	'pesan'=>$pesan,
	'status'=>"Menunggu",
	'gambar'=>$gambar,
	'file'=>$file);
$this->Model_mitra->tambah_mitra($data,'tb_mitra');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan mitra</div>');

	redirect(base_url('admin/mitra'));
	}
  }
  }
