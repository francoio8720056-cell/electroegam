<?php
require_once __DIR__ . '/../models/Product.php';

class ProductController {

    public function all() {
        header('Content-Type: application/json');
        echo json_encode(Product::all());
    }

    public function get($id) {
        header('Content-Type: application/json');
        echo json_encode(Product::find($id));
    }
}
