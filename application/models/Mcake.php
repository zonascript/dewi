<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mcake extends CI_Model {
 
	 
	public function ambilCake()
	{
		$query=$this->db->query('select * from katerinng');
		return $query->result();
	}
	public function gold()
	{
		$query=$this->db->query('select * from katerinng where jenis="gold"');
		return $query->result();
	}
	public function silver()
	{
		$query=$this->db->query('select * from katerinng where jenis="silver"');
		return $query->result();
	}
	public function bronze()
	{
		$query=$this->db->query('select * from katerinng where jenis="bronze"');
		return $query->result();
	}
	function getJenisList($jenis){

		$query=$this->db->query('select * from katerinng where jenis="$jenis" ');
		return $query->result();
		
		}
	public function ambilDetail($id)
	{
	$this->db->where('idkatering',$id);
		$query = $this->db->get('katerinng');
		return $query->result();
	}
	
}