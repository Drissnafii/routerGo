<?php
$routes=include __DIR__ . '/../routes/api.php';
include __DIR__ . '/../app/controllers/ArticlsControllers.php';
include __DIR__ . '/../app/controllers/userControllers.php';
include __DIR__ . '/../app/controllers/categoryControllers.php';
$uri = $_SERVER['REQUEST_URI'];
$methode = $_SERVER['REQUEST_METHOD'];
// $routes=new routes();
$routes->dispatche($uri, $methode);
