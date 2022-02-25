<?php

include '../../config/Database.php';

class AdmServiceController
{
    protected $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getServices(){
        $query = $this->db->pdo->query('SELECT * FROM services');
        return $query->fetchAll();
    }

    public function getServiceById($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM services WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query->fetch();
    }

    public function addService($request, $image)
    {         
        if(empty($image)){
            $query = $this->db->pdo->prepare('INSERT INTO services (title, content) VALUES (:title, :content)');
            $query->bindParam(':title', $request['title']);
            $query->bindParam(':content', $request['content']);
        }else{
            $query = $this->db->pdo->prepare('INSERT INTO services (title, content, image) VALUES (:title, :content, :image)');
            $query->bindParam(':title', $request['title']);
            $query->bindParam(':content', $request['content']);
            $query->bindParam(':image', $image);
        }

        $query->execute();

        return header('Location: ../admServices/admin-services.php');
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
        return header('Location: ../admServices/admin-services.php');
    }

    public function deleteService($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM services WHERE id = :id');
        $query->execute(['id' => $id]);

        return header('Location: ../admServices/admin-services.php');
    }
}
