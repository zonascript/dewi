<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdekorasi extends CI_Model {
 
	 
	public function ambilDekorasi()
	{
		$query=$this->db->query('select * from dekorasi');
		return $query->result();
	}
	
	public function simpanDekorasi($iddekorasi,$photo)
	{
		if($iddekorasi!=""){
			
			$this->db->where('iddekorasi',$iddekorasi);
			$data = array(
				'photo'	=> $photo,
				'harga'	=>	$this->input->post('harga'),
				'alamat'	=>	$this->input->post('alamat'),
				'jenis'	=>	$this->input->post('jenis'),
				'cp'	=>	$this->input->post('cp'),
				'nama'	=>	$this->input->post('nama'),
				'deskripsi'	=>	$this->input->post('deskripsi')
			);
			$this->db->update('dekorasi',$data);
			
			
			} else {
			//$this->db->set('photo',$photo);
			$data = array(
				'photo'	=> $photo,
				'harga'	=>	$this->input->post('harga'),
				'alamat'	=>	$this->input->post('alamat'),
				'jenis'	=>	$this->input->post('jenis'),
				'cp'	=>	$this->input->post('cp'),
				'nama'	=>	$this->input->post('nama'),
				'deskripsi'	=>	$this->input->post('deskripsi')
			);
			$this->db->insert('dekorasi',$data);
		}
	}
	
	public function edit_dekorasi($id)
	{
		$this->db->where('iddekorasi',$id);
		$query = $this->db->get('dekorasi');
		return $query->row();
	}
	
	public function deletedekorasi($id)
	{
		$this->db->where('iddekorasi',$id);
		$this->db->delete('dekorasi');
	}
}