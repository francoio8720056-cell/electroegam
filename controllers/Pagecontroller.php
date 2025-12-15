<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../core/View.php';
require_once __DIR__ . '/../models/Product.php'; // ← FALTA ESTO

class PageController extends Controller {

    public function catalogo() {
        $productos = Product::getByCategoria();
        View::render('catalogo', [
            'productos' => $productos
        ]);
    }

    public function conocenos() {
        View::render('conocenos');
    }

    public function contacto() {
        View::render('contacto');
    }

    public function cuenta() {
        View::render('cuenta');
    }
}
