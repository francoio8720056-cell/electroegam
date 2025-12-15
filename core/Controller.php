<?php
class Controller {
    protected function view($path, $data = []) {
        // path relativo a views
        extract($data);
        $fullPath = __DIR__ . 'electroegam.com/views/' . $path;
        if (file_exists($fullPath)) {
            require $fullPath;
        } else {
            echo "View not found: " . htmlspecialchars($fullPath);
        }
    }

    protected function json($data) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit;
    }

    protected function redirect($url) {
        header('Location: ' . $url);
        exit;
    }
}
