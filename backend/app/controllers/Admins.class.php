<?php
class Admins extends Controller
{
    private $adminModel;
    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
    }
    public function login()
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: POST');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');        
    
        $data = json_decode(file_get_contents("php://input"));
        $email = $data->email;
        $password = $data->password;
        if($this->adminModel->login($email,$password)) {
            $row = $this->adminModel->login($email,$password);
            echo json_encode(
            array(
                'message' => 'Account Susses',
                'result' => $row
            )
            );
        } else {
            echo json_encode(
            array('message' => 'Didn\'t Account Susses' )
            );
        }
    }
    public function Users()
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');     

        $users = $this->adminModel->selectAll();
        if($users) {
            echo json_encode(
            array(
                'message' => 'Users Info',
                'result' => $users
                )
            );
        } else {
            echo json_encode(
            array('message' => 'Didn\'t Users Info')
            );
        }
    }
    public function delete($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');     

        if($this->adminModel->delete($id)) {
            echo json_encode(
            array('message' => 'Users Deleted')
            );
        } else {
            echo json_encode(
            array('message' => 'Users Not Deleted')
            );
        }
    }
    public function ChangeRole($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');     

        if($this->adminModel->ChangeRole($id)) {
            echo json_encode(
            array('message' => 'Role Changed')
            );
        } else {
            echo json_encode(
            array('message' => 'Role Not Changed')
            );
        }
    }
}