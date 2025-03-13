<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function listProducts()
    {
        // Logic to list all products
        $products = Product::all();
        return $products;
    }

    public function viewProduct($id)
    {
        // Logic to view a specific product by ID
        $product = Product::find($id);
        return $product;
    }
}