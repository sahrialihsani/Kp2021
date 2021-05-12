<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'login?alert=belum_login');
		}
	}
	public function index()
	{
		$data['total_program'] = $this->Model_program->total_data()->num_rows();
		$data['total_kerjasama'] = $this->Model_kerjasama->total_data_keseluruhan()->num_rows();
		$data['total_mitra'] = $this->Model_mitra->total_data()->num_rows();
		$data['total_organisasi'] = $this->Model_organisasi->total_data()->num_rows();
		$data['tahun_kerja']=$this->db->query('select year(tgl_mulai) as tahun from tb_kerjasama GROUP BY YEAR(tgl_mulai)')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/dashboard/index',$data);
		
	}

	public function load_data(){
		$tahun=$this->input->get('tahun');
		$swasta=$this->db->query("SELECT COUNT(*) as jumlah,MONTH(tgl_mulai) AS bulan FROM tb_kerjasama WHERE YEAR(tgl_mulai)=$tahun and jenis='Swasta' GROUP BY MONTH(tgl_mulai)")->result_array();
		$pemerintahan=$this->db->query("SELECT COUNT(*) as jumlah,MONTH(tgl_mulai) AS bulan FROM tb_kerjasama WHERE YEAR(tgl_mulai)=$tahun and jenis='Pemerintahan' GROUP BY MONTH(tgl_mulai)")->result_array();
		$universitas=$this->db->query("SELECT COUNT(*) as jumlah,MONTH(tgl_mulai) AS bulan FROM tb_kerjasama WHERE YEAR(tgl_mulai)=$tahun and jenis='Universitas' GROUP BY MONTH(tgl_mulai)")->result_array();
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
	

}

