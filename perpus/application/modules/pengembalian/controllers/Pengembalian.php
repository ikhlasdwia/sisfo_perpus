<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pengembalian extends CI_Controller{

   function __construct(){
     parent::__construct();     
     $this->load->model('Model_pengembalian');
   }

  	public function index()
  	{
    	$data['pengembalian'] = $this->Model_pengembalian->tampil_pengembalian();
    	$this->template->load('template/main','pengembalian',$data);
  	}

	function form_pengembalian()
  	{
    	$this->template->load('template/main','form_pengembalian');
  	}

  	function aksi_form_pengembalian()
    {
       

      $data = array(
      'kd_pinjam'  => $this->input->post('kd_pinjam'),
      'tgl_pinjam'  => $this->input->post('tgl_pinjam'),
      'kd_buku' => $this->input->post('kd_buku'),
      'judul_buku'  => $this->input->post('judul_buku'),
      'nama_anggota' => $this->input->post('nama_anggota'),
      'tgl_kembali' => $this->input->post('tgl_kembali'),
      'tgl_di_kembalikan' => $this->input->post('tgl_di_kembalikan'),
      'denda' => $this->input->post('denda')
    );
      $this->Model_pengembalian->save('pengembalian',$data);
      redirect(base_url().'Pengembalian');
    }
  
    
    function edit_pengembalian()
    {
      $data['pengembalian'] = $this->Model_pengembalian->tampil_edit_pengembalian($this->uri->segment(3))->row_array();
      $this->template->load('template/main','edit_pengembalian',$data);
    }

    function aksi_edit_pengembalian()
    {
      $data = array(
      'kd_pinjam'  => $this->input->post('kd_pinjam'),
      'tgl_pinjam'  => $this->input->post('tgl_pinjam'),
      'kd_buku' => $this->input->post('kd_buku'),
      'judul_buku'  => $this->input->post('judul_buku'),
      'nama_anggota' => $this->input->post('nama_anggota'),
      'tgl_kembali' => $this->input->post('tgl_kembali'),
      'tgl_di_kembalikan' => $this->input->post('tgl_di_kembalikan')
    );
      $id=$this->input->post('kd_pinjam');
      $this->Model_pengembalian->save_update('pengembalian',$id,$data);
      redirect(base_url().'pengembalian');
    }

    function tampil_pengembalian()
    {
      if(isset($_POST['submit'])) {
        $this->Model_pengembalian->form_pengembalian();
        redirect('pengembalian');
      }
    }

    function hapus_pengembalian($kd_pinjam)
    {
      $kd_buku=$this->uri->segment(3);
      $this->Model_pengembalian->hapus_pengembalian('pengembalian',$kd_pinjam);  //nama table
      redirect('pengembalian');
    }
  
}

