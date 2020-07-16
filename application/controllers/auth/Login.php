<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        is_logged_out();
        $this->load->model('auth_m');
    }
    
    public function index()
    {
        $data = [
            "title"=>"Halaman Login"
        ];
        $this->load->view('auth/login',$data);
    }

    public function process()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $userData = $this->auth_m->checkUsername($username);

        if(isset($userData)){
            if(password_verify($password, $userData['password'])){
                $sessionData = [
                    "iduser"=>$userData['idusers'],
                    "fullname"=>$userData['fullname'],
                    "email"=>$userData['email'],
                    "username"=>$userData['username']
                ];
                $this->session->set_userdata($sessionData);
                redirect(base_url('dashboard'));
            }else{
                $this->session->set_flashdata('error','Maaf password yang anda masukkan salah !');
            }
        }else{
            $this->session->set_flashdata('error','Maaf username yang anda masukkan salah !');
        }
        redirect(base_url('auth/login'));
    }

}

/* End of file Login.php */