<?php

use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    protected $cart;

    protected function setUp(): void
    {
        $this->cart = new Cart();
    }

    public function testAddItem()
    {
        $this->cart->addItem(1, 2); // Add 2 of product with ID 1
        $this->assertEquals(2, $this->cart->getItemQuantity(1));
    }

    public function testRemoveItem()
    {
        $this->cart->addItem(1, 2);
        $this->cart->removeItem(1);
        $this->assertEquals(0, $this->cart->getItemQuantity(1));
    }

    public function testGetTotal()
    {
        $this->cart->addItem(1, 2); // Assuming product ID 1 costs $10
        $this->cart->addItem(2, 1); // Assuming product ID 2 costs $20
        $this->assertEquals(40, $this->cart->getTotal());
    }

    public function testClearCart()
    {
        $this->cart->addItem(1, 2);
        $this->cart->clear();
        $this->assertEquals(0, $this->cart->getTotalItems());
    }
}