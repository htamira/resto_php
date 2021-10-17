<?php
    include_once("../model/Repas.php");

    $id_repas= $_POST["id"];
    $myRepas = new Repas();
    $myRepas->delete_repas($id_repas);

?>