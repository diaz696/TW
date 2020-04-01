<?php

class Administrador{
    
    private $nickname;
    private $password;

    public function __construct($nick,$pass){
        $this -> nickname= $nick;
        $this -> password= $pass;
    } 
    
    function getNickname() {
        return $this->nickname;
    }

    function getPassword() {
        return $this->password;
    }

    function setNickname($nickname) {
        $this->nickname = $nickname;
    }

    function setPassword($password) {
        $this->password = $password;
    }

}
