<?php
error_reporting(0);
include("db.php");
/*Post Values from Brochure Form Saved in This Module */
	if (isset($_POST['brochure']))
	{
          // print_r($_POST);die;
	       date_default_timezone_set('Asia/Calcutta');
	       $created_on =  date('Y-m-d');
	       $name = $_POST['name'];
	       $email = $_POST['email'];
	       $mobile = $_POST['mobile'];
	       $experience = $_POST['experience'];
	       $company = $_POST['company'];
	       $any_query = $_POST['any_query'];
	       $query = "INSERT INTO download_brochure(name,email,mobile,experience,company,query,created_on)
	                  VALUES('$name','$email','$mobile','$experience','$company','$any_query','$created_on')";
	       $result = mysql_query($query); 

	       if($result)
	       {
	            $sender_name = "Sunstone Business School";
	            $sender = "contactus@sunstone.in";
	            $to  = $email; 
	            $subject ="Dear ".$name.",Good to hear from you";
              $message = "<p>Dear &nbsp; ".$name."</p>

                <p>Thanks for your interest in our acclaimed 1 year specialised MBA program that will enable you to transition to business roles. The next step in the process is to learn more about Sunstone and the PGPM program through a webinar conducted by senior industry leaders.&nbsp;</p>

                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>

                <p>Useful links:</p>

                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1) Go through faculty profiles. They are&nbsp;<em>&lsquo;top business leaders&rsquo; &nbsp;</em>and&nbsp;will coach you to be successful in your career &nbsp;&nbsp;<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='http://click.sunstone.in/t/em/37/1/7e223af3-1f23-433b-a5b1-d005411a51d5/2547' target='_blank'>http://sunstone.in/management-program/sunstone-business-school/course-directors/</a></p>

                <p>&nbsp;</p>

                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2)&nbsp;Here is the link&nbsp;to our unique&nbsp;<em>&#39;Problem Based Learning&rsquo;&nbsp;</em>approach that helps you learn business in a more practical way<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href='http://click.sunstone.in/t/em/37/1/7e223af3-1f23-433b-a5b1-d005411a51d5/30' target='_blank'>http://sunstone.in/management-program/sunstone-business-school/program-details/</a></p>

                <p>&nbsp;</p>

                
                 <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3)&nbsp;Browse through our students and alumni experiences<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href='http://sunstone.in/management-program/stu_int/' target='_blank'>http://sunstone.in/management-program/stu_int/</a>&nbsp;&nbsp; &nbsp;&nbsp;</p>

                <p>&nbsp;</p>

                <p>Remember to keep an eye on your inbox as we will be sending you the Sunstone infosession webinar link with instructions on how to join in the next few days.</p>

                <p>Lastly&nbsp;test&nbsp;if you have any question at any stage then please feel free to email me.</p>

                <p>&nbsp;</p>

                <p>Thanks,<br />
                Medha Sharma<br />
                Program Manager</p>

                <p>Sunstone Business School</p>

                <p>Email:&nbsp;<a href='mailto:medha.sharma@sunstone.in' target='_blank'>medha.sharma@sunstone.in</a><br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href='http://click.sunstone.in/t/em/37/1/ea0114b6-7358-4b38-8619-b84ec3cc76bb/25' target='_blank'>www.sunstone.in</a></p>
                ";
	            $headers  = 'MIME-Version: 1.0' . "\r\n";
	            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	            $headers  = 'MIME-Version: 1.0' . "\r\n";
	            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	            $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
              $headers .= 'Cc:dinesh@sunstone.in,medha.sharma@sunstone.in,shaguna.dhall@sunstone.in,suren.gaur@sunstone.in' . "\r\n";
	            $result = mail($to, $subject, $message, $headers);
	       }

         header("location: thankyou_download.php");
	    ?>
		    
	    <?php
	}

