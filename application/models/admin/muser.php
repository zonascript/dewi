<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class muser extends CI_Model {
 
	 
	public function ambilUser()
	{
		$query=$this->db->query('select * from user where user_tipe="user"');
		return $query->result();
	}
	
	
	public function deleteUser($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('user');
	}
}