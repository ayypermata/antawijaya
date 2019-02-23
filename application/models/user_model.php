<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
	
	public function check_credential()
	{
		$username = set_value('username');
		$password = set_value('password');
		
		$hasil = $this->db->where('username',$username)
		->where('password',$password)
		->limit(1)
		->get('users');
		
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return array();
		}
	}

	public function check_user($data = array()){
		$hasil = $this->db->where(array('email' => $data['email']))
		->limit(1)
		->get('users');
		
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return array();
		}
    }

    public function find_email($email)
	{
		$hasil = $this->db->where('email',$email)
		->limit(1)
		->get('users');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}

	public function get_user_id()
	{
		$hasil=$this->db->query("SELECT MAX(RIGHT(id,5)) AS kode_max FROM users");
		$kode = "";
		if($hasil->num_rows() > 0){
			foreach($hasil->result() as $kd){
                $tmp = ((int)$kd->kode_max)+1;
                $kode = sprintf("%05s", $tmp);
            }
		}else{
			$kode = "00001";
		}

		$karakter = "USR";
		return $karakter.$kode;
	}
	
	public function register($user_data)
	{
		$this->db->insert('users',$user_data);
	}

	public function get_province()
	{
		$this->db->order_by('name','ASC');
		$hasil=$this->db->get('provinces');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}

	public function get_regency($province_id)
	{
		$regency="<option value='0'>--Pilih Kabupaten/Kota--</option>";
		$this->db->order_by('name','ASC');
		$hasil= $this->db->get_where('regencies',array('province_id'=>$province_id));
		foreach ($hasil->result_array() as $data ) {
			$regency.= "<option value='$data[id]'>$data[name]</option>";
		}
		return $regency;
	}	

	public function get_district($regency_id)
	{
		$district="<option value='0'>--Pilih Kecamatan--</option>";
		$this->db->order_by('name','ASC');
		$hasil= $this->db->get_where('districts',array('regency_id'=>$regency_id));
		foreach ($hasil->result_array() as $data ) {
			$district.= "<option value='$data[id]'>$data[name]</option>";
		}
		return $district;
	}	
	
	public function get_user()
	{
		$hasil=$this->db->get('users');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
	
	public function find($id)
	{
		$hasil = $this->db->where('id',$id)
		->limit(1)
		->get('users');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return array();
		}
	}

	public function detail($id)
	{
		$hasil = $this->db->where('id',$id)
		->limit(1)
		->get('users');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return array();
		}
	}
	
	public function insert($user_data)
	{
		$this->db->insert('users',$user_data);
	}
	
	public function update($id, $user_data)
	{
		$this->db->where('id',$id)
		->update('users',$user_data);	
	}
	
	public function delete($id)
	{
		$this->db->where('id',$id)
		->delete('users');
	}
}