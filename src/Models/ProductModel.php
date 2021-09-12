<?php

namespace App\Models;
class ProductModel extends BaseModel
{
    protected $table = 'products';

    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function create($data)
    {
        $sql = "INSERT INTO products (name,price,color,size,weight,camera,ROM,RAM,CPU,screen,bluetooth,battery,status,image,quantity,description) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['price']);
        $stmt->bindParam(3, $data['color']);
        $stmt->bindParam(4, $data['size']);
        $stmt->bindParam(5, $data['weight']);
        $stmt->bindParam(6, $data['camera']);
        $stmt->bindParam(7, $data['ROM']);
        $stmt->bindParam(8, $data['RAM']);
        $stmt->bindParam(9, $data['CPU']);
        $stmt->bindParam(10, $data['screen']);
        $stmt->bindParam(11, $data['bluetooth']);
        $stmt->bindParam(12, $data['battery']);
        $stmt->bindParam(13, $data['status']);
        $stmt->bindParam(14, $data['image']);
        $stmt->bindParam(15, $data['quantity']);
        $stmt->bindParam(16, $data['description']);
        $stmt->execute();
    }

    public function update($id, $data)
    {
        $sql = "UPDATE products SET name=?,price=?,color=?,size=?,weight=?,camera=?,ROM=?,RAM=?,CPU=?,screen=?,bluetooth=?,battery=?,status=?,image=?,quantity=?,description=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['price']);
        $stmt->bindParam(3, $data['color']);
        $stmt->bindParam(4, $data['size']);
        $stmt->bindParam(5, $data['weight']);
        $stmt->bindParam(6, $data['camera']);
        $stmt->bindParam(7, $data['ROM']);
        $stmt->bindParam(8, $data['RAM']);
        $stmt->bindParam(9, $data['CPU']);
        $stmt->bindParam(10, $data['screen']);
        $stmt->bindParam(11, $data['bluetooth']);
        $stmt->bindParam(12, $data['battery']);
        $stmt->bindParam(13, $data['status']);
        $stmt->bindParam(14, $data['image']);
        $stmt->bindParam(15, $data['quantity']);
        $stmt->bindParam(16, $data['description']);
        $stmt->execute();
    }
}