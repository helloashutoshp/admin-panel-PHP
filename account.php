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


<div class="content-wrapper" style="padding-top:50px">

  <?php


  $nu = $_SESSION['lid'];



  $sql = "select * from record where `id`=$nu";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    $_SESSION['ok'] = "success";

    while ($row = mysqli_fetch_assoc($result)) {

      $gender = $row['gender'];
  ?>
      <div class="card card-primary col-8 container p-0">
        <div class="card-header">
          <h1 class="card-title" style="font-weight:bold; font-size:20px">Edit your profile</h1>
        </div>
        <form action="profile.php" method="POST">



          <div class="card-body ">


            <div class="form-group">



              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name'] ?>" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email'] ?>" required>
            </div>


            <div class="form-group">
              <label for="age">Age</label>
              <input type="number" name="age" class="form-control" id="age" value="<?php echo $row['age'] ?>" required>
            </div>

            <div class="form-group pt-2 ">
              <label for="genderr">Gender</label>
              <select id="genderr" name="genderr" class="form-control" required>
                <option value="" selected disabled>Select Gender</option>
                <option value="Male" <?php

                                      if ($gender == "Male") {
                                        echo "selected";
                                      }
                                      ?>>Male</option>



                <option value="Female" <?php

                                        if ($gender == "Female") {
                                          echo "selected";
                                        }
                                        ?>>Female</option>




                <option value="Other" <?php

                                      if ($gender == "Other") {
                                        echo "selected";
                                      }
                                      ?>>Other</option>
              </select><br>
            </div>




          </div>



          <div class="card-footer">


            <button type="submit" class="btn btn-primary">Submit</button>

          </div>

        </form>

      </div>



  <?php
    }
  }
  ?>
</div>









<?php include('includes/footer.php')   ?>