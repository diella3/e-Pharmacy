<?php

include '../../config/Database.php';

class AdmClientController
{
    protected $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getClients(){
        $query = $this->db->pdo->query('SELECT * FROM clients');
        return $query->fetchAll();
    }

    public function getClientsById($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM clients WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query->fetch();
    }

    public function addClients($request, $image)
    {         
        if(empty($image)){
            $query = $this->db->pdo->prepare('INSERT INTO clients (title, content, clientName, city) VALUES (:title, :content, :clientName, :city)');
            $query->bindParam(':title', $request['title']);
            $query->bindParam(':content', $request['content']);
            $query->bindParam(':clientName', $request['clientName']);
            $query->bindParam(':city', $request['city']);
        }else{
            $query = $this->db->pdo->prepare('INSERT INTO clients (title, content, clientName, city, image) VALUES (:title, :content, :clientName, :city, :image)');
            $query->bindParam(':title', $request['title']);
            $query->bindParam(':content', $request['content']);
            $query->bindParam(':clientName', $request['clientName']);
            $query->bindParam(':city', $request['city']);
            $query->bindParam(':image', $image);
          
        }

        $query->execute();

        return header('Location: ../admClients/admin-clients.php');
    }

    public function editClients($id, $request, $image)
    {
        if(empty($image)){
            $query = $this->db->pdo->prepare('UPDATE clients SET title = :title, content = :content, clientName = :clientName, city = :city WHERE id = :id');
        
            $query->execute([
                'title' => $request['title'],
                'content' => $request['content'], 
                'clientName' => $request['clientName'],
                'city' => $request['city'],
                'id' => $id
            ]);
        }else{
            $query = $this->db->pdo->prepare('UPDATE clients SET title = :title, content = :content,clientName = :clientName, city = :city, image = :image WHERE id = :id');
        
            $query->execute([
                'title' => $request['title'],
                'content' => $request['content'],  
                'clientName' => $request['clientName'],
                'city' => $request['city'],        
                'image' => $image,          
                'id' => $id
            ]);
        }
        return header('Location: ../admClients/admin-clients.php');
    }

    public function deleteClients($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM clients WHERE id = :id');
        $query->execute(['id' => $id]);

        return header('Location: ../admClients/admin-clients.php');
    }
}
