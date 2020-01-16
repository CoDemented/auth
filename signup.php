<?php
include_once 'resource/database.php';


if (isset($_POST['EMAIL'])) {

    $email = $_POST['EMAIL'];
    $username = $_POST['USERNAME'];
    $password = $_POST['PASSWORD'];

    //hashing the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    try {

    //create SQL insert statement
    $query_insert = "INSERT INTO users (`username`,`password`,`email`,`join_date`)
                      VALUES (:username, :password, :email, now());";

    //use PDO prepare to sanitize data
    $statement = $db->prepare($query_insert);

        //add the data into the database
        $statement->execute(array(
            ':email' => $email,
            ':username' => $username,
            ':password' => $hashed_password
        ));

        //check if one new row was created
        if ($statement->rowCount() == 1) {
            $result = "Registration Successful";
        }

    } catch (PDOException $ex) {
        $result = "An error occurred : " . $ex->getMessage();
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>

<h3>Register Form</h3>

<?php
    if (isset($result)) {echo $result;}
?>

<form action="" method="POST">
    <table>
        <tr>
            <td>Email:</td>
            <td><input type="email" value="" name="EMAIL"></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" value="" name="USERNAME"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" value="" name="PASSWORD"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Signup" name="SIGNUP"></td>
        </tr>
    </table>
</form>


<p>You are loggedin as {username} <a href="logout.php">Logout</a></p>
<p><a href="index.php">Back</a></p>

</body>
</html>