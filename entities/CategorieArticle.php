<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categorieArticle
 *
 * @author Oderouai
 */
class CategorieArticle {
    //ATTIBUTS
    private $idCategorieArticle;
    private $nomCategorie;
    
    //cCONSTRUCT
    public function construct($idCategorieArticle, $nomCategorie) {
        $this->idCategorieArticle = $idCategorieArticle;
        $this->nomCategorie = $nomCategorie;
    }
    
    function getIdCategorieArticle() {
        return $this->idCategorieArticle;
    }

    function getNomCategorie() {
        return $this->nomCategorie;
    }

    function setIdCategorieArticle($idCategorieArticle) {
        $this->idCategorieArticle = $idCategorieArticle;
    }

    function setNomCategorie($nomCategorie) {
        $this->nomCategorie = $nomCategorie;
    }


}
