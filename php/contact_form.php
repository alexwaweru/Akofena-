<?php

  include("phpmysqlconnect.php");

  // form handler

  $email = $_REQUEST['email'];
  $firstname = $_REQUEST['fname'];
  $secondname = $_REQUEST['lname'];
  $city = $_REQUEST['city'];
  $state = $_REQUEST['state'];
  $zip = $_REQUEST['zip'];
  $message = $_REQUEST['message'];

  //Insert the data into the database
  $query = mysqli_query($db_connection,"INSERT INTO  contact (email, firstname, secondname, city, state, zip, message) VALUES ('$email', '$firstname', '$secondname', '$city', '$state', '$zip', '$message')") or die(mysqli_error($db_connection));

  mysqli_close($db_connection);

  header("location:../contact_sent.html?note=success")
?>