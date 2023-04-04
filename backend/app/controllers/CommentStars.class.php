<?php
class CommentStars extends Controller
{
    private $commentStarModel;
    public function __construct()
    {
        $this->commentStarModel = $this->model('CommentStar');
    }
    public function Insert()
    {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Method: POST');
        header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorisation');        

        $data = json_decode(file_get_contents("php://input"));
        $id_user = $data->id_user;
        $id_produit = $data->id_produit;
        $message = $data->message;
        $stars = $data->stars;
        $file = $data->file;
        if($this->commentStarModel->add($message,$stars,$id_user,$id_produit,$file)) {
            echo json_encode(
            array('message' => 'Review Added')
            );
        } else {
            echo json_encode(
            array('message' => 'Didn\'t Review Added')
            );
        }
    }
}
?>