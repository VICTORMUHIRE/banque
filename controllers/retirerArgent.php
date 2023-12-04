<?php

    include '../configuration/configuration.php';
    include '../models/client.php';


    $nom = $_POST['nom'];
    $montant = $_POST['montant'];
    
    function retirer_argent($nom, $montant) {
        return Client::retirer_argent( $nom, $montant );
    }
    
    
?>