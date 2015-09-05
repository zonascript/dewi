<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Morder extends CI_Model {
 
	 
	public function ambilUndangan()
	{
		$query=$this->db->query('select * from gedung');
		return $query->result();
	}

	public function ambilOrder()
	{
		$query=$this->db->query('select * from ');
		return $query->result();
	}
	
	public function ambilhargagedung($idgedung)
	{
		$this->db->where('idgedung', $idgedung);
		$result=$this->db->get('gedung');
		if($result->num_rows()>0){
			return $result->result_array();

		}else{
			return array();
		}
	}
	
	public function simpanOrder($idkatering,$tanggal,$idsalon,$iddekorasi,$idgedung,$idundangan,$time,$bayarawal)
	{

			$data=array(
				'id_user' => $this->session->userdata('id'),
				'tgldipakai' => $tanggal,
				'jamdipakai' => $time,
				'idgedung' => $idgedung,
				'idkatering' => $idkatering,
				'total' => $this->input->post('total'),
				'idsalon' => $idsalon,
				'iddekorasi' => $iddekorasi,
				'idundangan' => $idundangan,
				'jmlbayar_awal' => $bayarawal,

				);
				
			$this->db->insert('pemesanan',$data);		
	
	}
	public function simpanedit($id,$bayarakhir)
	{
		$data=array(
			
				'id' => $id,
				'jmlbayar_akhir' => $bayarakhir,
				'status'	=> 'lunas'
				);
		if($id!=""){
			
			$this->db->where('id',$id);
			$this->db->update('pemesanan',$data);
			
			}
			
	}
	 public function ambil($id)
	 {
	 	$this->db->where('id',$id);
		$query = $this->db->get('pemesanan');
	 	return $query->row();
	 }
	
	// public function deleteUndangan($id)
	// {
	// 	$this->db->where('idundangan',$id);
	// 	$this->db->delete('undangan');
	// }

	public function ambilundangans(){
		$query = $this->db->query('select * from undangan');
		return $query->result();
	}

	public function ambildekorasi(){
		$query = $this->db->query('select * from dekorasi');
		return $query->result();
	}

	public function ambilkatering(){
		$query = $this->db->query('select * from katerinng');
		return $query->result();
	}

	public function ambilsalon(){
		$query = $this->db->query('select * from salon');
		return $query->result();
	}
		public function ambilgedung(){
		$query = $this->db->query('select * from gedung');
		return $query->result();
	}
}