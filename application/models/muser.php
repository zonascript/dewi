<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class muser extends CI_Model {
 
	 
	public function ambiluser()
	{
		$query=$this->db->query('select * from user');
		return $query->result();
	}
	
	// public function simpanpetugas($id)
	// {
	
	// 	if(($_POST["captcha"] == $_SESSION["security_code"]) && (!empty($_POST["captcha"]) && !empty($_SESSION["security_code"]))){
	// 		$this->db->where('nip',$id);
	// 		$this->db->update('petugas',$this->input->post());
			
	// 		} else {
	// 		$this->db->insert('petugas',$this->input->post());
	// 	}
	// }
	
	// public function ambilpetugasEdit($id)
	// {
	// 	$this->db->where('nip',$id);
	// 	$query = $this->db->get('petugas');
	// 	return $query->row();
	// }
	
	// public function deletepetugas($id)
	// {
	// 	$this->db->where('nip',$id);
	// 	$this->db->delete('petugas');
	// }
	public function Daftar($username,$password,$nama,$alamat,$nohp,$email,$user_tipe)
	{

			$data=array(
				
				
			
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'alamat' => $alamat,
				'nohp' => $nohp,
				'email' => $email,
				'user_tipe' => $user_tipe,
				);
				
			$this->db->insert('user',$data);		
	
	}
	function cek_user($prm)
	{
		$this->db->where("username",$prm['username']);
		$this->db->where("password",$prm['password']);
		
		$query = $this->db->get("user");
		
		if($query->num_rows() > 0)
		{
		
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	function get_user_tipe($prm)
	{
		$this->db->where("username",$prm['username']);
		$this->db->where("password",$prm['password']);
		$query= $this->db->get("user");
		
		return $query->row()->user_tipe;
	}

	function get_user($username, $password)
	{
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query=$this->db->get('user');
		if($query -> num_rows() == 1){
			return $query->row();
		}else{
			return "";
		}
	}





	
	}
