<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berita extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_berita'] = $this->Model_berita->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/landingpage/berita',$data);
		
	}
	public function tambahBerita(){
		$judul =$this->input->post('judul');
		$isi =$this->input->post('isi');
		$kategori =$this->input->post('kategori');
		$gambar =$this->input->post('gambar');
		$tgl_posting =$this->input->post('tgl_posting');

$sql = $this->db->query("SELECT judul FROM tb_berita where judul='$judul'");
$cek_berita = $sql->num_rows();
if ($cek_berita > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berita ini sudah ada</div>');

redirect(base_url('admin/berita'));
		}else{
			if($gambar=''){
		
			}else{
					$config['upload_path']='./assets/dua/img/berita/';
					$config['allowed_types']='jpg|jpeg|png';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('gambar')){
						$gambar=$this->upload->data('file_name');
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>gambar gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
					}
				}
	$data['data_berita']= $this->db->get_where('tb_berita')->row_array();
$data=array('judul'=>$judul,
'isi'=>$isi,
'id_kategori'=>$kategori,
'gambar'=>$gambar,
'tgl_posting'=>$tgl_posting
);
$this->Model_berita->tambah_berita($data,'tb_berita');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil meenambahkan berita</div>');

	redirect(base_url('admin/berita'));
	}
	}
	public function editBerita($id){
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$where = array('id'=>$id);
		
	$data['data_berita']=$this->Model_berita->edit_berita($where,'tb_berita')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/landingpage/edit_berita', $data);
	
		}
		public function ubah_berita(){
			$data['data_berita']= $this->db->get_where('tb_berita')->row_array();
			$id=$this->input->post('id');
			$judul =$this->input->post('judul',true);
			$isi =$this->input->post('isi');
			$kategori =$this->input->post('kategori');
			$gambar =$this->input->post('gambar');
			$tgl_posting =$this->input->post('tgl_posting');
			if($gambar=''){
			
			}else{
					$config['upload_path']='./assets/dua/img/berita/';
					$config['allowed_types']='jpg|jpeg|png';
					$this->load->library('upload',$config);
					if($this->upload->do_upload('gambar')){
						$gambar=$this->upload->data('file_name');
			
					}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>gambar gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
			
					}
				}
		$data=array(
				'judul'=> htmlspecialchars($judul),
				'isi'=>$isi,
			'id_kategori'=>$kategori,
		'gambar'=>$gambar,
	'tgl_posting'=>$tgl_posting);
			$where=array(
				'id'=>$id
			);
		$this->Model_berita->update_data($where,$data,'tb_berita');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah berita</div>');
	
			redirect(base_url('admin/berita'));
	
	  }
	public function hapusBerita($id){
		$where=array('id'=> $id);
		$this->Model_berita->hapus_data($where,'tb_berita');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus berita</div>');
			redirect(base_url('admin/berita'));
	}
	public function kategori(){
		$data['data_kategori'] = $this->Model_kategori->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/landingpage/kategori',$data);
	}
	public function tambahKategori(){
		$kategori =$this->input->post('kategori');

$sql = $this->db->query("SELECT kategori FROM tb_kategori where kategori='$kategori'");
$cek_kategori = $sql->num_rows();
if ($cek_kategori > 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>kategori ini sudah ada</div>');

redirect(base_url('admin/berita/kategori'));
		}else{
	
	$data['data_kategori']= $this->db->get_where('tb_kategori')->row_array();
$data=array('kategori'=>$kategori);
$this->Model_kategori->tambah_kategori($data,'tb_kategori');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil meenambahkan kategori</div>');

	redirect(base_url('admin/berita/kategori'));
	}
	}
	public function editKategori($id){
		$data['user']= $this->db->get_where('tb_user',['email'=> $this->session->userdata('email')])->row_array();
		$where = array('id'=>$id);
		
	$data['data_kategori']=$this->Model_kategori->edit_kategori($where,'tb_kategori')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/landingpage/edit_kategori', $data);
	
		}
		public function ubah_kategori(){
				$data['data_kategori']= $this->db->get_where('tb_kategori')->row_array();
	
			$id=$this->input->post('id');
			$kategori =$this->input->post('kategori');
		$data=array(
			'kategori'=>$kategori
		);
			$where=array(
				'id'=>$id
			);
		$this->Model_kategori->update_data($where,$data,'tb_kategori');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah kategori</div>');
	
			redirect(base_url('admin/berita/kategori'));
	}
	public function hapusKategori($id){
		$where=array('id'=> $id);
		$this->Model_kategori->hapus_data($where,'tb_kategori');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus kategori</div>');
	
			redirect(base_url('admin/berita/kategori'));
	}
}

