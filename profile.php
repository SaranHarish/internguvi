<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="profile.js"></script>
	<link rel="stylesheet" href="css/css/scss1.css">
	<link rel="stylesheet" href="css/css/profile.css">
</head>
<body>
<?php include ("profile1.php")  ?>
	<form>
		<input type="hidden" value="<?php echo $username ?>" id="username">
		<input type="hidden" value=" <?php echo $dob ?>" id="name133">
		<input type="hidden" value=" <?php echo $age ?>" id="name1222">
		<input type="hidden" value=" <?php echo $number ?>" id="name12">
		<div class="card-body">
		<form>
		<div class="form-group">
	<h2 style="text-align:center">User Profile</h2>
		<img src="/img1/1.svg" alt="" style="width:100%">
		<h1><?php echo $username ?></h1>
	<p class="title"> dob :<?php echo $dob ?></p>
		<p>age: <?php echo $age ?></p>
		<br>
	
		<a href="update.php">update details</a>

	</form>
</div>

</body>
