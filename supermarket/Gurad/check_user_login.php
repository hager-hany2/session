<?php 
function check_login(){
    if(!(isset($_SESSION['ID']))){
        header('location:login.php');
    }
}

?>
