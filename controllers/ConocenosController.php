<?php
require_once __DIR__ . '/../core/View.php';

class ConocenosController {
    public function index() {
        View::render('conocenos');
    }
}
