<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Cmember extends CI_Controller
{
 public function __construct()
{
	
	parent::__construct();
	    $this->load->library(array('session'));
     
     $this->load->helper('url');
	$this->load->model('Mgedung');
	}
	
	public function listing()
	{
		$this->load->view('Vmember');
	}
  public function select()
  {

       $keyword = $this->input->post('keyword');
		$data['Cgedung'] = $this->Mgedung->getJenisList($keyword);
		$this->load->view('Vgedung',$data);
		
    }

  
}
?>