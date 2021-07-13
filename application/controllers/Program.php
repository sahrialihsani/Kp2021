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
		$data['menu_beranda'] = "Home";
		$data['menu_tkami'] = "About Us";
		$data['menu_berita'] = "News";
		$data['menu_layanan'] = "Programs";
		$data['menu_hubungi'] = "Contact Us";
		$data['menu_bahasa'] = "Language";
		$data['beasiswa'] = "Scholarship & Global Opportunity";
		$data['pangkalan'] = "Cooperation Programs";
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$data['list'] = "List of Cooperation Data";
		$data['mobility'] = "Mobility Program";
		$this->load->view('template/headerlayanan',$data);
		$this->load->view('international/index',$data);
		$this->load->view('template/footer',$data);
	}
	public function daftar_program()
	{
		$data['data_program'] = $this->Model_program->tampil_data_all()->result();
		$this->load->view('template/headerlayanan',$data);
		$this->load->view('international/daftar_program',$data);
		$this->load->view('template/footer',$data);
	}
	public function detailOportunity()
	{
		$data['menu_beranda'] = "Home";
		$data['menu_tkami'] = "About Us";
		$data['menu_berita'] = "News";
		$data['menu_layanan'] = "Programs";
		$data['menu_hubungi'] = "Contact Us";
		$data['menu_bahasa'] = "Language";
		$data['beasiswa'] = "Scholarship & Global Opportunity";
		$data['pangkalan'] = "Cooperation Programs";
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$this->load->view('template/headerlayanan',$data);
		$this->load->view('international/detailinternational');
		$this->load->view('template/footer',$data);
}
public function detailProgram($id)
	{
		$data['data_program'] = $this->Model_program->detail_program($id);
		$this->load->view('template/headerlayanan');
		$this->load->view('international/detailProgram',$data);
		$this->load->view('template/footer');
}
public function detailNetworks($id)
	{
		$data['data_organisasi'] = $this->Model_organisasi->detail_organisasi($id);
		$this->load->view('template/headerlayanan');
		$this->load->view('international/detailOrganisasi',$data);
		$this->load->view('template/footer');
}
public function networking()
	{
		$data['menu_beranda'] = "Home";
		$data['menu_tkami'] = "About Us";
		$data['menu_berita'] = "News";
		$data['menu_layanan'] = "Programs";
		$data['menu_hubungi'] = "Contact Us";
		$data['menu_bahasa'] = "Language";
		$data['beasiswa'] = "Scholarship & Global Opportunity";
		$data['pangkalan'] = "Cooperation Programs";
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$data['data_organisasi'] = $this->Model_organisasi->tampil_data_all()->result();
		$this->load->view('template/headerlayanan',$data);
		$this->load->view('international/jaringan',$data);
		$this->load->view('template/footer',$data);
}
public function travelservice()
	{
		$data['menu_beranda'] = "Home";
		$data['menu_tkami'] = "About Us";
		$data['menu_berita'] = "News";
		$data['menu_layanan'] = "Programs";
		$data['menu_hubungi'] = "Contact Us";
		$data['menu_bahasa'] = "Language";
		$data['beasiswa'] = "Scholarship & Global Opportunity";
		$data['pangkalan'] = "Cooperation Programs";
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$this->load->view('template/headerlayanan',$data);
		$this->load->view('international/dinasln');
		$this->load->view('template/footer',$data);
}
public function partners()
	{
		$data['menu_beranda'] = "Home";
		$data['menu_tkami'] = "About Us";
		$data['menu_berita'] = "News";
		$data['menu_layanan'] = "Programs";
		$data['menu_hubungi'] = "Contact Us";
		$data['menu_bahasa'] = "Language";
		$data['beasiswa'] = "Scholarship & Global Opportunity";
		$data['pangkalan'] = "Cooperation Programs";
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$data['datakerjasama'] = "Cooperation Data";
		$data['universitas'] = "University";
		$data['swasta'] = "Company";
		$data['pemerintahan'] = "Goverment";
		$data['total_universitas'] = $this->Model_kerjasama->total_data_universitas()->num_rows();
		$data['total_pemerintahan'] = $this->Model_kerjasama->total_data_pemerintahan()->num_rows();
		$data['total_swasta'] = $this->Model_kerjasama->total_data_swasta()->num_rows();
		$this->load->view('template/headerlayanan',$data);
		$this->load->view('international/pangkalandata',$data);
		$this->load->view('template/footer',$data);
}
public function university()
	{
		$data['menu_beranda'] = "Home";
		$data['menu_tkami'] = "About Us";
		$data['menu_berita'] = "News";
		$data['menu_layanan'] = "Programs";
		$data['menu_hubungi'] = "Contact Us";
		$data['menu_bahasa'] = "Language";
		$data['beasiswa'] = "Scholarship & Global Opportunity";
		$data['pangkalan'] = "Cooperation Programs";
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$data['universitas'] = "Cooperation with Universities";
		$data['data_universitas'] = $this->Model_kerjasama->tampil_data_universitas_mou()->result();
		$this->load->view('template/headerlayanan',$data);
		$this->load->view('international/universitas',$data);
		$this->load->view('template/footer',$data);
}
public function goverment()
	{
		$data['menu_beranda'] = "Home";
		$data['menu_tkami'] = "About Us";
		$data['menu_berita'] = "News";
		$data['menu_layanan'] = "Programs";
		$data['menu_hubungi'] = "Contact Us";
		$data['menu_bahasa'] = "Language";
		$data['beasiswa'] = "Scholarship & Global Opportunity";
		$data['pangkalan'] = "Cooperation Programs";
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$data['pemerintahan'] = "Cooperation with Goverment";
		$data['data_pemerintahan'] = $this->Model_kerjasama->tampil_data_pemerintahan_mou()->result();
		$this->load->view('template/headerlayanan',$data);
		$this->load->view('international/pemerintahan',$data);
		$this->load->view('template/footer',$data);
}
public function institution()
	{
		$data['menu_beranda'] = "Home";
		$data['menu_tkami'] = "About Us";
		$data['menu_berita'] = "News";
		$data['menu_layanan'] = "Programs";
		$data['menu_hubungi'] = "Contact Us";
		$data['menu_bahasa'] = "Language";
		$data['beasiswa'] = "Scholarship & Global Opportunity";
		$data['pangkalan'] = "Cooperation Programs";
		$data['jaringan'] = "Networks";
		$data['perjalanan'] = "Overseas Travel";
		$data['keterangan'] = "Office of Partnership and International Affair is responsible for unib cooperation relationships with local and foreign agencies/universities.";
		$data['contact_us'] = "Kandang Limun, Muara Bangka Hulu, Bengkulu City, Bengkulu 38119";
		$data['phone'] = "(0736) 21170, 21884, Ext (190)";
		$data['email'] = "international@unib.ac.id";
		$data['swasta'] = "Cooperation with Companies";
		$data['data_swasta'] = $this->Model_kerjasama->tampil_data_swasta_mou()->result();
		$this->load->view('template/headerlayanan',$data);
		$this->load->view('international/swasta',$data);
		$this->load->view('template/footer',$data);
}
public function uploadBerkas(){
	$id_program =$this->input->post('program');
	$nama_lengkap =$this->input->post('nama_lengkap');
	$email =$this->input->post('email');
	$status =$this->input->post('status');
	$berkas =$this->input->post('berkas');
	$sql = $this->db->query("SELECT nama FROM tb_mobility where nama='$nama'");
$cek_Studentmob = $sql->num_rows();
if ($cek_Studentmob > 0) {
$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Data ini sudah ada</div>');
redirect(base_url('program/daftar_program'));
	}else{
		
		if($berkas=''){
	
	}else{
			$config['upload_path']='./assets/dua/berkas/mobility/';
			$config['allowed_types']='pdf|doc|docx';
			$config['max_size']  = '2000';
			$this->load->library('upload',$config);
			if($this->upload->do_upload('berkas')){
				$berkas=$this->upload->data('file_name');
	
			}else{
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>berkas gagal diupload, masukan ekstensi pdf,docx,doc</div>');
	
			}
	
		}
$data['data_mobility']= $this->db->get_where('tb_mobility')->row_array();
$data=array(
	'id_program'=>$id_program,
	'nama_lengkap'=>$nama_lengkap,
	'email'=> $email,
	'status'=> $status,
'berkas'=>$berkas);
$this->Model_mobility->tambah_mobility($data,'tb_mobility');
$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil upload berkas program mobility</div>');

redirect(base_url('program/daftar_program'));
}
}
public function detailBerkasUniv($id){
		
	$data['detail_berkas_univ'] = $this->Model_kerjasama->detail_berkas($id);

	$this->load->view('international/detail_berkas_univ', $data);

	}	
public function detailBerkasGov($id){
	$data['detail_berkas_gov'] = $this->Model_kerjasama->detail_berkas($id);
	
		$this->load->view('international/detail_berkas_gov', $data);
	
		}
public function detailBerkasIns($id){			
		$data['detail_berkas_sws'] = $this->Model_kerjasama->detail_berkas($id);

$this->load->view('international/detail_berkas_ins', $data);
		
			}
public function syarat()
	{
		$this->load->view('international/syarat');
	}
	
public function detailBerkas($id){
		$data['detail_berkas'] = $this->Model_program->detail_berkas($id);
		$this->load->view('international/detail_berkas', $data);
	}		
}

