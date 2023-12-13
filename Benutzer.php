<?php

require 'Lib/db.data.php';

class Benutzer {
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password, $id=null) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public static function benutzerFactoryWithoutID($name, $email, $password)
    {
        return new Benutzer($name, $email, $password);
    }

    public static function benutzerFactory($id, $name, $email, $password)
    {
        return new Benutzer($id, $name, $email, $password);
    }

    public static function login($e, $p){

        $benutzer = getBenutzer($e, $p);

        if($benutzer != null){
            return true;
        } else {
             return false;
        }
    }
    public static function logout(){
        header('Location:index.php');
    }

    public function getId() {
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

}