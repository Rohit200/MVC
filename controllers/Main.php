<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
Class Main extends CI_Controller
{
    public function index()
    {
      $username=$_POST['username'];
      $password=$_POST['password'];
      $this->load->model('login_and_registeration');
      $res=$this->login_and_registeration->get_users($username,$password);
      print_r($res);
       
    }
    public function register()
    {
        $this->load->view('Register');
    }
    public function login()
    {
        $this->load->view('Login');
    }
}
?>