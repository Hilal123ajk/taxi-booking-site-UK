<?php

class Database {

    public $pdo;
    public $statement;

    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'taxi-booking';
        $username = 'root';
        $password = '';

        // $host = 'localhost';
        // $dbname = 'vipmbh_taxi-booking';
        // $username = 'vipmbh';
        // $password = 'jrVe]D7p^UTV';

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function query($query)
    {
        $this->statement = $this->pdo->prepare($query);
        $this->statement->execute();
        $cars = $this->statement->fetchAll(PDO::FETCH_ASSOC);
            
        return $cars;
    }

    public function insertRecord($query, $data)
    {
        $this->statement = $this->pdo->prepare($query);
        $this->statement->execute($data);
    }
}