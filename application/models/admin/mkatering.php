<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mkatering extends CI_Model {
 
	 
	public function ambilKatering()
	{
		$query=$this->db->query('select * from katerinng');
		return $query->result();
	}
	
	public function simpanKatering($idkatering,$photo)
	{
		if($idkatering!=""){
			
			$this->db->where('idkatering',$idkatering);
			$this->db->set('photo',$photo);
			$this->db->update('katerinng',$this->input->post());
			
			
			} else {
			$this->db->set('photo',$photo);
			
			$this->db->insert('katerinng',$this->input->post());
		}
	}
	
	public function edit_katering($id)
	{
		$this->db->where('idkatering',$id);
		$query = $this->db->get('katerinng');
		return $query->row();
	}
	
	public function deleteKatering($id)
	{
		$this->db->where('idkatering',$id);
		$this->db->delete('katerinng');
	}
}