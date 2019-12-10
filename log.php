<?php
$username = $_POST['username'];
$password = $_POST['password'];
$conn = new mysqli("localhost","root","","details");
$sql  = "SELECT count(1) FROM student4 WHERE username = ? and password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username,$password);
$stmt->execute();
$stmt->bind_result($found);
$stmt->fetch();
if ($found)
{
	session_start();
	$_SESSION["username"] = $username;
    echo "yes";
}
else{
	echo "no";
}
?>
