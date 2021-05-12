<?php
class Model_pendapatan extends CI_Model{
	public function tampil_data(){
	$hasil=$this->db->query("SELECT tb_kerjasama.*, tb_pendapatan.* FROM tb_pendapatan  join tb_kerjasama on tb_pendapatan.id_kerjasama=tb_kerjasama.id WHERE tb_kerjasama.mou_or_pks='PKS' ORDER BY tb_pendapatan.pendapatan DESC LIMIT 0,6");
            return $hasil;
	}
	public function tampil_data_all(){
	$hasil=$this->db->query("SELECT tb_kerjasama.*, tb_pendapatan.*  FROM tb_pendapatan  join tb_kerjasama on tb_pendapatan.id_kerjasama=tb_kerjasama.id WHERE (DATEDIFF(tb_kerjasama.tgl_akhir,CURRENT_DATE())>=0) AND tb_kerjasama.mou_or_pks='PKS' ORDER BY tb_pendapatan.pendapatan DESC");
            return $hasil;
	}
	public function detail_pendapatan($id){
		$this->db->select('*');
   $this->db->from('tb_pendapatan');
   $this->db->join ( 'tb_kerjasama', 'tb_pendapatan.id_kerjasama = tb_kerjasama.id' , 'inner' );
   $this->db->where('tb_pendapatan.id', $id);  // Also mention table name here
   $query = $this->db->get();    
   if($query->num_rows() > 0)
	   return $query->result();
   }
		public function tambah_pendapatan($data,$table){
		$this->db->insert($table, $data);
	}
	public function edit_pendapatan($where,$table){
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
	$hasil=$this->db->query("SELECT * FROM tb_pendapatan");
            return $hasil;
	}
}