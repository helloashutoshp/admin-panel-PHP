<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <title>Sign Up Page</title>


</head>

<body>


  <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $passwordd = md5($_POST['pass']);
    $age = $_POST['age'];
    $gender = $_POST['gender'];
  



    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "task";
    $con = mysqli_connect($server, $user, $password, $dbname);

    $sql = "INSERT INTO `record` ( `name`, `email`, `password`, `gender`, `age`) VALUES ('$name', '$email', '$passwordd', '$gender', '$age')";

    $result = mysqli_query($con, $sql);

    if ($result) {
      $_SESSION['sign'] = "success";

      header("Location:login.php");
    }
  }

  ?>




  <div class="card card-primary container col-8">
    <h1 class="" style="font-weight:bold;color:darkolivegreen;font-family:'Times New Roman', Times, serif;">Sign Up</h1>

    <form action="task1.php" method="post">
      <div class="card-body ">
        <div class="form-group">



          <label for="nam">Your Name</label>
          <input type="text" name="name" class="form-control" id="nam" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="pass" class="form-control" id="password" placeholder="Password" required>
        </div>

        <div class="form-group  p-2 ">
          <label for="genderr">Gender</label>
          <select id="genderr" name="gender" class="form-control">

            <option value="" selected disabled>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select><br>
        </div>

        <div class="form-group">
          <label for="age">Age</label>
          <input type="number" name="age" class="form-control" id="age" placeholder="Enter age" required>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="login.php" class="btn btn-dark">Back</a>
      </div>
    </form>


  </div>



  <script src="assets/time.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>