<?php
  // Connect to the database
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "test";

  // Create connection
  $conn = mysqli_connect($host, $user, $password, $dbname);
  // Check connection
  
  $userid = $_POST['user_id'];
  $password = $_POST['user_password'];

  // Login with values from database
  $sql = "SELECT * FROM user_details WHERE user_id = '$userid' AND user_password = '$password'";
  // $sql = "UPDATE user_details SET sts='Y' WHERE user_id = '$userid'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result); 

  if ($row['user_id'] == $userid && $row['user_password'] == $password) {
  $sql = "UPDATE user_details SET sts='Y' WHERE user_id = '$userid'";
    echo "Login successful " .$userid. " you are logged in!";
    header("Location: home.html");
  }
  else {
    echo "Login failed";
  }

  // Close connection
  $conn->close();
?>
