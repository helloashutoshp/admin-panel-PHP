<?php

session_start();

if (!isset($_SESSION["user1"])) {
    header("Location:login.php");
}



?>


<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "task";

$conn = mysqli_connect($server, $user, $pass, $db);



?>



<?php include('includes/header.php')   ?>
<?php include('includes/navbar.php')   ?>
<?php include('includes/sidebar.php')   ?>


<div class="content-wrapper" style="padding-top:80px">


    <?php
    $idd = $_SESSION['lid'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {



        $pass = md5($_POST['curr']);
        $new = ($_POST['new']);
        $con =  ($_POST['conf']);




        if ($pass == $_SESSION['pass1']) { {
                if ($new == $con) {

                    $up = md5($new);

                    $sql = "UPDATE `record` SET `password` = '$up'  WHERE `record`.`id` = $idd ";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {

    ?>

                        <script>
                            window.addEventListener("load", function() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Password changed',
                                    text: 'Your password has changed successfully',
                                   
                                });
                            });
                        </script>
                    <?php
                    }
                } else {
                    ?>
                    <script>
                        window.addEventListener("load", function() {
                            Swal.fire({
                                icon: 'error',
                                title: ' Password is not matched',
                                text: 'Please check again...',
                              
                            });
                        });
                    </script>
    <?php
                }
            }
        } else {
            ?>
            <script>
            window.addEventListener("load",function(){
              Swal.fire({
              icon: 'error',
              title: 'Current password is not correct',
              text: 'You entered a wrong password',
             
            });
            });
            
            
            </script>
            <?php
        }
    }

    ?>
    <div class="card card-primary col-8 container p-0">
        <div class="card-header">
            <h1 class="card-title" style="font-weight:bold;font-size:20px">Change your password</h1>
        </div>
        <form action="password.php" method="POST">


            <div class="card-body ">
                <div class="form-group">

                    <label for="cur">Current Password</label>
                    <input type="text" name="curr" class="form-control" id="cur" placeholder=" Current password" required>
                </div>
                <div class="form-group">
                    <label for="new">New Password</label>
                    <input type="text" name="new" class="form-control" id="new" placeholder="New password" required>
                </div>

                <div class="form-group">
                    <label for="con">Confirm Password</label>
                    <input type="text" name="conf" class="form-control" id="con" placeholder="Confirm Password" required>
                </div>

            </div>



            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Change Password</button>
            </div>



        </form>


    </div>




</div>







<?php include('includes/footer.php')   ?>