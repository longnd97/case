<?php

namespace App\Models;
class UserModel extends BaseModel
{
    protected $table = 'users';

    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function create($data)
    {
        $sql = "INSERT INTO $this->table (name,email,password) VALUES (?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(1, $data['email']);
        $stmt->bindParam(1, $data['password']);
        $stmt->execute();
    }

    public function checkEmail($email)
    {
        $sql = "SELECT * FROM $this->table WHERE email='$email'";
        $stmt = $this->connect->query();
        $count = $stmt->rowCount();
        return $count != 0;
    }

    public function checkLogin($email, $password)
    {
        $sql = "SELECT * FROM $this->table WHERE email='$email' AND password='$password'";
        $stmt = $this->connect->query($sql);
        $count = $stmt->rowCount();
        return $count != 0;
    }

    public function getByEmail($email)
    {
        $sql = "SELECT * FROM $this->table WHERE email='$email'";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch();
    }
}