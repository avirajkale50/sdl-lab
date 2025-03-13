<?php

class Product {
    private $id;
    private $name;
    private $description;
    private $price;
    private $stock;

    public function __construct($id, $name, $description, $price, $stock) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getStock() {
        return $this->stock;
    }

    public function isAvailable() {
        return $this->stock > 0;
    }

    public function reduceStock($quantity) {
        if ($quantity <= $this->stock) {
            $this->stock -= $quantity;
            return true;
        }
        return false;
    }

    public static function find($id) {
        // Logic to retrieve product from database using the provided ID
    }

    public static function all() {
        // Logic to retrieve all products from the database
    }
}