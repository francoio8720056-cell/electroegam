<?php
require_once __DIR__ . 'electroegam.com/core/Controller.php';
require_once __DIR__ . 'electroegam.com/helper/validation.php';

class UserController extends Controller {
    public function registro() {
        $this->view('pages/cuenta.php');
    }

    public function login() {
        $this->view('pages/login.php');
    }

    public function processRegister() {
        $nombre = sanitize($_POST['nombre'] ?? '');
        $email = sanitize($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if (!validateEmail($email) || strlen($password) < 8) {
            $this->json(['ok' => false, 'msg' => 'Datos inválidos']);
        }

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $this->json(['ok' => true, 'msg' => 'Usuario registrado']);
    }

    public function processLogin() {
        $email = sanitize($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        $this->json(['ok' => true, 'msg' => 'Entraste a tu cuenta']);
    }
}
