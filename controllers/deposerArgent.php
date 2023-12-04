<?php

    include '../configuration/configuration.php';
    include '../models/client.php';


    $nom = $_POST['nom'];
    $montant = $_POST['montant'];
    
    function deposer_argent($nom, $montant) {
        return Client::deposer_argent( $nom, $montant );
    }
    
    
?>