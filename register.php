<?php
ob_start();
session_start();
error_reporting(0);
include('db.php');
// echo "<pre>";print_r($_POST);die;

if($_POST["captcha"]==$_SESSION["captcha_code"]){
      $name=$_POST['name1']; // Fetching Values from URL.
    $email=$_POST['email1'];
    $mobile=$_POST['mobile1'];
    $password= sha1($_POST['password1']); // Password Encryption, If you like you can also leave sha1.
    // Check if e-mail address syntax is valid or not
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid Email.......";
    }else{
    $result = mysql_query("SELECT * FROM registration WHERE email='$email'");
    $data = mysql_num_rows($result);
    if(($data)==0){
    $query = mysql_query("insert into registration(name, email, password,mobile) values ('$name', '$email', '$password','$mobile')"); // Insert query
    if($query){
        // $_SESSION["is_logged_in"] = TRUE;
        $_SESSION["is_logged_in"] = TRUE;
        $_SESSION["rname"] = $name;
        $_SESSION["remail"] = $email;
        $_SESSION["mobile"] = $mobile;
        $_SESSION["alert"] = TRUE;
        $_SESSION["ls_source"] = "Website_Registration";

        echo "You have Successfully Registered.....";

    }else
    {
    echo "Error....!!";
    }
    }else{
    echo "This email is already registered, Please try another email...";
    }
    }
} else {
print "Enter Correct Captcha Code.";
}
  
?>