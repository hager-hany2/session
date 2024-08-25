<?php 
require_once 'Languageinterface.php';
require_once  'StatisticsInterface.php';
class Aracbiclanguage implements LanguageInterface , StatisticsInterface {
public function lang_logic(){
echo 'my style is english';
}
public function lang_style(){
    
    echo'my style is english';
}
public function get(){
    echo 100;
}
}






?>