<?php
// Entry point for the web application

// Autoload dependencies
require_once '../vendor/autoload.php';

// Start the session
session_start();

// Load configuration
require_once '../src/config/database.php';

// Define the base URL
define('BASE_URL', '/php-web-app/public/');

// Route the request
$requestUri = $_SERVER['REQUEST_URI'];

// Simple routing logic
if ($requestUri === BASE_URL || $requestUri === BASE_URL . 'index.php') {
    require_once '../src/views/pages/home.php';
} else {
    require_once '../src/views/pages/error.php';
}
?>