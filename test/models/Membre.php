<?php
class Membre extends Database
{
    private $id;
    private $nom;
    private $email;
    private $data;
    private $id_Livre;
    private $db;
    public function __construct($nom, $email, $id_Livre)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->id_Livre = $id_Livre;
        $this->db = parent::connect();
    }
    public function getId_Livre()
    {
        return $this->id_Livre;
    }
    public function setId_Livre($id_Livre)
    {
        $this->id_Livre = $id_Livre;

        return $this;
    }
    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
