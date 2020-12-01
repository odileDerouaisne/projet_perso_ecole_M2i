<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lignePanier
 *
 * @author Oderouai
 */
class LignePanier {
    //ATRIBUTS
    private $idPanier;
    private $idArticle;
    private $idClient;
    private $quantiteArticle;
    
    //CONSTRUCTEUR
    public function construct($idPanier, $idArticle, $idClient, $quantiteArticle) {
        $this->idPanier = $idPanier;
        $this->idArticle = $idArticle;
        $this->idClient = $idClient;
        $this->quantiteArticle = $quantiteArticle;
             
    }
    
    //METHODES
    function getIdPanier() {
        return $this->idPanier;
    }

    function getIdArticle() {
        return $this->idArticle;
    }

    function getIdClient() {
        return $this->idClient;
    }

    function getQuantiteArticle() {
        return $this->quantiteArticle;
    }

    function setIdPanier($idPanier) {
        $this->idPanier = $idPanier;
    }

    function setIdArticle($idArticle) {
        $this->idArticle = $idArticle;
    }

    function setIdClient($idClient) {
        $this->idClient = $idClient;
    }

    function setQuantiteArticle($quantiteArticle) {
        $this->quantiteArticle = $quantiteArticle;
    }


}
