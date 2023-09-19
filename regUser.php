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
  <h2>Register User</h2>
  <p>You can register here.</p>            
  <form class="form-horizontal" action="insertUser.php" method="post">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="uname">User Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uname" placeholder="Enter name" name="uname">
      </div>
    </div>
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
      <label class="control-label col-sm-2" for="uphone">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uphone" placeholder="Enter phone" name="uphone">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="uaddr">Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uaddr" placeholder="Enter address" name="uaddr">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<script>
function changeTxt(_this){
	if(_this.value == "1"){
		$('#qtyid').html('Per/Hour:')
	}else{
		$('#qtyid').html('Kg:')
	}
}
</script>
</body>
</html>



