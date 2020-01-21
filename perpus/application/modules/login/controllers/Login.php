<?php
 
class Login extends MX_Controller{
 
    function __construct(){     //proses awal dalam mempersiapkan objek
        parent::__construct();     
        $this->load->model('Model_login');
 
    }
 
    function index(){
        $this->template->load('template/loginn','login');
    }
 
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $cek = $this->Model_login->cek_login("login",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session); //mengeset data dari session dengan data dari array
 
            redirect(base_url('dashboard'));
 
        }else{
            echo "Username dan password salah !";
        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}