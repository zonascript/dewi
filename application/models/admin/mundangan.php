<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mundangan extends CI_Model {
 
	 
	public function ambilUndangan()
	{
		$query=$this->db->query('select * from undangan');
		return $query->result();
	}
	
	public function simpanUndangan($idundangan,$photo)
	{
		if($idundangan==""){
			$data = array(
				'alamat'	=>	$this->input->post('alamat'),
				'nama'	=>	$this->input->post('nama'),
				'harga'	=>	$this->input->post('harga'),
				'jenis'	=>	$this->input->post('jenis'),
				'cp'	=>	$this->input->post('cp'),
				'dskripsi'	=>	$this->input->post('dskripsi'),
				'photo'	=>	$photo,
			);
			$this->db->insert('undangan',$data);
		
			
			
			} else {
				$this->db->where('idundangan',$idundangan);
			$data = array(
				'alamat'	=>	$this->input->post('alamat'),
				'nama'	=>	$this->input->post('nama'),
				'harga'	=>	$this->input->post('harga'),
				'jenis'	=>	$this->input->post('jenis'),
				'cp'	=>	$this->input->post('cp'),
				'dskripsi'	=>	$this->input->post('dskripsi'),
				'photo'	=>	$photo,
			);
			$this->db->update('undangan',$data);
		}
	}
	public function getUndangan()
	{
		return $this->db->query("select t.idundangan, t.nama from undangan t
								where t.idundangan not in (
								select idundangan from undangan where idundangan = t.idundangan)")->result();
	}
	public function edit_undangan($id)
	{
		$this->db->where('idundangan',$id);
		$query = $this->db->get('undangan');
		return $query->row();
	}
	
	public function deleteUndangan($id)
	{
		$this->db->where('idundangan',$id);
		$this->db->delete('undangan');
	}
}