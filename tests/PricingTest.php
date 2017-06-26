<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 26/06/17
 * Time: 13:44
 */

namespace Training\PHPUnit;

use PHPUnit\Framework\TestCase;

class PricingTest extends TestCase
{
    public function test15_5ShippingPrice()
    {
        $cart = $this->createMock(Cart::class);
        $cart
            ->expects($this->once())
            ->method('getProductCartPrices')
            ->willReturn(90.5);

        $pricing = new Pricing($cart);
        $this->assertSame((float) 106, $pricing->getTotalPrice());
    }

    public function test15ShippingPrice()
    {
        $cart = $this->createMock(Cart::class);
        $cart
            ->expects($this->once())
            ->method('getProductCartPrices')
            ->willReturn(100.0);

        $pricing = new Pricing($cart);
        $this->assertSame((float) 115, $pricing->getTotalPrice());
    }

    public function test10ShippingPrice()
    {
        $cart = $this->createMock(Cart::class);
        $cart
            ->expects($this->once())
            ->method('getProductCartPrices')
            ->willReturn(100.1);

        $pricing = new Pricing($cart);
        $this->assertSame((float) 110.1, $pricing->getTotalPrice());
    }
}
