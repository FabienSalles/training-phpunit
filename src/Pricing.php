<?php
/**
 * Created by PhpStorm.
 * User: fsalles
 * Date: 26/06/17
 * Time: 13:43
 */

namespace Training\PHPUnit;

class Pricing
{
    /** @var  Cart */
    protected $productCart;

    /** @var  Math */
    protected $math;

    const SHIPPING_PRICE_LESS_THAN_100 = 15.5;
    const SHIPPING_PRICE_EQUAL_TO_100 = 15;
    const SHIPPING_PRICE_GREATER_THAN_100 = 10;

    public function __construct(Math $math, Cart $productCart)
    {
        $this->math = $math;
        $this->productCart = $productCart;
    }

    public function getProductCart() : Cart
    {
        return $this->productCart;
    }

    public function getTotalPrice() : float
    {
        $price = $this->productCart->getProductCartPrices();
        $shippingPrice = null;

        if (100 > $price) {
            $shippingPrice = self::SHIPPING_PRICE_LESS_THAN_100;
        } elseif (100 == $price) {
            $shippingPrice = self::SHIPPING_PRICE_EQUAL_TO_100;
        } else {
            $shippingPrice = self::SHIPPING_PRICE_GREATER_THAN_100;
        }

        return $this->math->sum($price, $shippingPrice);
    }
}
