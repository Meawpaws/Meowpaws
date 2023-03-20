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
        $result = $this->productModel->selectLast4();
        // Get row count
        $num = $result->rowCount();

        // Check if any Product
        if ($num > 0) {
            // product array
            $products_arr = array();

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                $product_item = array(
                    'id' => $id,
                    'name' => $name,
                    'time' => $time,
                    'place_price' => $place_price,
                    'hall_name' => $hall_name,
                    'image' => $image
                );

                // Push to "data"
                array_push($products_arr, $product_item);
            }
            var_dump($products_arr);
            die;
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