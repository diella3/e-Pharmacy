<?php

include '../config/Database.php';

class DashboardController
{
    protected $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getPharmacistCount()
    {
        return $this->db->pdo->query('SELECT count(*) FROM pharmacists')->fetchColumn();    
    }

    public function getServicesCount()
    {
        return $this->db->pdo->query('SELECT count(*) FROM services')->fetchColumn();    
    }
    public function getClientsCount()
    {
        return $this->db->pdo->query('SELECT count(*) FROM clients')->fetchColumn();    
    }
    public function getUsersCount()
    {
        return $this->db->pdo->query('SELECT count(*) FROM users')->fetchColumn();    
    }
}
