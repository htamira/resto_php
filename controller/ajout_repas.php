<?php
    include_once("../model/Repas.php");

    //$id_repas= $_POST["id_repas"];
    $nom_repas= $_POST["nom_repas"];
    $prix= $_POST["prix"];
    $categorie= $_POST["categorie"];

    $myRepas = new Repas();
    $myRepas->ajout_repas($nom_repas,$prix,$categorie);

?>