<?php 
session_start();
$title="register";
include_once './Models/users.php';
// var_dump($_SESSION);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $check_exist=data_check($_POST['email']);
    if( $check_exist ==false){
        $data_check=Register($_POST['Name'],$_POST['email'],$_POST['password'],$_POST['Phone']);
        // var_dump($data_check);
    }
    // var_dump($check_exist);
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['type'] === ''){
        $data = getusers();
    }else{
        $data = getusers('WHERE type="'.$_POST['type'].'"');
    }
    
}


?>
<?php
include_once './Templete/header.php';
?>
<div class="login"> 
    <div class="container">
        <h2 class="text-center mt-3 mb-3">Register</h2>
        <?php 
        if(isset($data_check)){
            if($data_check ==false){
                echo'   <div class="alert alert-danger"> password or email not correct</div>';
            }

        }

        ?>
        <form action="" method="post" style="max-width:500px" class="m-auto">
                <div class="mb-3">
                    <label>UserName</label>
                    <input class="form-control" name="Name" type="text" required>
                </div>
            <div class="mb-3">
                <label>email</label>
                <input class="form-control" name="email" type="email" required>
                <?php
                if(isset($check_exist) && is_array($check_exist)){
                    echo'   <div class="alert alert-danger"> Email exist please chosse another</div>';
                }
                
                
                ?>
            </div>
            <div class="mb-3">
                <label>password</label>
                <input class="form-control" name="password" type="password" required>
                
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input class="form-control" name="Phone" type="text" required>
                
            </div>


            <input class=" w-100 btn btn-success text-center "  type="submit" required>
        </form>
    </div>
</div>
<?php
include_once './Templete/footer.php';
 ?>