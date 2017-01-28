<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

Public function index()
{
	$this->load->view('login');
}

Public function do_login()
{
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$cek_uname = get_by('username',$username,'user')->num_rows();
	if($cek_uname > 0){
		if (cek_auth($username, $password)) {
			$user_id = dapatkan_id($username);
			$user    = dapatkan_pengguna($user_id);
		}
		if (isset($user->id)) {
			$this->session->set_userdata('id',$user->id);
			redirect('user');
		}else{
			echo "Gagal 1";
			// redirect('login');
		}
	}else{
		echo "Gagal 2";
		//redirect('login');
	}
}

Public function logout()
{
	$this->session->unset_userdata('id');
	redirect('login');
}
}