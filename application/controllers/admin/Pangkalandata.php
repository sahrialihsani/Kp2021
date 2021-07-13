<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pangkalandata extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'logout?alert=belum_login');
		}
	}
	public function index()
	{
		$data['total_universitas'] = $this->Model_kerjasama->total_data_universitas()->num_rows();
		$data['total_pemerintahan'] = $this->Model_kerjasama->total_data_pemerintahan()->num_rows();
		$data['total_swasta'] = $this->Model_kerjasama->total_data_swasta()->num_rows();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/index',$data);
		
	}
	public function tambahKerjasama(){
		$mitra =$this->input->post('mitra');
		$nama_kerjasama =$this->input->post('nama_kerjasama');
		$no_kerjasama =$this->input->post('no_kerjasama');
		$isi =$this->input->post('isi');
		$jenis =$this->input->post('jenis');
		$mou_or_pks =$this->input->post('mou_or_pks');
		$file =$this->input->post('file');
		$tgl_mulai =$this->input->post('tgl_mulai');
		$tgl_akhir =$this->input->post('tgl_akhir');
		$sql = $this->db->query("SELECT nama_kerjasama FROM tb_kerjasama where nama_kerjasama='$nama_kerjasama'");
$cek_data = $sql->num_rows();
if ($cek_data > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Data ini sudah ada</div>');

redirect(base_url('admin/pangkalandata/index'));
		}else{
			
			if($file=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/kerjasama/';
				$config['allowed_types']='pdf|doc|docx';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('file')){
					$file=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berkas gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
		
				}
		
			}
$data=array(
		'id_mitra'=>$mitra,
		'nama_kerjasama'=>$nama_kerjasama,
		'no_kerjasama'=>$no_kerjasama,
		'isi'=>$isi,
		'jenis'=>$jenis,
		'status'=>"Aktif",
		'mou_or_pks'=>$mou_or_pks,
		'file'=>$file,
		'tgl_mulai'=>$tgl_mulai,
		'tgl_akhir'=>$tgl_akhir);
$this->Model_kerjasama->tambah_kerjasama($data,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan data</div>');

	redirect(base_url('admin/pangkalandata/index'));

	}
  }
	public function setNonaktif($id){
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
		$datailemail = $this->Model_program->detail_data($id);
		foreach ($datailemail as $row)
		{
			$to .=  $row->email;
		}
		$subject = 'Masa Kerjasama Telah Berakhir';
		$pesan = 'Masa Kerjasama telah habis. Anda dapat Memperbaharui kerjasama dengan membalas email ini.<br><br> Terimakasih,<br> Salam hangat, <br>
		UPT KSLI Universitas Bengkulu';
		$this->load->library('email', $emailConfig);
		$this->email->set_newline("\r\n");
		// Set email preferences
		$this->email->from($from['email'], $from['name']);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($pesan);
		if (!$this->email->send()) {
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Gagal mengirim email</div>');
	
		redirect(base_url('admin/pangkalandata'));
			
		} else {
		$data=array('status'=>'Tidak Aktif');
		$where = array('id'=>$id);
		$this->Model_kerjasama->update_data($where,$data,'tb_kerjasama');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil mengirim email</div>');
		redirect(base_url('admin/pangkalandata'));
	
		}
	}
	public function setMin1($id){
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
		$datailemail = $this->Model_program->detail_data($id);
		foreach ($datailemail as $row)
		{
			$to .=  $row->email;
		}
		$subject = 'Masa Kerjasama Tinggal 1 Hari Lagi';
		$pesan = 'Masa Kerjasama hampir habis. Anda dapat Memperbaharui kerjasama dengan membalas email ini.<br><br> Terimakasih,<br> Salam hangat, <br>
		UPT KSLI Universitas Bengkulu';
		$this->load->library('email', $emailConfig);
		$this->email->set_newline("\r\n");
		// Set email preferences
		$this->email->from($from['email'], $from['name']);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($pesan);
		if (!$this->email->send()) {
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Gagal mengirim email</div>');
		redirect(base_url('admin/pangkalandata'));
			
		} else {
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil mengirim email</div>');
		redirect(base_url('admin/pangkalandata'));
		}
	}
	public function setMin2(){
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Kerjasama tinggal 2 hari lagi</div>');
		redirect(base_url('admin/pangkalandata'));
	}
	public function setMin3(){
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Kerjasama tinggal 3 hari lagi</div>');
		redirect(base_url('admin/pangkalandata'));
	}
	// public function nonaktifkan($id){
	// 	$data=array(
	// 		'status'=>"Tidak Aktif"
	// 		);
	// 		$where=array(
	// 			'id'=>$id
	// 		);
	// 	$this->Model_kerjasama->update_data($where,$data,'tb_kerjasama');
	// 	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah data</div>');
	
	// 	redirect(base_url('admin/home_admin'));
	// }
	public function universitas(){
		$data['data_universitas'] = $this->Model_kerjasama->tampil_data_universitas_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/universitas',$data);
	}
	public function editUniversitas($id){
	$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
	$where = array('id'=>$id);
	
	$data['data_universitas']=$this->Model_kerjasama->edit_kerjasama($where,'tb_kerjasama')->result();
	$this->load->view('admin/template/header');
	$this->load->view('admin/template/sidebar');
	$this->load->view('admin/pangkalandata/edit_universitas', $data);

	}
	public function ubah_universitas(){
			$data['data_universitas']= $this->db->get_where('tb_kerjasama')->row_array();

		$id=$this->input->post('id');
		$nama =$this->input->post('nama');
		$nama_kerjasama =$this->input->post('nama_kerjasama');
		$no_kerjasama =$this->input->post('no_kerjasama');
		$isi =$this->input->post('isi');
		$status =$this->input->post('status');
		$mou_or_pks =$this->input->post('mou_or_pks');
		$tgl_mulai =$this->input->post('tgl_mulai');
		$tgl_akhir =$this->input->post('tgl_akhir');
		$file =$this->input->post('file');
		if($file=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/kerjasama/';
				$config['allowed_types']='pdf|doc|docx';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('file')){
					$file=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>file gagal diupload, masukan ekstensi pdf</div>');
		
				}
			}
	$data=array(
		'id_mitra'=>$nama,
		'nama_kerjasama'=>$nama_kerjasama,
		'no_kerjasama'=>$no_kerjasama,
		'isi'=>$isi,
		'jenis'=>"Universitas",
		'status'=>$status,
		'mou_or_pks'=>$mou_or_pks,
		'file'=>$file,
		'tgl_mulai'=>$tgl_mulai,
		'tgl_akhir'=>$tgl_akhir);
		$where=array(
			'id'=>$id
		);
	$this->Model_kerjasama->update_data($where,$data,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah data</div>');

	redirect(base_url('admin/pangkalandata/universitas'));
  }
  public function hapusUniversitas($id){
	$where=array('id'=> $id);
	$this->Model_kerjasama->hapus_data($where,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus data</div>');

	redirect(base_url('admin/pangkalandata/universitas'));

	}
	public function pemerintahan(){
		$data['data_pemerintahan'] = $this->Model_kerjasama->tampil_data_pemerintahan_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/pemerintahan',$data);
	}
	
  public function editPemerintahan($id){
	$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
	$where = array('id'=>$id);
	
$data['data_pemerintahan']=$this->Model_kerjasama->edit_kerjasama($where,'tb_kerjasama')->result();
	$this->load->view('admin/template/header');
	$this->load->view('admin/template/sidebar');
	$this->load->view('admin/pangkalandata/edit_pemerintahan', $data);

	}
	public function ubah_pemerintahan(){
			$data['data_pemerintahan']= $this->db->get_where('tb_kerjasama')->row_array();

		$id=$this->input->post('id');
		$nama =$this->input->post('nama');
		$nama_kerjasama =$this->input->post('nama_kerjasama');
		$no_kerjasama =$this->input->post('no_kerjasama');
		$isi =$this->input->post('isi');
		$status =$this->input->post('status');
		$tgl_mulai =$this->input->post('tgl_mulai');
		$tgl_akhir =$this->input->post('tgl_akhir');
		$file =$this->input->post('file');
		if($file=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/kerjasama/';
				$config['allowed_types']='pdf|doc|docx';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('file')){
					$file=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>file gagal diupload, masukan ekstensi pdf</div>');
		
				}
		
			}
	$data=array(
		'id_mitra'=>$nama,
		'nama_kerjasama'=>$nama_kerjasama,
		'no_kerjasama'=>$no_kerjasama,
		'isi'=>$isi,
		'jenis'=>"Pemerintahan",
		'status'=>$status,
		'file'=>$file,
		'tgl_mulai'=>$tgl_mulai,
		'tgl_akhir'=>$tgl_akhir);
		$where=array(
			'id'=>$id
		);
	$this->Model_kerjasama->update_data($where,$data,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah data</div>');

	redirect(base_url('admin/pangkalandata/pemerintahan'));
  }
  public function hapusPemerintahan($id){
	$where=array('id'=> $id);
	$this->Model_kerjasama->hapus_data($where,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus data</div>');

	redirect(base_url('admin/pangkalandata/pemerintahan'));

	}
	public function swasta(){
		$data['data_swasta'] = $this->Model_kerjasama->tampil_data_swasta_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/swasta',$data);
	}
  public function editSwasta($id){
	$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
	$where = array('id'=>$id);
	
$data['data_swasta']=$this->Model_kerjasama->edit_kerjasama($where,'tb_kerjasama')->result();
	$this->load->view('admin/template/header');
	$this->load->view('admin/template/sidebar');
	$this->load->view('admin/pangkalandata/edit_swasta', $data);

	}
	public function ubah_swasta(){
			$data['data_swasta']= $this->db->get_where('tb_kerjasama')->row_array();

		$id=$this->input->post('id');
		$nama =$this->input->post('nama');
		$nama_kerjasama =$this->input->post('nama_kerjasama');
		$no_kerjasama =$this->input->post('no_kerjasama');
		$isi =$this->input->post('isi');
		$status =$this->input->post('status');
		$tgl_mulai =$this->input->post('tgl_mulai');
		$tgl_akhir =$this->input->post('tgl_akhir');
		$file =$this->input->post('file');
		if($file=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/kerjasama/';
				$config['allowed_types']='pdf|doc|docx';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('file')){
					$file=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>file gagal diupload, masukan ekstensi pdf</div>');
		
				}
		
			}
	$data=array(
		'id_mitra'=>$nama,
		'nama_kerjasama'=>$nama_kerjasama,
		'no_kerjasama'=>$no_kerjasama,
		'isi'=>$isi,
		'jenis'=>"Swasta",
		'status'=>$status,
		'file'=>$file,
		'tgl_mulai'=>$tgl_mulai,
		'tgl_akhir'=>$tgl_akhir);
		$where=array(
			'id'=>$id
		);
	$this->Model_kerjasama->update_data($where,$data,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah data</div>');

	redirect(base_url('admin/pangkalandata/swasta'));


  }
  public function hapusSwasta($id){
	$where=array('id'=> $id);
	$this->Model_kerjasama->hapus_data($where,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus data</div>');

	redirect(base_url('admin/pangkalandata/swasta'));

	}
	public function detailBerkasUniv($id){
		$data['detail_berkas_univ'] = $this->Model_kerjasama->detail_berkas($id);
		$this->load->view('admin/pangkalandata/detail_berkas_univ', $data);
		}	
	public function detailBerkasGov($id){
		$data['detail_berkas_gov'] = $this->Model_kerjasama->detail_berkas($id);
		$this->load->view('admin/pangkalandata/detail_berkas_gov', $data);	
			}
	public function detailBerkasIns($id){
		$data['detail_berkas_sws'] = $this->Model_kerjasama->detail_berkas($id);
		$this->load->view('admin/pangkalandata/detail_berkas_ins', $data);	
				}	
}

