<?php
require_once __DIR__ . '/../config/constants.php';
require_once BASE_PATH . '/../config/database.php';
require_once BASE_PATH . '/../models/Product.php';

header('Content-Type: application/json');

echo json_encode(Product::all());
