<?php

/*
 * DTO de la table article de la BD weline_1
 * 
 * 
 */

/**
 * Description of articles
 *
 * @author Oderouai
 */
class Article {

    //ATTRIBUTS
    private $idArticle;
    private $designationArticle;
    private $prixArticle;
    private $photoArticle;
    private $taille;
    private $idCategorieArticle;

    //CONSTRUCTEUR
    public function __construct($idArticle="", $designationArticle="", $prixArticle="", $photoArticle="", $taille="", $idCategorieArticle="") {
        
        $this->idArticle = $idArticle;
        $this->designationArticle = $designationArticle;
        $this->prixArticle = $prixArticle;
        $this->photoArticle = $photoArticle;
        $this->taille = $taille;
        $this->idCategorieArticle = $idCategorieArticle;
    }

    //METHODEs
    
    function getIdArticle() {
        return $this->idArticle;
    }

    function getDesignationArticle() {
        return $this->designationArticle;
    }

    function getPrixArticle() {
        return $this->prixArticle;
    }

    function getPhotoArticle() {
        return $this->photoArticle;
    }

    function getTaille() {
        return $this->taille;
    }

    function getIdCategorieArticle() {
        return $this->idCategorieArticle;
    }

    function setIdArticle($idArticle) {
        $this->idArticle = $idArticle;
    }

    function setDesignationArticle($designationArticle) {
        $this->designationArticle = $designationArticle;
    }

    function setPrixArticle($prixArticle) {
        $this->prixArticle = $prixArticle;
    }

    function setPhotoArticle($photoArticle) {
        $this->photoArticle = $photoArticle;
    }

    function setTaille($taille) {
        $this->taille = $taille;
    }

    function setIdCategorieArticle($idCategorieArticle) {
        $this->idCategorieArticle = $idCategorieArticle;
    }


}
