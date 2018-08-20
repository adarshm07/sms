<?php
    $mysqli = mysqli_connect("localhost","noel","noel2geo","physics");
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
     }
      // echo "Connected successfully";
?>