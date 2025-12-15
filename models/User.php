<?php
class User {
    public $id;
    public $nombre;
    public $email;
    public $password_hash;

    public function __construct($data = []) {
        foreach ($data as $k => $v) $this->$k = $v;
    }
}
