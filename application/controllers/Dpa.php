<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dpa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$select = 'mahasiswa.*,dosen.id,dosen.nama as namadosen';
		$param1 = 'dosen.id=mahasiswa.dpa';
		$data['dpa'] = join_table($select,'dosen',$param1,'mahasiswa')->result();
		$this->load->view('dpa',$data);
	}


	function join_table($select,$tabel1,$param1,$get){
	$CI =& get_instance();
	$CI->db->select($select);
	$CI->db->join($tabel1,$param1,'left');
	return $CI->db->get($get);
}
}

/* End of file Dpa.php */
/* Location: ./application/controllers/Dpa.php */
