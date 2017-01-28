<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cek_session();
	}

	public function index()
	{
		$data['user'] = get_data_order('id','asc','user')->result();
		$this->load->view('user',$data);
	}

	public function add()
	{
		$this->load->view('tambah-user');
	}

	public function save()
	{
		$data = array
		(
			'username' => $this->input->post('username'),
			'password' => hash_password($this->input->post('password'))
		);
		$success = save_data($data,'user');
		if ($success) {
			redirect('user');
		}
	}

	public function edit($id)
	{
		$data['user'] = get_by('id',$id,'user')->row();
		$this->load->view('edit-user',$data);
	}

	public function update_data($id)
	{
		$data = array 
		(
			'username' => $this->input->post('username'),
			'password'=> hash_password($this->input->post('password'))
		);
		$update = update_data('id',$id,'user',$data);
		if ($update) {
			redirect('user');
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
