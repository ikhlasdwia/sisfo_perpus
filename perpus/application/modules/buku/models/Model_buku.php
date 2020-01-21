<?php

class Model_buku extends CI_Model {
	
	public $table="buku";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_buku(){
		$query=$this->db->query("SELECT * FROM buku ORDER BY kd_buku DESC");
		return $query->result();
	}

	function save_update($table,$id,$data)
	{
		$this->db->where('kd_buku',$id);
		$this->db->update($table,$data);
	}

	function tampil_edit_buku($id)
	{
		return $this->db->query("SELECT * FROM buku WHERE kd_buku='$id'");
	}

	function hapus_buku($table,$id){
		$this->db->where('kd_buku',$id);
		$this->db->delete($table);
		}	
	}

?>