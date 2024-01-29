

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tarif</title>
</head>
<body>
    
    <div class="container">
        <div class="head">
            <p>verifier le solde</p>
        </div>
        <div class="container-child1 container-child">
            <form action="" method="POST">  
                

                <div class="flex">
                    <div class ="response none">
                        <?php 
                            
                            include '../configuration/configuration.php';
                            include '../models/client.php';
                            
                           
                            function getListeClient(){
                                return Client::getClients();
                            }
                            
                            if (isset($_POST['submit'])) {
        
                                $nom = $_POST['nom'];                          
                            }  

                            if (isset($nom)) {                    

                                $solde = Client::verifier_solde($nom);

                                if ($solde !== "Client introuvable.") {
                                    echo '<div>';
                                    echo 'Le solde de ' . $nom . ' est ' . $solde . '$';
                                    echo '</div>';
                                } else {
                                    echo '<p>' . $solde . '</p>';
                                }

                            }                      
                            

                        
                        ?>
                    </div>
                    <div>
                        <label for="">Nom</label>
                        <select class="input1" name="nom" required>                                
                            <?php
                                foreach ($clients = getListeClient() as $client) {
                                    echo "<option value='" . $client->getNom() . "'>" . $client->getNom() . "</option>";
                                }
                                ?>
                        </select>
                        
                    </div>                    
                    
                    <div>
                        <button class="submit" type="submit" name="submit">Verifier</button>
                    </div>
                </div>
            </form>            
        </div>
    </div>
</body>
</html>

