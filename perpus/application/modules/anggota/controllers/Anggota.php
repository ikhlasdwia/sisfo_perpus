<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Anggota extends CI_Controller{  //pertamakali di jalankan, mengaktifkan model

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_anggota');
    }

    public function index()
    {
      $data['anggota'] = $this->Model_anggota->tampil_anggota();
      $this->template->load('template/main','anggota',$data);
    }

    function tambah_anggota()
    {
      $this->template->load('template/main','tambah_anggota');
    }

    function aksi_tambah_anggota()
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
        'id_anggota'  => $this->input->post('id_anggota'),
        'nama_anggota' => $this->input->post('nama_anggota'),
        'jk_anggota'  => $this->input->post('jk_anggota'),
        'fak_anggota' => $this->input->post('fak_anggota'),
        'alamat_anggota' => $this->input->post('alamat_anggota'),
        'foto_upload' => $foto_upload
        );
        $this->Model_anggota->save('anggota',$data);
        redirect(base_url().'Anggota');
      }
    }

    function edit_anggota()
    {
      $data['anggota'] = $this->Model_anggota->tampil_edit_anggota($this->uri->segment(3))->row_array();
      $this->template->load('template/main','edit_anggota',$data);
    }

    function aksi_edit_anggota()
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
            //}else{
                //$foto_upload = '';
            //}
      
      $data = array(
      'id_anggota'  => $this->input->post('id_anggota'),
      'nama_anggota' => $this->input->post('nama_anggota'),
      'jk_anggota'  => $this->input->post('jk_anggota'),
      'fak_anggota' => $this->input->post('fak_anggota'),
      'alamat_anggota' => $this->input->post('alamat_anggota'),
    );
      $id=$this->input->post('id_anggota');
      $this->Model_anggota->save_update('anggota',$id,$data);
      redirect(base_url().'Anggota');
    }
  }

    function tampil_anggota()
    {
      if(isset($_POST['submit'])) {
        $this->Model_anggota->tambah_anggota();
        redirect('anggota');
      }
    }

    function hapus_anggota($id_anggota)
    {
      $id_anggota=$this->uri->segment(3);
      $this->Model_anggota->hapus_anggota('anggota',$id_anggota);  //anggota nama table
      redirect('anggota');
    }
}