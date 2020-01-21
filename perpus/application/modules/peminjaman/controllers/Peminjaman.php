<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Peminjaman extends CI_Controller{

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_peminjaman');
    }

    public function index()
    {
      $data['peminjaman'] = $this->Model_peminjaman->tampil_peminjaman();
      $this->template->load('template/main','peminjaman',$data);
    }

   function form_peminjaman()
    {
      $this->template->load('template/main','form_peminjaman');
    }

    function aksi_form_peminjaman()
    {
      $data = array(
      'tgl_pinjam'  => $this->input->post('tgl_pinjam'),
      'kd_buku' => $this->input->post('kd_buku'),
      'judul_buku'  => $this->input->post('judul_buku'),
      'nama_anggota' => $this->input->post('nama_anggota'),
      'tgl_kembali' => $this->input->post('tgl_kembali')
    );
      $this->Model_peminjaman->save('peminjaman',$data);
      redirect(base_url().'Peminjaman');
    }

    function edit_peminjaman()
    {
      $data['peminjaman'] = $this->Model_peminjaman->tampil_edit_peminjaman($this->uri->segment(3))->row_array();
      $this->template->load('template/main','edit_peminjaman',$data);
    }

    function aksi_edit_peminjaman()
    {
      $data = array(
      'kd_pinjam'  => $this->input->post('kd_pinjam'),
      'tgl_pinjam'  => $this->input->post('tgl_pinjam'),
      'kd_buku' => $this->input->post('kd_buku'),
      'judul_buku'  => $this->input->post('judul_buku'),
      'nama_anggota' => $this->input->post('nama_anggota'),
      'tgl_kembali' => $this->input->post('tgl_kembali')
      );
      $id=$this->input->post('kd_pinjam');
      $this->Model_peminjaman->save_update('peminjaman',$id,$data);
      redirect(base_url().'Peminjaman');
    }
    
    function tampil_peminjaman()
    {
      if(isset($_POST['submit'])) {
        $this->Model_peminjaman->form_peminjaman();
        redirect('peminjaman');
      }
    }

    function hapus_peminjaman($kd_pinjam)
    {
      $kd_buku=$this->uri->segment(3);
      $this->Model_peminjaman->hapus_peminjaman('peminjaman',$kd_pinjam);  //nama table
      redirect('peminjaman');
    }
}