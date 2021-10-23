<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Admin_model
{
    private $db;
    //    private $stmt;
    private $table = 'video';
    public function __construct()
    {
        // Data source name
        //    $dsn = 'mysql:host=localhost;dbname=medantainment';
        $this->db = new Database;

        //    try {
        //        $this->dbh = new PDO($dsn, 'root', '');
        //    }
        //    catch (PDOException $e)
        //    {
        //        die($e->getMessage());
        //    }
    }

    public function getAllIklan()
    {
        // return $this->mhs;
        // $this->stmt= $this->dbh->prepare('SELECT * FROM video');
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllSlider()
    {   
        $this->db->query('SELECT * FROM slider');
        return $this->db->resultSet();


    }
    public function getAllHome()
    {   
        $this->db->query('SELECT * FROM contact');
        return $this->db->resultSet();
    }
    public function getAllDetail($id)
    {
        $this->db->query('SELECT * FROM contact WHERE id=:id');
        // return $this->db->resultSet();
        $this->db->bind('id', $id);
        return $this->db->single();
    }



    public function getAllWedding()
    {   
        $this->db->query('SELECT * FROM wedding');
        return $this->db->resultSet();
    }

    public function tambahDataIklan($data)
    {
        $query = "INSERT INTO video
                    VALUES
                    ('', :link)";
        $this->db->query($query);
        $this->db->bind('link', $data['link']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataWedding($data)
    {
        $query = "INSERT INTO wedding
                    VALUES
                    ('', :link)";
        $this->db->query($query);
        $this->db->bind('link', $data['wedding']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPesan($id)
    {
        $query = "DELETE FROM contact WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
       
        return $this->db->rowCount();

    }

    public function hapusDataIklan($id)
    {
        $query = "DELETE FROM video WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
       
        return $this->db->rowCount();

    }

    public function hapusDataWedding($id)
    {
        $query = "DELETE FROM wedding WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
       
        return $this->db->rowCount();

    }

    
}
