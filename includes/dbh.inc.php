<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "logincamagru";

$conn = mysqli_connect($severname, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}