<?php
// Database connection settings
$host = 'localhost';
$dbname = 'ecommerce_db';
$username = 'root';
$password = '';

// Create a connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Function to get the database connection
function getDatabaseConnection() {
    global $pdo;
    return $pdo;
}