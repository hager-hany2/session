<?php
    session_start();
    $title = 'Complaints';
    include_once 'models/ComplaintsModel.php';
    include_once 'guard/check_user_login.php';
    check_login();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data_check = insertComplaint($_POST['username'], $_POST['email'], $_POST['phone'], $_POST['complaint']);
}
?>

<?php
    include_once 'template/header.php';
?>
    <div class="container">
        <form class="mt-5 m-auto" method="post" style="max-width: 500px" >
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input  class="form-control" name="phone">
            </div>
            <div class="mb-3">
                <label class="form-label">Complaint text</label>
                <textarea class="form-control" rows="3" name="complaint"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php
include_once 'template/footer.php';
?>