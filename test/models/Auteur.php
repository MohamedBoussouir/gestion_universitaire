<?php
class Auteur extends Database
{
    public $id;
    public $nom;
    public $data_Auteur;
    private $db;
    public function __construct($nom)
    {
        $this->nom=$nom;
        $this->db = parent::connect();

    }
    public function getData_Auteur()
    {
        return $this->data_Auteur;
    }
    public function setData_Auteur($data_Auteur)
    {
        $this->data_Auteur = $data_Auteur;

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
    public function Ajouter()
    {
        $SQL = "INSERT INTO Auteur (`nom`)VALUES(?);";
        $test = $this->db->prepare($SQL);
        $test = $test->execute([$this->nom]);
        return $test;
    }
    public function read()
    {
        $SQL = "SELECT * FROM `Auteur`";
        $stm = $this->db->prepare($SQL);
        $stm->execute([$this->titre, $this->descriptin, $this->emprunt_id]);
        $test = $stm->fetch();
        return $test;
    }
    public function updite($id_livre)
    {
        $SQL = "INSERT INTO `Auteur` (`id`, `titre`, `description`, `prix`, `auteur`) VALUES (?,?, ?,?,?) WHERE id=?";
        $stm = $this->db->prepare($SQL);
        $test = $stm->execute([$this->titre, $this->descriptin, $this->emprunt_id, $id_livre]);
        return $test;
    }
    public function delete($id_livre)
    {
        $SQL = "DELETE FROM `Auteur` WHERE id=?;";
        $stm = $this->db->prepare($SQL);
        $test = $stm->execute([$id_livre]);
        return $test;
    }
}
