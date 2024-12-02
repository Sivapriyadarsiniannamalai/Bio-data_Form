<html>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
</head>
<body bgcolor="gray">
<center>

<h2>User Registration Form</h2>

<form action="/submit_registration" method="POST">
    <label for="first_name">First Name:</label><br>
    <input type="text" id="first_name" name="first_name" required><br><br>

    <label for="last_name">Last Name:</label><br>
    <input type="text" id="last_name" name="last_name" required><br><br>

    <label for="contactno">Contactno:</label><br>
    <input type="contactno" id="contactno" name="contactno" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="username">Username:</label><br>
    <input type="username" id="username" name="username" required><br><br>
    
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <label for="confirm_password">Confirm Password:</label><br>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>

    
    <input type="submit" value="Register">
</form>
</center>
</body>
</html>
