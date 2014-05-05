<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilisateur
 *
 * @author AntoineD
 */
class Utilisateur {
    private $_id;
    private $_login;
    private $_password;
    private $_email;
    private $_type;
    public function get_id() {
        return $this->_id;
    }

    public function get_login() {
        return $this->_login;
    }

    public function get_password() {
        return $this->_password;
    }

    public function get_email() {
        return $this->_email;
    }

    public function set_login($_login) {
        $this->_login = $_login;
    }

    public function set_email($_email) {
        $this->_email = $_email;
    }

    function __construct($_id, $_login, $_password, $_email, $_type) {
        $this->_id = $_id;
        $this->_login = $_login;
        $this->_password = $_password;
        $this->_email = $_email;
        $this->_type = $_type;
    }
    
    public function GenererPassword(){
        $characts   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';   
        $characts   .= '1234567890'; 
        $newPassword = '';
 
        for($i=0;$i < 6;$i++)
        {
             $newPassword .= substr($characts,rand()%(strlen($characts)),1);
        }
        $this->_password = $newPassword;
    }

}
