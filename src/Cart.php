<?php

namespace Training\PHPUnit;

/**
 * @author Fabien Salles <fsalles@clever-age.com>
 */
class Cart
{
    /** @var  Product[] */
    private $products;

    const SHIPPING_PRICE_LESS_THAN_100 = 15.5;
    const SHIPPING_PRICE_EQUAL_TO_100 = 15;
    const SHIPPING_PRICE_GREATER_THAN_100 = 10;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function getProductCartPrices(): float
    {
        $price = new Math();

        foreach ($this->products as $product) {
            $price->sum($product->getPrice());
        }

        if (100 < $price->getNumber()) {
            $price->sum(self::SHIPPING_PRICE_LESS_THAN_100);
        } elseif (100 === $price->getNumber()) {
            $price->sum(self::SHIPPING_PRICE_EQUAL_TO_100);
        } else {
            $price->sum(self::SHIPPING_PRICE_GREATER_THAN_100);
        }

        return $price->getNumber();
    }
}
