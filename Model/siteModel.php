<?php

function afficherSites(){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM site");
    $req->execute();

    return $req->fetchAll();
}

function afficherSite($NomSite){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM site WHERE '$NomSite'=NomSite");
    $req->execute();

    return $req->fetchAll();
}
//ça marche
function supprimerSite($id_site){
    global $bdd;

    $req = $bdd->prepare("DELETE FROM site WHERE '$id_site'=NomSite");
    $req->execute();

    return $req->fetchAll();
}
//ça marche
function ajouterSite($NroSite, $NomSite, $NomLieu, $details,$NomDieu){
    global $bdd;

    $req = $bdd->prepare("INSERT INTO site (NomSite, NomLieu, details, NomDieu) VALUES ('".$NomSite."', '".$NomLieu."', '".$details."', '".$NomDieu."')");
    $req->execute();

    return $req->fetchAll();
}
//ça marche 
function modifierSite($NroSite, $NomSite, $NomLieu, $details, $NomDieu){
    global $bdd;

    $req = $bdd->prepare("UPDATE site SET NomSite = '".$NomSite."', NomLieu = '".$NomLieu."', details = '".$details."', NomDieu = '".$NomDieu."' WHERE NroSite = '".$NroSite."'");
    $req->execute();

    return $req->fetchAll();

}
