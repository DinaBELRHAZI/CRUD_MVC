<?php
require "Model/dieuModel.php";

$listeDieu = afficherDieux();

require "View/dieuView.php";

if(isset($_GET['id'])&&($_GET['action'] == 'delete'))
{

    $id_dieu = ($_GET['id']);
    var_dump($_GET['id']);
    supprimerDieu($id_dieu);
    header("location:".BASE_URL."/dieu");

}

if(isset($_GET['id']) && ($_GET['action'] == "update"))
{

    require_once "View/modifierDieuView.php";
    $NomDieu = $_GET['id'];
    $NomDieuFinal = afficherDieu($NomDieu);
    if (isset($_POST['submit']))
    {
        $NomDieu = htmlentities(trim($_POST['NomDieu']));
        $forme = htmlentities(trim($_POST['forme']));
        $representation = htmlentities(trim($_POST[ 'representation']));
        $fonction = htmlentities(trim($_POST['fonction']));
        $img_dieu = htmlentities(trim($_POST['img_dieu']));
        $target_dir = "photos/";
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomDieu.".jpg");
        modifierDieu($NomDieu, $forme, $representation, $fonction, $img_dieu);
        header("location:" . BASE_URL . "/dieu");
    }

}

if(isset($_GET['action']) && ($_GET['action'] == "add"))
{

    require_once "View/ajouterDieuView.php";
    if(isset($_POST['submit']))
    {
        $NomDieu = htmlentities(trim($_POST['NomDieu']));
        $forme = htmlentities(trim($_POST['forme']));
        $representation = htmlentities(trim($_POST['representation']));
        $fonction = htmlentities(trim($_POST['fonction']));
        $img_dieu = htmlentities(trim($_POST['img_dieu']));
        $target_dir = "photos/";
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomDieu.".jpg");
        ajouterDieu($NomDieu, $forme, $representation, $fonction, $img_dieu);
        header("location:".BASE_URL."/dieu");
        echo "<div class='alert alert-success' role='alert'>
                    A simple success alert—check it out!
              </div>";

    }


}

