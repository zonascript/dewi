<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class salon extends CI_Controller {

public function __construct()
{
	
	parent::__construct();
	$this->load->model('admin/msalon');
	}
	 public function logout ()
    {
      $this->session->sess_destroy();
      redirect ('index/menulogin');
    }
	public function listing()
	{
		$data['salon']=$this->msalon->ambilSalon();
		$this->load->view('admin/listsalon',$data);
	}
	
	public function tambah()
	{
		$this->load->view('admin/formsalon');
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
			if($this->input->post('photo'))
			{
				$photo=$this->input->post('photo');
			}
			else
			{
				$photo="";
			}
		
		}
		$id=$this->input->post('idsalon');
		$idsalon=$this->input->post('idsalon');
		$this->msalon->simpansalon($id,$photo);
		redirect('admin/salon/listing');
	}
		
	public function edit($id)
	{
		
		$data['salon']=$this->msalon->edit_salon($id);
		$this->load->view('admin/formsalon', $data);
	}
	

	
	public function proses_edit()
	{
		$this->load->model('msalon','',TRUE);
		$this->msalon->edit_salon();
		redirect('admin/salon/listing','refresh');
	}
	
	public function delete($id)
	{
		$this->msalon->deleteSalon($id);
		redirect('admin/salon/listing');
	}
}