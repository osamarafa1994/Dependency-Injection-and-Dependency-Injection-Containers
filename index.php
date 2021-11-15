<?php
require __DIR__ . '/ShoppingOrder.php';
require __DIR__ . '/Product.php';
require __DIR__ . '/ShoppingOrderDIContainer.php';

use DependencyInjection\ShoppingOrder;
use DependencyInjection\Product;
use DependencyInjection\ShoppingOrderDIContainer;

// DI
$product = new Product('Apple Juice', 3.25, 100, 0.4);
$order = new ShoppingOrder(104);
$order->setProduct($product);

echo "<pre>";
var_dump($order);
echo "</pre>";
// End DI


// DI Container
 $container = new ShoppingOrderDIContainer(array(
     'name' => "Apple Juice",
     'price' => 19.5,
     'quantity' => 20,
     'tax' => 0.1,
     'order_number' => 3
 ));
 $order = $container->createShippingOrder($container->createProduct());

echo "<pre>";
var_dump($order);
echo "</pre>";
// End DI Container
