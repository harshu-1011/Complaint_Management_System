

<html>
<head><title>Information Of Complaint</title>
</head>
<body>
<center><h1>Details About Complaint</h1><hr></center>

<br>
<br>
<p align="right">
<a href="home.php"><button value="Logout"><b>LogOut</b></button></a></p>

<br>
<br>
<form action="cominfo1.php" method="POST">
<center>
<label>Select Complaint Type</label>
<select name="typecom" id="comid" r>
	<option value="">Select Complaint Type</option>
	<option value="Full Damaged Piece">Full Damaged Piece</option>
	<option value="Spared Part Damage">Spared Part Damage</option>
	<option value="Shifting Damage">Shifting Damage</option>
</select>
<br><br>
<label>Mobile Name:</label>
<input type="text" name="mname">
<br>
<br>
<label>Write Complaint Here:</label>
<div>
<textarea required="required" name="cmd"  style="font-family:centuary;font-size:1.2em;";>

</textarea>
</div>
<br>
<br>
<button name="add">Add Complaint</button>
</center>
</form>
</body>
</html>

		
			