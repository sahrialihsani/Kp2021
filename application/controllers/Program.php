<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class program extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$data['data_program'] = $this->Model_program->tampil_data_all()->result();
		$this->load->view('template/headerlayanan');
		$this->load->view('international/index',$data);
		$this->load->view('template/footer');
	}
	public function detailOportunity()
	{
		$this->load->view('template/headerlayanan');
		$this->load->view('international/detailinternational');
		$this->load->view('template/footer');
}
public function networking()
	{
		$data['data_organisasi'] = $this->Model_organisasi->tampil_data_all()->result();
		$this->load->view('template/headerlayanan');
		$this->load->view('international/jaringan',$data);
		$this->load->view('template/footer');
}
public function travelservice()
	{
		$this->load->view('template/headerlayanan');
		$this->load->view('international/dinasln');
		$this->load->view('template/footer');
}
public function partners()
	{
		$data['total_universitas'] = $this->Model_universitas->total_data()->num_rows();
		$data['total_pemerintahan'] = $this->Model_pemerintahan->total_data()->num_rows();
		$data['total_swasta'] = $this->Model_swasta->total_data()->num_rows();
		$this->load->view('template/headerlayanan');
		$this->load->view('international/pangkalandata',$data);
		$this->load->view('template/footer');
}
public function university()
	{
		$data['data_universitas'] = $this->Model_universitas->tampil_data_all()->result();
		$this->load->view('template/headerlayanan');
		$this->load->view('international/universitas',$data);
		$this->load->view('template/footer');
}
public function goverment()
	{
		$data['data_pemerintahan'] = $this->Model_pemerintahan->tampil_data_all()->result();
		$this->load->view('template/headerlayanan');
		$this->load->view('international/pemerintahan',$data);
		$this->load->view('template/footer');
}
public function institution()
	{
		$data['data_swasta'] = $this->Model_swasta->tampil_data_all()->result();
		$this->load->view('template/headerlayanan');
		$this->load->view('international/swasta',$data);
		$this->load->view('template/footer');
}
public function uploadBerkas(){
	$nama =$this->input->post('nama');
	$email =$this->input->post('email');
	$status =$this->input->post('status');
	$berkas =$this->input->post('berkas');
	$sql = $this->db->query("SELECT nama FROM tb_mobility where nama='$nama'");
$cek_Studentmob = $sql->num_rows();
if ($cek_Studentmob > 0) {
$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Data ini sudah ada</div>');
redirect(base_url('program'));
	}else{
		
		if($berkas=''){
	
	}else{
			$config['upload_path']='./assets/dua/berkas/mobility/';
			$config['allowed_types']='pdf|doc|docx';
			$this->load->library('upload',$config);
			if($this->upload->do_upload('berkas')){
				$berkas=$this->upload->data('file_name');
	
			}else{
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berkas gagal diupload, masukan ekstensi pdf,docx,doc</div>');
	
			}
	
		}
$data['data_mobility']= $this->db->get_where('tb_mobility')->row_array();
$data=array(
	'nama'=>$nama,
	'email'=> $email,
	'status'=> $status,
'berkas'=>$berkas);
$this->Model_mobility->tambah_mobility($data,'tb_mobility');
$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil upload berkas program mobility</div>');

redirect(base_url('program'));
}
}
public function detailBerkasUniv($id){
		
	$data['detail_berkas_univ'] = $this->Model_universitas->detail_berkas($id);

	$this->load->view('international/detail_berkas_univ', $data);

	}	
public function detailBerkasGov($id){
	$data['detail_berkas_gov'] = $this->Model_pemerintahan->detail_berkas($id);
	
		$this->load->view('international/detail_berkas_gov', $data);
	
		}
public function detailBerkasIns($id){			
		$data['detail_berkas_sws'] = $this->Model_swasta->detail_berkas($id);

$this->load->view('international/detail_berkas_ins', $data);
		
			}	
}

