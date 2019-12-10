<!DOCTYPE html>

<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/css/form.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<link rel="stylesheet" href="css/css/form.css">
<link rel="stylesheet" href="css/css/scss1.css">
<link rel="stylesheet" href="css/css/scss.css">
<script src="app.js"></script>
</head>
<body id="b2">
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-5 mx-auto mt-5">
<div class="card">
<div class="card-header">
<h3>Registration</h3
</div>

<div class="card-body">
<form>
<div class="form-group">
<label >Username</label>
<input type="text" class="form-control" id="username" placeholder="Enter your username" required>
<div class="invalid-feedback" style="font-size:16px;">Name is required</div>
</div>
</div>

<div class="form-group">
<label >Password</label>
<input type="password" class="form-control" id="password" placeholder="Password" required>
<div class="invalid-feedback" style="font-size:16px;">password is required</div>
</div>

<div class="form-group">
<label for="exampleInputEmail1">Date of birth</label>
<input type="text" class="form-control" id="date"  placeholder="Enter your dob.." required>
<div class="invalid-feedback" style="font-size:16px;">Dob is required</div>
</div>

<div class="form-group">
<label for="exampleInputEmail1">Age</label>
<input type="text" class="form-control" id="age"  placeholder="Enter your age">
<div class="invalid-feedback" style="font-size:16px;">Age is required</div>
</div>


<div class="form-group">
<label >Number</label>
<input type="text" class="form-control" id="number"  placeholder="Enter number">
<div class="invalid-feedback" style="font-size:16px;">Number is required</div>
</div>



<button type="submit" id="signup">Submit</button>
<a href="login.php" style="float:right;margin-top:10px;">Already have an account ?</a>
</div
<center><h1 class="para2" id="msg"></h1></center>
</form>
</div>
</div>
</div>
</body>
</html>
