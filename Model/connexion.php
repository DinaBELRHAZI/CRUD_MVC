<?php


try {
    $bdd = new PDO("mysql:host=localhost;dbname=egyptesql;charset=utf8", "root", "root");
} catch (Exception $e) {
    die("Erreur bdd non trouvée");
}


