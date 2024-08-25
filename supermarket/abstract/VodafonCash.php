<?php 
require_once 'PaymentAbstract.php';
class EtislatCash extends PaymentAbstract
{
    public function payment(){
        $this->get_info('product 4,5 ,6');
        echo 'it is vodafon cash';
    }
}