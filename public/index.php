<?php

/**User: TheCodeholic ...*/
use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;


require_once __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


// echo '<pre>';
// var_dump();
// echo '</pre>';
// exit;

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ],  
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'Home']);

$app->router->get("/contact", [SiteController::class, 'Contact']);
$app->router->post("/contact", [SiteController::class, 'handleContact']);

$app->router->get("/login", [AuthController::class,"login"]);
$app->router->post("/login", [AuthController::class,"login"]);
$app->router->get("/register", [AuthController::class,"register"]);
$app->router->post("/register", [AuthController::class,"register"]);

$app->run();