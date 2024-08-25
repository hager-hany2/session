<?php 
require_once 'Languageinterface.php';
require_once  'StatisticsInterface.php';
class Aracbiclanguage implements LanguageInterface , StatisticsInterface {
public function lang_logic(){
echo'hager';
}
public function lang_style(){
    
    echo'hany';
}
public function get(){
    echo 100;
}
}






?>