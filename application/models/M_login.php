<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

Class M_login extends CI_Model {
	public function index($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

}