<?php

session_start();

if (isset($_SESSION["user1"])) {
    header("Location:index.php");
}


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


    <!-- Custom styles for this template -->

</head>

<body>
<div class="card card-primary col-6 container p-0 mt-4">
    <div class="card-header" style="background-color:black">
        <h1 class="card-title" style="font-weight:bold;font-size:20px;color:white">Forgot password</h1>
    </div>
    <form action="confirm_pass.php" method="POST">


        <div class="card-body ">
            

            <div class="form-group">
                <label for="con">Your email</label>
                <input type="text" name="email" class="form-control" id="con" placeholder="Enter your mail" required>
            </div>

        </div>



        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Send Mail</button>
        </div>



    </form>


</div>


</body>

</html>









