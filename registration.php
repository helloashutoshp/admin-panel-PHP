<?php

session_start();

if (!isset($_SESSION["user1"])) {
    header("Location:login.php");
}



?>




<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    $name = $_POST['name'];
    $email = $_POST['email'];


    $gender = $_POST['genderr'];
    $age = $_POST['age'];
    $city = $_POST['cityy'];
   

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = "media/".$filename;
   

    move_uploaded_file($tempname,$folder);
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "inner";
    $con = mysqli_connect($server, $user, $password, $dbname);
 

    $sql = "INSERT INTO `person` ( `name`, `email`,  `gender`, `age`,`city`,`image`) VALUES ('$name', '$email',  '$gender', '$age' ,'$city','$filename')";

    $result = mysqli_query($con, $sql);
    // $id = mysqli_insert_id($con);

    // $image_count = count($_FILES['multi']['name']);

    // for ($i = 0; $i < $image_count; $i++) {
    //     $imagename = $_FILES['multi']['name'][$i];
    //     $imagetemp = $_FILES['multi']['tmp_name'][$i];
        
       
    //     $target = "media/" . $imagename;
    //     if (move_uploaded_file($imagetemp, $target)) {
    //         $sql = "INSERT INTO `image` (`im_id`,`media`) VALUES ($id,'$imagename')";
    //         $result = mysqli_query($con, $sql);
    //     }
    // }













    if ($result) {


?>
        <script>
            window.addEventListener("load", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Registraion completed....',
                    text: 'Your record is inserted',

                });
            });
        </script>
<?php
    }
}
?>


<?php include('includes/header.php')   ?>
<?php include('includes/navbar.php')   ?>
<?php include('includes/sidebar.php')   ?>




<div class="content-wrapper">

    <div class="card card-primary col-8 container p-0">
        <div class="card-header">
            <h1 class="card-title" style="font-weight:bold;font-size:20px">Register user</h1>
        </div>
        <form action="registration.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">

                <div class="form-group">

                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" name="age" class="form-control" id="age" placeholder="Enter age" required>
                </div>

                <div class="form-group pt-1 ">
                    <label for="genderr">Gender</label>
                    <select id="genderr" name="genderr" class="form-control" required>
                        <option value="" selected disabled>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select><br>
                </div>




                <div class="form-group pt-1 ">
                    <label for="genderr">City</label>
                    <select id="city" name="cityy" class="form-control" required>
                        <option value="" selected disabled>Select City</option>

                        <?php





                        $server = "localhost";
                        $user = "root";
                        $password = "";
                        $dbname = "inner";
                        $con2 = mysqli_connect($server, $user, $password, $dbname);
                        $sql2 = "select * from cityy";

                        $res = mysqli_query($con2, $sql2);

                        $num = mysqli_num_rows($res);
                        if (!$num == null) {
                            while ($row = mysqli_fetch_assoc($res)) {

                        ?>
                                <option value=" <?php echo $row['cid'] ?> "><?php echo $row['city']  ?></option>

                        <?php

                            }
                        }


                        ?>






                    </select><br>
                </div>

               
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control col-3"  required>
                </div>

             

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


        </form>
    </div>







</div>


























<?php include('includes/footer.php')   ?>