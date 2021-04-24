<?php
class Model_faq extends CI_Model{
	public function tampil_data(){
	$hasil=$this->db->query("SELECT * FROM tb_faq ORDER BY pertanyaan ASC LIMIT 0,10");
            return $hasil;
	}
	public function tampil_data_all(){
	$hasil=$this->db->query("SELECT * FROM tb_faq ORDER BY pertanyaan ASC");
            return $hasil;
	}
	public function detail_faq($id){
		 $this->db->select('*');
    $this->db->from('tb_faq');
    $this->db->where('id', $id);  // Also mention table name here
    $query = $this->db->get();    
    if($query->num_rows() > 0)
        return $query->result();
	}
		public function tambah_faq($data,$table){
		$this->db->insert($table, $data);
	}
	public function edit_faq($where,$table){
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
	$hasil=$this->db->query("SELECT * FROM tb_faq ");
            return $hasil;
	}
}