
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b style="color:#000">Agri</b> Services</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">Home</a></li>
      <li><a href="seeds.php">Seeds</a></li>
      <li><a href="rent.php">Rent</a></li>
	  <?php 
		session_start();
		if(count($_SESSION) > 0){
			echo '<li><a href="cart.php">'.$_SESSION["username"].'</a></li><li><a href="logout.php">Logout</a></li>';
		}else{
			echo '<li><a href="login.php">Login</a></li>';
		}
	  ?>
    </ul>
  </div>
</nav>
