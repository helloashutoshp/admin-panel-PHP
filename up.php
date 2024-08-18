<?php

session_start();

if (!isset($_SESSION["user1"])) {
  header("Location:login.php");
}



?>




<?php include('includes/header.php')   ?>
<?php include('includes/navbar.php')   ?>
<?php include('includes/sidebar.php')   ?>






<div class="content-wrapper">
  <?php

  $id = $_GET['id'];
  $gender = $_GET['gender'];
  $city = $_GET['city'];

  $server = "localhost";
  $user = "root";
  $pass = "";
  $db = "inner";
  $arr = [];


  $conn = mysqli_connect($server, $user, $pass, $db);

  $sql = "select * from person where id={$id} ";

  $result = mysqli_query($conn, $sql);

  $num = mysqli_num_rows($result);



  if (!$num == null) {

    $_SESSION['status-code'] = "success";

    while ($row = mysqli_fetch_assoc($result)) {


  ?>
      <div class="card card-primary col-8 container p-0">
        <div class="card-header">
          <h1 class="card-title" style="font-weight:bold; font-size:20px">Edit your data</h1>
        </div>
        <form action="ok.php" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">

              <label for="name">Name</label>
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo $row['email']; ?>" required>
            </div>

            <div class="form-group">
              <label for="age">Age</label>
              <input type="number" name="age" class="form-control" id="age" placeholder="Enter age" value="<?php echo $row['age']; ?>" required>
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


            <div class="form-group pt-2 ">
              <label for="cityy">City</label>
              <select id="cityy" name="city" class="form-control" required>
                <option value="" selected disabled>Select City</option>
                <option value="1" <?php

                                  if ($city == "Puri") {
                                    echo "selected";
                                  }
                                  ?>>Puri</option>



                <option value="2" <?php

                                  if ($city == "Bhubaneswar") {
                                    echo "selected";
                                  }
                                  ?>>bhubaneswar</option>




                <option value="3" <?php

                                  if ($city == "Banglore") {
                                    echo "selected";
                                  }
                                  ?>>Banglore</option>





                <option value="4" <?php

                                  if ($city == "Mumbai") {
                                    echo "selected";
                                  }
                                  ?>>Mumbai</option>


              


                <option value="5" <?php

                                  if ($city == "Pune") {
                                    echo "selected";
                                  }
                                  ?>>Pune</option>
                <option value="6" <?php

                                  if ($city == "Delhi") {
                                    echo "selected";
                                  }
                                  ?>>Delhi</option>
                <option value="7" <?php

                                  if ($city == "Noida") {
                                    echo "selected";
                                  }
                                  ?>>Noida</option>

              </select><br>
            </div>


            <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control col-3">
                    <input type="hidden" name="img_old" value="<?php echo $row['image'] ?>">
                    <img src="media/<?php echo $row['image'] ?>" alt="" width="50px" class="pt-2">
                </div>
           






        <?php

      }
    }


        ?>


        </select><br>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-warning" name="submit">Update</button>
          </div>
        </form>
      </div>








</div>











<?php include('includes/footer.php')   ?>




<!-- <div class="form-group">
              <label for="fi">Image</label>

              <input type="file" name="new-image" class="form-control" id="fi">
              <?php $sql2 = "SELECT * FROM image WHERE  im_id = $id";
              $result2 = mysqli_query($conn, $sql2);


                $j=0;
              while ($row2 = mysqli_fetch_assoc($result2)) {

              $arr[$j]['image'] =  $row2['media'];

           $j++;


              ?>
                <img src="media/<?php echo $row2['media'] ?>" width="50px" alt="">

              <?php

              }
          
              print_r($arr)
              ?>
            

              <input type = "hidden" name="old-image" value="<?php print_r($arr) ?>">
              

            </div> -->
