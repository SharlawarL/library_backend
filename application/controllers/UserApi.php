<?php
header('Access-Control-Allow-Origin: *');
header('Origin: http://localhost/');
header('Access-Control-Allow-Methods: POST, GET, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Auth-Token, X-PINGOTHER, Content-Type,X-Requested-With,Access-Control-Allow-Origin, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');
header('Access-Control-Max-Age: 86400');
header('Content-Type: application/json');
defined('BASEPATH') OR exit('No direct script access allowed');

class UserApi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->model('UserModel');
    }
	
	public function index()
	{
        echo "User Api";
    }
    
    //Api for Add User
    public function addUser(){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $userData = $this->input->post();

        if($this->form_validation->run('ragister'))
        {

            $result =  $this->UserModel->register($userData);
            if($result)
            {
                //responce to Frontend
                $data['success'] = true;
                $data['message'] = "Successfully registered";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }else{
                //responce to Frontend
                $data['success'] = false;
                $data['message'] = "samething is wrong";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }
        }else{
            $response = $this->form_validation->error_array();
            echo json_encode($response);
        }
    }

    //Function for Login User
    public function loginUser(){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $userData = $this->input->post();
        if($this->form_validation->run('login'))
        {

            $result =  $this->UserModel->login($userData);
            $result1 = json_decode(json_encode($result,true),true);
            if($result)
            {
                //responce to Frontend
                $data['success'] = true;
                $data['user_id'] = $result1['user_id'];
                $data['message'] = "Successfully login";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }else{
                //responce to Frontend
                $data['success'] = false;
                $data['message'] = "samething is wrong";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }
        }else{
            $response = $this->form_validation->error_array();
            echo json_encode($response);
        }
    }

    //function for all user retrive.
    public function viewUser(){
        $result =  $this->UserModel->viewUser();
        $Json = json_encode($result);
        print_r($Json);
    }

    //get books
    function getUser(){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $userData = $this->input->post();

            $result =  $this->UserModel->getUser();
            $Json = json_encode($result);
            if($result)
            {
                echo $Json;
            }else{
                //responce to Frontend
                $data['success'] = false;
                $data['message'] = "samething is wrong";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }
    }

    //get books perticular user
    function getUserData($user_id){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $userData = $this->input->post();

            $result =  $this->UserModel->getUserData($user_id);
            $Json = json_encode($result);
            if($result)
            {
                echo $Json;
            }else{
                //responce to Frontend
                $data['success'] = false;
                $data['message'] = "samething is wrong";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }
    }

    //for getting user logs
    function getlogs($user_id){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $userData = $this->input->post();

            $result =  $this->UserModel->getlogs($user_id);
            $Json = json_encode($result);
            if($result)
            {
                echo $Json;
            }else{
                //responce to Frontend
                $data['success'] = false;
                $data['message'] = "samething is wrong";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }
    }

    //for getting user logs
    function getLogsTotal(){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $userData = $this->input->post();

            $result =  $this->UserModel->getLogsTotal();
            $Json = json_encode($result);
            if($result)
            {
                echo $Json;
            }else{
                //responce to Frontend
                $data['success'] = false;
                $data['message'] = "samething is wrong";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }
    }

    //Api for Add User
    public function changeStatus(){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $userData = $this->input->post();

            $result =  $this->UserModel->changeStatus($userData);
            if($result)
            {
                //responce to Frontend
                $data['success'] = true;
                $data['message'] = "Successfully registered";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }else{
                //responce to Frontend
                $data['success'] = false;
                $data['message'] = "samething is wrong";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }
    }

    //Api for Add User
    public function deleteUser(){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $userData = $this->input->post();

            $result =  $this->UserModel->deleteUser($userData);
            if($result)
            {
                //responce to Frontend
                $data['success'] = true;
                $data['message'] = "Successfully registered";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }else{
                //responce to Frontend
                $data['success'] = false;
                $data['message'] = "samething is wrong";
                $this->output
                        ->set_status_header(200)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                        ->_display();
                exit;
            }
    }
}
