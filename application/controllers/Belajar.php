<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Belajar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['mahasiswa'] = get_data('mahasiswa')->result();
		$this->load->view('belajar',$data);
	}

	public function add()
	{
		$this->load->view('add');
	}

	public function save()
	{
		$data = array(
			'nim' 		=> $this->input->post('nim'),
			'nama'		=> $this->input->post('nama'),
			'semester'	=> $this->input->post('semester')
			);
		$success = save_data($data,'mahasiswa');
		if ($success) {
			redirect('belajar');
		}
	}

	public function edit($id)
	{
		$data['mahasiswa'] = get_by('id',$id,'mahasiswa')->row();
		$this->load->view('edit',$data);
	}

	public function update_data($id)
	{
		$data = array(
			'nim' 		=> $this->input->post('nim'),
			'nama'		=> $this->input->post('nama'),
			'semester'	=> $this->input->post('semester')
			);
		$success = update_data('id',$id,'mahasiswa',$data);
		if ($success) {
			redirect('belajar');
		}
	}

	public function delete($id)
	{
		$success = delete_data('id',$id,'mahasiswa');
		if ($success) {
			redirect('belajar');
		}
	}

}

/* End of file Belajar.php */
/* Location: ./application/controllers/Belajar.php */