<?php

function hash_password($password)
{
	return password_hash($password, PASSWORD_BCRYPT);
}
function verify_password_hash($password, $hash)
{
	return password_verify($password, $hash);
}

function cek_auth($username, $password)
{
	$CI     = get_instance();
	$CI->db->select('password');
	$CI->db->from('user');
	$CI->db->where('username', $username);
	$hash = $CI->db->get()->row('password');
	return verify_password_hash($password, $hash);
}

function dapatkan_id($username)
{
	$CI     = get_instance();
	$CI->db->select('id');
	$CI->db->from('user');
	$CI->db->where('username', $username);
	return $CI->db->get()->row('id');
}

function dapatkan_pengguna($user_id)
{
	$CI     = get_instance();
	$CI->db->from('user');
	$CI->db->where('id', $user_id);
	return $CI->db->get()->row();
}

function cek_session()
{
	$CI =& get_instance();
	$cek = $CI->session->userdata('id');
	if ($cek==NULL) {
		redirect('login');
	}
}