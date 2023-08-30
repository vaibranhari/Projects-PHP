<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index(){

        $username = $this->session->userdata('username');
        if ($username) {
        $this->load->view('user/dashboarduser');
        } else {
        redirect('User/login');
        } 
        }

public function login() {
// Handle the login form submission
if($_POST) {
$username = $this->input->post('username');
$password = $this->input->post('password');
$user = $this->db->get_where('consumers', array('username' => $username))->row();

if ($user && password_verify($password, $user->password)) {
if ($user->status === 'active') {
$this->session->set_userdata('username', $username);
$this->session->set_userdata('log', 'logged');
redirect('User/index');
}else {
    $this->session->set_flashdata('message', 'Your account is blocked.');
}
}else{
print_r('you dont have an account to login');
redirect('User/register');
}
}
$this->load->view('user/dashlogin');
}



public function register() {
// Handle the registration form submission
if ($_POST) {

$rand =rand(1000,100000);
$randno= 'CON-'.$rand;
$now = date('Y-m-d H:i:s');
$data = array(
    'consumer_id' =>  $randno,
'username' => $this->input->post('username'),
'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
'status' => 'active',
'user_created' => $now,
);
$this->db->insert('consumers', $data);
redirect('User/login');
}
$this->load->view('user/dashregister');
}
public function logout() {
$this->session->unset_userdata('username');
redirect('User/login');
}


public function blockUser($userId) {
    // Block user by updating database
    $this->db->set('status', 'blocked')
             ->where('id', $userId)
             ->update('consumers');
    redirect('User/adminpag');
}

public function unblockUser($userId) {
    // Unblock user by updating database
    $this->db->set('status', 'active')
             ->where('id', $userId)
             ->update('consumers');
    redirect('User/adminpag');
}


public function check_username_exists() {
    $username = $this->input->post('username');

    $query = $this->db->get_where('consumers', array('username' => $username));

    if ($query->num_rows() > 0) {
        echo 'exists';
    } else {
        echo 'available';
    }
}


}