<?php

include './config/Database.php';

class ServicePharmacistController
{
    protected $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getServices(){
        $query = $this->db->pdo->query('SELECT * FROM services');
        return $query->fetchAll();
    }

    public function getPharmacists(){
        $query = $this->db->pdo->query('SELECT * FROM pharmacists');
        return $query->fetchAll();
    }

    public function getStaticContent(){
        $query = $this->db->pdo->query('SELECT * FROM services_static_content');
        return $query->fetchAll();
    }
}
