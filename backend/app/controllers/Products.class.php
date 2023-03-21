<?php
class Products extends Controller
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }
    public function last4Product()
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');
        
        // Blog selectLast4Product query
        $products_arr = $this->productModel->selectLast4();
        // Get row count
        $num = count($products_arr);        
        // Check if any Product
        if ($num > 0) {
            // Turn to JSON & output
            echo json_encode($products_arr);
        } else {
            // No movies
            echo json_encode(
                array('message' => 'No products Found')
            );
        }

    }
}