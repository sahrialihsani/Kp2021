<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendapatan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['data_pendapatan'] = $this->Model_pendapatan->tampil_data_all()->result();
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$data['tahun_kerja']=$this->db->query('select year(tgl_mulai) as tahun from tb_kerjasama GROUP BY YEAR(tgl_mulai)')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/pendapatan',$data);
		
	}
	public function load_data_pendapatan(){
		$tahun=$this->input->get('tahun');
		$swasta=$this->db->query("SELECT SUM(tb_pendapatan.pendapatan) AS jumlah, MONTH(tb_kerjasama.tgl_mulai) AS bulan FROM tb_pendapatan inner join tb_kerjasama on tb_pendapatan.id_kerjasama=tb_kerjasama.id WHERE tb_kerjasama.status='Aktif' AND (DATEDIFF(tb_kerjasama.tgl_akhir,CURRENT_DATE())>=0) and YEAR(tb_kerjasama.tgl_mulai)=$tahun and tb_kerjasama.jenis='Swasta' and tb_kerjasama.mou_or_pks='PKS' GROUP BY MONTH(tb_kerjasama.tgl_mulai)")->result_array();
		$pemerintahan=$this->db->query("SELECT SUM(tb_pendapatan.pendapatan) AS jumlah, MONTH(tb_kerjasama.tgl_mulai) AS bulan FROM tb_pendapatan inner join tb_kerjasama on tb_pendapatan.id_kerjasama=tb_kerjasama.id WHERE tb_kerjasama.status='Aktif' AND (DATEDIFF(tb_kerjasama.tgl_akhir,CURRENT_DATE())>=0) and YEAR(tb_kerjasama.tgl_mulai)=$tahun and tb_kerjasama.jenis='Pemerintahan' and tb_kerjasama.mou_or_pks='PKS' GROUP BY MONTH(tb_kerjasama.tgl_mulai)")->result_array();
		$universitas=$this->db->query("SELECT SUM(tb_pendapatan.pendapatan) AS jumlah, MONTH(tb_kerjasama.tgl_mulai) AS bulan FROM tb_pendapatan inner join tb_kerjasama on tb_pendapatan.id_kerjasama=tb_kerjasama.id WHERE tb_kerjasama.status='Aktif' AND (DATEDIFF(tb_kerjasama.tgl_akhir,CURRENT_DATE())>=0) and YEAR(tb_kerjasama.tgl_mulai)=$tahun and tb_kerjasama.jenis='Universitas' and tb_kerjasama.mou_or_pks='PKS' GROUP BY MONTH(tb_kerjasama.tgl_mulai)")->result_array();
		$data['bulan']=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		$data['swasta']=[0,0,0,0,0,0,0,0,0,0,0,0];
		$data['pemerintahan']=[0,0,0,0,0,0,0,0,0,0,0,0];
		$data['universitas']=[0,0,0,0,0,0,0,0,0,0,0,0];
		if(count($swasta)>0){
			
			foreach($swasta as $value){
				$bulan=(int)$value['bulan'];
				$jumlah=(int)$value['jumlah'];
				$data['swasta'][$bulan-1]=$jumlah;
			}
		}
		if(count($pemerintahan)>0){
			foreach($pemerintahan as $value){
				$bulan=(int)$value['bulan'];
				$jumlah=(int)$value['jumlah'];
				$data['pemerintahan'][$bulan-1]=$jumlah;
			}
		}
		if(count($universitas)>0){
			foreach($universitas as $value){
				$bulan=(int)$value['bulan'];
				$jumlah=(int)$value['jumlah'];
				$data['universitas'][$bulan-1]=$jumlah;
			}
		}
		  // set text compatible IE7, IE8
		  header('Content-type: text/plain'); 
		  // set json non IE
		  header('Content-type: application/json'); 
		
		  echo json_encode($data);
	}
	public function tambahPendapatan(){
		$id_kerjasama =$this->input->post('id_kerjasama');
		$pendapatan =$this->input->post('pendapatan');
		$sql = $this->db->query("SELECT * FROM tb_kerjasama where id='$id_kerjasama'");
$cek_pendapatan= $sql->num_rows();
if ($cek_pendapatan> 0) {
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Kerjasama ini sudah ditambahkan</div>');
redirect(base_url('admin/pendapatan'));
		}else{
	$data['data_pendapatan']= $this->db->get_where('tb_pendapatan')->row_array();
$data=array(
		'id_kerjasama'=>$id_kerjasama,
		'pendapatan'=> $pendapatan);
$this->Model_pendapatan->tambah_pendapatan($data,'tb_pendapatan');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan data</div>');
	redirect(base_url('admin/pendapatan'));
	}
}
	public function editPendapatan($id){
		$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
		$where = array('id'=>$id);
		$data['data_pendapatan']=$this->Model_pendapatan->edit_pendapatan($where,'tb_pendapatan')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/pangkalandata/edit_pendapatan', $data);
		}
	public function ubah_pendapatan(){
		$data['data_pendapatan']= $this->db->get_where('tb_pendapatan')->row_array();
		$id=$this->input->post('id');
		$id_kerjasama =$this->input->post('id_kerjasama');
		$pendapatan =$this->input->post('pendapatan');
		$data=array(
		'id_kerjasama'=>$id_kerjasama,
		'pendapatan'=> $pendapatan);
			$where= array(
				'id'=>$id
			);
		$this->Model_pendapatan->update_data($where,$data,'tb_pendapatan');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah data pendapatan</div>');
			redirect(base_url('admin/pendapatan'));
	  }
	public function hapusPendapatan($id){
		$where=array('id'=> $id);
		$this->Model_pendapatan->hapus_data($where,'tb_pendapatan');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus data pendapatan</div>');
			redirect(base_url('admin/pendapatan'));
		}
}

