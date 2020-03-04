<?php
require "Model/siteModel.php";

$listeSite = afficherSites();

require "View/siteView.php";

if(isset($_GET['id'])&&($_GET['action'] == 'delete'))
{

    $id_site = ($_GET['id']);
    var_dump($_GET['id']);
    supprimerSite($id_site);
    header("location:".BASE_URL."/site");

}

if(isset($_GET['id']) && ($_GET['action'] == "update"))
{

    require_once "View/modifierSiteView.php";
    $NomSite = $_GET['id'];
    $NomSiteFinal = afficherSite($NomSite);
    if (isset($_POST['submit']))
    {
        $NroSite = htmlentities(trim($_POST['NroSite']));
        $NomSite = htmlentities(trim($_POST['NomSite']));
        $NomLieu = htmlentities(trim($_POST['NomLieu']));
        $details = htmlentities(trim($_POST[ 'details']));
        $NomDieu = htmlentities(trim($_POST['NomDieu']));
        // $target_dir = "photos/";
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomSite.".jpg");
        modifierSite($NroSite, $NomSite, $NomLieu, $details, $NomDieu);
        header("location:" . BASE_URL . "/site");
    }

}

if(isset($_GET['action']) && ($_GET['action'] == "add"))
{

    require_once "View/ajouterSiteView.php";
    if(isset($_POST['submit']))
    {
        $NroSite = htmlentities(trim($_POST['NroSite']));
        $NomSite = htmlentities(trim($_POST['NomSite']));
        $NomLieu = htmlentities(trim($_POST['NomLieu']));
        $details = htmlentities(trim($_POST[ 'details']));
        $NomDieu = htmlentities(trim($_POST['NomDieu']));
        // $target_dir = "photos/";
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomSite.".jpg");
        ajouterSite($NroSite, $NomSite, $NomLieu, $details,$NomDieu);
        header("location:".BASE_URL."/site");
    }


}

