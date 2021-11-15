<?php


namespace DependencyInjection;



class Product
{
    public $product_name;
    public $product_price;
    public $product_quantity;
    public $tax;

    public function __construct($product_name, $product_price, $product_quantity, $tax)
    {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_quantity = $product_quantity;
        $this->tax = $tax;
    }

    public function calculatePriceWithTax()
    {
      //some implementation
    }


}