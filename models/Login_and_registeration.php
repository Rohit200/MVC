<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login_and_registeration extends CI_Model
{
    public function get_users($username,$password)
{
    $q = $this->db->select('password')->from('detail')->where('username',$username)->get();
    $res=$q->result();
    return $res;
    
}
}
?>