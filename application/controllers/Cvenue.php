<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Cvenue extends CI_Controller
{
 public function __construct()
{
	
	parent::__construct();
	    $this->load->library(array('session'));
     
     $this->load->helper('url');
	$this->load->model('Mvenue');
	}
	
	public function listing()
	{
		$data['Cvenue']=$this->Mvenue->ambilVenue();
		$this->load->view('Vvenue',$data);
	}
	public function gold()
	{
		$data['Cvenue']=$this->Mvenue->gold();
		$this->load->view('Vvenue',$data);
	}
	public function silver()
	{
		$data['Cvenue']=$this->Mvenue->silver();
		$this->load->view('Vvenue',$data);
	}
	public function bronze()
	{
		$data['Cvenue']=$this->Mvenue->bronze();
		$this->load->view('Vvenue',$data);
	}
  	public function select()
  	{
        $jenis = $this->input->post('jenis');
		$data['Cvenue'] = $this->Mvenue->getJenisList($jenis);
		$this->load->view('Vvenue',$data);
    }
  public function detail($id)
	{
	$data['Cvenue']=$this->Mvenue->ambilDetail($id);
		$this->load->view('Vdetailvenue', $data);
	}

  
}
?>