<?php

class Cart {

    public static function add($productId) {
        if(!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = [];
        }

        $_SESSION["cart"][] = $productId;
    }

    public static function count() {
        return isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : 0;
    }
}
