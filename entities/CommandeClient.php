<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of commandeClient
 *
 * @author Oderouai
 */
class CommandeClient {
    //ATTIBUTS
    
    private $idCommande;
    private $idClient;
    private $montantCommande;
    private $dateCommande;
    
    
    //CONSTRUCTEUR
    public function construct($idCommande, $idClient, $montantCommande, $dateCommande) {
        $this->idCommande = $idCommande;
        $this->idClient = $idClient;
        $this->montantCommande = $montantCommande;
        $this->dateCommande = $dateCommande;
    }
    //METHODES
    function getIdCommande() {
        return $this->idCommande;
    }

    function getIdClient() {
        return $this->idClient;
    }

    function getMontantCommande() {
        return $this->montantCommande;
    }

    function getDateCommande() {
        return $this->dateCommande;
    }

    function setIdCommande($idCommande) {
        $this->idCommande = $idCommande;
    }

    function setIdClient($idClient) {
        $this->idClient = $idClient;
    }

    function setMontantCommande($montantCommande) {
        $this->montantCommande = $montantCommande;
    }

    function setDateCommande($dateCommande) {
        $this->dateCommande = $dateCommande;
    }


}
