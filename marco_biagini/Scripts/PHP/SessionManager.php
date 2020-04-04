<?php
session_start();

function save_login($login){
	$_SESSION["login"]= $login;
    session_write_close();
}

class login{
    public $logged;
    public $username;

    function set_name($username){
        $this->username = $username;
    }
    function get_name(){
        return $this->username;
    }
    
    function set_logged($logged){
        $this->logged = $logged;
    }
    function get_logged(){
        return $this->logged;
    }

    function __construct($username, $logged){
        $this->username = $username;
        $this->logged = $logged;
    }
}

?>