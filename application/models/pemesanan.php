<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pemesanan extends CI_Model {
 
	 
	public function ambilPesanan()
	{
		$query=$this->db->query("select a.*,b.nama as nama_undangan,c.nama as nama_dekorasi,d.nama as nama_salon,e.nama as nama_katering,f.nama as nama_gedung from pemesanan a
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
					on(a.id_user=g.id)
					where a.id_user=".$this->session->userdata('id')." AND status='' ");
		return $query->result();
	}
	
	public function get_notif()
	{
					$this->db->where('id_user',$this->session->userdata('id'));
					$this->db->where('status !=','read');
		$query	=	$this->db->get('notif');
		return 	$query->result();
	}
	
	public function update_notif()
	{
		$this->db->where('id_user',$this->session->userdata('id'));
		$data	=	array(
			'status'	=> 'read'
		);
		
		$this->db->update('notif',$data);
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
}