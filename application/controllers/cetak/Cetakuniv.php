<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('memory_limit','500M');
class cetakuniv extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('mypdf');
    }

	function index()
	{
        $data['cetak'] = $this->Model_kerjasama->tampil_data_universitas_all()->result();
		$this->mypdf->generate('admin/v_cetak_universitas', $data, 'Cetak Kerja Sama UNIB', 'A4', 'Potrait');
	}
}