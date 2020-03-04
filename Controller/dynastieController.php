<?php
require "Model/dynastieModel.php";

$listeDynastie = afficherDynasties();

require "View/dynastieView.php";

if(isset($_GET['id'])&&($_GET['action'] == 'delete'))
{

    $id_dynastie = ($_GET['id']);
    var_dump($_GET['id']);
    supprimerDynastie($id_dynastie);
    header("location:".BASE_URL."/dynastie");

}

if(isset($_GET['id']) && ($_GET['action'] == "update"))
{
    var_dump($_POST);

    require_once "View/modifierDynastieView.php";
    $NomDynastie = $_GET['id'];
    $NomDynastieFinal = afficherDynastie($NomDynastie);
    if (isset($_POST['submit']))
    {
        
        $NroDynastie = htmlentities(trim($_POST['NroDynastie']));
        $NomDynastie = htmlentities(trim($_POST['NomDynastie']));
        $DebDynastie = htmlentities(trim($_POST[ 'DebDynastie']));
        $FinDynastie = htmlentities(trim($_POST[ 'FinDynastie']));
        $NroEpoque = htmlentities(trim($_POST[ 'NroEpoque']));
        // $target_dir = "photos/";
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomLieu.".jpg");
        modifierDynastie($NroDynastie, $NomDynastie, $DebDynastie, $FinDynastie, $NroEpoque);
        header("location:" . BASE_URL . "/dynastie");
    }

}

if(isset($_GET['action']) && ($_GET['action'] == "add"))
{

    require_once "View/ajouterDynastieView.php";
    if(isset($_POST['submit']))
    {
        $NroDynastie = htmlentities(trim($_POST['NroDynastie']));
        $NomDynastie = htmlentities(trim($_POST['NomDynastie']));
        $DebDynastie = htmlentities(trim($_POST[ 'DebDynastie']));
        $FinDynastie = htmlentities(trim($_POST[ 'FinDynastie']));
        $NroEpoque = htmlentities(trim($_POST[ 'NroEpoque']));
        // $target_dir = "photos/";
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomLieu.".jpg");
        ajouterDynastie($NroDynastie, $NomDynastie, $DebDynastie, $FinDynastie, $NroEpoque);
        header("location:".BASE_URL."/dynastie");
    }


}

