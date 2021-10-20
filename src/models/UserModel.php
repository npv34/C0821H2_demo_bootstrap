<?php


namespace Src\Models;


class UserModel extends Model
{
    public $table = 'users';

    public function __construct()
    {
        parent::__construct($this->table);
    }

    function checkAccount($email, $password) {
        $sql = "SELECT COUNT(id) as 'SL' FROM users WHERE  email = :email AND password = :password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch();
    }
}