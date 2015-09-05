<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mpemesanan extends CI_Model {
 
	 
	public function ambilPesanan()
	{
		$query=$this->db->query('select a.*,b.nama as nama_undangan,c.nama as nama_dekorasi,d.nama as nama_salon,e.nama as nama_katering,f.nama as nama_gedung , g.username from pemesanan a
			join undangan b
			on (a.idundangan=b.idundangan)
				join dekorasi c
				on (a.iddekorasi=c.iddekorasi)
					join salon d
					on (a.idsalon=d.idsalon)
					join katerinng e
					on (a.idkatering=e.idkatering)
					join gedung f
					on (a.idgedung=f.idgedung)
					join user g
					on(a.id_user=g.id)');
		return $query->result();
	}
	
	public function ambilPesananReport()
	{
		$query=$this->db->query('select g.username , a.tgldipakai, f.nama as nama_gedung,b.nama as nama_undangan,d.nama as nama_salon,e.nama as nama_katering, c.nama as nama_dekorasi, a.tglbayar_awal, a.jmlbayar_awal, a.jmlbayar_awal, a.total, a.status ,a.jamdipakai from pemesanan a
			join undangan b
			on (a.idundangan=b.idundangan)
				join dekorasi c
				on (a.iddekorasi=c.iddekorasi)
					join salon d
					on (a.idsalon=d.idsalon)
					join katerinng e
					on (a.idkatering=e.idkatering)
					join gedung f
					on (a.idgedung=f.idgedung)
					join user g
					on(a.id_user=g.id)');
		return $query;
	}
	
	
	
	
		public function edit_pesanan($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('pemesanan');
		return $query->row();
	}
	public function deletePemesanan($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('pemesanan');
	}
	
	public function approvePemesanan($id)
	{
		$this->db->where('id',$id);
		$data=array(
			'status'	=> 'approve'
		);
		$this->db->update('pemesanan',$data);
	}
	
	public function notif($id,$text)
	{
		$data = array(
		'id_user'	=> $id,
		'text'		=> $text
		);
		
		$this->db->insert('notif',$data);
	}
	
public function simpanedit($id,$status)
	{
	$data=array(
			
				'id' => $id,
				'status' => $status,

				);
		if($id!=""){
			
			$this->db->where('id',$id);
			$this->db->update('pemesanan',$data);
			
			}
			
	}
}