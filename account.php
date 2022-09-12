

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="styleaccount.css">

	<title>Register Form</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username"required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email"required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
            </div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>
<?php
 

 $conn = new mysqli("localhost","root","","registerdb");

 if(isset($_POST['submit']))
 {
     $a=$_POST['username'];
     $b=$_POST['email'];
     $c=$_POST['password'];
     echo "$a". "$b" . "$c";
    $q_data = "INSERT INTO `register`(`username`, `email`, `password`) values('$a', '$b', '$c');";
    $stat= mysqli_query($conn, $q_data);
    if($stat) echo "success";
    else{

    }
     
 }
 ?>