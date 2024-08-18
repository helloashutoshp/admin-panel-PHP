



<?php
session_start();

session_unset();

session_destroy();

session_start();

$_SESSION['logout'] = "success";


header('Location:login.php');




?>