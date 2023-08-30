<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
	}

public function dash(){
$this->load->view('dashboard/dashboard');
}
//register session
public function register() {
// Handle the registration form submission
if ($_POST) {
$data = array(
'username' => $this->input->post('username'),
'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
);
$this->db->insert('consumers', $data);
redirect('Dashboard/login');
}
$this->load->view('dashboard/dashregister');
}

// //login session
public function login() {
// Handle the login form submission
if($_POST) {
$username = $this->input->post('username');
$password = $this->input->post('password');
$user = $this->db->get_where('consumers', array('username' => $username))->row();
if ($user && password_verify($password, $user->password)) {
$this->session->set_userdata('user_id', 1);
redirect('Dashboard/index');
} else {
print_r('you dont have an account to login');
redirect('Dashboard/register');
}
}
$this->load->view('dashboard/dashlogin');
}


//logout session
public function logout() {
	$this->session->unset_userdata('user_id');
	redirect(base_url().'dahlog');
}






public function index() {
	if (!$this->session->userdata('user_id')) {
		redirect(base_url().'daslog');
	}
	$this->load->view('dashboard/dashboard');
}









public function checkUser()
{
$email=$this->input->post('username');
$this->db->where('username',$email);
$query=$this->db->get('consumers');
if($query->num_rows()>0)
{
echo 1;	
}
else
{
echo 0;	
}
}

public function check($email) 
{
$this->db->where('username',$email);
$query=$this->db->get('consumers');
if($query->num_rows()>0)
{
return 1;	
}
else
{
return 0;	
}
}



public function ajax()
{
$username = $this->input->post('username');

// Check if the username exists in the database
$this->db->where('username', $username);
$query = $this->db->get('consumers');

if ($query->num_rows() > 0) {
echo "exists";
} else {
echo "available";
}
}

}