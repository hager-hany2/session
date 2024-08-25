?php
session_start();
$title = 'Update';
include_once 'models/UsersModel.php';

if(!isset($_GET['user_id'])){
    header('Location: index.php');
}
$id = $_GET['user_id'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    update($_POST['username'],$_POST['email'],$_POST['password'],$id);
    $_SESSION['message'] = 'user updated';
    header('Location: index.php');
}
?>

<?php
include_once 'template/header.php';
?>
<div class="login mt-5">
    <div class="container">
        <h2 class="text-center">Update</h2>
        <form method="post" style="max-width: 500px" class="m-auto">
            <div class="mb-3">

                <label>Username</label>
                <input class="form-control" name="username" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input class="form-control" name="email" type="email" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input class="form-control" name="password" type="password" required>
            </div>

            <input type="submit" class="btn btn-success w-100" value="Register">

        </form>

    </div>
</div>
<?php
include_once 'template/footer.php';
?>