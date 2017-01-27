<?php 
function get_data($table){
	$CI =& get_instance();
	return $CI ->db->get($table);
}

function save_data($data,$table){
	$CI =& get_instance();
	return $CI->db->insert($table,$data);
}

function get_by($id,$kode,$table){
	$CI =& get_instance();
	$CI->db->where($id,$kode);
	return $CI->db->get($table);
}

function update_data($id,$kode,$table,$data){
	$CI =& get_instance();
	$CI->db->where($id,$kode);
	return $CI->db->update($table,$data);
}

function delete_data($id,$kode,$table){
	$CI =& get_instance();
	$CI->db->where($id,$kode);
	return $CI->db->delete($table);
}

function get_data_order($id,$status,$table){
	$CI =& get_instance();
	$CI->db->order_by($id,$status);
	return $CI ->db->get($table);
}

function join_table($select,$tabel1,$param1,$get){
	$CI =& get_instance();
	$CI->db->select($select);
	$CI->db->join($tabel1,$param1,'left');
	return $CI->db->get($get);
}