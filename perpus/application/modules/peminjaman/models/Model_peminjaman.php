<?php

class Model_peminjaman extends CI_Model {
	
	public $table="peminjaman";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_peminjaman(){
		$query=$this->db->query("SELECT * FROM peminjaman ORDER BY kd_pinjam");
		return $query->result();
	}

	function save_update($table,$id,$data)
	{
		$this->db->where('kd_pinjam',$id);
		$this->db->update($table,$data);
	}

	function tampil_edit_peminjaman($id)
	{
		return $this->db->query("SELECT * FROM peminjaman WHERE kd_pinjam='$id'");
	}

	function hapus_peminjaman($table,$id){
		$this->db->where('kd_pinjam',$id);
		$this->db->delete($table);
	}	
}

?>