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
        $data['cetak'] = $this->db->query("SELECT tb_mobility.*, tb_program.* FROM tb_mobility JOIN tb_program ON tb_mobility.id_program=tb_program.id ORDER BY tb_mobility.status ASC")->result();
		$this->mypdf->generate('admin/v_cetak_mobility', $data, 'Cetak Prpgram UNIB', 'A4', 'Potrait');
	}
}