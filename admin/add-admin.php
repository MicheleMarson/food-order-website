<?php include("./partials/menu.php"); ?>

<div class="main">
  <div class="wrapper">
    <h1>Add admin</h1><br/><br/><br/>

    <?php 
    if(isset($_SESSION["add"])){
      echo $_SESSION["add"];
      unset($_SESSION["add"]);
    }
    ?>

    <form action="" method="POST">
      <table class="tbl-30">
        <tbody>
          <tr>
            <td>Full name:</td>
            <td>
              <input type="text" name="fullname" placeholder="Enter your name..">
            </td>
          </tr>
          <tr>
            <td>Username:</td>
            <td>
              <input type="text" name="username" placeholder="Enter your username..">
            </td>
          </tr>
          <tr>
            <td>Password:</td>
            <td>
              <input type="password" name="password" placeholder="Enter your username..">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="submit" name="submit" value="add admin" class="btn-secondary">
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>

<?php include("./partials/footer.php") ?>

<?php 
// process the value from form and save it in database
// check whether the submit button is clicked or not
if(isset($_POST['submit'])){
  // button clicked 
  
  // get data from form
  $fullname = $_POST["fullname"];
  $password = md5($_POST["password"]);// md5 -> encription function for password
  $username = $_POST["username"]; 
  
  // sql to save data to database
  $sql = "INSERT INTO admin SET 
    full_name='$fullname',
    username='$username',
    password='$password';
  ";

  // executing query and serving data to database
  $res = mysqli_query($conn, $sql) or die(mysqli_error());

  // check weather the(query is executed) data is inserted or not and display message
  if($res == TRUE){
    // data inserted
    // create a sesson variable to display message
    $_SESSION["add"] = "Admin added successfuly";
    // redirect page to manage admin
    header("location:".SITE_URL."/admin/admin.php");
  }else{
    // failed to insert data
    $_SESSION["add"] = "Failed to add admin";
    // redirect page to manage admin
    header("location:".SITE_URL."/admin/admin.php");
  }
}
?>