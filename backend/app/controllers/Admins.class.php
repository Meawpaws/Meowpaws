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
            $returnName = $this->adminModel->Update('users',$name, 'id_u ='. $id);
        } else {
            $returnName = false;
        }

        $prenom = $data->prenom;
        if ($prenom != '' && !empty($prenom)) {
            $prenom = 'prenom = "' . $prenom . '"';
            $returnPrenom = $this->adminModel->Update('users',$prenom, 'id_u ='. $id);
        } else {
            $returnPrenom = false;
        }

        $number = $data->number;
        if ($number != '' && !empty($number)) {
            $number = 'number= "' . $number . '"';
            $returnNumber = $this->adminModel->Update('users',$number, 'id_u ='. $id);
        } else {
            $returnNumber = false;
        }

        $adress = $data->adress;
        if ($adress != '' && !empty($adress)) {
            $adress = 'adress= "' . $adress . '"';
            $returnAdress = $this->adminModel->Update('users',$adress, 'id_u ='. $id);
        } else {
            $returnAdress = false;
        }

        $postCode = $data->postCode;
        if ($postCode != '' && !empty($postCode)) {
            $postCode = 'postcode= "' . $postCode . '"';
            $returnPostcode = $this->adminModel->Update('users',$postCode, 'id_u ='. $id);
        } else {
            $returnPostcode = false;
        }

        $state = $data->state;
        if ($state != '' && !empty($state)) {
            $state = 'State= "' . $state . '"';
            $returnState = $this->adminModel->Update('users',$state, 'id_u ='. $id);
        } else {
            $returnState = false;
        }

        $country = $data->country;
        if ($country != '' && !empty($country)) {
            $country = 'Country= "' . $country . '"';
            $returnCountry = $this->adminModel->Update('users',$country, 'id_u ='. $id);
        } else {
            $returnCountry = false;
        }

        $role = $data->role;
        if ($role != '' && !empty($role)) {
            $role = 'role= "' . $role . '"';
            $returnRole = $this->adminModel->Update('users',$role, 'id_u ='. $id);
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
    public function UpdateItem($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: PUT');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        $data = json_decode(file_get_contents("php://input"));

        $name = $data->name;
        if ($name != '' && !empty($name)) {
            $name = 'pname = "' . $name . '"';
            $returnName = $this->adminModel->Update('product',$name, 'id_p ='. $id);
        } else {
            $returnName = false;
        }

        $category = $data->category;
        if ($category != '' && !empty($category)) {
            $category = 'id_c= "' . $category . '"';
            $returnCategory = $this->adminModel->Update('product',$category, 'id_p ='. $id);
        } else {
            $returnCategory = false;
        }

        $description = $data->description;
        if ($description != '' && !empty($description)) {
            $description = 'description= "' . $description . '"';
            $returnDescription = $this->adminModel->Update('product',$description, 'id_p ='. $id);
        } else {
            $returnDescription = false;
        }

        $price = $data->price;
        if ($price != '' && !empty($price)) {
            $price = 'price= "' . $price . '"';
            $returnPrice = $this->adminModel->Update('product',$price, 'id_p ='. $id);
        } else {
            $returnPrice = false;
        }

        if ($returnName || $returnCategory || $returnDescription || $returnPrice) {
            echo json_encode(
                array('message' => 'Item Changed')
            );
        } else {
            echo json_encode(
                array('message' => 'Item Not Changed')
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
    public function Product($id){
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        $product = [
            'infoProduct' => $this->adminModel->selectProduct($id),
            'images' => $this->adminModel->selectByIdProductImages($id),
            'categories' => $this->adminModel->selectAllCategory()
        ];
        if ($product) {
            echo json_encode(
                array(
                    'message' => 'Product Info',
                    'result' => $product
                )
            );
        } else {
            echo json_encode(
                array('message' => 'Didn\'t Product Info')
            );
        }
    }
    public function ImagesProduct($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        $imgPricipal = $this->adminModel->selectImagePrincipal($id);
        $imgsSeconder = $this->adminModel->selectImagesSeconder($id);

        $product = [
            'imgPricipal' => $imgPricipal,
            'imgsSeconder' => $imgsSeconder
        ];
        if ($product) {
            echo json_encode(
                array(
                    'message' => 'Product Images',
                    'result' => $product
                )
            );
        } else {
            echo json_encode(
                array('message' => 'Didn\'t Product Images')
            );
        }
    }
    public function ImageProduct($id_i)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');
        
        $img = $this->adminModel->ImageProduct($id_i);

        if ($img) {
            echo json_encode(
                array(
                    'message' => 'Product Images',
                    'result' => $img
                )
            );
        } else {
            echo json_encode(
                array('message' => 'Didn\'t Product Images')
            );
        }
    }
    public function UpdatePrincipalImage($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: PUT');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        $data = json_decode(file_get_contents("php://input"));

        $name = $data->file;
        if ($name != '' && !empty($name)) {
            $name = 'imagePricipal= "' . $name . '"';
            $returnName = $this->adminModel->Update('product',$name, 'id_p ='. $id);
        } else {
            $returnName = false;
        }

        if ($returnName) {
            echo json_encode(
                array('message' => 'Item Changed')
            );
        } else {
            echo json_encode(
                array('message' => 'Item Not Changed')
            );
        }
    }
    public function UpdateSecondeImage($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: PUT');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        $data = json_decode(file_get_contents("php://input"));

        $name = $data->file;
        if ($name != '' && !empty($name)) {
            $name = 'Image= "' . $name . '"';
            $returnName = $this->adminModel->Update('picturesproduct',$name, 'id_i ='. $id);
        } else {
            $returnName = false;
        }

        if ($returnName) {
            echo json_encode(
                array('message' => 'Item Changed')
            );
        } else {
            echo json_encode(
                array('message' => 'Item Not Changed')
            );
        }
    }
    public function deleteSecondeImage($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');


        $return = $this->adminModel->deleteV2('picturesproduct', 'id_i ='. $id);

        if ($return) {
            echo json_encode(
                array('message' => 'Image Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'Image Not Deleted')
            );
        }
    }
    public function AddSecondeImage($id_p)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: POST');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

        $data = json_decode(file_get_contents("php://input"));

        $name = $data->file;

        if ($name != '' && !empty($name)) {
            $table = 'picturesproduct ';
            $varSql = '(`image`, `id_p`) ';
            $valSql = '("'.$name.'","'.$id_p.'") ';
            $returnName = $this->adminModel->InsertInto($table,$varSql,$valSql);
            $imgLast = $this->adminModel-> fetchLastImageSeconderAdded();
            $imgLastId = $imgLast->id_i;
        } else {
            $returnName = false;
        }

        if ($returnName) {
            echo json_encode(
                array(
                    'message' => 'Item Added',
                    'result' => $imgLastId
                    )
            );
        } else {
            echo json_encode(
                array('message' => 'Item Not Added')
            );
        }
    }
    public function getCategories()
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');


        $categories = $this->adminModel->selectAllCategory();

        if (!empty($categories) && $categories != false) {
            echo json_encode(
                array(
                    'message' => 'Categories Isset',
                    "result" => $categories
                    )
            );
        } else {
            echo json_encode(
                array('message' => 'Categories Not Isset')
            );
        }
    }
    public function AddItem()
    {
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Method: POST');
    header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');

    $data = json_decode(file_get_contents("php://input"));
    var_dump($data);
}
}
