<?php
require_once __DIR__ . '/../config/constants.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../core/Router.php';

$router = new Router();

require_once __DIR__ . '/../config/routes.php';

$router->run();
