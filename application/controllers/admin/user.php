<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class user extends CI_Controller {

public function __construct()
{
	
	parent::__construct();
	$this->load->model('admin/muser');
	}
	 public function logout ()
    {
      $this->session->sess_destroy();
      redirect ('index/menulogin');
    }
	public function listing()
	{
		$data['user']=$this->muser->ambilUser();
		$this->load->view('admin/listuser',$data);
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
		


	
	// public function proses_edit()
	// {
	// 	$this->load->model('mtukangojek','',TRUE);
	// 	$this->mtukangojek->edit_ojek();
	// 	redirect('tukangojek/index','refresh');
	// }
	
	public function delete($id)
	{
		$this->muser->deleteUser($id);
		redirect('admin/user/listing');
	}
}