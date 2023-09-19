<!DOCTYPE html>
<html lang="en">
<head>
  <title>Agri Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .container{
	  color: white;
  }
  </style>
</head>
<body>

<?php include "header.php"; ?>
<div class="container">
  <h2>Login User</h2>           
  <form class="form-horizontal" action="loginUser.php" method="post">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="uemail">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="uemail" placeholder="Enter mail" name="uemail">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="upass">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="upass" placeholder="Enter password" name="upass">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Login</button>
		<a href="reguser.php" class="btn btn-default">Register</a>
      </div>
    </div>
  </form>
</div>

</body>
</html>



