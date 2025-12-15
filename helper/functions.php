<?php
function asset($path) {
    return '/public/' . ltrim($path, '/');
}

function url($route = '') {
    // url para rutas internas usando parametro r
    if ($route === '') return '/public/index.php';
    return '/public/index.php?r=' . urlencode($route);
}

function dd($var) {
    echo '<pre>'; var_dump($var); echo '</pre>'; exit;
}
