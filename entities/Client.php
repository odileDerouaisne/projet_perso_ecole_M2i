<?php

/*
 * ClientDAOPOO
 */

/**
 * Description of client
 *
 * @author Oderouai
 */
//Déclaration de la Classe
class Client {
    
    private $idClient;
    private $nomClient;
    private $prenomClient;
    private $adresseClient;
    private $visiteur;
    private $idVille;
    private $emailClient;  
    private $pwdClient;
    private $telephoneClient;
    
    //Constructeur 
    
    public function __construct($idClient, $nomClient, $prenomClient, $adresseClient, $visiteur, $idVille, $emailClient, $pwdClient, $telephoneClient) {
        $this->idClient = $idClient;
        $this->nomClient = $nomClient;
        $this->prenomClient = $prenomClient;
        $this->adresseClient = $adresseClient;
        $this->visiteur = $visiteur;
        $this->idVille = $idVille;
        $this->emailClient = $emailClient;
        $this->pwdClient = $pwdClient;
        $this->telephoneClient = $telephoneClient;
      }
      function getIdClient() {
          return $this->idClient;
      }

      function getNomClient() {
          return $this->nomClient;
      }

      function getPrenomClient() {
          return $this->prenomClient;
      }

      function getAdresseClient() {
          return $this->adresseClient;
      }

      function getVisiteur() {
          return $this->visiteur;
      }

      function getIdVille() {
          return $this->idVille;
      }

      function getEmailClient() {
          return $this->emailClient;
      }

      function getTelephoneClient() {
          return $this->telephoneClient;
      }
      function getPwdClient() {
          return $this->pwdClient;
      }

      function setIdClient($idClient) {
          $this->idClient = $idClient;
      }

      function setNomClient($nomClient) {
          $this->nomClient = $nomClient;
      }

      function setPrenomClient($prenomClient) {
          $this->prenomClient = $prenomClient;
      }

      function setAdresseClient($adresseClient) {
          $this->adresseClient = $adresseClient;
      }

      function setVisiteur($visiteur) {
          $this->visiteur = $visiteur;
      }

      function setIdVille($idVille) {
          $this->idVille = $idVille;
      }
      function setPwdClient($pwdClient) {
           $this->pwdClient = $pwdClient;
      }

      function setEmailClient($emailClient) {
          $this->emailClient = $emailClient;
      }

      function setTelephoneClient($telephoneClient) {
          $this->telephoneClient = $telephoneClient;
      }


      
      
      
}
