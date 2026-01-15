<?php
class Bibliothécaire extends Database
{
    private $id;
    private $nom;
    private $email;
    private $passward;
    private $db;
    public function __construct($nom, $email, $passward)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->passward = $passward;
        $this->db = parent::connect();
    }
    public function getPassward()
    {
        return $this->passward;
    }
    public function setPassward($passward)
    {
        $this->passward = $passward;
        return $this;
    }
    public function setnom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    public function getnom($nom)
    {
        return $this->$nom;
    }
    public function getemail($email)
    {
        return $this->$email;
    }
    public function setemail($email)
    {
        $this->$email=$email;
        return $this;
    }
    public function setid($id)
    {
        $this->$id=$id;
        return $this;
    }
    public function getid($id)
    {
        return  $this->$id;
    }
}
