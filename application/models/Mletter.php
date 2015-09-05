<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mletter extends CI_Model {
 
	 
	/*public function ambilLetter()
	{
		$query=$this->db->query('select a.*,b.tgldipakai as tgl,b.jamdipakai as jam from pemesanan a join undangan b on (a.id=b.id)');
		return $query->result();
	}*/
	public function ambilLetter()
	{
		$query=$this->db->query('select * from undangan');
		return $query->result();
	}
	public function gold()
	{
		$query=$this->db->query('select * from undangan where jenis="gold"');
		return $query->result();
	}
	public function silver()
	{
		$query=$this->db->query('select * from undangan where jenis="silver"');
		return $query->result();
	}
	public function bronze()
	{
		$query=$this->db->query('select * from undangan where jenis="bronze"');
		return $query->result();
	}
	function getJenisList($jenis){

		$query=$this->db->query('select * from undangan where jenis="$jenis" ');
		return $query->result();
		
		}
	public function ambilDetail($id)
	{
	$this->db->where('idundangan',$id);
		$query = $this->db->get('undangan');
		return $query->result();
	}
}