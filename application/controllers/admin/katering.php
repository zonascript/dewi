<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class katering extends CI_Controller {

public function __construct()
{
	
	parent::__construct();
	$this->load->model('admin/mkatering');
	}
	 public function logout ()
    {
      $this->session->sess_destroy();
      redirect ('index/menulogin');
    }
	public function listing()
	{
		$data['katering']=$this->mkatering->ambilkatering();
		$this->load->view('admin/listkatering',$data);
	}
	
	public function tambah()
	{
		$this->load->view('admin/formkatering');
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
		$id=$this->input->post('idkatering');
		$idkatering=$this->input->post('idkatering');
		
	
		$this->mkatering->simpanKatering($id,$photo);
		redirect('admin/katering/listing');
		//echo mysql_error();
	}
		
	public function edit($id)
	{
		
		$data['katering']=$this->mkatering->edit_katering($id);
		$this->load->view('admin/formkatering', $data);
	}
	

	
	public function proses_edit()
	{
		$this->load->model('mkatering','',TRUE);
		$this->mkatering->edit_katering();
		redirect('admin/katering/listing','refresh');
	}
	
	public function delete($id)
	{
		$this->mkatering->deletekatering($id);
		redirect('admin/katering/listing');
	}
}