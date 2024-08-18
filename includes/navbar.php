<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item dropdown" style="margin-left:950px"><a href=""  class="nav-link link-light dropdown-toggle" data-toggle="dropdown"><i class="fa-solid fa-user" style="color: #043d9f;"></i>  <?php echo $_SESSION['user1'] ?></a>
      <div class="dropdown-menu">
        <a href="password.php" class="dropdown-item text-primary">Change Password</a>
        <a href="account.php" class="dropdown-item text-primary">Edit Profile</a>
        <a href="logout.php" class="dropdown-item text-danger">Log out</a>

      </div>
    </li>


  </ul>

  <!-- Right navbar links -->

</nav>