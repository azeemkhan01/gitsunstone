<?php
function base64_url_encode($input) {
 return strtr(base64_encode($input), '+/=', '-_,');
}

		include('db.php');
  //print_r($_POST); 
if($_POST['password']){
  $email=$_POST['email'];
  
  $password=$_POST['password'];
    $result = mysql_query("update registration set password='".sha1($password)."' WHERE email='$email'");
    $data = mysql_num_rows($result);
    echo "true";

    }

      
       

 ?>     