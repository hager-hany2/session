<?php 
include_once "helpers/ConecationToBe.php";
$con =contactToDB();
include_once "./Models/users.php";
$data= getorders();
$data=ASCOrder();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Ascending'])) {
        $data= ASCOrder();
    }else if($_POST['Descending']){
        $data= desorder();
}};


$employee_acess=["ID","Name_Order","Date_Order","Time_Order"];
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