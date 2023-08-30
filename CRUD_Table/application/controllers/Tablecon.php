<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tablecon extends CI_Controller {


//show data in the table 
public function table()
{
$data['consumer'] = $this->db->get('consumer')->result_array();
$this->load->view('table/tableview', $data);
}






//insert function
public function input()
{  
//after geting the value it comes to this function
if($this->input->post())
{ 
//check the file is not empty if it is not empty it runs this function 
if(!empty($_FILES))
{ 
$config['upload_path']          =  'uploads/';
$config['allowed_types']        = 'gif|jpg|png|jpeg|gif';
$config['max_size']             = 1000000;
$this->load->library('upload', $config);
$this->upload->initialize($config);
if ( ! $this->upload->do_upload('pic_file')){
$error = array('error' => $this->upload->display_errors());
$this->load->view('table/tablenew', $error);
}else{
//upload the file to the folder
$upload_data = $this->upload->data();
//stores the image name in a variable
$image = $upload_data['file_name'];
/* to get the data from the form that we want to
  insert into the table*/
$insert_data = array(
'name' => $this->input->post('name'),
'age' => $this->input->post('age'),
'product' => $this->input->post('product'),
'pictitle' =>$this->input->post('title'),
'pic' =>$image
);
$insert = $this->db->insert('consumer',$insert_data);

//insert data in another table called customer_copy by using the same form
// To get the orginal id form the parent table
$insert_id = $this->db->insert_id();

$permitted_chars = 'ABC%*6!NPTUXZ0124678ace*)stvwyz';	
$randnum = substr(str_shuffle($permitted_chars), 0, 10);
/* to get the data from the form that we want to
  insert into the table*/



$insert_data = array(
'randno' => $randnum,
'student_id' => $insert_id,	
'name' => $this->input->post('name'),
'age' => $this->input->post('age'),
'product' => $this->input->post('product'),
'pictitle' =>$this->input->post('title'),
'pic' =>$image,
);
//insert query
$insert = $this->db->insert('customer_copy',$insert_data);
// if the condition is success the it do this if statement
if ($insert) {
echo "success";
redirect(base_url().'Table','refresh');
}
else { 
echo "fail";
exit();
}

}
}
}
$this->load->view('table/tablenew');
}








//edit the data from the table
public function edit($id)
{ 
/* to get the data from the form that we 
want to insert into the table */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$data = array(
'name' => $this->input->post('name'),
'age' => $this->input->post('age'),
'product' => $this->input->post('product'));
//condition query to check the id
$this->db->where('id', $id);
//update in which table
$this->db->update('consumer', $data);
redirect(base_url().'Table','refresh');} 
else {
//get the data from the table using query condition 
$data['consumer'] = $this->db->get_where('consumer', array('id' => $id))->row_array();
$this->load->view('table/tableedit', $data);}
}






//delete the data from the table
public function delete($id)
{
$this->db->where('id', $id);
$this->db->delete('consumer');
redirect(base_url().'Table','refresh');
}



//show the data in some other html form
public function show($id)
{//get the data from the table using query condition
$data['consumer'] = $this->db->get_where('consumer', array('id' => $id))->row_array();
$this->load->view('table/tableshow', $data);
}


}