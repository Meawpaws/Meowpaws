<?php
class Cards extends Controller
{
    private $cartModel;
    public function __construct()
    {
        $this->cartModel = $this->model('Card');
    }
    public function Insert()
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: POST');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');        

        $data = json_decode(file_get_contents("php://input"));

        $id_user = $data->id_user;
        $id_product = $data->id_product;
        $price_product = $data->price_product;
        $quantity_product = $data->quantity_product;

        $price_arr1 = explode(':',$price_product);
        $price1 = $price_arr1[1];
        $price_arr2=explode('$',$price1);
        $price = $price_arr2[1];
        $price = $price * $quantity_product;
        
        if($this->cartModel->Add($id_user,$id_product,$price,$quantity_product)) {
            echo json_encode(
            array('message' => 'Added To Card')
            );
        } else {
            echo json_encode(
            array('message' => 'Didn\'t Add To Card')
            );
        }
    }
    public function GetProductByIdUser($id_u)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');     

        $products = $this->cartModel->GetProductByIdUser($id_u);
        if($products) {
            echo json_encode(
            array(
                'message' => 'Products In Card',
                'result' => $products
                )
            );
        } else {
            echo json_encode(
            array('message' => 'Didn\'t Products In Card')
            );
        }
    }
    public function DeleteProductInCard($id_card)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');     

        $return = $this->cartModel->DeleteBuy($id_card);
        if($return) {
            echo json_encode(
            array(
                'message' => 'Products deleted'
                )
            );
        } else {
            echo json_encode(
            array('message' => 'Didn\'t Products delete')
            );
        }
    }
}