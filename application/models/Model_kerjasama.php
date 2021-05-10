<?php
class Model_kerjasama extends CI_Model{
	public function tampil_data_universitas_mou(){
	$hasil=$this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.mou_or_pks, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Universitas' AND tb_kerjasama.status='Aktif' AND tb_kerjasama.mou_or_pks='MOU' ORDER BY tb_kerjasama.nama_kerjasama ASC");
            return $hasil;
	}
	public function tampil_data_swasta_mou(){
	$hasil=$this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.mou_or_pks, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Swasta' AND tb_kerjasama.status='Aktif' AND tb_kerjasama.mou_or_pks='MOU' ORDER BY tb_kerjasama.nama_kerjasama ASC");
            return $hasil;
	}
	public function tampil_data_pemerintahan_mou(){
		$hasil=$this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.mou_or_pks, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Pemerintahan' AND tb_kerjasama.status='Aktif' AND tb_kerjasama.mou_or_pks='MOU' ORDER BY tb_kerjasama.nama_kerjasama ASC");
				return $hasil;
	}
	public function tampil_data_universitas_pks(){
		$hasil=$this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.mou_or_pks, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Universitas' AND tb_kerjasama.status='Aktif' AND tb_kerjasama.mou_or_pks='PKS' ORDER BY tb_kerjasama.nama_kerjasama ASC");
				return $hasil;
	}
		public function tampil_data_swasta_pks(){
		$hasil=$this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.mou_or_pks, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Swasta' AND tb_kerjasama.status='Aktif' AND tb_kerjasama.mou_or_pks='PKS' ORDER BY tb_kerjasama.nama_kerjasama ASC");
				return $hasil;
	}
		public function tampil_data_pemerintahan_pks(){
			$hasil=$this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.mou_or_pks, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Pemerintahan' AND tb_kerjasama.status='Aktif' AND tb_kerjasama.mou_or_pks='PKS' ORDER BY tb_kerjasama.nama_kerjasama ASC");
					return $hasil;
	}
	public function tampil_data_universitas_all(){
		$hasil=$this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.mou_or_pks, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Universitas' AND tb_kerjasama.status='Aktif'  ORDER BY tb_kerjasama.nama_kerjasama ASC");
				return $hasil;
	}
		public function tampil_data_swasta_all(){
		$hasil=$this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.mou_or_pks, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Swasta' AND tb_kerjasama.status='Aktif' ORDER BY tb_kerjasama.nama_kerjasama ASC");
				return $hasil;
	}
		public function tampil_data_pemerintahan_all(){
			$hasil=$this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.mou_or_pks, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Pemerintahan' AND tb_kerjasama.status='Aktif'  ORDER BY tb_kerjasama.nama_kerjasama ASC");
					return $hasil;
	}
	public function detail_kerjasama($id){
		 $this->db->select('*');
    $this->db->from('tb_kerjasama');
    $this->db->where('id', $id);  // Also mention table name here
    $query = $this->db->get();    
    if($query->num_rows() > 0)
        return $query->result();
	}
		public function tambah_kerjasama($data,$table){
		$this->db->insert($table, $data);
	}
	public function edit_kerjasama($where,$table){
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
	public function total_data_swasta(){
	$hasil=$this->db->query("SELECT * FROM tb_kerjasama WHERE tb_kerjasama.jenis='Swasta' AND tb_kerjasama.status='Aktif'");
            return $hasil;
	}
	public function total_data_universitas(){
		$hasil=$this->db->query("SELECT * FROM tb_kerjasama WHERE tb_kerjasama.jenis='Universitas' AND tb_kerjasama.status='Aktif'");
				return $hasil;
	}
	public function total_data_pemerintahan(){
		$hasil=$this->db->query("SELECT * FROM tb_kerjasama WHERE tb_kerjasama.jenis='Pemerintahan' AND tb_kerjasama.status='Aktif'");
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