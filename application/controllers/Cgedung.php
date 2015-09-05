<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Cgedung extends CI_Controller
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
		$data['Cgedung']=$this->Mgedung->ambilGedung();
		$this->load->view('Vgedung',$data);
	}
	public function gold()
	{
		$data['Cgedung']=$this->Mgedung->gold();
		$this->load->view('Vgedung',$data);
	}
	public function silver()
	{
		$data['Cgedung']=$this->Mgedung->silver();
		$this->load->view('Vgedung',$data);
	}
	public function bronze()
	{
		$data['Cgedung']=$this->Mgedung->bronze();
		$this->load->view('Vgedung',$data);
	}
  	public function select()
  	{

        $jenis = $this->input->post('jenis');
		$data['Cgedung'] = $this->Mgedung->getJenisList($jenis);
		$this->load->view('Vgedung',$data);
    }
	public function detail($id)
	{
		$data['Cgedung']=$this->Mgedung->ambilDetail($id);
		$this->load->view('Vdetail', $data);
	}
  
}
?>