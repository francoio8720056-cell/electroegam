<?php
class Category {
    public $id;
    public $nombre;
    public function __construct($data = []) {
        foreach ($data as $k => $v) $this->$k = $v;
    }
}
