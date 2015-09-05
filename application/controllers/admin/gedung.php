<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class gedung extends CI_Controller {

public function __construct()
{
	
	parent::__construct();
	$this->load->model('admin/mgedung');
	}
	 public function logout ()
    {
      $this->session->sess_destroy();
      redirect ('index/menulogin');
    }
	public function listing()
	{
		$data['gedung']=$this->mgedung->ambilGedung();
		$this->load->view('admin/listgedung',$data);
	}
	
	public function tambah()
	{
		$this->load->view('admin/formgedung');
	}
	
	public function simpan()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload())
		{
		$photo=$_FILES['userfile']['name'];
		}else {
		$photo="";
		}
		$id=$this->input->post('idgedung');
		$idgedung=$this->input->post('idgedung');
		$this->mgedung->simpangedung($id,$photo);
		redirect('admin/gedung/listing');
	}
		
	public function edit($id)
	{
		
		$data['gedung']=$this->mgedung->edit_gedung($id);
		$this->load->view('admin/formgedung', $data);
	}
	

	
	public function proses_edit()
	{
		$this->load->model('mgedung','',TRUE);
		$this->mgedung->edit_gedung();
		redirect('admin/gedung/listing','refresh');
	}
	
	public function delete($id)
	{
		$this->mgedung->deleteGedung($id);
		redirect('admin/gedung/listing');
	}
}