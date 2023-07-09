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
$sql ="select * from complaint";
echo"<table border='1'>";
echo"<tr><th>Customer's ID</th><th>ID</th><th>Complaint Type</td><th>Description</td><th>Mobile Name</td><th>Status</td></tr>";
foreach($connect->query($sql) as $row)
{
	echo "<tr><td>".$row['cid']."</td><td> ".$row['co_id']."</td><td> ".$row['co_type']."</td><td> ".$row['co_desc']."</td><td> ".$row['mobName']."</td><td> ".$row['status']."</td></tr>";
}
echo"</table>";
	session_unset();
	session_destroy();
	
 
	?>