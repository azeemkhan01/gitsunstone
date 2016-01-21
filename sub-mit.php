<?php
/*Post Values from Brochure Form Saved in This Module */
  if (isset($_POST['submit']) && ($_POST['my_data'] == ""))
   {
      // echo "<pre>";print_r($_POST);die;
     date_default_timezone_set('Asia/Calcutta');
     $created_on =  date('d-m-Y g:i a');
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $query = $_POST['query'];
     $query_from_page = $_POST['query_from_page'];
     // echo "<pre>";print_r($_POST);die;
     $sql = "INSERT INTO certificate_query_tbl(fname,lname,email,mobile,query,query_from_page,created_on)
                VALUES('$fname','$lname','$email','$mobile','$query','$query_from_page','$created_on')";

     $result = mysql_query($sql); 
         if($result)
         {
                   $sender_name = "Sunstone Business School";
                    $mailed_to = "dev@editsoft.in,vaibhav.padlikar@sunstone.in";
                    $sender = "vaibhav.padlikar@sunstone.in";
                    //$sender = "dev.editsoft@gmail.com";
                    $to  =  $mailed_to;
                    $subject ="Drop Query Info";
                   $message = "<p>Name : ".$fname." ".$lname." </p></br>
                                <p>Email : ".$email."</p></br>
                                <p>Mobile : ".$mobile."</p></br>
                                <p>Query : ".$query."</p></br>
                                <p>Page : ".$query_from_page."</p></br>
                                <p>Created on : ".$created_on."</p></br>";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    //$headers .= 'Bcc: suren.gaur@sunstone.in, medha.sharma@sunstone.in' . "\r\n";
                    $headers .= 'Cc:medha.sharma@sunstone.in,suren.gaur@sunstone.in,medha@sunstone.in,counselling@sunstone.in' . "\r\n";

                    
                    $result = mail($to, $subject, $message, $headers);
                    ?>
                    <script type="text/javascript">
                  alert("Your Query is sent.We will back soon to you.");
                    </script>
              <?php  
          }  
              $sender_name = "Sunstone Business School";
              $sender = "vaibhav.padlikar@sunstone.in";
              $to  = $email; 
              $subject ="Dear ".$fname.",Sunstone query resolution";
              $message = "<p>Dear ".$fname."</p>

                <p>Thanks for reaching out to us with your query, our course adviser would reach out to you soon to resolve your queries&nbsp;</p>

                <p>In the meantime , you could also read  FAQs & Pre-requisites for the course <a href='http://sunstone.in/management-program/".$query_from_page."' target='_blank'>here</a></p>
                <i>This is an auto-generated response email , you don't need to reply to this email. </i>
                <p>Best!,</p>
                <p>Reena Jalali,</p>
                <p>Sunstone Business School</p>
                <p>+919871589883 </p>
               <a href='http://click.sunstone.in/t/em/37/1/ea0114b6-7358-4b38-8619-b84ec3cc76bb/25' target='_blank'>www.sunstone.in</a></p>
                ";
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
              $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";

              $result = mail($to, $subject, $message, $headers); 
  } 
         if (isset($_POST['join']))
         {
         date_default_timezone_set('Asia/Calcutta');
         $created_on =  date('d-m-Y g:i a');
         $fname = $_POST['fname'];
         $lname = $_POST['lname'];
         $email = $_POST['email'];
         $mobile = $_POST['mobile'];
         $password = $_POST['password'];
         $sql1 = "INSERT INTO join_now(fname,lname,email,mobile,password,created_on)
               VALUES('$fname','$lname','$email','$mobile','$password','$created_on')";  
         $result1 = mysql_query($sql1); 
         if($result1)
         {
           $sender_name = "Sunstone Business School";
                 $mailed_to = "dev@editsoft.in,vaibhav.padlikar@sunstone.in";
                   $sender = "vaibhav.padlikar@sunstone.in";
                   $to  =  $mailed_to;
                   $subject ="Join Info";
                   $message = "<p>Name : ".$fname."</p></br>
                               <p>Email : ".$email."</p></br>
                               <p>Mobile : ".$mobile."</p></br>
                               <p>Created on : ".$created_on."</p></br>";
                   $headers  = 'MIME-Version: 1.0' . "\r\n";
                   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                   $headers  = 'MIME-Version: 1.0' . "\r\n";
                   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                   $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                   $headers .= 'Cc:medha.sharma@sunstone.in,suren.gaur@sunstone.in' . "\r\n";
                   $result = mail($to, $subject, $message, $headers);
                   ?>
      <script type="text/javascript">
         alert("Details successfully sent.We will back you soon.");
      </script>
      <?php
         }
         $sender_name = "Sunstone Business School";
             $sender = "vaibhav.padlikar@sunstone.in";
             $to  = $email; 
             $subject ="Dear ".$fname.",Good to hear from you";
             $message = "<p>Dear ".$fname."</p>
         
               <p>Thanks for showing your interest . We will get back you soon...&nbsp;</p>
         
             
         
               <p>Sunstone Business School</p>
         
               
              <a href='http://click.sunstone.in/t/em/37/1/ea0114b6-7358-4b38-8619-b84ec3cc76bb/25' target='_blank'>www.sunstone.in</a></p>
               ";
             $headers  = 'MIME-Version: 1.0' . "\r\n";
             $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
             $headers  = 'MIME-Version: 1.0' . "\r\n";
             $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
             $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
             $result = mail($to, $subject, $message, $headers);   
         }
?>