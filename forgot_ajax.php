<?php
function base64_url_encode($input) {
 return strtr(base64_encode($input), '+/=', '-_,');
}


			include('db.php');
      $name = "User";
    $email=$_POST['email']; // Password Encryption, If you like you can also leave sha1.
  
    $result = mysql_query("SELECT name FROM registration WHERE email='$email'");
    $data1 = mysql_num_rows($result);
    //$row =mysql_fetch_array($result);
    if($data1 == 0){
      echo "0";
   
    }else{
      $row =mysql_fetch_array($result);
			  $sender_name = "Sunstone Business School";
                    $sender = "contactus@sunstone.in";
                    $to  = $email; 
                    $subject ="Password reset request on sunstone.in";
                    $email = base64_url_encode($email);

                    $message = "<p>Hi ".$name.",</p>
                       
                          
                          <p>We received a request to change your password on http://sunstone.in/,
                             if you authorize it Click here to change your password
                          http://sunstone.in/management-program/resetpassword.php?info=".$email."
                          </p>
                          <p>Otherwise ignore this email.</p>

                          <p>&nbsp;</p>

                          <p>Thanks,<br />
                           Sunstone Team<br />
                          </p>
                          ";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);

                   echo "1";


				}
		
 ?>     