<?php

class View {

    public static function render(string $view, array $data = [], bool $usarHeader2 = false) {
        extract($data);
        $content = VIEWS_PATH . '/pages/' . $view . '.php';
        require VIEWS_PATH . '/layouts/main.php';
    }

}
