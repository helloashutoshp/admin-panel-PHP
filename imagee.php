<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "inner";

$conn = mysqli_connect($server, $user, $pass, $db);

$sql2 = "SELECT * FROM image ";
$result2 = mysqli_query($conn, $sql2);
$num=mysqli_num_rows($result2);




    while( $row=mysqli_fetch_assoc($result2)){
    echo $row['id'];
    echo "<br>";
    }

