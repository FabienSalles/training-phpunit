<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 23/06/17
 * Time: 14:48
 */

namespace Training\PHPUnit;

use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testGetProductCartPrice()
    {
        $cart = new Cart([
            new Product('un produit', 10.90),
            new Product('un 2ème produit',80.10),
        ]);

        $this->assertSame((float) 91, $cart->getProductCartPrices());
    }
}
