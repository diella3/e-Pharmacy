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

    public function getServiceById($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM services WHERE id = :id');
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

        return header('Location: ../admin/admin-pharmacists.php');
    }

    public function editService($id, $request, $image)
    {
        if(empty($image)){
            $query = $this->db->pdo->prepare('UPDATE services SET title = :title, content = :content WHERE id = :id');
        
            $query->execute([
                'title' => $request['title'],
                'content' => $request['content'],          
                'id' => $id
            ]);
        }else{
            $query = $this->db->pdo->prepare('UPDATE services SET title = :title, content = :content, image = :image WHERE id = :id');
        
            $query->execute([
                'title' => $request['title'],
                'content' => $request['content'],          
                'image' => $image,          
                'id' => $id
            ]);
        }
        return header('Location: ../admin/admin-services.php');
    }

    public function deleteService($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM services WHERE id = :id');
        $query->execute(['id' => $id]);

        return header('Location: ../admin/admin-services.php');
    }
}
