<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pays
 *
 * @author Oderouai
 */
class pays {

    //ATRIBUTS 
    private $idPays;
    private $alpha3;
    private $nomPays;

    //CONSTRUCTEUR
    public function __construct($idPays = "", $alpha3 = "", $nomPays = "") {
        $this->idPays = $idPays;
        $this->alpha3 = $alpha3;
        $this->nomPays = $nomPays;
    }

    //METHODES
    function getIdPays() {
        return $this->idPays;
    }

    function getAlpha3() {
        return $this->alpha3;
    }

    function getNomPays() {
        return $this->nomPays;
    }

    function setIdPays($idPays) {
        $this->idPays = $idPays;
    }

    function setAlpha3($alpha3) {
        $this->alpha3 = $alpha3;
    }

    function setNomPays($nomPays) {
        $this->nomPays = $nomPays;
    }

}
