<?php
require_once __DIR__ . '/Product.php';

class ProductosModel extends Model {

    public function all() {
        try {
            $stmt = $this->db->query("SELECT id, nombre, descripcion, precio, imagenUrl, categoria FROM productos");
            $rows = $stmt->fetchAll();
            if ($rows) return $rows;
        } catch (Exception $e) {
        }
        return [];
    }

    public function find($id) {
        try {
            $stmt = $this->db->prepare("SELECT id, nombre, descripcion, precio, imagenUrl, categoria FROM productos WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch();
        } catch (Exception $e) {
            return null;
        }
    }
}
