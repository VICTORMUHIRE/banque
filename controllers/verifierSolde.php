<?php
include '../configuration/configuration.php';
include '../models/client.php';

$traitementEffectue = false; // Variable de drapeau pour indiquer si le traitement est effectué

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis, effectuez le traitement
    $nom = $_POST['nom'];
    $solde = Client::verifier_solde($nom);

    
    $traitementEffectue = true; // Marquez que le traitement est effectué
    header("Location:../views/solde.php");
}

?>