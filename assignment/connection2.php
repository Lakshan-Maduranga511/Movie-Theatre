<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

 $dbhost='localhost';
  $dbuser='root';
  $dbpass='';
  $conn=mysqli_connect($dbhost,$dbuser,$dbpass);
  if(!$conn){
die('could not connect:'.mysqli_error());





}


$db= mysqli_select_db($conn,'web');

if(!$db){

echo'Select database first';
echo"<br>";

}else


?>
</body>
</html>