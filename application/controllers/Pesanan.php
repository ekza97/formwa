<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('order_m');
    }
    
    public function index()
    {
        $data = array(
            'title' => "Daftar Pesanan",
            'content'=>'list_orders',
            'pesanan'=>true,
            'orders'=>$this->order_m->getAllOrders(__session('iduser'))
        );
        $this->load->view('index', $data);
    }

}

/* End of file Pesanan.php */