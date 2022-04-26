<?php session_start(); ?>
<?php include('database.php'); ?>
<!DOCTYPE html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="login.css">
</head>
<div class="head">
        <h4>entranceupdates.com</h4>
      </div>
      <div class="headd">
        <h5>-We say you decide.</h5>
      </div>
<div class="container">
	<h4 class="title"style="font-size:22px;color:midnightblue;margin-left:-50px;">Subscribe For Latest Exam <center>Notifications!</center></h4>
    <form action="register_a.php" method="post" enctype="multipart/form-data">
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input  class="form-control" placeholder="Firstname" type="text" name="firstname" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input  class="form-control" placeholder="Lastname" type="text" name="lastname" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		</div>
        <input class="form-control" placeholder="Enter e-mail" type="e-mail" name="email" required>
    </div> <!-- form-group// -->                              
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
    </div>                                                          
</form>
</article>
</div> 

</div> 

