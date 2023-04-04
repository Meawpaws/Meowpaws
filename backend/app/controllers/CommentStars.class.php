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
// // Spécifiez le dossier cible pour les images
// $target_dir = "images/";

// // Parcourez chaque fichier téléchargé
// foreach ($_FILES["file"]["error"] as $key => $error) {
//     if ($error == UPLOAD_ERR_OK) {
//         // Obtenez le nom et l'extension du fichier
//         $name = basename($_FILES["file"]["name"][$key]);
//         $extension = pathinfo($name, PATHINFO_EXTENSION);

//         // Générez un nom de fichier unique pour éviter les collisions
//         $filename = uniqid() . "." . $extension;

//         // Déplacez le fichier téléchargé vers le dossier cible
//         move_uploaded_file($_FILES["file"]["tmp_name"][$key], $target_dir . $filename);
//     }
// }
?>