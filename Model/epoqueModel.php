<?php
// tout marche
function afficherEpoques(){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM epoque");
    $req->execute();

    return $req->fetchAll();
}

function afficherEpoque($NomEpoque){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM epoque WHERE '$NomEpoque'=NomEpoque");
    $req->execute();

    return $req->fetchAll();
}

function supprimerEpoque($id_epoque){
    global $bdd;

    $req = $bdd->prepare("DELETE FROM epoque WHERE '$id_epoque'=NomEpoque");
    $req->execute();

    return $req->fetchAll();
}

function ajouterEpoque($NroEpoque, $NomEpoque, $CommentEp){
    global $bdd;

    $req = $bdd->prepare("INSERT INTO epoque ( NomEpoque, CommentEp) VALUES ('".$NomEpoque."', '".$CommentEp."')");
    $req->execute();

    return $req->fetchAll();
}

function modifierEpoque($NroEpoque, $NomEpoque, $CommentEp){
    global $bdd;

    $req = $bdd->prepare("UPDATE epoque SET NomEpoque = '".$NomEpoque."', CommentEp = '".$CommentEp."' WHERE NroEpoque = '".$NroEpoque."'");
    $req->execute();

    return $req->fetchAll();

}
