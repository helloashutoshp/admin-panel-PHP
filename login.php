<?php

session_start();

if (isset($_SESSION["user1"])) {
  header("Location:index.php");
}


?>

<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "task";

$conn = mysqli_connect($server, $user, $pass, $db);
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Signin Template · Bootstrap</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    html,
    body {
      height: 100%;
    }

    body {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }

    .form-signin .form-control:focus {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
  <!-- Custom styles for this template -->

</head>



<body class="text-center">



  <form action="<?php $_SERVER['PHP_SELF']; ?>" class="form-signin" method="post">
    <img class="mb-4" src="assets/tnw.png" alt="" width="100px" height="50px">

    <?php
    if (isset($_SESSION['logout'])) {
      echo '<div class="hide alert alert-success alert-dismissible fade show" role="alert">
   Loged out successfully.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
   </button>
   </div>';

      unset($_SESSION['logout']);
    }


    if (isset($_SESSION['sign'])) {
      echo '<div class="hide alert alert-success alert-dismissible fade show" role="alert">
      your account is created successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';

      unset($_SESSION['sign']);
    }

    ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


      $email = $_POST['email'];
      $passwo = md5($_POST['password']);

      $sql = "SELECT * FROM `record` where email='$email' and password='$passwo'";

      $result = mysqli_query($conn, $sql);

      $num = mysqli_num_rows($result);

      $row = mysqli_fetch_assoc($result);


      if ($num > 0) {
      
        $_SESSION['role'] = $row['usertype'];
        if ($_SESSION['role'] == "admin") {

          

          while ($row) {


            session_start();
            $_SESSION['lid'] = $row['id'];
            $_SESSION['user1'] = $row['name'];
            $_SESSION['pass1'] = $row['password'];


            header('Location:index.php');
            exit;
          }
        } else {

          while ($row) {


            session_start();
            $_SESSION['lid'] = $row['sl_no'];
            $_SESSION['user1'] = $row['name'];
            $_SESSION['pass1'] = $row['password'];


            header('Location:index.php');
            exit;
          }
        }
      } else {
        echo ' <div class="hide alert alert-danger" role="alert">
      <h4 class="alert-heading">No user found !</h4>
      
      <p class="mb-0">please enter a valid user email and password</p>
    </div>';
      }
    }

    ?>

    <div class="form-group">

      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="User Email" required autofocus>

    </div>

    <div class="form-group">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

    </div>




    <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Log in</button>
    <a href="task1.php" class="btn btn-lg btn-success btn-block">Sign up</a>
    <a href="forgot_pass.php" style="margin-right:10rem;" >Forgot Password ?</a>

    <p class="mt-3  text-muted">@since 1102</p>
  </form>

 











  <script src="assets/time.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>