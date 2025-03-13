<?php
require_once '../config/config.php';
require_once '../config/database.php';
require_once '../controllers/ProductController.php';
require_once '../controllers/CartController.php';
require_once '../controllers/UserController.php';

// Initialize the application
session_start();

// Routing logic
$requestUri = $_SERVER['REQUEST_URI'];

if (preg_match('/^\/products/', $requestUri)) {
    $controller = new ProductController();
    $controller->handleRequest($requestUri);
} elseif (preg_match('/^\/cart/', $requestUri)) {
    $controller = new CartController();
    $controller->handleRequest($requestUri);
} elseif (preg_match('/^\/user/', $requestUri)) {
    $controller = new UserController();
    $controller->handleRequest($requestUri);
} else {
    // Default to home or 404
    http_response_code(404);
    echo "404 Not Found";
}