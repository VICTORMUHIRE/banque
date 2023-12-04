<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>depot</title>
</head>
<body>
    
    <div class="container">
        <div class="head">
            <p>Faire un retrait</p>
        </div>
        <div class="container-child1 container-child">
            <form action="../controllers/retirerArgent.php" method="POST">                                 
                <div class="div2 div3">
                    <div>
                        <input class="input2" type="text" name="nom" required>
                        <span  class="span1">Nom</span>
                    </div>
                    
                    <div>
                        <input class="input2" type="number" name="montant" required>
                        <span  class="span1">montant</span>
                    </div>
                    
                    <div>
                        <button type="submit" value="Envoyer">Retirer</button>
                    </div>
                    
                </div>
                           
            </form>            
        </div>
    </div>


  
</body>
</html>