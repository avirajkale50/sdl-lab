<?php
// checkout.php

session_start();

// Include necessary files
require_once '../../config/config.php';
require_once '../../config/database.php';
require_once '../../models/Cart.php';
require_once '../../models/Order.php';

// Initialize Cart
$cart = new Cart();

// Check if the cart is empty
if (empty($cart->getItems())) {
    echo "Your cart is empty. Please add items to your cart before checking out.";
    exit;
}

// Process checkout
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Here you would typically handle the order processing logic
    // For example, validate user input, create an order, etc.
    
    // Redirect to a success page or display a success message
    echo "Thank you for your order!";
    exit;
}

// Display the checkout form
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    <form action="checkout.php" method="POST">
        <h2>Order Summary</h2>
        <ul>
            <?php foreach ($cart->getItems() as $item): ?>
                <li><?php echo htmlspecialchars($item['name']); ?> - $<?php echo htmlspecialchars($item['price']); ?></li>
            <?php endforeach; ?>
        </ul>
        <h3>Total: $<?php echo htmlspecialchars($cart->getTotal()); ?></h3>
        <button type="submit">Place Order</button>
    </form>
</body>
</html>