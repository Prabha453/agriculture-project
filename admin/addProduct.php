<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php include "header.php"; ?>
<div class="container">
  <h2>Add Product</h2>
  <p>You can add or update the products here.</p>            
  <form class="form-horizontal" action="insertProduct.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label class="control-label col-sm-2" for="ptype">Type:</label>
      <div class="col-sm-10">
        <select onchange="changeTxt(this)" class="form-control" id="ptype" name="ptype">
			<option value="0">Seeds / Fertilizers</option>
			<option value="1">Vehicles</option>
		</select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pname">Product Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pname" placeholder="Enter name" name="pname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pdesc">Product Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pdesc" placeholder="Enter desc" name="pdesc">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="img">Image:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="img" placeholder="choose" name="img">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="price">Price:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" id="qtyid" for="qty">Kg:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="qty" placeholder="Enter Value" name="qty">
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



