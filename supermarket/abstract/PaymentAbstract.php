<?php 
abstract class PaymentAbstract
{
public function get_info($info=''){
    echo $info;
    echo'<br>';


}
abstract function payment();
}















?>