<?php

    include '../configuration/configuration.php';
    include '../models/client.php';


    $nom = $_POST['nom'];
    
    function verifier_solde($nom){
        return Client::verifier_solde( $nom );
    }
    
    
?>