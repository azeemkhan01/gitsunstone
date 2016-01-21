<?php
/*Post Values from Inquery  Form Saved in This Module */
include('db.php');
    if ($_POST) {
       date_default_timezone_set('Asia/Calcutta');
       $created_on =  date('d-m-Y,g:i a');
       $name = $_POST['name'];
       $email = $_POST['email'];
       $msg = $_POST['msg'];
       $phone = $_POST['phone'];
       $query = "INSERT INTO query_table(name,email,msg,phone,created_on)
                  VALUES('$name','$email','$msg','$phone','$created_on')";
       $result = mysql_query($query); 
       if($result){
       
               /* student email */
               $sender_name = "Sunstone Business School";
               $sender = "contactus@sunstone.in";
               $to  = $email; 
               $subject ="Thanks for your query";
               $message = "<p>Dear ".$name.",</p>

                <p>Thanks for your interest in Sunstone, India's largest program for technology professionals.</p>
	        <p>If you have not attended the web information session with Sunstone career coach, you should fill your details at website to register for it.</p>
                <p>You can go through following useful links:</p>
                
		<ul>
			<li>Sunstone Alumni and Students talk about their experiences at  <a href='http://sunstone.in/management-program/student-profiles'>http://sunstone.in/management-program/student-profiles</a></li>
			<li>Program overview and how it works at <a href='http://sunstone.in/management-program/program-details'> http://sunstone.in/management-program/program-details</a></li>
		</ul>
				
                <p>Remember to keep an eye on your inbox as we will be sending you the more details about Sunstone.</p>

                <p>If you have any question at any stage, please feel free to email me.</p>

                <p>&nbsp;</p>

                <p>Thanks,<br />
                Reena Jalali<br />
                Program Manager<br/>
                Sunstone Business School<br/>
                Email:&nbsp;<a href='mailto:reena.jalali@sunstone.in' target='_blank'>reena.jalali@sunstone.in</a><br />
                <a href='http://sunstone.in' target='_blank'>www.sunstone.in</a></p>
                ";
                $headers  = 'MIME-Version: 1.0' . "\r\n";
	            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	            $headers  = 'MIME-Version: 1.0' . "\r\n";
	            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	            $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
	            $result = mail($to, $subject, $message, $headers);
	            
	            
                
       
                /* email to backend users */
       
                    $sender_name = "Sunstone Business School";
                    $sender = "contactus@sunstone.in";
                    //$to = "shaguna@sunstone.in";
                    $to  = 'dinesh@sunstone.in, medha.sharma@sunstone.in, shaguna.dhall@sunstone.in, azeemkhan@editsoft.in, reena.jalali@sunstone.in, counselling@sunstone.in'; 
                    $subject ="Form Submission: Query Info";
                    $message = "<p>Name : ".$name."</p></br>
                                <p>Email : ".$email."</p></br>
                                <p>Phone : ".$phone."</p></br>
                                <p>Message : ".$msg."</p></br>
                                <p>Created on : ".$created_on."</p></br>

                                ";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);
                    
       }
  }    
  ?>        
