<?php

  include("phpmysqlconnect.php");

  // form handler

  $rating = $_REQUEST['rate'];
  $feedback = $_REQUEST['feedback'];

  //Insert the data into the database
  $query = mysqli_query($db_connection,"INSERT INTO ratings (rating, feedback) VALUES ('$rating', '$feedback')") or die(mysqli_error($db_connection));

  mysqli_close($db_connection);

  header("location:../booking.html?note=success")
?>