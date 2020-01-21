<?php

class Model_pengembalian extends CI_Model {
	
	public $table="pengembalian";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_pengembalian(){
		$query=$this->db->query("SELECT * FROM pengembalian ORDER BY kd_pinjam");
		return $query->result();
	}

	function save_update($table,$id,$data)
	{
		$this->db->where('kd_pinjam',$id);
		$this->db->update($table,$data);
	}

	function tampil_edit_pengembalian($id)
	{
		return $this->db->query("SELECT * FROM pengembalian WHERE kd_pinjam='$id'");
	}

	function hapus_buku($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}

?>