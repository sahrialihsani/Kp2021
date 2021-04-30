<?php
class Model_mitra extends CI_Model{
	public function tampil_data(){
	$hasil=$this->db->query("SELECT * FROM tb_mitra WHERE status='Diterima'  ORDER BY institusi ASC LIMIT 0,12");
            return $hasil;
	}
	public function tampil_data_all(){
	$hasil=$this->db->query("SELECT * FROM tb_mitra WHERE status='Diterima' OR status='Menunggu' ORDER BY institusi, status ASC");
            return $hasil;
	}
	public function detail_mitra($id){
		 $this->db->select('*');
    $this->db->from('tb_mitra');
    $this->db->where('id', $id);  // Also mention table name here
    $query = $this->db->get();    
    if($query->num_rows() > 0)
        return $query->result();
	}
		public function tambah_mitra($data,$table){
		$this->db->insert($table, $data);
	}
	public function edit_mitra($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
	 $this->db->update($table,$data);
	}
	public function hapus_data($where,$table){

		$this->db->where($where);
	 $this->db->delete($table);
	}
	public function total_data(){
	$hasil=$this->db->query("SELECT * FROM tb_mitra ");
            return $hasil;
	}
	public function detail_data($id){
		$this->db->select('*');
   $this->db->from('tb_mitra');
   $this->db->where('id', $id);  // Also mention table name here
   $query = $this->db->get();    
   if($query->num_rows() > 0)
	   return $query->result();
   }
}