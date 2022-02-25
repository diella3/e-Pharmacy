<?php

include '../../config/Database.php';

class AdmPharmacistController
{
    protected $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getPharmacists(){
        $query = $this->db->pdo->query('SELECT * FROM pharmacists');
        return $query->fetchAll();
    }

    public function getPharmacistById($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM pharmacists WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query->fetch();
    }

    public function addPharmacist($request, $image)
    {         
        if(empty($image)){
            $query = $this->db->pdo->prepare('INSERT INTO pharmacists (full_name, description) VALUES (:full_name, :description)');
            $query->bindParam(':full_name', $request['full_name']);
            $query->bindParam(':description', $request['description']);
        }else{
            $query = $this->db->pdo->prepare('INSERT INTO pharmacists (full_name, description, image) VALUES (:full_name, :description, :image)');
            $query->bindParam(':full_name', $request['full_name']);
            $query->bindParam(':description', $request['description']);
            $query->bindParam(':image', $image);
        }

        $query->execute();

        return header('Location: ./admin-pharmacists.php');
    }

    public function editPharmacist($id, $request, $image)
    {
        if(empty($image)){
            $query = $this->db->pdo->prepare('UPDATE pharmacists SET full_name = :full_name, description = :description WHERE id = :id');
        
            $query->execute([
                'full_name' => $request['full_name'],
                'description' => $request['description'],          
                'id' => $id
            ]);
        }else{
            $query = $this->db->pdo->prepare('UPDATE pharmacists SET full_name = :full_name, description = :description, image = :image WHERE id = :id');
        
            $query->execute([
                'full_name' => $request['full_name'],
                'description' => $request['description'],          
                'image' => $image,          
                'id' => $id
            ]);
        }
        return header('Location: ./admin-pharmacists.php');
    }

    public function deletePharmacist($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM pharmacists WHERE id = :id');
        $query->execute(['id' => $id]);

        return header('Location: ./admin-pharmacists.php');
    }

    public function getPharmacistCount()
    {
        $query = $this->db->pdo->prepare('SELECT COUNT(*) FROM users');
        $query->fetchColumn();
    }
}
