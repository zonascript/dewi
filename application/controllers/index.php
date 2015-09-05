<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
public function __construct()
{
parent::__construct();
	$this->load->model('Morder');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function menulogin()
	{
		$this->load->view('form_login');
	}
	
	public function order($id)
		{
			
			$data['index']=$this->Morder->ambil($id);
			$data['undangan']=$this->Morder->ambilundangans();
			$data['dekorasi']=$this->Morder->ambildekorasi();
			$data['katering']=$this->Morder->ambilkatering();
			$data['salon']=$this->Morder->ambilsalon();
			$this->load->view('Vorder', $data);
		}
		
	public function about()
	{
		$this->load->view('about');
	}
	
	}

	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */