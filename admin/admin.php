<?php include("./partials/menu.php"); ?>

<div class="main">
  <div class="wrapper">
      <h1>Manage admin</h1><br/><br/>
      
      <?php
      if(isset($_SESSION["add"])){
        echo $_SESSION["add"];
        unset($_SESSION["add"]); // remove session message
      }
      ?>
      <br/>
      <br/>

      <!-- button to add admin -->
      <a href="./add-admin.php" class="btn-primary">Add Admin</a><br/><br/><br/>

      <table class="tbl-full">
        <thead>
          <tr>
            <th>S.N.</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Actions</th>
          </tr>
        </thead>
        
        <tbody>
        <?php
        // get all from admin
        $sql = "SELECT * FROM admin";
        $res = mysqli_query($conn, $sql);

        if($res == TRUE){
          // count rows to check there is data in database
          $count = mysqli_num_rows($res); // function to get all the rows in database
          $sn = 1;

          // check the number of rows 
          if($count > 0){
            // database full
            while($rows=mysqli_fetch_assoc($res)){
              // using while loop to get all the data from database
              // run as long we have data in database

              // get individual data
              $fullname=$rows["full_name"];
              $username=$rows["username"];

              // display values in table
              ?>
              <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $fullname; ?></td>
                <td><?php echo $username; ?></td>
                <td>
                  <a href="#" class="btn-secondary">Update Admin</a>
                  <a href="#" class="btn-danger">Delete Admin</a>
                </td>
              </tr>
              <?php
            }
          }else{
            // database empty
          }
        }
        ?>
        </tbody>
      </table>
  </div>
</div>

<?php include("./partials/footer.php") ?>
