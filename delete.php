








<?php


session_start();
?>




<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "inner";

$id = $_GET['id'];





$conn = mysqli_connect($server, $user, $pass, $db);

$sql3 = "SELECT image FROM person WHERE  id = $id";
$result3 = mysqli_query($conn, $sql3);
while ($row2 = mysqli_fetch_assoc($result3)) {

    $file = $row2['image'];

    unlink("media/".$file);

  
}


$sql = "DELETE  FROM `person` where person.id =$id ";
// $sql2 = "DELETE  FROM `image` where image.Im_id =$id";
$result = mysqli_query($conn, $sql);
// $result2 = mysqli_query($conn, $sql2);









    if($result){
$_SESSION['status'] = "success";
header('Location:employee.php');
    }
  


?>



















<?php include('includes/footer.php')   ?>