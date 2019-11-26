<?php
    require_once 'config.php';

$username = $_GET["username"];
$email = $_GET["email"];
$password = $_GET["password"];

try {
    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (id, username, email, `password`)
    VALUES ('2', $username, $email , `$password`)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

// $conn = null;
?>
