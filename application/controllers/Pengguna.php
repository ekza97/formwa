<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if(user(__session('iduser'))->type!='super_user'){
            redirect(base_url('dashboard'));
        }
        $this->load->model('auth_m');
    }
    
    public function index()
    {
        $data = array(
            'title' => "Pengguna",
            'content'=>'list_users',
            'pengguna'=>true,
            'users'=>$this->auth_m->getAllUsers()
        );
        $this->load->view('index', $data);
    }

}

/* End of file Pengguna.php */