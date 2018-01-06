<?php

  include("phpmysqlconnect.php");

  // form handler

  $firstname = $_REQUEST['fname'];
  $lastname = $_REQUEST['lname'];
  $email = $_REQUEST['email'];
  $room= $_REQUEST['room'];
  $no_of_rooms = $_REQUEST['no_of_rooms'];
  $cost = $_REQUEST['cost']; 
  $deposit = $_REQUEST['deposit'];
  $card_no = $_REQUEST['card_no'];
  $expiry = $_REQUEST['expiry'];
  $cvc = $_REQUEST['cvc'];
  $balance = $cost - $deposit;
  $confirmation_no = mt_rand(1000000000, 9999999999);

  //Insert the data into the database
  $query = mysqli_query($db_connection,"INSERT INTO book (confirmation_no, firstname, secondname, email, room, room_no, cost, deposit, balance, card_no, expiry, cvc) VALUES ('$confirmation_no', '$firstname', '$lastname', '$email', '$room', '$no_of_rooms', '$cost', '$deposit', '$balance' , '$card_no', '$expiry', '$cvc')") or die(mysqli_error($db_connection));

  mysqli_close($db_connection);

  header("location:../success.html?note=success")
?>