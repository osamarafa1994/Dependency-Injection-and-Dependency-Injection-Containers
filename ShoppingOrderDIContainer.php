<?php


namespace DependencyInjection;


class ShoppingOrderDIContainer
{
    public $parameters = array();

    public function __construct(array $params)
    {
        $this->parameters = $params;
    }

    public function createProduct()
    {
        return new Product(
            $this->parameters['name'],
            $this->parameters['price'],
            $this->parameters['quantity'],
            $this->parameters['tax']
        );
    }

    public function createShippingOrder($product){
        $order = new ShoppingOrder($this->parameters['order_number']);
        $order->setProduct($product);
        return $order;
    }
}