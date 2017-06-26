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

    const SHIPPING_PRICE_LESS_THAN_100 = 15.5;
    const SHIPPING_PRICE_EQUAL_TO_100 = 15;
    const SHIPPING_PRICE_GREATER_THAN_100 = 10;

    public function __construct(Cart $productCart)
    {
        $this->productCart = $productCart;
    }

    public function getProductCart() : Cart
    {
        return $this->productCart;
    }

    public function getTotalPrice() : float
    {
        $price = new Math($this->productCart->getProductCartPrices());

        if (100 > $price->getNumber()) {
            $price->sum(self::SHIPPING_PRICE_LESS_THAN_100);
        } elseif (100 == $price->getNumber()) {
            $price->sum(self::SHIPPING_PRICE_EQUAL_TO_100);
        } else {
            $price->sum(self::SHIPPING_PRICE_GREATER_THAN_100);
        }

        return $price->getNumber();
    }
}
