<?php
require "connect.php";
$name=$_POST['name'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$concern=$_POST['concern'];
$query="INSERT INTO `details`( `Name`, `PhoneNumber`, `Email`, `Concern`) VALUES ('$name','$phno','$email','$concern')";
include "./index.html";
$run=mysqli_query($conn,$query);
//if($run == TRUE)
 //  echo "SIGNUP SUCESSFULLY";
//else
   // echo "ERROR!";
?>
