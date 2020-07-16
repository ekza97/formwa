<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order_m extends CI_Model {

    public function getAllOrders($id)
    {
        return $this->db->get('orders',['idorders'=>$id])->result_array();
    }

    public function getWhatsappAdmin($id)
    {
        $wa = $this->db->select('contact')
        ->get_where('users',['idusers'=>$id])->row_array();
        return $wa['contact'];
    }

    public function orderProcess($data)
    {
        $this->db->insert('orders',$data);
    }

}

/* End of file Order_m.php */