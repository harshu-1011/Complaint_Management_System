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
                <input type ="submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
		</body>     
		</html>  
		