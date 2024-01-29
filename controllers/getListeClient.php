<?php
include '../configuration/configuration.php';
include '../models/client.php';


function getListeClient(){
    return Client::getClients();
}
?>

