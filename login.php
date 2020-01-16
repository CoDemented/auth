<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h3>Login Form</h3>

<form method="POST">
    <table>
        <tr>
            <td>Username:</td><td><input type="text" value=""  name="USERNAME"></td>
        </tr>
        <tr>
            <td>Password:</td><td><input type="password" value="" name="PASSWORD"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Signin" name="SIGNIN"></td>
        </tr>
    </table>
</form>



<p>You are loggedin as {username} <a href="logout.php">Logout</a></p>
<p><a href="index.php">Back</a></p>


</body>
</html>