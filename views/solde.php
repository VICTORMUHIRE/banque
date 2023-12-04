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
            <p>Ajouter un Client</p>
        </div>
        <div class="container-child1 container-child">
            <form action="../controllers/verifierSolde.php" method="POST">                                 
                <div class="div2 div3">
                    <div>
                        <input class="input2" type="text" name="nom" required>
                        <span  class="span1">Nom</span>
                    </div>                    
                    
                    <div>
                        <button type="submit" value="Envoyer">Verifier</button>
                    </div>
                    
                </div>
                           
            </form>            
        </div>
    </div>


  
</body>
</html>