<?php

require("includes/common.php");

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

   $message = trim($_POST['message']);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  
  $query = "INSERT INTO contact(name, email, message)VALUES('" . $name . "','" . $email . "','" . $message . "')";
  mysqli_query($con, $query) or die(mysqli_error($con));
  header('location: contact.php');
?>
