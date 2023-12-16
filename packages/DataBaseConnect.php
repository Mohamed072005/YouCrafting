<?php
class DataBaseConnect {

    public $conn;

    public function connection()
    {
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "youcrafting";

        try {
            $this->conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}


