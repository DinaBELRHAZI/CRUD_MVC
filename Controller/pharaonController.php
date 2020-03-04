<?php
require "Model/pharaonModel.php";

$listePharaon = afficherPharaons();

require "View/pharaonView.php";

if(isset($_GET['id'])&&($_GET['action'] == 'delete'))
{

    $id_pharaon = ($_GET['id']);
    var_dump($_GET['id']);
    supprimerPharaon($id_pharaon);
    header("location:".BASE_URL."/pharaon");

}

if(isset($_GET['id']) && ($_GET['action'] == "update"))
{

    require_once "View/modifierPharaonView.php";
    $NomPharaon = $_GET['id'];
    $NomPharaonFinal = afficherPharaon($NomPharaon);
    if (isset($_POST['submit']))
    {
        $NroDynastie = htmlentities(trim($_POST['NroDynastie']));
        $NroOrdre = htmlentities(trim($_POST['NroOrdre']));
        $NomPh = htmlentities(trim($_POST['NomPh']));
        $NomUsuel = htmlentities(trim($_POST['NomUsuel']));
        $commentPh = htmlentities(trim($_POST[ 'commentPh']));
        $NomDynastie = htmlentities(trim($_POST[ 'NomDynastie']));
        // $target_dir = "photos/";
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomLieu.".jpg");
        modifierPharaon($NroDynastie, $NroOrdre, $NomPh, $NomUsuel, $commentPh, $NomDynastie);
        header("location:" . BASE_URL . "/pharaon");
    }

}

if(isset($_GET['action']) && ($_GET['action'] == "add"))
{

    require_once "View/ajouterPharaonView.php";
    if(isset($_POST['submit']))
    {
        $NroDynastie = htmlentities(trim($_POST['NroDynastie']));
        $NroOrdre = htmlentities(trim($_POST['NroOrdre']));
        $NomPh = htmlentities(trim($_POST['NomPh']));
        $NomUsuel = htmlentities(trim($_POST['NomUsuel']));
        $commentPh = htmlentities(trim($_POST[ 'commentPh']));
        $NomDynastie = htmlentities(trim($_POST[ 'NomDynastie']));
        // $target_dir = "photos/";
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomLieu.".jpg");
        ajouterPharaon($NroDynastie, $NroOrdre, $NomPh, $NomUsuel, $commentPh, $NomDynastie);
        header("location:".BASE_URL."/pharaon");
    }


}