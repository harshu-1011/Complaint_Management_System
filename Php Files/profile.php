<?php

	session_start();
		
$server="localhost";
$username="root";
$password="";
$dbname="harshu";

try{
$connect = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
}
catch(PDOException $e)
{
	echo "Error : ".$e->getMessage();
	die();
}
$sql ="select * from register";
echo"<table border='1'>";
echo"<tr><th>ID</td><th>Name</td><th>Mobile No.</td></tr>";
foreach($connect->query($sql) as $row)
{
	echo "<tr><td>".$row['cid']."</td><td> ".$row['cname']."</td><td> ".$row['mob']."</td></tr>";
}
echo"</table>";
	session_unset();
	session_destroy();
	
 
	?>
	