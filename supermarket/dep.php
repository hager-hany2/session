<?php 
include_once "helpers/ConecationToBe.php";
$con =contactToDB();
include_once "./Models/users.php";
$data=getdep();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Ascending'])) {
        $data=descdep();
    }else if($_POST['Descending']){
        $data=ASCdep();
}};


$employee_acess=["ID","Name_Dep"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>super market user</title>
</head>
<body>
    <?php
    if(isset($data) && sizeof($data)>0){
    ?>
    
    <table class="table table-bordered table-striped table-hover">
        <thead class="text-center">
                <?php
                    foreach($employee_acess as $acess){
                        echo"<td>".$acess."</td>";
                    }
                ?>
                <td>
                    Control
                </td> 
            </tr>
        </thead>
        <tbody class="text-center">
                <?php
                    foreach($data as $users){
                            echo"<tr>";
                                    foreach($employee_acess as $acess){
                                        echo"<td>".$users[$acess]."</td>";
                                        

                                    }
                                 
                            echo"
                            <form method='post'>
                            <td><input type='submit' name=' Ascending' class='btn btn-primary' value='Ascending order'></input> 
                            <input type='submit'  name=' Descending'  class='btn btn-primary' value=' Descending order'></input></td>
                            </form>" ;
                            echo"</tr>";
                            
                            
                    }


                ?>
            </tr>
        </tbody>
    </table> 
    <?php
    }else{
        echo"<p class='alert alert-danger text-center m-4>There is not data</p>";

    }
   
    ?>
</body>
</html>


















<!-- <?php

use function PHPSTORM_META\type;

session_start();
$title="home";
include_once "./Models/users.php";
include_once 'Gurad/check_user_login.php';
include_once "helpers/ConecationToBe.php";
$con =contactToDB();
check_login();
// var_dump($_SESSION);

$data=get_users();
$data= ASCuser();

// $data=like();
// var_dump($data);
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_POST['Ascending'])) {
//         $data= ASCuser();
//     }else if($_POST['Descending']){
//         $data= descuser();
// }};
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $data=get_users('WHERE type = "'.$_POST["type"].'"');
//     var_dump($data);
// }
// if($_SERVER['REQUEST_METHOD']=='POST'){
//     if($_POST['type'] === ''){
//         $data = get_users();
//     }else{
//         $data = get_users('WHERE type="'.$_POST['type'].'"');
//     }
    
// }
// if($_SERVER['REQUEST_METHOD'] =='POST' ){
//     if($_POST['type2']  === ''){
//         // $data =like();
//         $data = get_users();
//     }else{
//         $data = like($char=$_POST['type2']);
//     }  
// }
if(!empty($_POST['type'])&& $_POST['type2']){
    $where='WHERE type="'.$_POST['type'].'" AND Name LIKE"%'.$_POST['type2'].'%"';
    $data=get_users($where);
}





$employee_acess=["ID","email","password","Name","Phone","Address","type"];
?>
<?php 
include_once './Templete/header.php';
?>
    <?php
        if(isset($data) && sizeof($data)>0){
    ?>
        <div class="container">

    <form method="POST" class="m-auto pt-5">
        <div class="row">
            <select name="type" id="" class="col-3" style="    width: 242px;
    margin: 10px;">
            <option value="" >All</option>
                <option value="client">Client</option>
                <option value="employee">employee</option>
                <option value="manger">manger</option>
            
                
            </select>
            <form method="POST" class="m-auto pt-5">
                <br>
                <input type="text" class="form-control" id="" style="width: 242px; 
    margin: 10px;" name="type2">

            <button type="submit" class="btn btn-sm btn-outline-success mb-3  col-3"style="    width: 242px;
    margin: 10px;">
                Submit
            </button>
        </div>
    </form>
    <br>
    <table class="table table-bordered table-striped table-hover">
        <thead class="text-center">
                <?php
                    foreach($employee_acess as $acess){
                        echo"<td>".$acess."</td>";
                    }
                ?>
                <td>
                    Control
                </td> 
            </tr>
        </thead>
        <tbody class="text-center">
                <?php
                    foreach($data as $users){
                            echo"<tr>";
                                    foreach($employee_acess as $acess){
                                        echo"<td>".$users[$acess]."</td>";
                                    }
                                    echo"
                                    <form method='post'>
                                    <td><input type='submit' name=' Ascending' class='btn btn-primary' value='Ascending order'></input> 
                                    <input type='submit'  name=' Descending'  class='btn btn-primary' value=' Descending order'></input></td>
                                    </form>" ;
                                    echo"</tr>";
                    }


                ?>
            </tr>
        </tbody>
    </table> 
    <?php
    }else{
        echo"<p class='alert alert-danger text-center m-4>There is not data</p>";

    }
    ?>
<?php 
include_once './Templete/footer.php';
?> -->