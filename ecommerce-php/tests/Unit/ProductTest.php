<?php

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    protected $product;

    protected function setUp(): void
    {
        $this->product = new Product();
    }

    public function testGetProductDetails()
    {
        $this->product->setId(1);
        $details = $this->product->getProductDetails();
        $this->assertIsArray($details);
        $this->assertArrayHasKey('id', $details);
        $this->assertArrayHasKey('name', $details);
        $this->assertArrayHasKey('price', $details);
    }

    public function testGetAllProducts()
    {
        $products = $this->product->getAllProducts();
        $this->assertIsArray($products);
        $this->assertNotEmpty($products);
    }

    public function testCreateProduct()
    {
        $result = $this->product->createProduct(['name' => 'Test Product', 'price' => 100]);
        $this->assertTrue($result);
    }

    public function testUpdateProduct()
    {
        $this->product->setId(1);
        $result = $this->product->updateProduct(['name' => 'Updated Product', 'price' => 150]);
        $this->assertTrue($result);
    }

    public function testDeleteProduct()
    {
        $this->product->setId(1);
        $result = $this->product->deleteProduct();
        $this->assertTrue($result);
    }
}