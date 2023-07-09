<?php 
	session_start();
	$_SESSION['nm']=$_POST['name'];
	$_SESSION['ct']=$_POST['typecom'];
	$_SESSION['com']=$_POST['cmd'];
	$_SESSION['mn']=$_POST['mname'];
	
	session_unset();
	session_destroy();
	?>
	
	<html>
	<body>
	<table border="2">
	<tr>
		<th>Name</th>
		<th>Complaint Type</th>
		<th>Mobile Name</th>
		<th>Cancel Complaint</th>
	</tr>
	<tr>
		<td><?php echo"$_SEESION['nm'];" ?></td>
		<td><?php echo"$_SEESION['ct'];" ?></td>
		<td><?php echo"$_SEESION['com'];" ?></td>			
		<td><?php echo"$_SEESION['mn'];" ?></td>
	</tr>
	</table>
	</body>
	</html>