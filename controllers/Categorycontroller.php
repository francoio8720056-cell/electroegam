<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/ProductosModel.php';

class CategoryController extends Controller {
    public function index() {
        $pm = new ProductosModel();
        $productos = $pm->all();
        $cats = [];
        foreach ($productos as $p) {
            $cats[$p['categoria']][] = $p;
        }
        $this->view('pages/categories.php', ['categorias' => $cats]);
    }
}
