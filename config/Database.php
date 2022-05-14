<?php
class Database
{
    //DB Parameters
    private $host = 'localhost';
    private $username = 'root';
    private $db_name = 'api_db';
    private $password ='';
    private $conn;

    public function Connect()
    {
        $this->conn = null;

        try
        {
            $this->conn = New PDO('mysql:host=' .$this->host . ';dbname='.$this->db_name,
            $this->username, $this->password); 
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e)
        {
            echo 'Connection failed: ' .$e->getMessage();
        }

        return $this->conn;
    }

}