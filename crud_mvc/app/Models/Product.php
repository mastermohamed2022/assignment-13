<?php

class Product extends DB
{
    private $table = "products";
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();

    }
    public function getAllProducts()
    {
        return $this->conn->get("products");
    }
    public function insertProducts($data)
    {
        return $this->connect()->insert($this->table, $data);
    }

    public function deleteProduct($id)
    {
        $delete = $this->connect()->where('id', $id);
        return $delete->delete($this->table);
    }
    public function getProduct($id)
    {
        $product = $this->connect()->where('id', $id);
        return $product->getOne($this->table);
    }

    public function updateProduct($id, $data)
    {
        $product = $this->connect()->where('id', $id);
        return $product->update($this->table, $data);
    }
}