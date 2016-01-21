<?php
      $name = 'Kriti';
      $email = 'kriti.editsoft@gmail.com';
      $sender_name = "Sunstone Business School";
      $sender = "contactus@sunstone.in";
      $to  = $email; 
      $subject ="Thanks for providing details for counselling!";
      $message = "<p>Dear &nbsp; ".$name."</p>
            <br />
            We have received your counselling form. Admissions team will get in touch with you to schedule a one-on-one interaction with the counsellor.<br />
            <br />
            We wish you all the best!<br />
            Sunstone Team</p>";
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
      $result = mail($to, $subject, $message, $headers);
   
?>