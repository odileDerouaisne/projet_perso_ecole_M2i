<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of facture
 *
 * @author Oderouai
 */
class Facture {
    //ATTIBUTS
    private $idFacture;
    private $IdPaiement;
    private $dateFacture;
    
    //CONSTRUCTEUR
    
    public function construct($idFacture, $idPaiement, $dateFacture) {
        $this->idFacture = $idFacture;
        $this->IdPaiement = $idPaiement;
        $this->dateFacture = $dateFacture;
    }
    
    //MEHTODES
    function getIdFacture() {
        return $this->idFacture;
    }

    function getIdPaiement() {
        return $this->IdPaiement;
    }

    function getDateFacture() {
        return $this->dateFacture;
    }

    function setIdFacture($idFacture) {
        $this->idFacture = $idFacture;
    }

    function setIdPaiement($IdPaiement) {
        $this->IdPaiement = $IdPaiement;
    }

    function setDateFacture($dateFacture) {
        $this->dateFacture = $dateFacture;
    }


}
