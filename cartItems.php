<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'agri';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
	 session_start();
	 //print_r(count($_SESSION));
	 //exit;
	 if(count($_SESSION) > 0){
	$pid = $_POST['pid'];
	 $uid = $_SESSION["uid"];
     //echo $_POST['pid'],$_SESSION["uid"];
	 $mydate = date("Y").'-'.date("M").'-'.date("j");
	 //print_r($mydate);
	 //exit;
     $sql = "INSERT INTO orders(userid,pid,orderdate) VALUES ('$uid','$pid','$mydate')";
     if (mysqli_query($conn, $sql)) {
        echo "New order placed successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
	mysqli_close($conn);	 
		}else{
			echo "Please Login First!";
	}
	 
?>