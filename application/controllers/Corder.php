<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Corder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Morder');
		$this->load->model('Mletter');
		$this->load->model('Mvenue');
		$this->load->model('Mcake');
		$this->load->model('Mmakeup');
	}
	
	public function listing()
	{
		
		
		// $data['Corder']=$this->Morder->ambil($id);
		$data['gedung']=$this->Morder->ambilgedung();
		$data['undangan']=$this->Morder->ambilundangans();
		$data['dekorasi']=$this->Morder->ambildekorasi();
		$data['katering']=$this->Morder->ambilkatering();
		$data['salon']=$this->Morder->ambilsalon();
		$this->load->view('Vorder', $data);

	}
	
	public function simpans()
	{
		
		
		$id=$this->input->post('id');
		$bayarakhir=$this->input->post('bayarakhir');
		$this->Morder->simpanedit($id,$bayarakhir);
		redirect('Cpesanan/listing');
	}
	
	public function simpan()
	{
		
		$idkatering=$this->input->post('idkatering');
		$tanggal=$this->input->post('tanggal');
		$bulan=$this->input->post('tanggal');
		$tahun=$this->input->post('tanggal');
		$idsalon=$this->input->post('idsalon');
		$iddekorasi=$this->input->post('iddekorasi');
		$idgedung=$this->input->post('idgedung');
		$idundangan=$this->input->post('idundangan');
		$time=$this->input->post('time');
		$bayarawal=$this->input->post('bayarawal');
		
		$this->Morder->simpanOrder($idkatering,$tanggal, $idsalon,$iddekorasi,$idgedung,$idundangan,$time,$bayarawal);
		redirect('Cpesanan/listing');
	}
		
	public function edit($id)
	{
		
		$data['Corder']=$this->Morder->ambil($id);
		$this->load->view('formeditpesanan', $data);
	}
	
	public function hargaGedung()
	{
		$idgedung=$this->input->post('idgedung');
		$harga=$this->Morder->ambilhargagedung($idgedung);
		$data = "";
		foreach($harga as $harga){
			$data .= $harga['harga'];
		}
		echo $data;
	}
	
	public function ajax_getdata()
	{
		if($_POST['type'] == 'idgedung')
			$data = $this->Morder->ambilhargagedung($_POST['data']);
		
		else if($_POST['type'] == 'idundangan')
			$data = $this->Mletter->ambilDetail($_POST['data']);
		
		else if($_POST['type'] == 'iddekorasi')
			$data = $this->Mvenue->ambilDetail($_POST['data']);
		
		else if($_POST['type'] == 'idkatering')
			$data = $this->Mcake->ambilDetail($_POST['data']);
		
		else if($_POST['type'] == 'idsalon')
			$data = $this->Mmakeup->ambilDetail($_POST['data']);
		
		if($data)
		{
			echo json_encode($data);
		}
		else
		{
			echo 2;
		}
	}
}