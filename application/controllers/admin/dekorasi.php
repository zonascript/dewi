<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class dekorasi extends CI_Controller {

public function __construct()
{
	
	parent::__construct();
	$this->load->model('admin/mdekorasi');
	}
	 public function logout ()
    {
      $this->session->sess_destroy();
      redirect ('index/menulogin');
    }
	public function listing()
	{
		$data['dekorasi']=$this->mdekorasi->ambilDekorasi();
		$this->load->view('admin/listdekorasi',$data);
	}
	
	public function tambah()
	{
		$this->load->view('admin/formdekorasi');
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
		//print_r($_FILES);
		$id=$this->input->post('iddekorasi');
		$iddekorasi=$this->input->post('iddekorasi');
		$this->mdekorasi->simpanDekorasi($id,$photo);
		redirect('admin/dekorasi/listing');
	}
		
	public function edit($id)
	{
		
		$data['dekorasi']=$this->mdekorasi->edit_dekorasi($id);
		$this->load->view('admin/formdekorasi', $data);
	}
	

	
	public function proses_edit()
	{
		$this->load->model('mdekorasi','',TRUE);
		$this->mdekorasi->edit_dekorasi();
		redirect('admin/dekorasi/listing','refresh');
	}
	
	public function delete($id)
	{
		$this->mdekorasi->deleteDekorasi($id);
		redirect('admin/dekorasi/listing');
	}
}