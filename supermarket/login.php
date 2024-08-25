<?php 
session_start();
$title="login";
include_once './Models/users.php';
// var_dump($_SESSION);
include_once './Templete/header.php';
if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $data_check = getspecific_user($_POST['email'] , $_POST['password']);
    // var_dump($data_check);
    if(is_array($data_check)){
        // echo'login is success';
        $_SESSION['ID']=$data_check['ID'];
        $_SESSION['email']=$data_check['email'];
        $_SESSION['Name_User']=$data_check['Name_User'];
        $_SESSION['Phone_User']=$data_check['Phone_User'];
        $_SESSION['Address_User']=$data_check['Address_User'];
        header('location:index.php');
    }
}

?>
<div class="login"> 
    <div class="container">
        <h2 class="text-center mt-3 mb-3">Login</h2>
        <?php 
        if(isset($data_check)){
            if($data_check ==false){
                echo'   <div class="alert alert-danger"> password or email not correct</div>';
            }

        }
     
        
        ?>
        <form action="" method="post" style="max-width:500px" class="m-auto">
            <div class="mb-3">
                <label>email</label>
                <input class="form-control" name="email" type="email" required>
                
            </div>
            <div class="mb-3">
                <label>password</label>
                <input class="form-control" name="password" type="password" required>
                
            </div>

            <input class=" w-100 btn btn-success text-center "  type="submit" required>
        </form>
    </div>
</div>
<?php
include_once './Templete/footer.php';
 ?>