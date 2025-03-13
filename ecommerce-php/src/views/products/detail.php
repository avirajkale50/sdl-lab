<?php
// detail.php

// Assuming you have a ProductController to handle product details
require_once '../../controllers/ProductController.php';

$productController = new ProductController();

// Get the product ID from the URL
$productId = $_GET['id'] ?? null;

if ($productId) {
    $product = $productController->getProductById($productId);
    if ($product) {
        // Display product details
        echo "<h1>" . htmlspecialchars($product['name']) . "</h1>";
        echo "<p>" . htmlspecialchars($product['description']) . "</p>";
        echo "<p>Price: $" . htmlspecialchars($product['price']) . "</p>";
        echo "<a href='add_to_cart.php?id=" . htmlspecialchars($product['id']) . "'>Add to Cart</a>";
    } else {
        echo "<p>Product not found.</p>";
    }
} else {
    echo "<p>No product ID specified.</p>";
}
?>