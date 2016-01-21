<?php
ob_start();
session_start();
error_reporting(0);
include('db.php');
// echo "<pre>";print_r($_POST);die;
    $email=$_POST['email1'];
    $password= sha1($_POST['password1']); // Password Encryption, If you like you can also leave sha1.
    $result = mysql_query("SELECT * FROM registration WHERE email='$email' && password = '$password'");
    $data = mysql_num_rows($result);
    if(($data)==0){
    echo "Invalid Username and Password..";
    }else{
        $row =mysql_fetch_array($result);
        $_SESSION["is_logged_in"] = TRUE;
        $_SESSION["remail"] = $row["email"];
        $_SESSION["rname"] = $row["name"];
    echo "abc";
    }
?>