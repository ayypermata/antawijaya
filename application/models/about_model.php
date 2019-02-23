<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class about_model extends CI_Model {

	// public function get_about_id()
	// {
	// 	$hasil=$this->db->query("SELECT MAX(RIGHT(id,5)) AS kode_max FROM about");
	// 	$kode = "";
	// 	if($hasil->num_rows() > 0){
	// 		foreach($hasil->result() as $kd){
 //                $tmp = ((int)$kd->kode_max)+1;
 //                $kode = sprintf("%05s", $tmp);
 //            }
	// 	}else{
	// 		$kode = "00001";
	// 	}

	// 	$karakter = "ABT";
	// 	return $karakter.$kode;
	// }
	
	// public function get_about()
	// {
	// 	$hasil=$this->db->get('about');
	// 	$hasil=$this->db->where('jenis = "Profil"');
	// 	if($hasil->num_rows() > 0){
	// 		return $hasil->result();
	// 	}else{
	// 		return false;
	// 	}
	// }
	
	// ambil data dari databse , tabel about dengan jenis Profil
    public function get_about()
    {
    $this->db->select('*');
    $this->db->from('about');
    $this->db->where('jenis ="Profil"');
    $query = $this->db->get();
    return $query->result(); 
    }

	// public function find($id)
	// {
	// 	$hasil = $this->db->where('id_about',$id)
	// 	->limit(1)
	// 	->get('about');
	// 	if($hasil->num_rows() > 0){
	// 		return $hasil->row();
	// 	}else{
	// 		return array();
	// 	}
	// }

	// public function detail($id)
	// {
	// 	$hasil = $this->db->where('id_about',$id)
	// 	->limit(1)
	// 	->get('about');
	// 	if($hasil->num_rows() > 0){
	// 		return $hasil->result();
	// 	}else{
	// 		return array();
	// 	}
	// }
	
	// public function insert($about_data)
	// {
	// 	$this->db->insert('about',$about_data);
	// }
	
	// public function update($id, $about_data)
	// {
	// 	$this->db->where('id_about',$id)
	// 	->update('about',$about_data);	
	// }
	
	// public function delete($id)
	// {
	// 	$this->db->where('id_about',$id)
	// 	->delete('about');
	// }
}