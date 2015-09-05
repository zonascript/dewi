<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mmakeup extends CI_Model {
 
	 
	public function ambilMakeup()
	{
		$query=$this->db->query('select * from salon');
		return $query->result();
	}
	public function gold()
	{
		$query=$this->db->query('select * from salon where jenis="gold"');
		return $query->result();
	}
	public function silver()
	{
		$query=$this->db->query('select * from salon where jenis="silver"');
		return $query->result();
	}
	public function bronze()
	{
		$query=$this->db->query('select * from salon where jenis="bronze"');
		return $query->result();
	}
	function getJenisList($jenis){

		$query=$this->db->query('select * from salon where jenis="$jenis" ');
		return $query->result();
		
		}
		public function ambilDetail($id)
	{
	$this->db->where('idsalon',$id);
		$query = $this->db->get('salon');
		return $query->result();
	}
	
}