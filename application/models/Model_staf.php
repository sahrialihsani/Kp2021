<?php
class Model_staf extends CI_Model{
	public function tampil_data(){
	$hasil=$this->db->query("SELECT * FROM tb_staf ORDER BY nama ASC LIMIT 0,12");
            return $hasil;
	}
	public function tampil_data_all(){
	$hasil=$this->db->query("SELECT * FROM tb_staf ORDER BY nama ASC");
            return $hasil;
	}
	public function detail_staf($id){
		 $this->db->select('*');
    $this->db->from('tb_staf');
    $this->db->where('id', $id);  // Also mention table name here
    $query = $this->db->get();    
    if($query->num_rows() > 0)
        return $query->result();
	}
		public function tambah_staf($data,$table){
		$this->db->insert($table, $data);
	}
	public function edit_staf($where,$table){
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
	$hasil=$this->db->query("SELECT * FROM tb_staf ");
            return $hasil;
	}
}