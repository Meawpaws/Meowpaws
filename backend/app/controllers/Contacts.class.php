<?php
class Contacts extends Controller
{
    private $contactModel;
    public function __construct()
    {
        $this->contactModel = $this->model('Contact');
    }
    public function Insert()
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: POST');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');        

        $data = json_decode(file_get_contents("php://input"));

        $name = $data->name;
        $email = $data->email;
        $message = $data->message;
        $number = $data->number;
            // Create post
            if($this->contactModel->Add($name,$email,$number,$message)) {
                echo json_encode(
                array('message' => 'Message Send')
                );
            } else {
                echo json_encode(
                array('message' => 'Message Not Send')
                );
            }
    }
}