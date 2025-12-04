<?php


class Database
{
    private $host = 'localhost';
    private $db_name = 'todo_app_mysqli_oop';
    private $username = 'root';
    private $password = '';
    public $conn;

    // Establish a connection to the database
    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}

