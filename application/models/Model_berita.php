<?php
class Model_berita extends CI_Model{
	public function tampil_data(){
	$hasil=$this->db->query("SELECT tb_berita.id, tb_berita.judul,tb_berita.isi, tb_berita.gambar, tb_berita.tgl_posting, tb_kategori.kategori FROM tb_berita  join tb_kategori on tb_berita.id_kategori=tb_kategori.id ORDER BY tb_berita.judul ASC LIMIT 0,6");
            return $hasil;
	}
	public function tampil_data_all(){
	$hasil=$this->db->query("SELECT tb_berita.id, tb_berita.judul, tb_berita.isi,tb_berita.gambar, tb_berita.tgl_posting, tb_kategori.kategori FROM tb_berita  join tb_kategori on tb_berita.id_kategori=tb_kategori.id ORDER BY tb_berita.judul ASC");
            return $hasil;
	}
	// public function detail_berita($id){
	// 	 $query=$this->db->query('SELECT tb_berita.id, tb_berita.judul,tb_berita.isi, tb_berita.gambar, tb_berita.tgl_posting, tb_kategori.kategori FROM tb_berita  join tb_kategori on tb_berita.id_kategori=tb_kategori.id where tb_berita.id=$id');
    // if($query->num_rows() > 0)
    //     return $query->result();
	// }
	public function tampil_data_terbaru(){
		$hasil=$this->db->query("SELECT tb_berita.id, tb_berita.judul,tb_berita.isi, tb_berita.gambar, tb_berita.tgl_posting, tb_kategori.kategori FROM tb_berita  join tb_kategori on tb_berita.id_kategori=tb_kategori.id ORDER BY tb_berita.tgl_posting ASC LIMIT 0,6");
				return $hasil;
		}
	public function detail_berita($id){
		$this->db->select('*');
   $this->db->from('tb_berita');
   $this->db->join ( 'tb_kategori', 'tb_berita.id_kategori = tb_kategori.id' , 'inner' );
   $this->db->where('tb_berita.id', $id);  // Also mention table name here
   $query = $this->db->get();    
   if($query->num_rows() > 0)
	   return $query->result();
   }
		public function tambah_berita($data,$table){
		$this->db->insert($table, $data);
	}
	public function edit_berita($where,$table){
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
	$hasil=$this->db->query("SELECT * FROM tb_berita ");
            return $hasil;
	}
}