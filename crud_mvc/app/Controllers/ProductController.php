<?php

class ProductController
{
    private $conn;
    public function index()
    {
        $db = new Product();
        $data['products'] = $db->getAllProducts();
        View::load("products/index", $data);
    }

    public function add()
    {
        View::load("products/add");
    }
    public function store()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $db = new Product();
            $data = array(
                "name" => $name,
                "desc" => $description,
                "price" => $price,
                "qty" => $qty
            );
            if ($db->insertProducts($data)) {
                $data['success'] = "Data Added Successfully";
                return View::load('products/add', $data);
            } else {
                $data['error'] = "Error";
                return View::load('products/add', $data);
            }
        }
    }
    public function delete($id)
    {
        $db = new Product();
        if ($db->deleteProduct($id)) {
            $data['success'] = "Product Have Been Deleted";
            return View::load('products/delete', $data);
        } else {
            $data['error'] = "Error";
            return View::load('products/delete', $data);
        }
    }
    public function edit($id)
    {
        $db = new Product();
        if ($db->getProduct($id)) {
            $data['row'] = $db->getProduct($id);
            return View::load('products/edit', $data);
        } else {
            echo "Error";
        }
    }
    public function update($id)
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $id = $_POST['id'];

            $db = new Product();
            $data = array(
                "name" => $name,
                "desc" => $description,
                "price" => $price,
                "qty" => $qty
            );
            if ($db->updateProduct($id, $data)) {
                $data['success'] = "Updated Successfully";
                $data['row'] = $db->getProduct($id);
                View::load('products/edit', $data);
            } else {
                $data['error'] = "Error";
                $data['row'] = $db->getProduct($id);
                return View::load('products/edit', $data);
            }
        }
        // redirect('home/index');
    }
}