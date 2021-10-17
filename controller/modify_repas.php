<?php
    include_once("../model/Repas.php");

    $id_repas = $_POST["id"];
    $nom_repas = $_POST["nom"];
    $prix = $_POST["prix"];
    $categorie = $_POST["categorie"];
    $myRepas = new Repas();
    $myRepas->updateRepas( $id_repas,$nom_repas, $prix, $categorie);

?>