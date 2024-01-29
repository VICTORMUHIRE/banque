<?php 

include '../configuration/configuration.php';
include '../models/client.php';

function getListeClient(){
    return Client::getClients();
}


if (isset($_POST['submit'])) {
        
    $nom = $_POST['nom'];

    
    global $db;
    $requete = "DELETE FROM client WHERE id = :nom";
    $statment = $db->prepare($requete);
    $execution = $statment->execute([":nom"=> $nom]);

    header("location: client.php");
    

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>supprimer</title>
</head>
<body>
    
    <div class="container">
        <div class="head">
            <p>supprimer un Client</p>
        </div>
        <div class="container-child1 container-child">
            <form action="" method="POST">                                 
                <div class="flex">
                    <div class="flex">

                        <span  class="span1">Nom</span>
                        <select class="input1" name="nom" required>                                
                            <?php
                                foreach ($clients = getListeClient() as $client) {
                                    echo "<option value='" . $client->getNom() . "'>" . $client->getNom() . "</option>";
                                }
                                ?>
                        </select>
                        
                    </div>                    
                    
                    <div>
                        <button class="submit" value="Envoyer">supprimer</button>
                    </div>
                    
                </div>
                           
            </form>            
        </div>
    </div>  
</body>
</html>