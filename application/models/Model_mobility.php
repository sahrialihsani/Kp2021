<?php
class Model_mobility extends CI_Model{
	public function tampil_data(){
	$hasil=$this->db->query("SELECT tb_mobility.*, tb_program.* FROM tb_mobility JOIN tb_program ON tb_mobility.id_program=tb_program.id ORDER BY tb_mobility.nama_lengkap ASC LIMIT 0,3");
            return $hasil;
	}
	public function tampil_data_all(){
	$hasil=$this->db->query("SELECT tb_mobility.*, tb_program.* FROM tb_mobility JOIN tb_program ON tb_mobility.id_program=tb_program.id ORDER BY tb_mobility.nama_lengkap ASC");
            return $hasil;
	}
	public function detail_mobility($id){
		 $this->db->select('*');
    $this->db->from('tb_mobility');
    $this->db->where('id', $id);  // Also mention table name here
    $query = $this->db->get();    
    if($query->num_rows() > 0)
        return $query->result();
	}
		public function tambah_mobility($data,$table){
		$this->db->insert($table, $data);
	}
	public function edit_mobility($where,$table){
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
	$hasil=$this->db->query("SELECT * FROM tb_mobility");
            return $hasil;
	}
	public function detail_berkas($id){
		$this->db->select('*');
   $this->db->from('tb_mobility');
   $this->db->where('id', $id);  // Also mention table name here
   $query = $this->db->get();    
   if($query->num_rows() > 0)
	   return $query->result();
   }
}