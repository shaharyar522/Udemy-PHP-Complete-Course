<?php

class Database {

    // Single instance of the class
    private static $instance = null;

    // Database connection object
    private $connection;

    // Private constructor to prevent direct instantiation
    private function __construct() {

        // Database configuration settings
        $host     = config('database.host');
        $dbname   = config('database.database');
        $username = config('database.username');
        $password = config('database.password');
        $port     = config('database.port');
        $charset  = config('database.charset');

        // Data Source Name (DSN)
        $dsn = "mysql:host={$host};dbname={$dbname};charset={$charset};port={$port}";

        try {
            // Create a new PDO connection
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Handle connection errors
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Get the single instance of the Database class
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Get the PDO connection
    public function getConnection() {
        return $this->connection;
    }

    // Prevent cloning of the instance
    private function __clone() {}

    // Prevent un-serializing of the instance
    public function __wakeup() {}

}
