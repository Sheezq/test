<?php

namespace matiu\wallet\app\core;

class Model
{
    protected $conn;

    public function __construct() {
        $config = require 'app/config/db.php';
        $this->conn = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['user'], $config['password']);
    }
}