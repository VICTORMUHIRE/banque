<?php
include '../configuration/configuration.php';
include '../models/client.php';


function getListeClient(){
    return Client::getClients();
}

// function getClientId(){
//     return Client::getClientIdByInfo();
// }
// function getClientById($id){
//     return Client::getClientById($id);
// }
?>
?>
