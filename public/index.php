<?php

/**User: TheCodeholic ...*/
require_once __DIR__ . "/../vendor/autoload.php";

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

// echo '<pre>';
// var_dump();
// echo '</pre>';
// exit;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'Home']);

$app->router->get("/contact", [SiteController::class, 'Contact']);
$app->router->post("/contact", [SiteController::class, 'handleContact']);

$app->router->get("/login", [AuthController::class,"login"]);
$app->router->post("/login", [AuthController::class,"login"]);
$app->router->get("/register", [AuthController::class,"register"]);
$app->router->post("/register", [AuthController::class,"register"]);

$app->run();