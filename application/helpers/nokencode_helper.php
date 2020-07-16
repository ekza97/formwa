<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
* get __session
* @param String $session_key
* @return Any
*/
if ( ! function_exists('__session')) {
	function __session( $session_key ) {
		$CI = &get_instance();
		return $CI->session->userdata( $session_key );
	}
}

/**
* Chechk User
* @param String
* @return Array
*/
if (!function_exists('chechk_user')){
	function check_user($user){
		$CI =& get_instance();
		return $CI->db->get_where('users',['username'=>$user])->num_rows();
	}
}
/**
* User
* @param String
* @return Array
*/
if (!function_exists('user')){
	function user($id){
		$CI =& get_instance();
		return $CI->db->get_where('users',['idusers'=>$id])->row();
	}
}
/**
* Session login 
* @param String
* @return Boolean
*/
function is_logged_in()
{
	$ci =& get_instance();
	if (!$ci->session->userdata('username')) {
		redirect(base_url('auth/login'));
	}else{
		$access = $ci->session->userdata('access');
	}
}
/**
* Session logout
* @param String
* @return Boolean
*/
function is_logged_out()
{
	$ci =& get_instance();
	if ($ci->session->userdata('username')) {
		redirect(base_url('dashboard'));
	}else{
		$access = $ci->session->userdata('access');
	}
}
/**
* Is a Natural number, but not a zero  (1,2,3, etc.)
* @param String $n
* @return Boolean
*/
if ( ! function_exists('_isNaturalNumber')) {
	function _isNaturalNumber( $n ) {
		return ($n != 0 && ctype_digit((string) $n));
	}
}

/**
* Is Integer
* @param String $n
* @return Boolean
*/
if ( ! function_exists('_toInteger')) {
	function _toInteger( $n ) {
		$n = abs(intval(strval($n)));
		return $n;
	}
}