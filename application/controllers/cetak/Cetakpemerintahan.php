<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('memory_limit','500M');
class cetakpemerintahan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('mypdf');
    }

	function index()
	{
		$data['cetak'] = $this->Model_kerjasama->tampil_data_pemerintahan_all()->result();
		$this->mypdf->generate('admin/v_cetak_pemerintahan', $data, 'Cetak Kerja Sama UNIB', 'A4', 'Potrait');
	}
}