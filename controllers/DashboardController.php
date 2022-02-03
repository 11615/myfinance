<?php

class DashboardController extends CI_Controller
{
  public function __construct()
	{
		parent::__construct();

		$this->load->model('AdminModel');
  //  $this->load->library('form');
   // $this->load->library('form_validation');
  

	}

   
  public function admin_register()
  {
   if (isset($_POST['submit'])) {
     $data = array(
         'name' => $this->input->post('name'),
         'email' => $this->input->post('email'),
         'password' => $this->input->post('password'),
         'retype_password' => $this->input->post('retype_password')
     );
   }
    
    if(!empty($data))
    {
    $admin = new AdminModel;
    $checking = $admin->admin('admin_log',$data);
    }
   
    $this->load->view('pages/layout/admin_login');

  }
    public function contact_table()
    {
       $this->load->model('AdminModel');
       $users = $this->AdminModel->all();
       $data = array();
       $data['users'] = $users;
     
       $this->load->view('layouts/Sidebar');
       $this->load->view('pages/layout/contact_table',$data);

    }

   public function showEditForm(){
    $html =  $this->load->view('edit','',true);
    $response['html'] = $html;
    echo json_encode($response);

    }
    public function saveModel(){
      
      $this->load->model('edit_model');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('name', 'Name','required');
      $this->form_validation->set_rules('email', 'Email','required');
      $this->form_validation->set_rules('phone', 'Phone','required');
      $this->form_validation->set_rules('message', 'Message','required');


      if($this->form_validation->run() == true){
        //save enteries to DB
       
        $formArray = array();
        $formArray['name'] = $this->input->post('name');
        $formArray['email'] = $this->input->post('email');
        $formArray['phone'] = $this->input->post('phone');
        $formArray['message'] = $this->input->post('message');
        $id = $this->edit_model->edit($formArray);

      

        $response['status']=1;
      }else{

        $response['status']=0;
        $response['name'] = strip_tags(form_error('name'));
        $response['email'] = strip_tags(form_error('email'));
        $response['phone'] = strip_tags(form_error('phone'));
        $response['message'] = strip_tags(form_error('message'));
        
       

       // return error message 
      }
      echo json_encode($response);
     
    }
// this method will return the edit for like create
    function getEditModel()
    {
      $this->load->model('AdminModel');

      $id = $this->input->post('id');
      $res = $this->AdminModel->fetchSingleData('*','dq_contact_tbl',array('id'=>$id));
      echo json_encode($res);
    }

    function updateContactModal()
    {
        $this->load->model('AdminModel');
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $message = $this->input->post('message');
        $status = $this->input->post('status');
        $data = array(
          'name' => $name,
          'email' => $email,
          'phone' => $phone,
          'message' => $message,
          'status' => $status
        );
        $update = $this->AdminModel->updateData('dq_contact_tbl',$data,array('id'=>$id));
        if ($update==true) {
          echo 1;
        }
        else {
          echo 2;
        }
    }

    public function lead_table()
    {
       $this->load->model('AdminModel');
       $users = $this->AdminModel->leadall();
       $data = array();
       $data['users'] = $users;
     
       $this->load->view('layouts/Sidebar');
       $this->load->view('pages/layout/lead_table',$data);

      }


      public function leadEditForm(){
       $html =  $this->load->view('edit','',true);
       $response['html'] = $html;
       echo json_encode($response);
   
       }
       public function leadModel(){
         
         $this->load->model('edit_model');
         $this->load->library('form_validation');
         $this->form_validation->set_rules('name', 'Name','required');
         $this->form_validation->set_rules('email', 'Email','required');
         $this->form_validation->set_rules('phone', 'Phone','required');
         $this->form_validation->set_rules('city', 'City','required');
         $this->form_validation->set_rules('amount', 'Amount','required');
         $this->form_validation->set_rules('status', 'Status','required');
   
   
         if($this->form_validation->run() == true){
           //save enteries to DB
          
           $formArray = array();
           $formArray['name'] = $this->input->post('name');
           $formArray['email'] = $this->input->post('email');
           $formArray['phone'] = $this->input->post('phone');
           $formArray['city'] = $this->input->post('city');
           $formArray['amount'] = $this->input->post('amount');
           $formArray['status'] = $this->input->post('status');
           $id = $this->edit_model->edit($formArray);
   
         
   
           $response['status']=1;
         }else{
   
           $response['status']=0;
           $response['name'] = strip_tags(form_error('name'));
           $response['email'] = strip_tags(form_error('email'));
           $response['phone'] = strip_tags(form_error('phone'));
           $response['city'] = strip_tags(form_error('city'));
           $response['amount'] = strip_tags(form_error('amount'));
           $response['status'] = strip_tags(form_error('status'));
           
          
   
          // return error message 
         }
         echo json_encode($response);
        
       }

      function getLeadModel()
    {
      $this->load->model('AdminModel');

      $id = $this->input->post('id');
      $res = $this->AdminModel->fetchLeadSingleData('*','dq_lead_tbl',array('id'=>$id));
      echo json_encode($res);
    }

    function updateLeadModal()
    {
        $this->load->model('AdminModel');
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $city = $this->input->post('city');
        $amount = $this->input->post('amount');
        $status = $this->input->post('status');
        $data = array(
          'name' => $name,
          'email' => $email,
          'phone' => $phone,
          'city' => $city,
          'amount' => $amount,
          'status' => $status
        );
        $update = $this->AdminModel->updateLeadData('dq_lead_tbl',$data,array('id'=>$id));
        if ($update==true) {
          echo 1;
        }
        else {
          echo 2;
        }
    }

    public function loginA(){

     // print_r($_POST);


        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = $this->AdminModel->loginAdmin(['email'=>$email,'password'=>$password]);
        // print_r($data);
        // exit();
        if ($data) {
          // $this->session->set_userdata('authenticated','1');
          $this->session->set_flashdata('status','Login Successfully');
          redirect(base_url('admin/lead_table'));
        }
        else {
          $this->session->set_flashdata('status','Invalid Email or Password');
          // redirect(base_url('admin/loginA'));
          $this->load->view('pages/layout/loginA');
        }        
    }   
}
?>