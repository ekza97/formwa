<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_m');
    }
    
    public function index()
    {
        $data = [
            "title"=>"Halaman Register"
        ];
        $this->load->view('auth/register',$data);
    }
    public function process()
    {
        $this->form_validation
        ->set_rules('username', 'Username', 'min_length[6]|is_unique[users.username]')
        ->set_rules('password', 'Password','min_length[6]');
        $data = [
            "fullname"=>$this->input->post('fullname', true),
            "email"=>$this->input->post('email', true),
            "contact"=>$this->input->post('contact', true),
            "username"=>$this->input->post('username', true),
            "password"=>password_hash($this->input->post('password', true),PASSWORD_DEFAULT),
            "link"=>random_string('alnum',5),
            "type"=>'member',
            "is_active"=>1
        ];
        if($this->form_validation->run() == TRUE){
            $this->auth_m->createAccount($data);
            redirect(base_url('auth/login'));
        }else{
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url('auth/register'));
        }
    }

}

/* End of file Register.php */