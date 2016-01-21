<?php   
session_start(); //to ensure you are using same session
unset($_SESSION["is_register"]); 
unset($_SESSION["is_logged_in"]); 
unset($_SESSION["rname"]); 
unset($_SESSION["remail"]); 
//session_destroy(); //destroy the session
header("location: index.php"); //to redirect back to "index.php" after logging out
exit();
?>