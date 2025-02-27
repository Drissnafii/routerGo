<?php


include __DIR__ . '/../app/core/routes.php';

$routes = new Routes();
$routes->get('/loginForm', [userControllers::class, 'loginForm']);
$routes->get('/', [ArticlsControllers::class, 'index']);

$routes->post('/donnes', [userControllers::class, 'login']);

$routes->post('/register', [userControllers::class, 'register']);
$routes->get('/addCategory', [categoryControllers::class, 'addCategory']);
$routes->post('/addArticls', [ArticlsControllers::class, 'addArticls']);
$routes->get('/getCategory', [categoryControllers::class, 'getCategory']);
$routes->post('/updateArticls', [ArticlsControllers::class, 'updateArticle']);
$routes->get('/updateFormulaire', [ArticlsControllers::class, 'formulaireArticle']);
// $routes->get('/formulaireArticle', [ArticlsControllers::class, 'formulaireArticle']);
$routes->get('/deleteArticle', [ArticlsControllers::class, 'deleteArticls']);
$routes->post('/addUsers', [userControllers::class, 'add']);
// $routes->post('/articls', [ArticlsControllers::class, 'getAll']);
return $routes;
