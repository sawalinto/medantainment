<?php

class Login_model
{
    private $db;
   
    public function __construct()
    {
        
        $this->db = new Database;

        
    }
    // public function check_login()
    // {
    //   if(isset($_REQUEST['user']) && isset($_REQUEST['pass']) )
    //   {
    //       return 'login';
    //   }
    //   else{
    //       return 'Invalid User';
    //   }
    // }

    // public function getAllLogin()
    //     {
    //         // return $this->mhs;
    //         $this->stmt= $this->dbh->prepare('SELECT * FROM login');
    //         $this->stmt->execute();
    //         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    
}
