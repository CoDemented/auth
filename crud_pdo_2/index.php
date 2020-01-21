<?php
include_once 'resource/database.php';
include_once 'resource/functions.php';

$stmt = $db->query("SELECT * FROM Users");

while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {

    $user_id = $row->id;
    $user_name = $row->name;
    $user_email = $row->email;

    printRow($user_id, $user_name, $user_email);

}



