<?php
require "Model/epoqueModel.php";

$listeEpoque = afficherEpoques();

require "View/epoqueView.php";

if(isset($_GET['id'])&&($_GET['action'] == 'delete'))
{

    $id_epoque = ($_GET['id']);
    var_dump($_GET['id']);
    supprimerEpoque($id_epoque);
    header("location:".BASE_URL."/epoque");

}

if(isset($_GET['id']) && ($_GET['action'] == "update"))
{

    require_once "View/modifierEpoqueView.php";
    $NomEpoque = $_GET['id'];
    $NomEpoqueFinal = afficherEpoque($NomEpoque);
    if (isset($_POST['submit']))
    {
        
        $NroEpoque = htmlentities(trim($_POST['NroEpoque']));
        $CommentEp = htmlentities(trim($_POST['CommentEp']));
        $NomEpoque = htmlentities(trim($_POST[ 'NomEpoque']));
        // $target_dir = "photos/";
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomLieu.".jpg");
        modifierEpoque($NroEpoque, $NomEpoque, $CommentEp);
        header("location:" . BASE_URL . "/epoque");
    }

}

if(isset($_GET['action']) && ($_GET['action'] == "add"))
{

    require_once "View/ajouterEpoqueView.php";
    if(isset($_POST['submit']))
    {
        $NroEpoque = htmlentities(trim($_POST['NroEpoque']));
        $CommentEp = htmlentities(trim($_POST['CommentEp']));
        $NomEpoque = htmlentities(trim($_POST[ 'NomEpoque']));
        // $target_dir = "photos/";
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomLieu.".jpg");
        ajouterEpoque($NroEpoque, $NomEpoque, $CommentEp);
        header("location:".BASE_URL."/epoque");
    }


}

