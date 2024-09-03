<?php

namespace matiu\wallet\app\models;

use PDO;
use matiu\wallet\app\core\Model;

class user extends Model
{

    public function create($username, $password) {
        $stmt = $this->conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        return $stmt->execute([$username, password_hash($password, algo: PASSWORD_BCRYPT)]);
    }

    public function find($username) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}