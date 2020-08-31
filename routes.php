<?php

use Project\Components\Route;
use Project\Controllers\AuthController;
use Project\Controllers\IndexController;

return [
    '/' => new Route(AuthController::class, 'loginAndRegister'),
    '/login' => new Route(AuthController::class, 'login'),
    '/register' => new Route(AuthController::class, 'register'),
    '/dashboard' => new Route(IndexController::class, 'dashboard'),
    '/logout' => new Route(AuthController::class, 'logout',),
];
