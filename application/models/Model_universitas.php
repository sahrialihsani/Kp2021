<?php
class Model_universitas extends CI_Model{
	public function tampil_data(){
	$hasil=$this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.status, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Universitas' AND tb_kerjasama.status='Aktif' ORDER BY tb_kerjasama.nama_kerjasama ASC LIMIT 0,3");
            return $hasil;
	}
	public function tampil_data_all(){
	$hasil=$this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.status, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Universitas' AND tb_kerjasama.status='Aktif' ORDER BY tb_kerjasama.nama_kerjasama ASC");
            return $hasil;
	}
	public function detail_universitas($id){
		 $this->db->select('*');
    $this->db->from('tb_kerjasama');
    $this->db->where('id', $id);  // Also mention table name here
    $query = $this->db->get();    
    if($query->num_rows() > 0)
        return $query->result();
	}
		public function tambah_universitas($data,$table){
		$this->db->insert($table, $data);
	}
	public function edit_universitas($where,$table){
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
	$hasil=$this->db->query("SELECT * FROM tb_kerjasama WHERE tb_kerjasama.jenis='Universitas' AND tb_kerjasama.status='Aktif'");
            return $hasil;
	}

	public function total_data_keseluruhan(){
		$hasil=$this->db->query("SELECT * FROM tb_kerjasama WHERE status='Aktif'");
				return $hasil;
		}
		public function detail_berkas($id){
			$this->db->select('*');
	   $this->db->from('tb_kerjasama');
	   $this->db->where('id', $id);  // Also mention table name here
	   $query = $this->db->get();    
	   if($query->num_rows() > 0)
		   return $query->result();
	   }
}