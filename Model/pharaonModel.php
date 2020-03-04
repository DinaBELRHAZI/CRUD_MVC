<?php

function afficherPharaons(){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM pharaon");
    $req->execute();

    return $req->fetchAll();
}

function afficherPharaon($NomPh){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM pharaon WHERE '$NomPh'=NomPh");
    $req->execute();

    return $req->fetchAll();
}
//ça marche
function supprimerPharaon($id_pharaon){
    global $bdd;

    $req = $bdd->prepare("DELETE FROM pharaon WHERE '$id_pharaon'=NomPh");
    $req->execute();

    return $req->fetchAll();
}
//marche pas
function ajouterPharaon($NroDynastie, $NroOrdre, $NomPh, $NomUsuel, $commentPh, $NomDynastie){
    global $bdd;

    $req = $bdd->prepare("INSERT INTO pharaon (NroDynastie, NroOrdre, NomPh, NomUsuel, commentPh, NomDynastie) VALUES ('".$NroDynastie."', '".$NroOrdre."', '".$NomPh."', '".$NomUsuel."', '".$commentPh."', '".$NomDynastie."')");
    $req->execute();

    return $req->fetchAll();
}
//ça marche
function modifierPharaon($NroDynastie, $NroOrdre, $NomPh, $NomUsuel, $commentPh, $NomDynastie){
    global $bdd;

    $req = $bdd->prepare("UPDATE pharaon SET NroOrdre = '".$NroOrdre."',  NomUsuel = '".$NomUsuel."', commentPh = '".$commentPh."', NomDynastie = '".$NomDynastie."' WHERE NomPh = '".$NomPh."'");
    $req->execute();

    return $req->fetchAll();

}