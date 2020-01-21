<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Buku extends CI_Controller{

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_buku');
    }

    public function index()
    {
      $data['buku'] = $this->Model_buku->tampil_buku();
      $this->template->load('template/main','buku',$data);
    }

	 function tambah_buku()
    {
      $this->template->load('template/main','tambah_buku');
    }

    function aksi_tambah_buku()
    {
      if($this->input->post('simpan')){
      
        if(!empty($_FILES['foto_upload']['name'])){
                $config['upload_path'] = 'assets/image/upload/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['foto_upload']['name'];
                $config['max_size'] = '1000';
          $config['max_width']  = '3000';
          $config['max_height']  = '3000';
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('foto_upload')){
                    $uploadData = $this->upload->data();
                    $foto_upload = $uploadData['file_name'];
                }else{
                    $foto_upload = '';
                }
            }else{
                $foto_upload = '';
            }
            

        $data = array(
        'kd_buku'  => $this->input->post('kd_buku'),
        'judul_buku' => $this->input->post('judul_buku'),
        'pengarang_buku'  => $this->input->post('pengarang_buku'),
        'thn_terbit' => $this->input->post('thn_terbit'),
        'penerbit_buku' => $this->input->post('penerbit_buku'),
        'foto_upload' => $foto_upload
        );
        $this->Model_buku->save('buku',$data);
        redirect(base_url().'Buku');
      }
    }

    function edit_buku()
    {
      $data['buku'] = $this->Model_buku->tampil_edit_buku($this->uri->segment(3))->row_array();
      $this->template->load('template/main','edit_buku',$data);
    }

    function aksi_edit_buku()
    {
      if($this->input->post('simpan')){
      
        //if(!empty($_FILES['foto_upload']['name'])){
                $config['upload_path'] = 'assets/image/upload/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['foto_upload']['name'];
                $config['max_size'] = '1000';
          $config['max_width']  = '3000';
          $config['max_height']  = '3000';
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('foto_upload')){
                    $uploadData = $this->upload->data();
                    $foto_upload = $uploadData['file_name'];
                }else{
                    $foto_upload = '';
                }
           // }else{
            //    $foto_upload = '';
           // }

      $data = array(
      'kd_buku'  => $this->input->post('kd_buku'),
      'judul_buku' => $this->input->post('judul_buku'),
      'pengarang_buku'  => $this->input->post('pengarang_buku'),
      'thn_terbit' => $this->input->post('thn_terbit'),
      'penerbit_buku' => $this->input->post('penerbit_buku'),
      'foto_upload' => $foto_upload
      );
      $id=$this->input->post('kd_buku');
      $this->Model_buku->save_update('buku',$id,$data);
      redirect(base_url().'Buku');
    }
  }
    
    function tampil_buku()
    {
      if(isset($_POST['submit'])) {
        $this->Model_buku->tambah_buku();
        redirect('buku');
      }
    } 

    function hapus_buku($kd_buku)
    {
      $kd_buku=$this->uri->segment(3);
      $this->Model_buku->hapus_buku('buku',$kd_buku);  //anggota nama table
      redirect('buku');
    }
}