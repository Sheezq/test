<?php
class db {
    private PDO $pdo;

    public function __construct($host, $dbname, $username, $password) {
        $dsn = "mysql:host=MySQL-8.2;dbname=library";
        $this->pdo = new PDO($dsn, $username, $password);
    }


    public function query($query) {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getPdo() {
        return $this->pdo;
    }
}

?>