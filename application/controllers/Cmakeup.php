<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Cmakeup extends CI_Controller
{
 public function __construct()
{
	
	parent::__construct();
	    $this->load->library(array('session'));
     
     $this->load->helper('url');
	$this->load->model('Mmakeup');
	}
	
	public function listing()
	{
		$data['Cmakeup']=$this->Mmakeup->ambilMakeup();
		$this->load->view('Vmakeup',$data);
	}
	public function gold()
	{
		$data['Cmakeup']=$this->Mmakeup->gold();
		$this->load->view('Vmakeup',$data);
	}
	public function silver()
	{
		$data['Cmakeup']=$this->Mmakeup->silver();
		$this->load->view('Vmakeup',$data);
	}
	public function bronze()
	{
		$data['Cmakeup']=$this->Mmakeup->bronze();
		$this->load->view('Vmakeup',$data);
	}
  	public function select()
  	{

        $jenis = $this->input->post('jenis');
		$data['Cmakeup'] = $this->Mmakeup->getJenisList($jenis);
		$this->load->view('Vmakeup',$data);
    }
  public function detail($id)
	{
	$data['Cmakeup']=$this->Mmakeup->ambilDetail($id);
		$this->load->view('Vdetailsalon', $data);
	}

  
}
?>