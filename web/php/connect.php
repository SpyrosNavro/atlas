<?php    
    $serverName='localhost';
	$username='root';
	$password='';
	$database='atlas';
	$port=3306;
	$conn = mysqli_connect($serverName,$username,$password,$database,$port);
	if ($conn->connect_error) 
        die($conn->connect_error);
?>
    