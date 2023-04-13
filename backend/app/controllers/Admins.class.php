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
        if ($this->adminModel->login($email, $password)) {
            $row = $this->adminModel->getAdminByEmail($email);
            echo json_encode(
                array(
                    'message' => 'Account Susses',
                    'result' => $row
                )
            );
        } else {
            echo json_encode(
                array('message' => 'Didn\'t Account Susses')
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
        if ($users) {
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
    public function Items()
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        $items = $this->adminModel->selectAllItems();
        if ($items) {
            echo json_encode(
                array(
                    'message' => 'Items Info',
                    'result' => $items
                )
            );
        } else {
            echo json_encode(
                array('message' => 'Didn\'t Items Info')
            );
        }
    }
    public function User($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: UPDATE');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        $user = $this->adminModel->select($id);
        if ($user) {
            echo json_encode(
                array(
                    'message' => 'User Info',
                    'result' => $user
                )
            );
        } else {
            echo json_encode(
                array('message' => 'Didn\'t User Info')
            );
        }
    }
    public function delete($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        if ($this->adminModel->delete($id)) {
            echo json_encode(
                array('message' => 'Users Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'Users Not Deleted')
            );
        }
    }
    public function deleteItem($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        if ($this->adminModel->deleteItem($id)) {
            echo json_encode(
                array('message' => 'Item Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'Item Not Deleted')
            );
        }
    }
    public function ChangeRole($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        if ($this->adminModel->ChangeRole($id)) {
            echo json_encode(
                array('message' => 'Role Changed')
            );
        } else {
            echo json_encode(
                array('message' => 'Role Not Changed')
            );
        }
    }
    public function UpdateUser($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: PUT');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        $data = json_decode(file_get_contents("php://input"));

        $name = $data->name;
        if ($name != '' && !empty($name)) {
            $name = 'name = "' . $name . '"';
            $returnName = $this->adminModel->Update($name, $id);
        } else {
            $returnName = false;
        }

        $prenom = $data->prenom;
        if ($prenom != '' && !empty($prenom)) {
            $prenom = 'prenom = "' . $prenom . '"';
            $returnPrenom = $this->adminModel->Update($prenom, $id);
        } else {
            $returnPrenom = false;
        }

        $number = $data->number;
        if ($number != '' && !empty($number)) {
            $number = 'number= "' . $number . '"';
            $returnNumber = $this->adminModel->Update($number, $id);
        } else {
            $returnNumber = false;
        }

        $adress = $data->adress;
        if ($adress != '' && !empty($adress)) {
            $adress = 'adress= "' . $adress . '"';
            $returnAdress = $this->adminModel->Update($adress, $id);
        } else {
            $returnAdress = false;
        }

        $postCode = $data->postCode;
        if ($postCode != '' && !empty($postCode)) {
            $postCode = 'postcode= "' . $postCode . '"';
            $returnPostcode = $this->adminModel->Update($postCode, $id);
        } else {
            $returnPostcode = false;
        }

        $state = $data->state;
        if ($state != '' && !empty($state)) {
            $state = 'State= "' . $state . '"';
            $returnState = $this->adminModel->Update($state, $id);
        } else {
            $returnState = false;
        }

        $country = $data->country;
        if ($country != '' && !empty($country)) {
            $country = 'Country= "' . $country . '"';
            $returnCountry = $this->adminModel->Update($country, $id);
        } else {
            $returnCountry = false;
        }

        $role = $data->role;
        if ($role != '' && !empty($role)) {
            $role = 'role= "' . $role . '"';
            $returnRole = $this->adminModel->Update($role, $id);
        } else {
            $returnRole = false;
        }


        if ($returnName || $returnPrenom || $returnNumber || $returnAdress || $returnPostcode || $returnState || $returnCountry || $returnRole) {
            echo json_encode(
                array('message' => 'Role Changed')
            );
        } else {
            echo json_encode(
                array('message' => 'Role Not Changed')
            );
        }
    }
    public function AddUser()
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: POST');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        $data = json_decode(file_get_contents("php://input"));
        $name = $data->name;
        $prenom = $data->prenom;
        $username = $data->username;
        $email = $data->email;
        $password = $data->password;
        $password = password_hash($password,PASSWORD_DEFAULT);;
        $number = $data->number;
        $adress = $data->adress;
        $postcode = $data->postCode;
        $State = $data->state;
        $Country = $data->country;
        $role = $data->role;
        if ($this->adminModel->addUser($name,$prenom,$username, $email, $password, $number,$adress,$postcode,$State,$Country,$role)) {
            echo json_encode(
                array('message' => 'Account Added')
            );
        } else {
            echo json_encode(
                array('message' => 'Account Not Added')
            );
        }
    }
}
