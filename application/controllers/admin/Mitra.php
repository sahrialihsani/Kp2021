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
	$subject = 'Kerjasama Diterima';
	$pesan = 'Kami telah melihat program kerjasama yang anda tawarkan. Kami berharap dapat melakukan kerjasama yang dapat meningkatkan hubungan kita bersama. <br><br> Balas email ini untuk pembahasan lebih lanjut.<br><br>Terimakasih,<br>Salam Hangat, <br> UPT KSLI Universitas Bengkulu';
	$this->load->library('email', $emailConfig);
	$this->email->set_newline("\r\n");
	// Set email preferences
	$this->email->from($from['email'], $from['name']);
	$this->email->to($to);
	$this->email->subject($subject);
	$this->email->message($pesan);
	if (!$this->email->send()) {
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Gagal mengirim email</div>');

	redirect(base_url('admin/mitra'));
		
	} else {
		$data=array('status'=>'Diterima');
	$where = array('id'=>$id);
	$this->Model_mitra->update_data($where,$data,'tb_mitra');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Mitra diterima dan email akan dikirimkan kepada mitra terkait</div>');
	redirect(base_url('admin/mitra'));
	}
	}
	public function tolak($id){
		$data=array('status'=>'Ditolak');
		$where = array('id'=>$id);
		$this->Model_mitra->update_data($where,$data,'tb_mitra');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Mitra ditolak</div>');
		redirect(base_url('admin/mitra'));
	
		}
// 	public function tambahMitra(){
// 		$email =$this->input->post('email');
// 		$institusi =$this->input->post('institusi');
// 		$negara =$this->input->post('negara');
// 		$pesan =$this->input->post('pesan');
// 		$gambar =$this->input->post('gambar');
// 		$berkas =$this->input->post('berkas');

// $sql = $this->db->query("SELECT institusi FROM tb_mitra where institusi='$institusi'");
// $cek_mitra = $sql->num_rows();
// if ($cek_mitra > 0) {
// 	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Mitra ini sudah ada</div>');
// redirect(base_url('admin/mitra'));
// 		}else{
// 		if($gambar=''){
// 		}else{
// 				$config['upload_path']='./assets/dua/img/mitra/';
// 				$config['allowed_types']='jpg|jpeg|png';
// 				$this->load->library('upload',$config);
// 				if($this->upload->do_upload('gambar')){
// 					$gambar=$this->upload->data('file_name');
		
// 				}else{
// 					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>File gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
		
// 				}
// 			}
		  
// $data=array(
// 	'email'=>$email,
// 	'institusi'=>$institusi,
// 	'id_negara'=>$negara,
// 	'pesan'=>$pesan,
// 	'status'=>"Menunggu",
// 	'gambar'=>$gambar,
// 	'berkas'=>$berkas);
// 	$this->db->insert('tb_mitra',$data);
// 	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan mitra</div>');
// 	redirect(base_url('admin/mitra'));
// 	}
//   }
public function tambah()
{
	
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/landingpage/form_mitra1');
}

