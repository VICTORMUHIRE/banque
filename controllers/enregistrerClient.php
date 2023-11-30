<?php

    include '../configuration/configuration.php';
    include '../models/client.php';


    $nom = $_POST['nom'];
    $pasword = $_POST['pasword'];
    $solde = $_POST['solde'];       
    
    $client = new Client ($nom, $pasword, $solde);
    if ($client -> enregistrerClient()){
        header("Location:../views/client.php");
    }
?>