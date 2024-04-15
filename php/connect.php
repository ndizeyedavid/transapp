<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "tdl";

$con = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$con){
    die("Connection failed.");
}
?>