<?php
function afficherDieux(){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM dieu");
    $req->execute();

    return $req->fetchAll();
}

function afficherDieu($NomDieu){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM dieu WHERE '$NomDieu'=NomDieu");
    $req->execute();

    return $req->fetchAll();
}
//ça marche
function supprimerDieu($id_dieu){
    global $bdd;

    $req = $bdd->prepare("DELETE FROM dieu WHERE '$id_dieu'=NomDieu");
    $req->execute();

    return $req->fetchAll();
}
//ça marche
function ajouterDieu($NomDieu, $forme, $representation, $fonction, $img_dieu){
    global $bdd;

    $req = $bdd->prepare("INSERT INTO dieu (NomDieu, forme, representation, fonction, img_dieu) VALUES ('".$NomDieu."', '".$forme."', '".$representation."', '".$fonction."', '".$img_dieu."')");
    $req->execute();

    return $req->fetchAll();
}
//ça marche
function modifierDieu($NomDieu, $forme, $representation, $fonction, $img_dieu){
    global $bdd;

    $req = $bdd->prepare("UPDATE dieu SET forme = '".$forme."', representation = '".$representation."', fonction = '".$fonction."', img_dieu = '".$img_dieu."' WHERE NomDieu = '".$NomDieu."'");
    $req->execute();

    return $req->fetchAll();

}
