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
        // $fullname = $this->input->post('fullname', true);
        // $contact = $this->input->post('contact', true);
        // $date_birth = $this->input->post('date_birth', true);
        // $email = $this->input->post('email', true);
        // $province = $this->input->post('province', true);
        // $district = $this->input->post('district', true);
        // $sub_district = $this->input->post('sub_district', true);
        // $village = $this->input->post('village', true);
        // $address = $this->input->post('address', true);
        // $postal_code = $this->input->post('postal_code', true);
        // $user_id = $this->input->post('user_id', true);
        $data = [
            "fullname"=>$this->input->post('fullname', true),
            "contact"=>$this->input->post('contact', true),
            "date_birth"=>$this->input->post('date_birth', true),
            "email"=>$this->input->post('email', true),
            "province"=>$this->input->post('province', true),
            "district"=>$this->input->post('district', true),
            "sub_district"=>$this->input->post('sub_district', true),
            "village"=>$this->input->post('village', true),
            "address"=>$this->input->post('address', true),
            "postal_code"=>$this->input->post('postal_code', true),
            "users_id"=>dec_url($this->input->post('users_id', true))
        ];
        $this->order_m->orderProcess($data);
        $wa_admin = substr_replace($this->order_m->getWhatsappAdmin($data['users_id']),"62",0,1);
        $url = "https://wa.me/".$wa_admin."?text=Assalamualaikum%2C%0A%2ANama%2A%3A%20".$data['fullname']."%0A%2ANo.%20HP%2A%20%3A%20".$data['contact']."%0A%2ATgl%20Lahir%2A%20%3A%20".$data['date_birth']."%0A%2AEmail%2A%20%3A%20".$data['email']."%0A%2AProvinsi%2A%20%3A%20".$data['province']."%0A%2AKota%2FKabupaten%2A%20%3A%20".$data['district']."%0A%2AKecamatan%2A%20%3A%20".$data['sub_district']."%0A%2AKelurahan%2A%20%3A%20".$data['village']."%0A%2AAlamat%2A%20%3A%20".$data['address']."%0A%2AKode%20Pos%2A%20%3A%20".$data['postal_code']."";
        redirect($url,'location');
    }
}

/* End of file Link.php */