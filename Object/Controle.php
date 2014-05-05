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
class Controle {

    private $_date;
    private $_horaire;
    private $_professeur;
    private $_classe;
    private $_matiere;
    private $_type;

    public function get_date()
    {
        return $this->_date;
    }

    public function get_horaire()
    {
        return $this->_horaire;
    }

    public function get_professeur()
    {
        return $this->_professeur;
    }

    public function get_classe()
    {
        return $this->_classe;
    }

    public function get_matiere()
    {
        return $this->_matiere;
    }

    public function toTab()
    {
        return  array(
                    'date'      => $this->_date,
                    'horaire'   => $this->_horaire,
                    'professeur'=> $this->_professeur,
                    'classe'    => $this->_classe,
                    'matiere'   => $this->_matiere,
                    'type'      => $this->_type
                );
    }

    public function __construct( $DateConstruct, $HoraireConstruct, $ProfesseurConstruct, $MatiereConstruct)
    {
        $this->_date = $DateConstruct;
        $this->_horaire = $HoraireConstruct;
        $this->_professeur = $ProfesseurConstruct;
        $this->_classe = $MatiereConstruct;
        $this->_type = "controle";
    }
    
}