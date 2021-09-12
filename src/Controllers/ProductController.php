<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProductModel();
        parent::__construct($this->model);
    }

    public function index()
    {
        $products = parent::index();
        include "src/Views/layout/page.php";
    }

    public function list()
    {
        $products = parent::index();
        include "src/Views/Product/list.php";
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/Views/Product/create.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "price" => $_POST["price"],
                "color" => $_POST["color"],
                "size" => $_POST["size"],
                "weight" => $_POST["weight"],
                "camera" => $_POST["camera"],
                "ROM" => $_POST["ROM"],
                "RAM" => $_POST["RAM"],
                "CPU" => $_POST["CPU"],
                "screen" => $_POST["screen"],
                "bluetooth" => $_POST["bluetooth"],
                "battery" => $_POST["battery"],
                "status" => $_POST["status"],
                "image" => $_POST["image"],
                "quantity" => $_POST["quantity"],
                "description" => $_POST["description"]
            ];
            $this->model->create($data);
            header("Location:index.php");
        }
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location:index.php");
    }

    public function update($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $product = $this->model->getById($id);
            include "src/Views/Product/update.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "price" => $_POST["price"],
                "color" => $_POST["color"],
                "size" => $_POST["size"],
                "weight" => $_POST["weight"],
                "camera" => $_POST["camera"],
                "ROM" => $_POST["ROM"],
                "RAM" => $_POST["RAM"],
                "CPU" => $_POST["CPU"],
                "screen" => $_POST["screen"],
                "bluetooth" => $_POST["bluetooth"],
                "battery" => $_POST["battery"],
                "status" => $_POST["status"],
                "image" => $_POST["image"],
                "quantity" => $_POST["quantity"],
                "description" => $_POST["description"]
            ];
            $this->model->update($id, $data);
            header("Location:index.php");
        }
    }

    public function detail($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $product = $this->model->getById($id);
            include "src/Views/Product/detailProduct.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "price" => $_POST["price"],
                "color" => $_POST["color"],
                "size" => $_POST["size"],
                "weight" => $_POST["weight"],
                "camera" => $_POST["camera"],
                "ROM" => $_POST["ROM"],
                "RAM" => $_POST["RAM"],
                "CPU" => $_POST["CPU"],
                "screen" => $_POST["screen"],
                "bluetooth" => $_POST["bluetooth"],
                "battery" => $_POST["battery"],
                "status" => $_POST["status"],
                "image" => $_POST["image"],
                "quantity" => $_POST["quantity"],
                "description" => $_POST["description"]
            ];
            $this->model->detail($id, $data);
            header("Location:index.php");
        }
    }

    public function search($keyword)
    {
        $products = $this->model->search($keyword);
        include "src/Views/layout/page.php";
    }

}