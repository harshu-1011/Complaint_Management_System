<?php
$server="localhost";
$username="root";
$password="";
$dbname="harshu";

$conn=mysqli_connect($server,$username,$password,$dbname);
		$comtype=$_POST['typecom'];
		$mobile=$_POST['mname'];
		$com=$_POST['cmd'];
		
		$query="insert into complaint values(3,3,'$comtype','$mobile','$com','not resolved')";  //resolved
		$run=mysqli_query($conn,$query)or die(mysqli_error());
		if($run)
		{
			echo"Complaint Registered";
		}
		else
		{
			echo"Invalid or Error";
		}
		
?>