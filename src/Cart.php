<?php

namespace Training\PHPUnit;

/**
 * @author Fabien Salles <fsalles@clever-age.com>
 */
class Cart
{
    /** @var  Product[] */
    private $products;

    /** @var Math */
    private $math;
    
    public function __construct(Math $math, array $products)
    {
        $this->math = $math;
        $this->products = $products;
    }

    public function getProductCartPrices(): float
    {
        $price = 0;

        foreach ($this->products as $product) {
            $price = $this->math->sum($price, $product->getPrice());
        }

        return $price;
    }
}
