<!DOCTYPE html>
<html lang="en">
<head>
  <title>Agri Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/product.css"/>
  <script src="js/jquery.min.js"></script>
  <script src="js/cart.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php include "header.php"; ?>
<div class="container">
<?php
	
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'agri';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
	 
     $sql = "SELECT * FROM product WHERE ptype=0";
     
	 $data = mysqli_query($conn, $sql);
        
	if ($data->num_rows > 0) {
  
  while($row = $data->fetch_assoc()) {
	  
    echo '<div class="col-md-4">
			<div class="card">
				<img src='. $row["imgpath"].' alt="Seeds" width="300" height="200">
				<h1>'. $row["pname"].'</h1>
				<p class="price">Rs '.$row["price"].' / '.$row["qty"].'Kg</p>
				<p>'.$row["pdesc"].'</p> 
				<p><button onclick="cart('.$row['pid'].')">Add to Cart</button></p></div></div>';
  }
} else {
  echo "0 results";
}
     mysqli_close($conn); 
?>

</div>

<?php include "footer.php"; ?>

</body>
</html>

