<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mhome extends CI_Model {
 
	 
	public function ambilpaket()
	{
		$query=$this->db->query('select * from dekorasi');
		return $query->result();
	}
	
	
}