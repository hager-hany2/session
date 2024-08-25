<?php 
require_once 'discount_fn_trait.php';
class Discount
{
    use discount_fn_trait;
    public function grt_disc($price){
        if($price >1000){
            return $price/10;
    
        }
        return 0;
    }
}







?>