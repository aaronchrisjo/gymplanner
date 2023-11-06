<?php
//   // Connect to the database
//   $host = "localhost";
//   $user = "root";
//   $password = "";
//   $dbname = "test";

//   // Create connection
//   $conn = mysqli_connect($host, $user, $password, $dbname);
  
//   // Get the form data
//   $user_id = $_POST['user_id'];
//   $treadmill = $_POST['treadmill'];
//   $cycling =  $_POST['cycling'];
//   $squats = $_POST['squats'];
//   $rowing = $_POST['rowing'];
//   $jumping = $_POST['jumping'];
//   $skipping = $_POST['skipping'];
//   $burpees = $_POST['burpees'];
//   $planking = $_POST['planking'];

//   // Insert values into database
//   $sql = "INSERT INTO routines (user_id, treadmill, cycling, squats, rowing, jumping, skipping, burpees, planking) VALUES ('$user_id', '$treadmill', '$cycling', '$squats','$rowing','$jumping','$skipping','$burpees','$planking')";
//   $result = mysqli_query($conn, $sql);
  
// //   $redirect_url = "login.html";
// //   echo "Signup successful " .$userid. "<br> Go to login!";
// //   sleep(4); // Delay for 4 seconds
// //   header("Location: ".$redirect_url);

//   // Close connection
//   $conn->close();
  
  if(isset($_POST['planking'])) {
    // Connect to the database
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "test";
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the data into the database
    $sql = "INSERT INTO routines (user_id, treadmill) VALUES ('1024', 'y')";
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
?>
