<?php 
require_once'shimpment.php';
class products extends shimpent{
    // private $name ;
    // private $price;
    // public function __construct($name,$price){
    //     $this->name=$name;
    //     $this->price=$price;
    // }
    // public function get_name(){
    //     return $this->name;
    // }
    // public function get_price(){
    //     return $this->price;
    // }
    public $discount;
    public function __construct(){
        $this->discount =new Discount();
    
    }
    public static $name;
    public static function get_info($price){
        echo 'product=====>' .self::$name. 'and price===>'.$price;
    }

}



















?>