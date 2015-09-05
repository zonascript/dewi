<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Ccake extends CI_Controller
{
 public function __construct()
{
	
	parent::__construct();
	    $this->load->library(array('session'));
     
     $this->load->helper('url');
	$this->load->model('Mcake');
	}
	
	public function listing()
	{
		$data['Ccake']=$this->Mcake->ambilCake();
		$this->load->view('Vcake',$data);
	}
	public function gold()
	{
		$data['Ccake']=$this->Mcake->gold();
		$this->load->view('Vcake',$data);
	}
	public function silver()
	{
		$data['Ccake']=$this->Mcake->silver();
		$this->load->view('Vcake',$data);
	}
	public function bronze()
	{
		$data['Ccake']=$this->Mcake->bronze();
		$this->load->view('Vcake',$data);
	}
  	public function select()
  	{

        $jenis = $this->input->post('jenis');
		$data['Ccake'] = $this->Mcake->getJenisList($jenis);
		$this->load->view('Vcake',$data);
    }
  public function detail($id)
	{
	$data['Ccake']=$this->Mcake->ambilDetail($id);
		$this->load->view('Vdetailkatering', $data);
	}

  
}
?>