<?php
$username =$_POST['username'];
$password =$_POST['password'];
$dob=$_POST['date'];
$age =$_POST['age'];
$number =$_POST['number'];
$conn = new mysqli("localhost","root","","details");
mysqli_query($conn, "insert into student4(username,password,dob,age,number) values ('$username','$password','$dob','$age','$number')");
echo "Registration Successfully";

?>
