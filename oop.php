<?php

class client {
    public $full_name;
    private $username;
    private $email;
    private $password;
    public $adresse;
    public $ville;
    public $phone;

    
    public function getUsername()
    {
        return $this->username;
    }
 
    public function getPassword()
    {
        return $this->password;
    }
 
    public function getEmail()
    {
        return $this->email;
    }
}

// class command {
//     private $command_id;
//     private $client_username;
//     public $createDate;
//     public $envoiDate;
//     public $livraisonDate;
//     public $totalPrice;

//     public function __construct() {
//         $temp = new client();
//         $this->client_username = $temp->getUsername();
//     }
 
//     public function getCommand_id()
//     {
//         return $this->command_id;
//     }
 
//     public function getClient_username()
//     {
//         return $this->client_username;
//     }
// }

class product {
    private $reference;
    public $etiquette;
    public $descpt;
    private $codeBarre;
    public $img;
    private $prixAchat;
    public $prixFinal;
    public $prixOffre;
    public $qntMin;
    public $qntStock;
    public $catg;
    private $isHide;

    public function getReference()
    {
        return $this->reference;
    } 
    public function getCodeBarre()
    {
        return $this->codeBarre;
    } 
    public function getPrixAchat()
    {
        return $this->prixAchat;
    } 
    public function getIsHide()
    {
        return $this->isHide;
    }

    public function __construct($etiquette, $descpt, $codeBarre, $img, $prixAchat, $prixFinal, $prixOffre, $qntMin, $qntStock, $catg) {
        
        
    }
}

$rr = new client();

?>