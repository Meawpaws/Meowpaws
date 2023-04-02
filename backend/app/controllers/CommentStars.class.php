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
        echo 'fgh';
    }
}
?>
<!-- // Spécifiez le dossier cible pour les images
$target_dir = "images/";

// Parcourez chaque fichier téléchargé
foreach ($_FILES["file"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        // Obtenez le nom et l'extension du fichier
        $name = basename($_FILES["file"]["name"][$key]);
        $extension = pathinfo($name, PATHINFO_EXTENSION);

        // Générez un nom de fichier unique pour éviter les collisions
        $filename = uniqid() . "." . $extension;

        // Déplacez le fichier téléchargé vers le dossier cible
        move_uploaded_file($_FILES["file"]["tmp_name"][$key], $target_dir . $filename);
    }
} -->