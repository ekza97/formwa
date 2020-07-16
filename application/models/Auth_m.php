<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model {

    public function createAccount($data)
    {
        $this->db->insert('users',$data);
    }

    public function checkUsername($username)
    {
        return $this->db->get_where('users',['username'=>$username])->row_array();
    }

    public function getAllUsers()
    {
        return $this->db->get('users')->result_array();
    }

    public function updateUser($data,$id)
    {
        $this->db->update('users',$data,['idusers'=>$id]);
    }

}

/* End of file Auth_m.php */