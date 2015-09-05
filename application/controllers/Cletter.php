<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Cletter extends CI_Controller
{
 public function __construct()
{
	
	parent::__construct();
	    $this->load->library(array('session'));
     
     $this->load->helper('url');
	$this->load->model('Mletter');
	}
	
	public function listing()
	{
		$data['Cletter']=$this->Mletter->ambilLetter();
		$this->load->view('Vletter',$data);
	}
	public function gold()
	{
		$data['Cletter']=$this->Mletter->gold();
		$this->load->view('Vletter',$data);
	}
	public function silver()
	{
		$data['Cletter']=$this->Mletter->silver();
		$this->load->view('Vletter',$data);
	}
	public function bronze()
	{
		$data['Cletter']=$this->Mletter->bronze();
		$this->load->view('Vletter',$data);
	}
  	public function select()
  	{

        $jenis = $this->input->post('jenis');
		$data['Cletter'] = $this->Mletter->getJenisList($jenis);
		$this->load->view('Vletter',$data);
    }
  
public function detail($id)
	{
	$data['Cletter']=$this->Mletter->ambilDetail($id);
		$this->load->view('Vdetailundangan', $data);
	}
  
}
?>