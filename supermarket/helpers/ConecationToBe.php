

<?php 
function contactToDB(){
    $info="mysql:host=localhost:8080;dbname=super market";
    $username="root";
    $password='';
    $con=new PDO($info,$username,$password);
    $con->setAttribute
    (PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
    return $con;  
} 
?>