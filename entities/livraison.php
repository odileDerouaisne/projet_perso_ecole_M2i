<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of livraison
 *
 * @author Oderouai
 */
class Livraison {
    //ATTIBUTS
    private $idLivraison;
    private $idPaiement;
    private $dateLivraison;
    
    //cCONSTRUCTEUR
    public function construct($idLivraison, $idPaiement, $dateLivraison) {
        $this->idLivraison = $idLivraison;
        $this->idPaiement = $idPaiement;
        $this->dateLivraison = $dateLivraison;
    }
    
    //METHODES
    function getIdLivraison() {
        return $this->idLivraison;
    }

    function getIdPaiement() {
        return $this->idPaiement;
    }

    function getDateLivraison() {
        return $this->dateLivraison;
    }

    function setIdLivraison($idLivraison) {
        $this->idLivraison = $idLivraison;
    }

    function setIdPaiement($idPaiement) {
        $this->idPaiement = $idPaiement;
    }

    function setDateLivraison($dateLivraison) {
        $this->dateLivraison = $dateLivraison;
    }


}
