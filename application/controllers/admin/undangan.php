<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class undangan extends CI_Controller {

public function __construct()
{
	
	parent::__construct();
	$this->load->model('admin/mundangan');
	}
	 public function logout ()
    {
      $this->session->sess_destroy();
      redirect ('index/menulogin');
    }
	public function listing()
	{
		$data['undangan']=$this->mundangan->ambilUndangan();
		$this->load->view('admin/listUndanganView',$data);
	}
	
	public function tambah()
	{
		$this->load->view('admin/formundangan');
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
		$id=$this->input->post('idundangan');
		$idundangan=$this->input->post('idundangan');
		$this->mundangan->simpanUndangan($id,$photo);
		redirect('admin/undangan/listing');
	}
		
	public function edit($id)
	{
		
		$data['undangan']=$this->mundangan->edit_undangan($id);
		$this->load->view('admin/formundangan', $data);
	}
	

	
	public function proses_edit()
	{
		$this->load->model('mundangan','',TRUE);
		$this->mundangan->edit_undangan();
		redirect('admin/undangan/listing','refresh');
	}
	
	public function delete($id)
	{
		$this->mundangan->deleteUndangan($id);
		redirect('admin/undangan/listing');
	}
}