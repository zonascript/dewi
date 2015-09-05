<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Cpesanan extends CI_Controller {

public function __construct()
{
	
	parent::__construct();
	$this->load->model('pemesanan');
	}
	
	public function listing()
	{
		$data['pemesanan']=$this->pemesanan->ambilPesanan();
		$data['notif']=$this->pemesanan->get_notif();
		$this->pemesanan->update_notif();
		
		$this->load->view('Vlistpesan',$data);
	}
	
	// public function tambah()
	// {
	// 	$this->load->view('tukangojek_view/formtukangojek');
	// }
	
	// public function simpan()
	// {
	// 	$config['upload_path'] = './uploads/';
	// 	$config['allowed_types'] = 'gif|jpg|png';
	// 	$config['max_size']	= '2000';
	// 	$config['max_width']  = '1024';
	// 	$config['max_height']  = '768';

	// 	$this->load->library('upload', $config);

	// 	if ($this->upload->do_upload())
	// 	{
	// 	$photo=$_FILES['userfile']['name'];
	// 	}else {
	// 	$photo="";
	// 	}
	// 	$idojek=$this->input->post('idojek');
	// 	$this->mtukangojek->simpanOjek($idojek,$photo);
	// 	redirect('tukangojek/listing');
	// }
		
	// public function edit($id)
	// {
	// 	$data['tukangojek']=$this->mtukangojek->ambilTukangOjekEdit($id);
	// 	$this->load->view('tukangojek_view/formtukangojek', $data);
	// }
	

	
	// public function proses_edit()
	// {
	// 	$this->load->model('mtukangojek','',TRUE);
	// 	$this->mtukangojek->edit_ojek();
	// 	redirect('tukangojek/index','refresh');
	// }
	
	public function delete($id)
	{
		$this->mpemesanan->deletePemesanan($id);
		redirect('pemesanan/listing');
	}
}