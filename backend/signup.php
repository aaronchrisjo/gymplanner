<?php
  // Connect to the database
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "test";

  // Create connection
  $conn = mysqli_connect($host, $user, $password, $dbname);
  // Check connection
 // Get the form data
  $username = $_POST['username'];
  $userid = $_POST['user_id'];
  $usernumber = $_POST['user_number'];
  $useraddress = $_POST['user_address'];
  $password = $_POST['user_password'];
 

  // Insert values into database
  $sql = "INSERT INTO user_details (user_name, user_id, user_number, user_address, user_password) VALUES ('$username', '$userid', '$usernumber', '$useraddress','$password')";
  $result = mysqli_query($conn, $sql);
  
  $redirect_url = "login.html";
  echo "Signup successful " .$userid. "<br> Go to login!";
  sleep(4); // Delay for 4 seconds
 header("Location: ".$redirect_url);

  
  

  // Close connection
  $conn->close();

?>