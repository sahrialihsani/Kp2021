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
		$data['total_universitas'] = $this->Model_universitas->total_data()->num_rows();
		$data['total_pemerintahan'] = $this->Model_pemerintahan->total_data()->num_rows();
		$data['total_swasta'] = $this->Model_swasta->total_data()->num_rows();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/index',$data);
		
	}
	public function universitas(){
		$data['data_universitas'] = $this->Model_universitas->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/universitas',$data);
	}
	public function tambahUniversitas(){
		$nama =$this->input->post('nama');
		$nama_kerjasama =$this->input->post('nama_kerjasama');
		$isi =$this->input->post('isi');
		$tgl_mulai =$this->input->post('tgl_mulai');
		$tgl_akhir =$this->input->post('tgl_akhir');
		$file =$this->input->post('file');
		$sql = $this->db->query("SELECT nama_kerjasama FROM tb_kerjasama where nama_kerjasama='$nama_kerjasama' AND jenis='Universitas'");
$cek_univ = $sql->num_rows();
if ($cek_univ > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Data ini sudah ada</div>');

redirect(base_url('admin/pangkalandata/universitas'));
		}else{
			
			if($file=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/kerjasama/universitas/';
				$config['allowed_types']='pdf';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('file')){
					$file=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berkas gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
		
				}
		
			}
	$data['data_universitas']= $this->db->get_where('tb_kerjasama')->row_array();
$data=array(
		'id_mitra'=>$nama,
		'nama_kerjasama'=>$nama_kerjasama,
		'isi'=>$isi,
		'jenis'=>"Universitas",
		'status'=>"Aktif",
		'file'=>$file,
		'tgl_mulai'=>$tgl_mulai,
		'tgl_akhir'=>$tgl_akhir);
$this->Model_universitas->tambah_universitas($data,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil meenambahkan data</div>');

	redirect(base_url('admin/pangkalandata/universitas'));

	}
  }
  public function editUniversitas($id){
	$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
	$where = array('id'=>$id);
	
$data['data_universitas']=$this->Model_universitas->edit_universitas($where,'tb_kerjasama')->result();
	$this->load->view('admin/template/header');
	$this->load->view('admin/template/sidebar');
	$this->load->view('admin/pangkalandata/edit_universitas', $data);

	}
	public function ubah_universitas(){
			$data['data_universitas']= $this->db->get_where('tb_kerjasama')->row_array();

		$id=$this->input->post('id');
		$nama =$this->input->post('nama');
		$nama_kerjasama =$this->input->post('nama_kerjasama');
		$isi =$this->input->post('isi');
		$status =$this->input->post('status');
		$tgl_mulai =$this->input->post('tgl_mulai');
		$tgl_akhir =$this->input->post('tgl_akhir');
		$file =$this->input->post('file');
		if($file=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/kerjasama/universitas/';
				$config['allowed_types']='pdf';
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
		'isi'=>$isi,
		'jenis'=>"Universitas",
		'status'=>$status,
		'file'=>$file,
		'tgl_mulai'=>$tgl_mulai,
		'tgl_akhir'=>$tgl_akhir);
		$where=array(
			'id'=>$id
		);
	$this->Model_universitas->update_data($where,$data,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah data</div>');

	redirect(base_url('admin/pangkalandata/universitas'));


  }
  public function hapusUniversitas($id){
	$where=array('id'=> $id);
	$this->Model_universitas->hapus_data($where,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus data</div>');

	redirect(base_url('admin/pangkalandata/universitas'));

	}
	public function pemerintahan(){
		$data['data_pemerintahan'] = $this->Model_pemerintahan->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/pemerintahan',$data);
	}
	public function tambahPemerintahan(){
		$nama =$this->input->post('nama');
		$nama_kerjasama =$this->input->post('nama_kerjasama');
		$isi =$this->input->post('isi');
		$tgl_mulai =$this->input->post('tgl_mulai');
		$tgl_akhir =$this->input->post('tgl_akhir');
		$file =$this->input->post('file');
		
		$sql = $this->db->query("SELECT nama_kerjasama FROM tb_kerjasama where nama_kerjasama='$nama_kerjasama' AND jenis='Pemerintahan'");
$cek_univ = $sql->num_rows();
if ($cek_univ > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Data ini sudah ada</div>');

redirect(base_url('admin/pangkalandata/pemerintahan'));
		}else{
			
			if($file=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/kerjasama/pemerintahan/';
				$config['allowed_types']='pdf';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('file')){
					$file=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berkas gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
		
				}
		
			}
	$data['data_pemerintahan']= $this->db->get_where('tb_kerjasama')->row_array();
$data=array(
		'id_mitra'=>$nama,
		'nama_kerjasama'=>$nama_kerjasama,
		'isi'=>$isi,
		'jenis'=>"Pemerintahan",
		'status'=>"Aktif",
		'file'=>$file,
		'tgl_mulai'=>$tgl_mulai,
		'tgl_akhir'=>$tgl_akhir);
$this->Model_pemerintahan->tambah_pemerintahan($data,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil meenambahkan data</div>');

	redirect(base_url('admin/pangkalandata/pemerintahan'));

	}
  }
  public function editPemerintahan($id){
	$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
	$where = array('id'=>$id);
	
$data['data_pemerintahan']=$this->Model_pemerintahan->edit_pemerintahan($where,'tb_kerjasama')->result();
	$this->load->view('admin/template/header');
	$this->load->view('admin/template/sidebar');
	$this->load->view('admin/pangkalandata/edit_pemerintahan', $data);

	}
	public function ubah_pemerintahan(){
			$data['data_pemerintahan']= $this->db->get_where('tb_kerjasama')->row_array();

		$id=$this->input->post('id');
		$nama =$this->input->post('nama');
		$nama_kerjasama =$this->input->post('nama_kerjasama');
		$isi =$this->input->post('isi');
		$status =$this->input->post('status');
		$tgl_mulai =$this->input->post('tgl_mulai');
		$tgl_akhir =$this->input->post('tgl_akhir');
		$file =$this->input->post('file');
		if($file=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/kerjasama/pemerintahan/';
				$config['allowed_types']='pdf';
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
		'isi'=>$isi,
		'jenis'=>"Pemerintahan",
		'status'=>$status,
		'file'=>$file,
		'tgl_mulai'=>$tgl_mulai,
		'tgl_akhir'=>$tgl_akhir);
		$where=array(
			'id'=>$id
		);
	$this->Model_pemerintahan->update_data($where,$data,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah data</div>');

	redirect(base_url('admin/pangkalandata/pemerintahan'));


  }
  public function hapusPemerintahan($id){
	$where=array('id'=> $id);
	$this->Model_pemerintahan->hapus_data($where,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus data</div>');

	redirect(base_url('admin/pangkalandata/pemerintahan'));

	}
	public function swasta(){
		$data['data_swasta'] = $this->Model_swasta->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/swasta',$data);
	}
	public function tambahSwasta(){
		$nama =$this->input->post('nama');
		$nama_kerjasama =$this->input->post('nama_kerjasama');
		$isi =$this->input->post('isi');
		$tgl_mulai =$this->input->post('tgl_mulai');
		$tgl_akhir =$this->input->post('tgl_akhir');
		$file =$this->input->post('file');
		
		$sql = $this->db->query("SELECT nama_kerjasama FROM tb_kerjasama where nama_kerjasama='$nama_kerjasama' AND jenis='Swasta'");
$cek_univ = $sql->num_rows();
if ($cek_univ > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Data ini sudah ada</div>');

redirect(base_url('admin/pangkalandata/swasta'));
		}else{
			
			if($file=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/kerjasama/swasta/';
				$config['allowed_types']='pdf';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('file')){
					$file=$this->upload->data('file_name');
		
				}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berkas gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
		
				}
		
			}
	$data['data_swasta']= $this->db->get_where('tb_kerjasama')->row_array();
$data=array(
		'id_mitra'=>$nama,
		'nama_kerjasama'=>$nama_kerjasama,
		'isi'=>$isi,
		'jenis'=>"Swasta",
		'status'=>"Aktif",
		'file'=>$file,
		'tgl_mulai'=>$tgl_mulai,
		'tgl_akhir'=>$tgl_akhir);
$this->Model_swasta->tambah_swasta($data,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil meenambahkan data</div>');

	redirect(base_url('admin/pangkalandata/swasta'));

	}
  }
  public function editSwasta($id){
	$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
	$where = array('id'=>$id);
	
$data['data_swasta']=$this->Model_swasta->edit_swasta($where,'tb_kerjasama')->result();
	$this->load->view('admin/template/header');
	$this->load->view('admin/template/sidebar');
	$this->load->view('admin/pangkalandata/edit_swasta', $data);

	}
	public function ubah_swasta(){
			$data['data_swasta']= $this->db->get_where('tb_kerjasama')->row_array();

		$id=$this->input->post('id');
		$nama =$this->input->post('nama');
		$nama_kerjasama =$this->input->post('nama_kerjasama');
		$isi =$this->input->post('isi');
		$status =$this->input->post('status');
		$tgl_mulai =$this->input->post('tgl_mulai');
		$tgl_akhir =$this->input->post('tgl_akhir');
		$file =$this->input->post('file');
		if($file=''){
		
		}else{
				$config['upload_path']='./assets/dua/berkas/kerjasama/swasta/';
				$config['allowed_types']='pdf';
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
		'isi'=>$isi,
		'jenis'=>"Swasta",
		'status'=>$status,
		'file'=>$file,
		'tgl_mulai'=>$tgl_mulai,
		'tgl_akhir'=>$tgl_akhir);
		$where=array(
			'id'=>$id
		);
	$this->Model_swasta->update_data($where,$data,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah data</div>');

	redirect(base_url('admin/pangkalandata/swasta'));


  }
  public function hapusSwasta($id){
	$where=array('id'=> $id);
	$this->Model_swasta->hapus_data($where,'tb_kerjasama');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus data</div>');

	redirect(base_url('admin/pangkalandata/swasta'));

	}
	public function detailBerkasUniv($id){
		$data['detail_berkas_univ'] = $this->Model_universitas->detail_berkas($id);
		$this->load->view('admin/pangkalandata/detail_berkas_univ', $data);
		}	
	public function detailBerkasGov($id){
		$data['detail_berkas_gov'] = $this->Model_pemerintahan->detail_berkas($id);
		$this->load->view('admin/pangkalandata/detail_berkas_gov', $data);	
			}
	public function detailBerkasIns($id){
		$data['detail_berkas_sws'] = $this->Model_swasta->detail_berkas($id);
		$this->load->view('admin/pangkalandata/detail_berkas_ins', $data);	
				}	
}

