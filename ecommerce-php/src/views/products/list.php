<?php
// src/views/products/list.php

// Assuming you have a ProductController that fetches products
require_once '../../controllers/ProductController.php';

$productController = new ProductController();
$products = $productController->listProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="/public/styles.css"> <!-- Assuming you have a styles.css -->
</head>
<body>
    <h1>Available Products</h1>
    <div class="product-list">
        <?php if (empty($products)): ?>
            <p>No products available.</p>
        <?php else: ?>
            <ul>
                <?php foreach ($products as $product): ?>
                    <li>
                        <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                        <p>Price: $<?php echo htmlspecialchars($product['price']); ?></p>
                        <a href="detail.php?id=<?php echo htmlspecialchars($product['id']); ?>">View Details</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>