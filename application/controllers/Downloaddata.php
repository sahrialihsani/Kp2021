<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class downloaddata extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('downloaddata');
		$this->load->view('template/footer');
	}

}

