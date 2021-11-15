<?php


namespace DependencyInjection;


class ShoppingOrder
{
    public $order_number;
    public $product;

    public function __construct($order_number)
    {
        $this->order_number = $order_number;
    }

    public function setProduct(Product $product){
        $this->product = $product;

    }

    public function calculatePriceWithTaxForInvoice()
    {
        //some implementation
    }
}