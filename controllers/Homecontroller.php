<?php
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../core/View.php';

class HomeController {

    public function index() {
        $productos = Product::getDestacados(); // DB
        View::render('home', [
            'productos' => $productos
        ]);
    }
}
