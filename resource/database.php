<?php
$dsn = 'mysql:host=localhost; dbname=register';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex) {
    echo "<h3 style='color: #FF0000;'>Connection Failed</h3>" .$ex->getMessage();
}


