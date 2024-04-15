<?php

include "connect.php";

if (isset($_GET['done'])){
    $name = mysqli_real_escape_string($con, $_GET['name']);
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $pswd = mysqli_real_escape_string($con, $_GET['pswd']);

    $insert = mysqli_query($con, "INSERT INTO users(name, email, pswd) VALUES('{$name}', '{$email}', '{$pswd}')");

    if ($insert){
        echo "done";
    }else{
        echo "error";
    }
}