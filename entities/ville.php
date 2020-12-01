<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ville
 *
 * @author Oderouai
 */
class Ville {
   //ATTRIBUTS

    private $cpVille;
    private $nomVille;
    private $idPays;
    private $idVille;
    
    //Constructor
    public function __construct($cpVille, $nomVille, $idPays, $idVille) {
        $this->cpVille = $cpVille;
        $this->nomVille = $nomVille;
        $this->idPays = $idPays;
        $this->idVille = $idVille;
    }      
    //METHODES
    function getCpVille() {
        return $this->cpVille;
    }

    function getNomVille() {
        return $this->nomVille;
    }

    function getIdPays() {
        return $this->idPays;
    }

    function getIdVille() {
        return $this->idVille;
    }

    function setCpVille($cpVille) {
        $this->cpVille = $cpVille;
    }

    function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
    }

    function setIdPays($idPays) {
        $this->idPays = $idPays;
    }

    function setIdVille($idVille) {
        $this->idVille = $idVille;
    }


}
