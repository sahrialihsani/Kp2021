<?php
class Model_program extends CI_Model{
	public function tampil_data(){
	$hasil=$this->db->query("SELECT * FROM tb_program ORDER BY tahun DESC LIMIT 0,3");
            return $hasil;
	}
	public function tampil_data_all(){
	$hasil=$this->db->query("SELECT * FROM tb_program ORDER BY tahun DESC");
            return $hasil;
	}
	public function detail_program($id){
		 $this->db->select('*');
    $this->db->from('tb_program');
    $this->db->where('id', $id);  // Also mention table name here
    $query = $this->db->get();    
    if($query->num_rows() > 0)
        return $query->result();
	}
		public function tambah_program($data,$table){
		$this->db->insert($table, $data);
	}
	public function edit_program($where,$table){
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
	$hasil=$this->db->query("SELECT * FROM tb_program ");
            return $hasil;
	}
	public function detail_berkas($id){
		$this->db->select('*');
   $this->db->from('tb_program');
   $this->db->where('id', $id);  // Also mention table name here
   $query = $this->db->get();    
   if($query->num_rows() > 0)
	   return $query->result();
   }
   public function detail_data($id){
	$this->db->select('tb_kerjasama.id,tb_kerjasama.nama_kerjasama,tb_kerjasama.status, tb_mitra.id,tb_mitra.nama,tb_mitra.email,tb_mitra.institusi');
	$this->db->from('tb_kerjasama');
	$this->db->join('tb_mitra', 'tb_kerjasama.id_mitra = tb_mitra.id');
$this->db->where('tb_kerjasama.id', $id);  // Also mention table name here
$query = $this->db->get();    
if($query->num_rows() > 0)
   return $query->result();
}
}