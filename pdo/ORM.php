<?php
class ORM {
    protected $table;
    protected $pdo;

    public function __construct($pdo, $table) {
        $this->pdo = $pdo;
        $this->table = $table;
    }

    public function select($columns = "*", $where = []) {
        $sql = "SELECT $columns FROM $this->table";
        if (!empty($where)) {
            $sql .= " WHERE " . $this->buildWhereClause($where);
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($this->extractValues($where));
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), "?"));
        $sql = "INSERT INTO $this->table ($columns) VALUES ($placeholders)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(array_values($data));
    }

    public function update($data, $where) {
        $setClause = implode(", ", array_map(fn($col) => "$col = ?", array_keys($data)));
        $sql = "UPDATE $this->table SET $setClause WHERE " . $this->buildWhereClause($where);
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(array_merge(array_values($data), $this->extractValues($where)));
    }

    public function delete($where) {
        $sql = "DELETE FROM $this->table WHERE " . $this->buildWhereClause($where);
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($this->extractValues($where));
    }

    private function buildWhereClause($where): string{
        return implode(" AND ", array_map(fn($col) => "$col = ?", array_keys($where)));
    }

    private function extractValues($array): array{
        return array_values($array);
    }
}


