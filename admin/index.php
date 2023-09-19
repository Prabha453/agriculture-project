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
  <h2>Products List</h2>
  <p>You can edit or delete the products here.</p>            
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Product name</th>
        <th>Description</th>
        <th>Price</th>
		<th>Kg / Hour</th>
		<th>Action</th>
      </tr>
    </thead>
	<tbody>
	<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'agri';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
	 
     $sql = "SELECT * FROM product";
     
	 $data = mysqli_query($conn, $sql);
        
	if ($data->num_rows > 0) {
  
  while($row = $data->fetch_assoc()) {
	  
    echo "<tr><td>" . $row["pname"]. "</td><td>" . $row["pdesc"]. "</td><td>" . $row["price"]. "</td><td>" . $row["qty"]. "</td><td>

    <a href=\"delete-product.php?pid=$row[pid]\" onClick=\"return confirm('Are you sure you want to delete?')\" style='background-color:red; color:white;padding:5px;'>Delete</a>
		</td></tr>";
  }
} else {
  echo "0 results";
}
     mysqli_close($conn); 
?>
    
      
    </tbody>
  </table>
</div>

</body>
</html>



