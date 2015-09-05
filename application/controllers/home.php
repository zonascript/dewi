<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    
     $this->load->library(array('session'));
     
     $this->load->helper('url');
     
     // $this->load->model('m_login');
    
     $this->load->database();
     
     
  }
  public function listing(){
    $this->load->view('home');
  }
  

  
}
?>