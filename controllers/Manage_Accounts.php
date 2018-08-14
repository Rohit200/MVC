<?php
class Manage_Accounts extends CI_Controller
{
public function index() {

//$this->load->view('template/header');

$this->load->model('manage_account_model');

//$this->load->view('template/footer');

$this->load->model('manage_account_model');

$res = $this->manage_account_model->get_users();
print_r($res);

if($res){
    $data['result'] = $res;
    $this->load->view('manage_accounts_view', $data);

} else {

    echo "Fail";

}
}
}