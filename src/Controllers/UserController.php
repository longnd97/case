<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        parent::__construct($this->model);
    }

    public function index()
    {
        $users = parent::index();
        include "src/Views/Auth/list.php";
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/Views/Auth/register.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "password" => $_POST["password"]
            ];
            if ($this->validateRegister($data)) {
                $this->model->create($data);
                echo '<script type="text/javascript"> alert("Đăng ký thành công"); window.location.href = "index.php?page=login"  </script>';
            } else {
                header('Location:index.php?page=register');
            }
        }
    }

    public function login($email, $password)
    {
        if ($this->model->checkLogin($email, $password)) {
            $user = $this->model->getByEmail($email);
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            header('location: index.php');
        } else {
            $_SESSION['login_error'] = 'error';
            header('Location:index.php?page=login');
        }
    }

    public function showLogin()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/Views/Auth/login.php";
            $_SESSION['login_error'] = null;
        } else {
            $this->login($_REQUEST['email'], $_REQUEST['password']);
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location:index.php?page=login");
    }

    public function validateRegister($data)
    {
        $error = [];
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        if (empty($name)) {
            $error['name'] = 'Username is required';
        } else if (strlen($name) < 4 || strlen($name) > 16) {
            $error['name'] = 'User must be 4 to 16 characters';
        }

        if (empty($email)) {
            $error['email'] = 'Email is required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = 'Invalid email format';
        } elseif ($this->model->checkEmail($email)) {
            $error['email'] = 'Email da duoc su dung';
        }
        if (empty($password)) {
            $error['password'] = 'Password is required';
        } elseif (strlen($password) < 6 || strlen($password) > 16) {
            $error['password'] = 'Password must be 6 to 16 characters';
        }
        $_SESSION['error'] = $error;
        return empty($error);
    }
}