<?php
include('db.php');
    if ($_POST) {
       date_default_timezone_set('Asia/Calcutta');
       $created_on =  date('Y-m-d');
       $name = $_POST['name'];
       $email = $_POST['email'];
       $msg = $_POST['msg'];
       $query = "INSERT INTO query_table(name,email,msg,created_on)
                  VALUES('$name','$email','$msg','$created_on')";
       $result = mysql_query($query); 
       if($result){
                    $sender_name = "Sunstone Business School";
                    $sender = "contactus@sunstone.in";
                    $to  = 'dinesh@sunstone.in, medha.sharma@sunstone.in, shaguna.dhall@sunstone.in'; 
                    // $to  = 'azeemkhan@editsoft.in, azeemkhanempire@gmail.com'; 
                    $subject ="Query Info";
                    $message = $msg;
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);
       }

	   
     }    
  ?>				