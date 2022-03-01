<?php

$path = "./config/Database.php";
include($path);

class admAboutusController
{

    protected $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAboutus(){
        $query = $this->db->pdo->query('SELECT * FROM aboutus');
        return $query->fetchAll();
    }

    public function getAboutusById($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM aboutus WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query->fetch();
    }

}