<?php

class Users extends Controller {

    private $userModel;

    public function __construct() {
        $this->userModel = $this->model( 'User' );
    }

    public function register()
    {
        header( 'Access-Control-Allow-Origin:*' );
        header( 'Content-Type: application/json' );
        header( 'Access-Control-Allow-Method: POST' );
        header( 'Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation' );

        $data = json_decode( file_get_contents( 'php://input' ) );
        $name = $data->name;
        $email = $data->email;
        $password = $data->password;
        $hashPass = password_hash($password,PASSWORD_DEFAULT);
        $avatar = 'avatar.png';
        if ( $this->userModel->register($name, $email, $hashPass, $avatar) ) {
            echo json_encode(
                array( 'message' => 'Account Added' )
            );
        } else {
            echo json_encode(
                array( 'message' => 'Didn\'t Account Added')
            );
        }
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
        if($this->userModel->login($email,$password)) {
            echo json_encode(
            array('message' => 'Account Susses')
            );
        } else {
            echo json_encode(
            array('message' => 'Didn\'t Account Susses' )
            );
        }
    }
    // logout

    public function logout()
 {
        $_SESSION[ 'users_id' ] = null;
        $_SESSION[ 'name' ] = null;
        session_destroy();
        redirect( 'users/login' );
    }
}