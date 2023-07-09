<?php
$server="localhost";
$username="root";
$password="";
$dbname="harshu";

$mail = $_POST['email'];
$pwd = $_POST['password'];
$user = $_POST['ut'];
try{
$connect = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
}
catch(PDOException $e)
{
	echo "Error : ".$e->getMessage();
	die();
}
$sql ="select * from login";
foreach($connect->query($sql) as $row)
{
	if($row['email']==$mail && $row['password']==$pwd && $row['userType']=="UserLogin")
	{
		header("Location:cominfo.php");
	}
	 elseif($row['email']==$mail && $row['password']==$pwd && $row['userType']=="AdminLogin")
	{
		header("Location:report.php");
	}
}
		
?>

<html>
<body>
<br>
<br>
<br>
<div>
<a href="home.php"><button value="b1" align="left">Back</button></a>
<a href="cominfo.php"><button value="b2" align="right">Next Page</button></a>
</div>
</body>
</html>