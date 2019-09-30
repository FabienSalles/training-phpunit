<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 23/06/17
 * Time: 14:38
 */

namespace Training\PHPUnit;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /** @var  Product */
    private $product;

    const NAME = 'produit de test';
    const PRICE = 55.90;

    public function setUp(): void
    {
        $this->product = new Product(self::NAME, self::PRICE);
    }

    public function testGetName(): void
    {
        $this->assertEquals(self::NAME, $this->product->getName());
    }

    public function testGetPrice(): void
    {
        $this->assertSame(self::PRICE, $this->product->getPrice());
    }
}
