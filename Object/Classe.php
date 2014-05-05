<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Classe
 *
 * @author AntoineD
 */
class Classe {

    private $_id;
    private $_libelle;
    private $_type;
    
    public function get_id() {
        return $this->_id;
    }

    public function get_libelle() {
        return $this->_libelle;
    }

    public function get_type(){
        return $this->type;
    }

    public function __construct( $idConstruct, $LibelleConstruct) {
        $this->_id = $idConstruct;
        $this->_Libelle = $LibelleConstruct;
        $this->_type = "classe";
    }
    
}
