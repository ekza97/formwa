<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('auth_m');
	}
	
	public function index() {
		$data = array(
			'title' => "Ecommerce Dashboard",
			'content'=>'dashboard',
			'dashboard'=>true
		);
		$this->load->view('index', $data);
	}

	public function update()
	{
		$data = [
			"fullname"=>$this->input->post('fullname', true),
			"email"=>$this->input->post('email', true),
			"contact"=>$this->input->post('contact', true)
		];
		$this->auth_m->updateUser($data,$this->input->post('id',true));
		redirect(base_url('dashboard'));
	}

	public function ceklink($link)
	{
		$tes = $this->db->get_where('users',['link'=>$link])->row_array();
	}
}