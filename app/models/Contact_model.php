<?php 


class Contact_model
{

    private $db;
    //    private $stmt;
    private $table = 'contact';
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
    public function tambahDataPesan($data)
    {
        $query = "INSERT INTO contact
                    VALUES
                    ('', :nama, :hp, :email, :pesan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('hp', $data['hp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pesan', $data['pesan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    
}