<?php
// tout marche
function afficherDynasties(){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM dynastie");
    $req->execute();

    return $req->fetchAll();
}

function afficherDynastie($NomDynastie){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM dynastie WHERE '$NomDynastie'=NomDynastie");
    $req->execute();

    return $req->fetchAll();
}
// ça marche
function supprimerDynastie($id_dynastie){
    global $bdd;

    $req = $bdd->prepare("DELETE FROM dynastie WHERE '$id_dynastie'=NomDynastie");
    $req->execute();

    return $req->fetchAll();
}
//ça marche
function ajouterDynastie($NroDynastie, $NomDynastie, $DebDynastie, $FinDynastie, $NroEpoque){
    global $bdd;

    $req = $bdd->prepare("INSERT INTO dynastie ( NomDynastie, DebDynastie, FinDynastie, NroEpoque) VALUES ('".$NomDynastie."', '".$DebDynastie."', '".$FinDynastie."', '".$NroEpoque."')");
    $req->execute();

    return $req->fetchAll();
}
//ça marche
function modifierDynastie($NroDynastie, $NomDynastie, $DebDynastie, $FinDynastie, $NroEpoque){
    global $bdd;

    $req = $bdd->prepare("UPDATE dynastie SET NomDynastie = '".$NomDynastie."', DebDynastie = '".$DebDynastie."', FinDynastie = '".$FinDynastie."', NroEpoque = '".$NroEpoque."' WHERE NroDynastie = '".$NroDynastie."'");
    $req->execute();

    return $req->fetchAll();

}
