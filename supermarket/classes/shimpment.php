<?php 
class shimpent
{
    private $del_price;
    public function delivery($item){
        echo $item.'will be dilevery';
    }
    protected function calc_tax($price){
        echo "tax===>".$price/10;
    }
}



?>
