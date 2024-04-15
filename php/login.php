<?php

include "connect.php";

if (isset($_GET['done'])){
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $pswd = mysqli_real_escape_string($con, $_GET['pswd']);

    $enc_pswd = md5($pswd);

    $verify_email = mysqli_query($con, "SELECT * FROM users WHERE email='{$email}'");
    if (mysqli_num_rows($verify_email) > 0){
        $verify_pswd  mysqli_query($con, "SELECT * FROM users WHERE email='{$email}' AND pswd='{$enc_pswd}'");
        if (mysqli_num_rows($verify_pswd)>0){
            echo "done";
        }else{
            echo "Access Denied";
        }
    }else{
        echo "Invalid E-mail";
    }
}