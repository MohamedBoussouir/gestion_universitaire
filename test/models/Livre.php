<?php
include_once("Database.php");
class Livre extends Database
{
    public $id;
    public $titre;
    public $descriptin;
    public $data_Livre;
    private $db;
    private $emprunt_id;
    public function __construct($titre, $descriptin, $data_Livre, $emprunt_id)
    {
        $this->titre = $titre;
        $this->descriptin = $descriptin;
        $this->data_Livre = $data_Livre;
        $this->emprunt_id = $emprunt_id;
        $this->db = parent::connect();
    }
    public function getEmprunt_id()
    {
        return $this->emprunt_id;
    }
    public function setEmprunt_id($emprunt_id)
    {
        $this->emprunt_id = $emprunt_id;

        return $this;
    }
    public function getData_Livre()
    {
        return $this->data_Livre;
    }
    public function setData_Livre($data_Livre)
    {
        $this->data_Livre = $data_Livre;

        return $this;
    }
    public function getDescriptin()
    {
        return $this->descriptin;
    }
    public function setDescriptin($descriptin)
    {
        $this->descriptin = $descriptin;

        return $this;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
    public function Ajouter()
    {
        $SQL = "INSERT INTO livre (`titre`,`descriptin`,`emprunt_id`)VALUES(?,?,?,?);";
        $test = $this->db->prepare($SQL);
        $test = $test->execute([$this->titre, $this->descriptin, $this->emprunt_id]);
        return $test;
    }
    public function read()
    {
        $SQL = "SELECT * FROM `livre`";
        $stm = $this->db->prepare($SQL);
        $stm->execute([$this->titre, $this->descriptin, $this->emprunt_id]);
        $test = $stm->fetch();
        return $test;
    }
    public function updite($id_livre)
    {
        $SQL = "INSERT INTO `livre` (`id`, `titre`, `description`, `prix`, `auteur`) VALUES (?,?, ?,?,?) WHERE id=?";
        $stm = $this->db->prepare($SQL);
        $test = $stm->execute([$this->titre, $this->descriptin, $this->emprunt_id, $id_livre]);
        return $test;
    }
    public function delete($id_livre)
    {
        $SQL = "DELETE FROM `livre` WHERE id=?;";
        $stm = $this->db->prepare($SQL);
        $test = $stm->execute([$id_livre]);
        return $test;
    }
}

