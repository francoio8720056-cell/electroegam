<?php

class CartController extends Controller {

    public function add() {
        $data = json_decode(file_get_contents("php://input"), true);
        $id = $data["id"];

        Cart::add($id);

        echo json_encode(["ok" => true]);
    }

    public function count() {
        echo json_encode(["count" => Cart::count()]);
    }

}
