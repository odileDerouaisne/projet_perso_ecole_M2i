<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paiement
 *
 * @author Oderouai
 */
class Paiement {
    //ATTRIBUTS
    private $idPaiement;
    private $typeCarte;
    private $numeroCarte;
    private $dateValiditeCarte;
    private $montantPaiement;
    private $idCommande;
    private $datePaiement;
    
    
    //CONSTRUCTEUR
    public function construct($idPaiement, $typeCarte, $numeroCarte, $dateValiditeCarte, $montantPaiemment, $idCommande, $datePaiement) {
        $this->idPaiement =$idPaiement;
        $this->typeCarte = $typeCarte;
        $this->numeroCarte = $numeroCarte;
        $this->dateValiditeCarte = $dateValiditeCarte;
        $this->montantPaiement = $montantPaiemment;
        $this->idCommande = $idCommande;
        $this->datePaiement =$datePaiement;
    }
    
    //METHODES
    function getIdPaiement() {
        return $this->idPaiement;
    }

    function getTypeCarte() {
        return $this->typeCarte;
    }

    function getNumeroCarte() {
        return $this->numeroCarte;
    }

    function getDateValiditeCarte() {
        return $this->dateValiditeCarte;
    }

    function getMontantPaiement() {
        return $this->montantPaiement;
    }

    function getIdCommande() {
        return $this->idCommande;
    }

    function getDatePaiement() {
        return $this->datePaiement;
    }

    function setIdPaiement($idPaiement) {
        $this->idPaiement = $idPaiement;
    }

    function setTypeCarte($typeCarte) {
        $this->typeCarte = $typeCarte;
    }

    function setNumeroCarte($numeroCarte) {
        $this->numeroCarte = $numeroCarte;
    }

    function setDateValiditeCarte($dateValiditeCarte) {
        $this->dateValiditeCarte = $dateValiditeCarte;
    }

    function setMontantPaiement($montantPaiement) {
        $this->montantPaiement = $montantPaiement;
    }

    function setIdCommande($idCommande) {
        $this->idCommande = $idCommande;
    }

    function setDatePaiement($datePaiement) {
        $this->datePaiement = $datePaiement;
    }


}

