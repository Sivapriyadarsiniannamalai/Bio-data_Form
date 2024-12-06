<?php
include 'dbconnection.php';
if(isset($_POST['submit']))
{
	
	$uname=$_POST['username'];
	$psswrd=$_POST['password'];
	$sql = "SELECT * FROM user_registration where username='$uname' and password='$psswrd'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0)
	 {
  			header("location:welcome.php")	;
	 } 
	else
	{
			header("location:error.php")	;
	}
 	 

	mysqli_close($conn);
}
else
{
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="Lginstyle.css">
</head>
	<body>
	<center>
		<div class="login-container">
        <h2>Login</h2>
        <form action="#" method="POST" class="login-form">
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
             <div>             
              <a href="registration.php">New User?Sign Up</a><br>
               </div>
            <div class="input-container">
                <button type="submit" class="login-btn">Login</button>
            </div>
	</form>
	</center>
	</body>
</html>
<?php
}
?>
