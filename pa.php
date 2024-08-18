<?php include('includes/header.php')   ?>

<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "task";
$con = mysqli_connect($server, $user, $password, $dbname);
$mail = $_GET['email'];
if (isset($_GET['email']) && isset($_GET['reset_token'])) {

    date_default_timezone_set('Asia/kolkata');
    $date = date('Y-m-d');

    $query = "SELECT * FROM `record` WHERE email = '$_GET[email]' AND token = '$_GET[reset_token]' AND resettokenexpire ='$date'";
    $result = mysqli_query($con, $query);
    if ($result) {

        if (mysqli_num_rows($result) == 1) {
?>
            <div class="content-wrapper">
                <div class="card card-warning col-8 container p-0 mt-4">
                    <div class="card-header">
                        <h1 class="card-title" style="font-weight:bold;font-size:20px">Register user</h1>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">

                            <div class="form-group">

                                <label for="name">New Password</label>
                                <input type="password" name="new_pass" class="form-control" id="name" placeholder="Enter new password">
                                <input type="hidden" name="email" class="form-control" value="<?php echo $_GET['email'] ?>">

                            </div>





                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning" name="update">Update</button>
                        </div>


                    </form>
                </div>
            </div>

<?php
        } else {
            echo "no row found";
        }
    } else {
        echo "false";
    }
}

?>




<?PHP
if (isset($_POST['update'])) {
    $paass = md5($_POST['new_pass']);

    $gmail = $_POST['email'];

    $sql =   "UPDATE `record` SET `password` = '$paass' , `token` = NULL, `resettokenexpire` = NULL WHERE `email` = '$gmail'";

    $result = mysqli_query($con, $sql);
    if ($result) {
?>
        <script>
            window.addEventListener("load", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Updated....',
                    text: 'Your new passworad is created successfully',

                });
            });
        </script>
<?php

   
    }
}

?>
<?php include('includes/footer.php')   ?>