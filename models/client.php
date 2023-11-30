<?php
class Client{
    private $nom;
    private $pasword;
    private $solde;  
    

    
    public function __construct($nom,$pasword,$solde)
    {
        $this->nom = $nom;
        $this->pasword = $pasword;
        $this->solde = $solde;       
        
    }
    public function enregistrerClient()
    {
        global $db;
        $result = false;

        $nom = $this->nom;
        $pasword = $this->pasword;
        $solde = $this->solde;
                
        $requete = "INSERT INTO client (nom, pasword, solde) VALUES (:nom, :pasword, :solde)";

        $statment = $db->prepare($requete);

        $execution = $statment->execute(
            [
                ':nom' => $nom,
                ':pasword' => $pasword,
                ':solde' => $solde                              
            ]
            );
            
        if ($execution){
            $result = true;
        }
        return $result;
    }

    static function getClients(){
        global $db;
        $requete = 'SELECT * FROM client WHERE 1';
        $statment = $db->prepare($requete);
        $execution = $statment->execute([]);
        $Clients = [];
        if ($execution){
            while ($data = $statment->fetch()){
                $Client = new Client($data['nom'],$data['pasword'],$data['solde']);
                array_push($Clients,$Client);
            }
            return $Clients;
        }
        else return [];
    }
    public function getClientId()
    {
        global $db;
        $nom = $this->nom;
        $pasword = $this->pasword;
        $solde = $this->solde;        
        
        $requete = "SELECT id FROM client WHERE nom = :nom AND pasword = :pasword AND solde = :solde" ;
        $statment = $db->prepare($requete);
        $execution = $statment->execute([':nom' => $nom, ':pasword' => $pasword ,':solde'=> $solde]);
    
        if ($execution) {
            $data = $statment->fetch();
            if ($data) {
                return $data['id'];
            }
        }
    
        return null; // Retourne null si aucun enregistrement n'est trouvé
    }
    public static function getClientById($id)
    {
        global $db;
        $requete = "SELECT * FROM client WHERE id = :id";
        $statment = $db->prepare($requete);
        $execution = $statment->execute([':id' => $id]);

        if ($execution) {
            $data = $statment->fetch();
            if ($data) {
                return new Client($data['nom'], $data['pasword'], $data['solde']);
            }
        }

        return null; // Retourne null si aucun enregistrement n'est trouvé
    }

    
   
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of pasword
     */ 
    public function getPasword()
    {
        return $this->pasword;
    }

    
    public function setPasword($pasword)
    {
        $this->pasword = $pasword;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }
   
   

}
?>