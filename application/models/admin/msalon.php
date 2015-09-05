<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class msalon extends CI_Model {
 
	 
	public function ambilSalon()
	{
		$query=$this->db->query('select * from salon');
		return $query->result();
	}
	
	public function simpanSalon($idsalon,$photo)
	{
		if($idsalon!=""){
			
			$this->db->where('idsalon',$idsalon);
			$data	=	array(
				'harga'	=> $this->input->post('harga'),
				'alamat'	=> $this->input->post('alamat'),
				'jenis'	=> $this->input->post('jenis'),
				'photo'	=> $photo,
				'cp'	=> $this->input->post('cp'),
				'nama'	=> $this->input->post('nama'),
				'deskripsi'	=> $this->input->post('deskripsi')
			);
			$this->db->update('salon',$data);
			
			
			} else {
			
			$data	=	array(
				'harga'	=> $this->input->post('harga'),
				'alamat'	=> $this->input->post('alamat'),
				'jenis'	=> $this->input->post('jenis'),
				'photo'	=> $photo,
				'cp'	=> $this->input->post('cp'),
				'nama'	=> $this->input->post('nama'),
				'deskripsi'	=> $this->input->post('deskripsi')
			);
			$this->db->insert('salon',$data);
		}
	}
	
	public function edit_salon($id)
	{
		$this->db->where('idsalon',$id);
		$query = $this->db->get('salon');
		return $query->row();
	}
	
	public function deleteSalon($id)
	{
		$this->db->where('idsalon',$id);
		$this->db->delete('salon');
	}
}