<?php


namespace Src\Models;


class Model
{
    public $pdo;
    public $table;
    public function __construct($table)
    {
        $database = new Database("root","123456@Abc");
        $this->pdo = $database->connect();
        $this->table = $table;
    }

    function all($limit = 10): array
    {
        $sql = "SELECT * FROM $this->table LIMIT $limit ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}