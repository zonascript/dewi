<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mvenue extends CI_Model {
 
	 
	public function ambilVenue()
	{
		$query=$this->db->query('select * from dekorasi');
		return $query->result();
	}
	public function gold()
	{
		$query=$this->db->query('select * from dekorasi where jenis="gold"');
		return $query->result();
	}
	public function silver()
	{
		$query=$this->db->query('select * from dekorasi where jenis="silver"');
		return $query->result();
	}
	public function bronze()
	{
		$query=$this->db->query('select * from dekorasi where jenis="bronze"');
		return $query->result();
	}
	function getJenisList($jenis){

		$query=$this->db->query('select * from dekorasi where jenis="$jenis" ');
		return $query->result();
		
		}
	public function ambilDetail($id)
	{
	$this->db->where('iddekorasi',$id);
$query = $this->db->get('dekorasi');
		return $query->result();
	}
	
}