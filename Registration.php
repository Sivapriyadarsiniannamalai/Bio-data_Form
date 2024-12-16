<?php
include 'dbconnection.php';
if(isset($_POST['submit']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$cno=$_POST['contactnumber'];
	$email=$_POST['mail'];
	$uname=$_POST['username'];
	$psswrd=$_POST['password'];
	$sql = "INSERT INTO user_registration(Firstname,Lastname,Contactno,Email,Username,Password)VALUES ('$fname','$lname','$cno','$email','$uname','$psswrd')";

	if (mysqli_query($conn, $sql)) {
  		echo "New record created successfully";
		} else {
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	mysqli_close($conn);
}
else
{
?>
<html>
  <head>
     <title>User Registration</title>
    <link rel="stylesheet" href="registrationstyle.css">
  </head>
	<body>
	<div class="container">
        <h2>User Registration</h2>
        <form action="" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" required><br>

            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" required><br>

            <label for="contactnumber">Contact Number:</label>
            <input type="text" name="contactnumber" id="contactnumber" required><br>

            <label for="mail">Email:</label>
            <input type="email" name="mail" id="mail" required><br>

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>

            <input type="submit" name="submit" value="Register">
        </form>
    </div>
	</body>
</html>
<?php
}
?>
