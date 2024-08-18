<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->

  <!-- <img src="assets/tnw.png" alt="AdminLTE Logo" class="brand-image  elevation-1" style="width:200px; margin-top:20px;margin-left:20px" > -->


  <!-- Sidebar -->
  <div class="sidebar">
    <div>
      <img src="assets/tnw.png" alt="AdminLTE Logo" class="brand-image " style="width:170px;height:50px; margin-top:20px;margin-left:25px">
    </div>
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">


    </div>

    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">


      <ul class="nav nav-sidebar ">

        <li class="nav-item">
          <a href="index.php" class="nav-link" style="font-size:20px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <i style="padding-right:5px" class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <?php
        if ($_SESSION['role'] == "admin") {


        ?>
          <li class="nav-item">
            <a href="registration.php" class="nav-link" style="font-size:20px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
              <i class="fa-solid fa-user-plus" style="color: #d1d1d2;"></i>
              <p style="padding-left:5px;">
                Register
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="employee.php" class="nav-link" style="font-size:20px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
              <i class="fa-solid fa-users"></i>
              <p style="padding-left:5px;">
                Employee
              </p>
            </a>
          </li>


      </ul>
    <?php

        }
    ?>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>