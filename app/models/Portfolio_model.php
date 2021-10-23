<?php



  
class Home_model
{
   private $dbh;
   private $stmt;

   public function __construct()
   {
       // Data source name
       $dsn = 'mysql:host=localhost;dbname=medantainment';

       try {
           $this->dbh = new PDO($dsn, 'root', '');
       }
       catch (PDOException $e)
       {
           die($e->getMessage());
       }
   }

        public function getAllHome()
        {
            // return $this->mhs;
            $this->stmt= $this->dbh->prepare('SELECT * FROM video');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}


  
    // class Mahasiswa_model
    // {
    //    private $dbh;
    //    private $stmt;

    //    public function __construct()
    //    {
    //        // Data source name
    //        $dsn = 'mysql:host=localhost;dbname=mvc';

    //        try {
    //            $this->dbh = new PDO($dsn, 'root', '');
    //        }
    //        catch (PDOException $e)
    //        {
    //            die($e->getMessage());
    //        }
    //    }

    //         public function getAllMahasiswa()
    //         {
    //             // return $this->mhs;
    //             $this->stmt= $this->dbh->prepare('SELECT * FROM mahasiswa');
    //             $this->stmt->execute();
    //             return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    //         }
    // }
