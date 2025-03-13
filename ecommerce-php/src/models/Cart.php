<?php

class Cart {
    private $items = [];

    public function addItem($productId, $quantity) {
        if (isset($this->items[$productId])) {
            $this->items[$productId] += $quantity;
        } else {
            $this->items[$productId] = $quantity;
        }
    }

    public function removeItem($productId) {
        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);
        }
    }

    public function getItems() {
        return $this->items;
    }

    public function clear() {
        $this->items = [];
    }

    public function getTotalItems() {
        return array_sum($this->items);
    }
}