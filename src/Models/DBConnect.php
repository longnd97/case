<?php

namespace App\Models;

use PDO;
use PDOException;

class DBConnect
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=CaseStudy;charset=utf8";
        $this->user = "root";
        $this->password = "longga97";
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}