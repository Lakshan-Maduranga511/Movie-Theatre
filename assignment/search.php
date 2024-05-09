<?php
if (isset($_GET['search'])){
	
	$searchid=$_GET['search'];
	
	include("connection2.php");
	
	
	$sql="select * from film where name=$imgId";
	
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	
	}

?>