<?php 

include '../configuration/configuration.php';
include '../models/client.php';


if(isset($_GET["id"])){
    $id = $_GET["id"];

    
    global $db;
    $requete = "DELETE FROM client WHERE id = :id";
    $statment = $db->prepare($requete);
    $execution = $statment->execute([":id"=> $id]);

    header("location: home.php");
    

}

?>