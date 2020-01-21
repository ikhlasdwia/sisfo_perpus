<?php

class Model_anggota extends CI_Model {
	
	public $table="anggota";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_anggota(){
		$query=$this->db->query("SELECT * FROM anggota ORDER BY id_anggota DESC");
		//melihat apakah ada data dalam tabel
		return $query->result();		//mengirimkan data array hasil query
	}

	function save_update($table,$id,$data)
	{
		$this->db->where('id_anggota',$id);
		$this->db->update($table,$data);
	}

	function tampil_edit_anggota($id)
	{
		return $this->db->query("SELECT * FROM anggota WHERE id_anggota='$id'");
	}

	function hapus_anggota($table,$id){
		$this->db->where('id_anggota',$id);
		$this->db->delete($table);
		}	
	}

?>