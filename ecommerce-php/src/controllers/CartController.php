<?php

class CartController {
    private $cart;

    public function __construct() {
        $this->cart = new Cart();
    }

    public function addItem($productId, $quantity) {
        $this->cart->add($productId, $quantity);
        // Redirect or return response
    }

    public function removeItem($productId) {
        $this->cart->remove($productId);
        // Redirect or return response
    }

    public function viewCart() {
        $items = $this->cart->getItems();
        // Load the view and pass the items
    }

    public function checkout() {
        // Handle checkout process
    }
}