<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['dosen'] = get_data_order('id','asc','dosen')->result();
		$this->load->view('dosen',$data);
	}

	public function add()
	{
		$this->load->view('tambah-dosen');
	}

	public function save()
	{
		$data = array
		(
			'nip' 		=> $this->input->post('nip'),
			'nama'		=> $this->input->post('nama'),
			'matkul'	=> $this->input->post('matkul')
			);
		$success = save_data($data,'dosen');
		if ($success) {
			redirect('dosen');
		}
	}

	public function edit($id)
	{
		$data['dosen'] = get_by('id',$id,'dosen')->row();
		$this->load->view('edit-dosen',$data);
	}

	public function update_data($id)
	{
		$data = array
		(
			'nip' 	=> $this->input->post('nip'),
			'nama'	=> $this->input->post('nama'),
			'matkul'=> $this->input->post('matkul')
		);
		$success = update_data('id',$id,'dosen',$data);
		if ($success) {
			redirect('dosen');
		}
	}

	public function delete($id)
	{
		$success = delete_data('id',$id,'dosen');
		if ($success) {
			redirect('dosen');
		}
	}

}

/* End of file Dosen.php */
/* Location: ./application/controllers/Dosen.php */