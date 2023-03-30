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
        
        var_dump($id_user,$id_product,$price,$quantity_product);
    }
}