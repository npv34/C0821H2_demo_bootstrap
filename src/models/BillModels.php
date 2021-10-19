<?php


namespace Src\Models;


class BillModels extends Model
{
    public $table = 'bills';
    public function __construct()
    {
        parent::__construct($this->table);
    }

    function getAll(): array
    {
        $sql = "SELECT * FROM orders
                JOIN customers 
                ON orders.customerNumber = customers.customerNumber
                LIMIT 5";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $bills = $stmt->fetchAll();
        return $bills;
    }
    function getById($id) {
        $sql = "SELECT * FROM orders
                JOIN customers 
                ON orders.customerNumber = customers.customerNumber
                WHERE orderNumber = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $bill = $stmt->fetch();
        return $bill;
    }
}