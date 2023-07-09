<?php



//database connectivityj

$server="localhost";
$username="root";
$password="";
$dbname="harshu";

$conn=mysqli_connect($server,$username,$password,$dbname);
		$name=$_POST['name'];
		$mob=$_POST['mob'];
		$password=$_POST['psw'];	
		$email=$_POST['email'];	
		
		
		$query="insert into register values(3,'$name','$mob')";
		//$query1="insert into login values('$email','$password','user')";
		$run=mysqli_query($conn,$query) or die(mysqli_error());
		//$run1=mysqli_query($conn,$query) or die(mysqli_error());
		if($run)
		{
			echo"Resgistration Sucessfully";
		}
		else
		{
			echo" Registeration Unsucessfull";
		
}
	
	
?>
<html>  
<head>  
    <title>Login Page</title> </head>  
<body>  
    
        <h1>Login</h1>  
       <form action="login1.php" method="POST">
	   
            <p>  
                <label> E-mail: </label>
				<input type="mail" name="email">
            </p>  
            <p>  
                <label> Password: </label>  
                <input type="password" name="password">
            </p>
			<p>
				
				<label>User Type:</label>
	<select name="ut" id="ty">
	<option value="UserLogin">User Login</option>
	<option value="AdminLogin">Admin Login</option>
	</select>
	</p>
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
		</body>     
		</html>  




