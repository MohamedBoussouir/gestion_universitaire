<?php

class Database
{
    private $db = "Bibliothéc";
    private $server = "localhost";
    private $password = "";
    private $user = "root";
    private $pdo;
    public function connect()
    {
        try {
            $this->pdo = new PDO("mysql:host={$this->server};dbname={$this->db}",$this->user,$this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
