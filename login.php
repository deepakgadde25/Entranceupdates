<?php session_start(); ?>
<?php include('database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="login.css">
</head>
<body>
<div class="head">
        <h4>entranceupdates.com</h4>
      </div>
      <div class="headd">
        <h5>-We say you decide.</h5>
      </div>

<div class="container">
<h4 class="card-title mt-3 text-center">Signin</h4>
<form action="#" method="post" enctype="multipart/form-data">
<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input  class="form-control" placeholder="email" type="email" name="email" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
        <input  class="form-control" placeholder="Password" type="password" name="pwd" id="myInput"required>
    </div> <!-- form-group// -->
    <input type="checkbox" onclick="myFunction()">Show Password
        <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </div>
        <div class="text-center">Don't have an account? <a href="signup.php">Register Here</a></div>
        <div class="text-center">Forgot Password? <a href="reset.php">Reset Here</a></div>
</form>
</div>
</body>
<?php
          if (isset($_POST['submit']))
          {
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['pwd']);
            $query 		= mysqli_query($conn, "SELECT * FROM user WHERE  pwd='$password' and email='$email'");
            $row		= mysqli_fetch_array($query);
            $num_row 	= mysqli_num_rows($query);
            
            
            if ($num_row > 0)
              {			
                $_SESSION['ID']=$row['ID'];
                echo "<script>window.location='home.php'</script>";
                
              }
			else
				{
					echo "<script>alert('Invalid Email or password')</script>";
			    echo "<script>window.location='login.php'</script>";
				}
		}
  ?>
</body>
</html>