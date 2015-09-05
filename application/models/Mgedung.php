<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mgedung extends CI_Model {
 
	 
	public function ambilGedung()
	{
		$query=$this->db->query('select * from gedung');
		return $query->result();
	}
	public function gold()
	{
		$query=$this->db->query('select * from gedung where jenis="gold"');
		return $query->result();
	}
	public function silver()
	{
		$query=$this->db->query('select * from gedung where jenis="silver"');
		return $query->result();
	}
	public function bronze()
	{
		$query=$this->db->query('select * from gedung where jenis="bronze"');
		return $query->result();
	}
	function getJenisList($jenis){

		$query=$this->db->query('select * from gedung where jenis="$jenis" ');
		return $query->result();
		
		}
		public function ambilDetail($id)
	{
	$this->db->where('idgedung',$id);
		$query = $this->db->get('gedung');
		return $query->result();
	}
	
}