/*Post Values from Web Session Form Saved in This Module */
	if (isset($_POST['websession']))
    {
      // echo "<pre>";print_r($_POST);die;
       date_default_timezone_set('Asia/Calcutta');
       $created_on =  date('Y-m-d');
       $name = $_POST['name'];
       $email = $_POST['email'];
       $mobile = $_POST['mobile'];
       $experience = $_POST['experience'];
       $current_org = $_POST['current_org'];
       $comment = $_POST['comment'];
       $remind = $_POST['remind_me'];
       if($remind == "")
       {
         $remind = 'off';
       }
      $query = "INSERT INTO attend_web_session(name,email,mobile,experience,current_org,comment,remind,created_on)
                  VALUES('$name','$email','$mobile','$experience','$current_org','$comment','$remind','$created_on')";
      $result = mysql_query($query); 
      if($result){
                    $sender_name = "Sunstone Business School";
                    $sender = "contactus@sunstone.in";
                    $to  = $email; 
                    $subject ="Sunstone Info Web Session - Registration Confirmation";
                    $message = "<p>Dear &nbsp; ".$name."</p>
                          <p>We are glad that you have shown interest in &#39;<strong>Sunstone. Program</strong>&#39; <br />
                          &nbsp;</p>

                          <p>Next Steps:</p>
                          
                          <p>1) <a href='http://sunstone.in/management-program/Brochure-1''target='_blank'><strong>Download Brochure</strong></a></p>
                          
                          <p>2) <strong>Join the Web Info Session </strong>- In next few days, we will provide you a link, where <stong>Career Coach</strong> will be talking about the significance of business education in your career and about <strong>Sunstone PGPM.</strong></p>
                          
                          <p><strong>Sounds Great !!&nbsp; Refer following links to get more information about Sunstone PGPM:&nbsp;</strong></p>

                          <p>1) How this<a href='http://sunstone.in/management-program/hiw'>program works</a> ?</p>
                          <p>2) Sunstone <strong>Alumni</strong> and <a href='http://sunstone.in/management-program/stu_int'><strong>Students</strong></a> talk about their <strong>experiences</strong></p>
                          <p>3) Sunstone <a href='http://sunstone.in/management-program/curriculum'>PGPM course</a> contents </p>

                          <p>Remember to keep an eye on your inbox because we will send you the Sunstone Webinar Link in next few days.</p>

                          <p>Lastly ".$name." if you have any question at any stage then please feel free to contact me.</p>

                          <p>&nbsp;</p>

                          <p>Regards,<br />
                          Medha Sharma<br />
                          <a href='mailto:medha@sunstone.in' target='_blank'>medha@sunstone.in</a><br />
                          <a href='http://www.sunstone.in/'' target='_blank'>www.sunstone.in</a></p>
                          ";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $headers .= 'Cc: dinesh@sunstone.in,medha.sharma@sunstone.in,shaguna.dhall@sunstone.in,reena.jalali@sunstone.in,counselling@sunstone.in' . "\r\n";
                    $result = mail($to, $subject, $message, $headers);
       }
         header("location: thankyou_Attend_Info_Web_Session.php");

           ?>
       
       <?php
    }
/*Post Values from Conselling Form Saved in This Module */
	if (isset($_POST['counselling']))
    {
      // echo "<pre>";print_r($_POST);die;
       date_default_timezone_set('Asia/Calcutta');
       $created_on =  date('Y-m-d');
       $name = $_POST['name'];
       $email = $_POST['email'];
       $contact = $_POST['contact'];
       $ques_1 = $_POST['ques_1'];
       $ques_2 = $_POST['ques_2'];
       $ques_3 = $_POST['ques_3'];
       $counselor_to_know_about_you = $_POST['counselor_to_know_about_you'];
       $query = "INSERT INTO counselling_form(name,email,contact,ques_1,ques_2,ques_3,counselor_to_know_about_you,created_on)
                  VALUES('$name','$email','$contact','$ques_1','$ques_2','$ques_3','$counselor_to_know_about_you','$created_on')";
      $result = mysql_query($query); 
      if($result){
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
                    $headers .= 'Cc:dinesh@sunstone.in,counselling@sunstone.in,medha@sunstone.in,shaguna.dhall@sunstone.in,reena.jalali@sunstone.in,suren.gaur@sunstone.in' . "\r\n";
                    $result = mail($to, $subject, $message, $headers);
       }
         header("location: thankyou_sharing_details_for_counselling.php");

           ?>
       
       <?php
    }
/*Post Values from Inquery  Form Saved in This Module */
	if (isset($_POST['query']))
    {
       // echo "<pre>";print_r($_POST);die;
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
                    $to  = 'dinesh@sunstone.in, medha.sharma@sunstone.in, shaguna.dhall@sunstone.in, azeemkhan@editsoft.in'; 
                    $subject ="Query Info";
                    $message = $msg;
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);
       }
         header("location: thankyou.php");
    }
 ?>