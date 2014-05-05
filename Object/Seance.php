<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Classe
 *
 * @author ArthurC
 */
class Seance {
    
    private $_type;
    private $_contenu; //Todo : Contenu et Nom du fichier;
    private $_poste;
    private $_professeur;
    private $_date;
    private $_matiere;
    private $_classe;
    private $_id;

//Gets
    public function get_type() {
        return $this->_type;
    }

    public function get_poste() {
        return $this->_poste;
    }

    public function get_contenu() {
        return $this->_contenu;
    }

    public function get_professeur() {
        return $this->_professeur;
    }

    public function get_date() {
        return $this->_date;
    }

    public function get_matiere() {
        return $this->_matiere;
    }

    public function get_classe() {
        return $this->_classe;
    }

    public function get_id() {
        return $this->_id;
    }

//Sets
    public function set_contenu($value) {
        $this->_contenu = $value;
    }

    public function set_professeur($value) {
        $this->_professeur = $value;
    }

    public function set_date($value) {
        $this->_date = $value;
    }

    public function set_matiere($value) {
        $this->_matiere = $value;
    }

    public function set_classe($value) {
        $this->_classe = $value;
    }

//Methods
    public function toTab()
    {
        return  array(
                    'id' => $this->_id,
                    'contenu' => null, //retourne le nom du fichier,
                    'poste' => $this->_poste,
                    'professeur' => $this->_professeur,
                    'date' => $this->_date,
                    'matiere' => $this->_matiere,
                    'classe' => $this->_classe,
                    'type' => $this->_type
                );
    }

    private function saveTxt()
    {
        //Sauvegarde le champ "contenu" dans un fichier sur le serveur
        //retourne un booléen : true -> réussi, false -> fail
        return true;
    }

    public function saveSeance()
    {
        //Sauvegarde les donné dans la BDD et appel saveTxt
        //retourne un booléen : true -> réussi, false -> fail
        if ($this->saveTxt())
        {
            return true;
        }
        return false;
    }

    public function deleteSeance()
    {
        //Efface la séance de la base de donnée et le fichier "contenu"
        //retourne un booléen : true -> réussi, false -> fail
        return true;
    }

    public function __construct( $idConstruct, $contenuConstruct, $posteConstruct, $professeurConstruct, $dateConstruct, $matiereConstruct, $classeConstruct, $typeConstruct) {
        $this->_id;
        $this->_contenu;
        $this->_poste;
        $this->_professeur;
        $this->_date;
        $this->_matiere;
        $this->_classe;
        $this->_type;
    }
    
}
