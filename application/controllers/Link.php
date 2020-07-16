<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('order_m');
    }
    
    public function index($link)
    {
        $userId = $this->db->select('idusers')
        ->get_where('users',['link'=>$link])->row_array();
        $url = base_url('link/form/').enc_url($userId['idusers']);
        // var_dump($url);die;
        redirect($url);
        
    }

    public function form($id)
    {
        $id = dec_url($id);
        $data = [
            "title"=>"Form Order via Whatsapp"
        ];
        $this->load->view('form_order',$data);
    }

    public function order()
    {
        $data = [
            "fullname"=>$this->input->post('fullname', true),
            "contact"=>$this->input->post('contact', true),
            "date_birth"=>$this->input->post('date_birth', true),
            "email"=>$this->input->post('email', true),
            "area"=>$this->input->post('area', true),
            "users_id"=>dec_url($this->input->post('users_id', true))
        ];
        $this->order_m->orderProcess($data);
        $wa_admin = substr_replace($this->order_m->getWhatsappAdmin($data['users_id']),"62",0,1);
        $url = "https://wa.me/".$wa_admin."?text=Assalamualaikum%2C%0A%2ANama%2A%3A%20".$data['fullname']."%0A%2ANo.%20HP%2A%20%3A%20".$data['contact']."%0A%2ATgl%20Lahir%2A%20%3A%20".$data['date_birth']."%0A%2AEmail%2A%20%3A%20".$data['email']."%0A%2ADaerah%2A%20%3A%20".$data['area']."";
        redirect($url,'location');
    }
}

/* End of file Link.php */