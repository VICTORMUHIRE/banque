<?php

    include '../configuration/configuration.php';
    include '../models/client.php';


    $nom = $_POST['nom'];
        
    Client::fermer_compte( $nom );
       
    
?>