<?php
//initialize variables to hold connection parameters

$dbname = 'crud_pdo_2';
$dsn = "mysql:host=localhost; dbname={$dbname}";
$username = 'root';
$password = '';

try {
    //create an instance of the PDO class with the required parameters
    $db = new PDO($dsn, $username, $password);

    //set pdo error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>
    <script>
        const dbName = "<?php echo $dbname; ?>";
        console.log('Database [ '+ dbName + " ] is connected");
    </script>
    <?php
    //display success message
//    echo $dbname." : Connected";

} catch (PDOException $ex) {
    //display error message
    echo "Connection failed ".$ex->getMessage();
}