public function tambahMitra()
	{
		$this->_rules();
		// if($this->form_validation->run()==FALSE){
		// 	$this->tambah();
		// }else{

            $email 		    = $this->input->post('email');
            $institusi 			= $this->input->post('institusi');
			$negara 		= $this->input->post('negara');
			$pesan 			= $this->input->post('pesan');
			// $file 				= $_FILES['file'];
			$gambar='';
			$berkas='';
			
			if (empty($_FILES['gambar']['name'])) {
			  // code...
			  $gambar='-';
			}
			else{
				$gambar = $_FILES['gambar'];
				$config['upload_path'] = './assets/dua/img/mitra/Gambar';
				$config['allowed_types']  = 'jpeg|jpg|png';
				$config['max_size']  = '2000';
				$config['file_name'] = "Mitra_".$institusi;
				$this->load->library('upload',$config);
				
				if($this->upload->do_upload('gambar')){
				  $gambar=$this->upload->data('file_name');
				}else
				{
					$error = array('error' => $this->upload->display_errors());
					var_dump($error);
					die();
	  
				}
	  }
	  if (empty($_FILES['berkas']['name'])){
		// code...
		$berkas='-';
	  }
	  else {
	  
	  
			$berkas = $_FILES['berkas'];
				$config2['upload_path'] = './assets/dua/img/mitra/File';
				$config2['allowed_types']  = 'doc|docx|pdf';
				$config['max_size']  = '2000';
				$config2['file_name'] = "Mitra_".$institusi;
				$this->upload->initialize($config2);
	  
				$this->load->library('upload',$config2);
				if(!$this->upload->do_upload('berkas')){
				  	echo "Upload Berkas Gagal";
					$error = array('error' => $this->upload->display_errors());
					var_dump($error);
					die();
				}else{
				  $berkas=$this->upload->data('file_name');
				}
	  }


			 $sql = $this->db->query("SELECT count(institusi) as surat FROM tb_mitra where institusi='$institusi'")->result();
			 $cek_surat='';
			 foreach($sql as $ss){
				 $cek_surat = $ss->surat;
			 }
			 
			if ($cek_surat > 0) {
 
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-message alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>File gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
			 redirect('admin/mitra');
			 }


			else {

 			$data = array(

                'email' 		    => $email,
                'institusi' 	    => $institusi,
				'id_negara' 		=> $negara,
				'pesan' 			=> $pesan,
                'gambar'       	=> $gambar,
				'berkas' 	=> $berkas,
 			);
			$this->db->insert('tb_mitra', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil menambahkan mitra</div>');
			redirect('admin/mitra');
		
	}
	}
			
	

	public function _rules()
	{
		
		$this->form_validation->set_rules('email','email','required',['required' => 'Email wajib di isi!']);
		$this->form_validation->set_rules('institusi','institusi','required',['required' => 'Institusi wajib di isi!']);
		$this->form_validation->set_rules('negara','negara','required',['required' => 'Negara di isi!']);
		$this->form_validation->set_rules('pesan','pesan','required',['required' => 'Pesan wajib di isi!']);
		
	}



  public function editMitra($id){  
	$data['user']= $this->db->get_where('tb_admin',['email'=> $this->session->userdata('email')])->row_array();
	$where = array('id'=>$id);
	
	$data['data_mitra']=$this->Model_mitra->edit_mitra($where,'tb_mitra')->result();
	$this->load->view('admin/template/header');
	$this->load->view('admin/template/sidebar');
	$this->load->view('admin/landingpage/edit_mitra', $data);

	}
public function ubah_mitra(){
		$id=$this->input->post('id');
		$email =$this->input->post('email');
		$institusi =$this->input->post('institusi');
		$pesan =$this->input->post('pesan');
		$status =$this->input->post('status');
		$gambar =$this->input->post('gambar');
		$berkas =$this->input->post('berkas');
		if($gambar=''){
		}
		elseif($berkas=''){
		}else{
				$config['upload_path']='./assets/dua/berkas/mitra/';
				$config['allowed_types']='jpg|jpeg|png';
				$config['max_size']  = '2000';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('gambar')){
					$gambar=$this->upload->data('file_name');
		
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-message alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>File gagal diupload, masukan ekstensi jpg,jpeg,png</div>');
		
				}
				$config['upload_path']='./assets/dua/berkas/mitra/';
				$config['allowed_types']='pdf|doc|docx';
				$config['max_size']  = '2000';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('berkas')){
					$berkas=$this->upload->data('file_name');
		
				}else{
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-message alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>File gagal diupload, masukan ekstensi pdf,doc,docx</div>');
				}
			}
	$data=array(
	'email'=>$email,
	'institusi'=>$institusi,
	'pesan'=>$pesan,
	'status'=>$status,
	'gambar'=>$gambar,
	'berkas'=>$berkas
	);
		$where=array(
			'id'=>$id
		);
	$this->Model_mitra->update_data($where,$data,'tb_mitra');
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil ubah mitra</div>');

		redirect(base_url('admin/mitra'));
  }
  public function hapusMitra($id){
	$where=array('id'=> $id);
	$this->Model_mitra->hapus_data($where,'tb_mitra');
	$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i>Berhasil hapus mitra</div>');

		redirect(base_url('admin/mitra'));
	}

  public function detailBerkas($id){
		
	$data['detail_berkas'] = $this->Model_mitra->detail_data($id);
	$this->load->view('admin/landingpage/detail_berkas', $data);

	}	
  }
