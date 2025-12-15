<?php

$router->get('/', 'HomeController@index');

$router->get('/catalogo', 'PageController@catalogo');
$router->get('/conocenos', 'PageController@conocenos');
$router->get('/contacto', 'PageController@contacto');
$router->get('/cuenta', 'PageController@cuenta');

$router->get('/products', 'ProductController@all');
$router->get('/product/get', 'ProductController@get');

$router->post('/cart/add', 'CartController@add');
$router->get('/cart/count', 'CartController@count');
