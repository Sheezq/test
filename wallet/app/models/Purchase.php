<?php

namespace matiu\wallet\app\models;

class Purchase extends Model
{
    public function create($userId, $currency, $amount, $date) {
        $stmt = $this->conn->prepare("INSERT INTO purchases (user_id, currency, amount, date) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$userId, $currency, $amount, $date]);
    }

    public function getByUser($userId) {
        $stmt = $this->conn->prepare("SELECT * FROM purchases WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}