<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mgedung extends CI_Model {
 
	 
	public function ambilGedung()
	{
		$query=$this->db->query('select * from gedung');
		return $query->result();
	}
	
	public function simpanGedung($idgedung,$photo)
	{
		if($idgedung!=""){
			
			$this->db->where('idgedung',$idgedung);
			$this->db->set('photo',$photo);
			$this->db->update('gedung',$this->input->post());
			
			
			} else {
			$this->db->set('photo',$photo);
			$this->db->insert('gedung',$this->input->post());
		}
	}
	
	public function edit_gedung($id)
	{
		$this->db->where('idgedung',$id);
		$query = $this->db->get('gedung');
		return $query->row();
	}
	
	public function deleteGedung($id)
	{
		$this->db->where('idgedung',$id);
		$this->db->delete('gedung');
	}
}