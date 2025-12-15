<?php
require_once __DIR__ . '/../core/Model.php';

class Product extends Model {

    public static function all() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function getDestacados() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM products LIMIT 3");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAllConCategoria() {
        $db = Database::getInstance()->getConnection();

        $sql = "
            SELECT
                p.id, p.nombre, p.precio, p.imagen,
                c.nombre AS categoria
            FROM products p
            INNER JOIN categories c ON p.category_id = c.id
            ORDER BY c.nombre, p.nombre
        ";

        return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getByCategoria() {
        $db = Database::connect();

        $sql = "
            SELECT id, nombre, descripcion, precio, imagenUrl, categoria
            FROM products
            ORDER BY categoria, nombre
        ";

        $stmt = $db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
