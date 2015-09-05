<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('muser');
    
    $this->load->library(array('form_validation','session'));
    
    $this->load->database();
    
    $this->load->helper('url');
    
  }
  
  public function listing(){
    $this->load->view('admin/formpesan');
  }
 public function daftar(){
    $this->load->view('formdaftar');
  }

  public function login() {
    $this->load->view('home');//setiap data harus ada $this data, karena parent dan alamat css diatas terdeteksi
  }
  
  function proses_login() 
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $login = $this->muser->get_user($username,$password);
    if($login->user_tipe=='admin'){ 
    if($login != ""){
        $data = array(
          'logged_in'     => TRUE,
          'id'      => $login->id,
          'username'      => $login->username,
          'password'      => $login->password,
          'usertype'      => $login->user_type
        );
        $this->session->set_userdata($data);
        redirect('admin/pemesanan/listing');
      } else {
        $this->session->set_flashdata('message','Password or Username is WRONG !!!');
        redirect('index/menulogin');
      }
      }else{
        if($login != ""){
        $data = array(
          'logged_in'     => TRUE,
          'id'      => $login->id,
          'username'      => $login->username,
          'password'      => $login->password,
          'usertype'      => $login->user_type
        );
        $this->session->set_userdata($data);
        redirect('Cmember/listing');
      } else {
        $this->session->set_flashdata('message','Password or Username is WRONG !!!');
        redirect('index/menulogin');
      }

      }
    }
    
  //   $prm['username']=$username;
  //   $prm['password']= $password;
    
  //     if ($this->muser->cek_user($prm))
  //     { //cek user ditemukan//
  //       echo "Login Sukses ";
  //       $this->session->set_userdata("is_login","1");
        
  //       if($this->muser->get_user_tipe($prm) == ""){
  //         $this->session->set_userdata("user_tipe","");
  //       //redirect ke admon/index..
  //         redirect ("admin/pemesanan/listing"); 
      
  //     }else{
  //       echo "Login Gagal ";
  //     }
    
  // }
  //     echo "login gagl";
    public function logout ()
    {
      $this->session->sess_destroy();
      redirect ('index/menulogin');
    }
	public function simpan()
	{
		
		$password=$this->input->post('password');
		$username=$this->input->post('username');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$nohp=$this->input->post('nohp');
		$email=$this->input->post('email');
	$user_tipe=$this->input->post('user_tipe');


		$this->muser->Daftar($username,$password,$nama,$alamat,$nohp,$email,$user_tipe);
		
		redirect('login/daftar');
	}
}

?>