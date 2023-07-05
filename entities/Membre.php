<?php

class Membre{

     private $id_membre;
     private $pseudo;
     private $mdp;
     private $nom;
     private $prenom;
     private $email;
     private $civilite;
     private $statut;
     private $date_enregistrement;

     
     

     /**
      * Get the value of id_membre
      */
     public function getIdMembre()
     {
          return $this->id_membre;
     }

     /**
      * Set the value of id_membre
      */
     public function setIdMembre($id_membre): self
     {
          $this->id_membre = $id_membre;

          return $this;
     }

     /**
      * Get the value of pseudo
      */
     public function getPseudo()
     {
          return $this->pseudo;
     }

     /**
      * Set the value of pseudo
      */
     public function setPseudo($pseudo): self
     {
          $this->pseudo = $pseudo;

          return $this;
     }

     /**
      * Get the value of mdp
      */
     public function getMdp()
     {
          return $this->mdp;
     }

     /**
      * Set the value of mdp
      */
     public function setMdp($mdp): self
     {
          $this->mdp = $mdp;

          return $this;
     }

     /**
      * Get the value of nom
      */
     public function getNom()
     {
          return $this->nom;
     }

     /**
      * Set the value of nom
      */
     public function setNom($nom): self
     {
          $this->nom = $nom;

          return $this;
     }

     /**
      * Get the value of prenom
      */
     public function getPrenom()
     {
          return $this->prenom;
     }

     /**
      * Set the value of prenom
      */
     public function setPrenom($prenom): self
     {
          $this->prenom = $prenom;

          return $this;
     }

     /**
      * Get the value of email
      */
     public function getEmail()
     {
          return $this->email;
     }

     /**
      * Set the value of email
      */
     public function setEmail($email): self
     {
          $this->email = $email;

          return $this;
     }

     /**
      * Get the value of civilite
      */
     public function getCivilite()
     {
          return $this->civilite;
     }

     /**
      * Set the value of civilite
      */
     public function setCivilite($civilite): self
     {
          $this->civilite = $civilite;

          return $this;
     }

     /**
      * Get the value of statut
      */
     public function getStatut()
     {
          return $this->statut;
     }

     /**
      * Set the value of statut
      */
     public function setStatut($statut): self
     {
          $this->statut = $statut;

          return $this;
     }

     /**
      * Get the value of date_enregistrement
      */
     public function getDateEnregistrement()
     {
          return $this->date_enregistrement;
     }

     /**
      * Set the value of date_enregistrement
      */
     public function setDateEnregistrement($date_enregistrement): self
     {
          $this->date_enregistrement = $date_enregistrement;

          return $this;
     }
}