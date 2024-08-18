
<?php

session_start();

if (!isset($_SESSION["user1"])) {
  header("Location:login.php");
}



?>


  <?php


  $no = $_SESSION['lid'];
  $server = "localhost";
  $user = "root";
  $pass = "";
  $db = "task";


  $na = $_POST['name'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $gen = $_POST['genderr'];



  $conn = mysqli_connect($server, $user, $pass, $db);



  $sql = "UPDATE `record` SET `name` = '$na', `email` = '$email',`age` = '$age', `gender` = '$gen'  WHERE `record`.`id` =$no ";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location:index.php");
    exit;
  }




  ?>
