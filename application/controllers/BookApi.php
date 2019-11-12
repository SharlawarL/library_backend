<?php
header('Access-Control-Allow-Origin: *');
header('Origin: http://localhost/');
header('Access-Control-Allow-Methods: POST, GET, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Auth-Token, X-PINGOTHER, Content-Type,X-Requested-With,Access-Control-Allow-Origin, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');
header('Access-Control-Max-Age: 86400');
header('Content-Type: application/json');
defined('BASEPATH') OR exit('No direct script access allowed');

class BookApi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->model('BookModel');
    }
	
	public function index()
	{
        echo "Books Api";
    }

    //Api for Add Book
    public function addBook(){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $userData = $this->input->post();

        if($this->form_validation->run('addBook'))
        {

            $result =  $this->BookModel->addBook($userData);
            if($result)
            {
                //responce to Frontend
                $data['success'] = true;
                $data['message'] = "Successfully Book Added";
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

    //get books
    function getBook(){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $userData = $this->input->post();

            $result =  $this->BookModel->getBook();
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

    //Api for Update Book
    public function updateBook(){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $userData = $this->input->post();

        if($this->form_validation->run('addBook'))
        {

            $result =  $this->BookModel->updateBook($userData);
            if($result)
            {
                //responce to Frontend
                $data['success'] = true;
                $data['message'] = "Successfully Book Added";
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

    //Api for Add Book
    public function issueBook(){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $bookData = $this->input->post();

        if($this->form_validation->run('issueBook'))
        {

            $result =  $this->BookModel->issueBook($bookData);
            if($result)
            {
                //responce to Frontend
                $data['success'] = true;
                $data['message'] = "Successfully Book Added";
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

     //Api for Add Book
     public function returnBook(){
        $this->load->library('form_validation');
        //post data from FrontEnd
        header('Content-Type: application/json');
        $bookData = $this->input->post();
            $result =  $this->BookModel->returnBook($bookData);
            if($result)
            {
                //responce to Frontend
                $data['success'] = true;
                $data['message'] = "Successfully Book Added";
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
