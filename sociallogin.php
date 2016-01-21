<?php
ob_start();
session_start();
error_reporting(0);
include('db.php');
// echo "<pre>"print_r($_POST);die;
 	$name=$_POST['name']; // Fetching Values from URL.
    $email=$_POST['email'];
    $mobile='social login';
    $password= sha1($_POST['email']);
    $result = mysql_query("SELECT * FROM registration WHERE email='$email'");
    $data = mysql_num_rows($result);
    if(($data)==0){
    	$sql = "insert into registration(name, email, password,mobile) values ('$name', '$email', '$password','$mobile')";
    $query = mysql_query($sql); // Insert query
    }
        $_SESSION["is_logged_in"] = TRUE;
        $_SESSION["remail"] = $_POST['email'];
        $_SESSION["rname"] = $_POST['name'];
    // echo "You have Successfully Loggedin.....";
    
?>