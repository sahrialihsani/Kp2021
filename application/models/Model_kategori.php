<?php
class Model_kategori extends CI_Model{
	public function tampil_data(){
	$hasil=$this->db->query("SELECT * FROM tb_kategori ORDER BY kategori ASC LIMIT 0,3");
            return $hasil;
	}
	public function tampil_data_all(){
	$hasil=$this->db->query("SELECT * FROM tb_kategori ORDER BY kategori ASC");
            return $hasil;
	}
	public function detail_kategori($id){
		 $this->db->select('*');
    $this->db->from('tb_kategori');
    $this->db->where('id', $id);  // Also mention table name here
    $query = $this->db->get();    
    if($query->num_rows() > 0)
        return $query->result();
	}
		public function tambah_kategori($data,$table){
		$this->db->insert($table, $data);
	}
	public function edit_kategori($where,$table){
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
	$hasil=$this->db->query("SELECT * FROM tb_kategori");
            return $hasil;
	}
}