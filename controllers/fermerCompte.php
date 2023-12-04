<?php

    include '../configuration/configuration.php';
    include '../models/client.php';


    $nom = $_POST['nom'];
    
    function fermer_compte($nom){
        return Client::fermer_compte( $nom );
    }    
    
?>