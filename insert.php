<?php
session_start();
$user=$_SESSION["username"];
$dob=$_POST['dob'];
$age=$_POST['age'];
$num=$_POST['number'];
$conn = new mysqli("localhost","root","","details");
mysqli_query($conn,"update student4 set dob='$dob' where username='$user'");
mysqli_query($conn,"update student4 set age='$age' where username='$user'");
mysqli_query($conn,"update student4 set number='$num' where username='$user'");

echo "Data Inserted Successfully";

?>
