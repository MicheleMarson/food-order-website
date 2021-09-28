<?php

// start session
session_start();

// create constants to store non repeating values
define("SITE_URL", "http://localhost/websites/food%20order");
define("LOCALHOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "admin");
define("DB_NAME", "food-order");

// execute query and save data to database
$conn = mysqli_connect(LOCALHOST, USERNAME, PASSWORD) or die(mysqli_error()); // database connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); // select database

?>