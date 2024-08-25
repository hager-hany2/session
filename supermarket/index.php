<?php 
require_once './classes/product.php';
require_once './abstract/PaymentAbstract.php';
require_once './abstract/EtislatCash.php';
require_once './abstract/vodafonAbstract.php';
require_once './classes/Discount.php';
// $product =new products('car','1500$');
// echo $product->get_name();
// echo $product->get_price();
// echo '<br>';
// $product->delivery(('car'));
$product =new products();
echo $product->discount->grt_disc(2000);
$product->discount->discount_for_best_people();

products::$name="mobile";
products::get_info('1200');
$payment ="paypal";
$obj =new ($payment.'Cash')();
$abj->payment();


?>
