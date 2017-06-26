<?php

namespace Training\PHPUnit;

/**
 * @author Fabien Salles <fsalles@clever-age.com>
 */
class Cart
{
    /** @var  Product[] */
    private $products;
    
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

        return $price->getNumber();
    }
}
