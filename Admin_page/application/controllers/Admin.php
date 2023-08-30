<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {




public function adminpag(){
$username = $this->session->userdata('username');
if ($username) {
$data['consumers'] = $this->db->get('consumers')->result_array();
$this->load->view('admin/dashboardadmin',$data);
} else {
redirect('Admin/login');
}
}

public function adminlog() {
// Handle the login form submission
if($_POST) {
$username = $this->input->post('username');
$password = $this->input->post('password');
//$user = $this->db->get_where('admin', array('username' => $username))->row();
$query = $this->db->get_where('admin', array('username' => $username));
$user = $query->row();
if ($user && password_verify($password, $user->password)) {
$this->session->set_userdata('username', $username);
redirect('Admin/adminpag');
} else {
echo('you dont have an account to login');
}
}
$this->load->view('admin/dashlogin');
}

public function logout() {
    $this->session->unset_userdata('username');
    redirect('Adminlogin');
    }

}
            