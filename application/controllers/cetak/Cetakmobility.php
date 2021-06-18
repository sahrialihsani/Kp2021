<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('memory_limit','500M');
class cetakmobility extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('mypdf');
    }

	function index()
	{
        $data['cetak'] = $this->db->query("SELECT * FROM tb_mobility ORDER BY status ASC")->result();
		$this->mypdf->generate('admin/v_cetak_mobility', $data, 'Cetak Prpgram UNIB', 'A4', 'Potrait');
	}
}