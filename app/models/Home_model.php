<?php


  
    class Home_model
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

            public function getAllHome()
            {
                // return $this->mhs;
                // $this->stmt= $this->dbh->prepare('SELECT * FROM video');
                $this->db->query('SELECT * FROM ' . $this->table);
                return $this->db->resultSet();
                // $this->stmt->execute();
                // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            }
    }
