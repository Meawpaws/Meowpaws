<?php
class Products extends Controller
{
    private $productModel;
    private $commentStarModel;
    public function __construct()
    {
        $this->productModel = $this->model('Product');
        $this->commentStarModel = $this->model('CommentStar');
    }
    public function All()
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');
        
        // Blog selectLast4Product query
        $products_arr = $this->productModel->selectAll();
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
    public function AllByCategory($category)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');
        
        // Blog selectLast4Product query
        $products_arr = $this->productModel->selectByCategory($category);
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
    public function view($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: GET');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');
        
        // Blog selectByIdProductCategory query
        $productsCategory_arr = $this->productModel->selectByIdProductCategory($id);
        // Blog selectByIdProductImages query
        $productsImages_arr = $this->productModel->selectByIdProductImages($id);
        // Blog selectByIdStars query
        $selectByIdStars = $this->productModel->selectByIdStars($id);
        // Blog selectByProductId query
        $selectByProductId = $this->commentStarModel->selectByProductId($id);
        $imagesComments=[];
        for ($i=0; $i < count($selectByProductId); $i++) { 
            $id_cs = $selectByProductId[$i]->id_cs;
            $imagesComment = $this->commentStarModel->selectImagesCommentById_cs($id_cs);
            array_push($imagesComments,$imagesComment);
        }
        // Check if any Product
        if ($productsCategory_arr != null) {
            $productsCategory_arr = $productsCategory_arr[0];
            $product = [
                'info'=>$productsCategory_arr,
                'images'=>$productsImages_arr,
                'stars'=>$selectByIdStars,
                'comment'=>$selectByProductId,
                'imagesComment' => $imagesComments
            ];   
            // Turn to JSON & output
            echo json_encode($product);
        } else {
            // No movies
            echo json_encode(
                array('message' => 'No products Found')
            );
        }
    }
}