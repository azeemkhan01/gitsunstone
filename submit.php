<?php
error_reporting(0);
include("db.php");
/*Post Values from Brochure Form Saved in This Module */
  if (isset($_POST['brochure']) && ($_POST['my_data'] == ""))
  {
          // print_r($_POST);die;
         date_default_timezone_set('Asia/Calcutta');
         $created_on =  date('d-m-Y,g:i a');
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
              $subject ="Dear ".$name.", Good to hear from you";
              $message = "<p>Dear ".$name.",</p>

                 <p>Thanks for your interest in Sunstone, India’s largest program for technology professionals. Brochure is available on this link, <a href='http://sunstone.in/management-program/Sunstone_eBrochure.pdf'>http://sunstone.in/management-program/Sunstone_eBrochure.pdf</a></p>
                 <p>Here are some other useful links:</p>

              <ul>
                  <li>Sunstone Alumni and Students talk about their experiences at  <a href='http://sunstone.in/management-program/student-profiles'>http://sunstone.in/management-program/student-profiles</a></li>
                  <li>Program overview and how it works at <a href='http://sunstone.in/management-program/program-details'> http://sunstone.in/management-program/program-details</a></li>
              </ul>
        
                <p>Remember to keep an eye on your inbox as we will be sending you more details about Sunstone.</p>

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
         }
                    $sender_name = "Sunstone Business School";
                    $mailed_to = "dinesh@sunstone.in,medha.sharma@sunstone.in,shaguna.dhall@sunstone.in,suren.gaur@sunstone.in,reena.jalali@sunstone.in,counselling@sunstone.in";
                    // $mailed_to = "dev.editsoft@gmail.com,kriti.editsoft@gmail.com";
                    $sender = "contactus@sunstone.in";
                    $to  =  $mailed_to;
                    $subject ="Download Brochure Info";
                    $message = "<p>Name : ".$name."</p></br>
                                <p>Email : ".$email."</p></br>
                                <p>Mobile : ".$mobile."</p></br>
                                <p>Experience : ".$experience."</p></br>
                                <p>Company : ".$company."</p></br>
                                <p>Query : ".$any_query."</p></br>
                                <p>Created on : ".$created_on."</p></br>

                                ";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);

         // header("location: thankyou_download");
    if (isset($email))
    { ?>
    <form style="display:none;" method="post"  id="dateForm" class="form_footer myForms" data-toggle="validator" role="form" enctype="application/x-www-form-urlencoded" action="https://web.mxradon.com/t/FormTracker.aspx">
    <div class="form-group">
    <input type="text"  id="FirstName"  name="FirstName" maxlength="100" value="<?php echo $name;  ?>" >

    </div>
    <div class="form-group">
    <input type="email"  id="EmailAddress"  name="EmailAddress"  value="<?php echo $email; ?>" >

    </div>
    <div class="form-group">
    <input type="number" name="Phone" id="Phone" data-error="Please Fill Mobile.No"  value="<?php echo $mobile;  ?>" >

    </div>
    <input type="hidden" name="Source" value="contactform-webinar-invite" />
    <input type="hidden" name="MXHOrgCode" value="37">
   <input type="hidden" name="MXHLandingPageId" value="cb8e5d6c-8292-11e3-86b5-22000a901032"> 
   <input type="hidden" name="MXHFormBehaviour" value="1"> 
   <input type="hidden" name="MXHFormDataTransfer" value="0"> 
   <input type="hidden" name="MXHRedirectUrl" value="http://sunstone.in/management-program/thankyou_download"> 
   <input type="hidden" name="MXHAsc" value="10"> 
   <input type="hidden" name="MXHPageTitle" value="Connecto"> 
   <input type="hidden" name="MXHOutputMessagePosition" value="0">
   <input type="hidden" name="MXHIsExternallyUsed" value="1">
   <button type="submit" id="form-submit-button" class="btn btn-default getintouch custom_btn" style="    color: #fbfcf1;    background: rgba(0,0,0,1);">Get more details</button>
</form>
    <script type="text/javascript">
    // alert('working');
        document.getElementById('dateForm').submit(); // SUBMIT FORM
    </script>

    <?php 
    }}

  

/*Post Values from Web Session Form Saved in This Module */
  if (isset($_POST['websession']) && ($_POST['my_data'] == ""))
    {
      // echo "<pre>";print_r($_POST);die;
       date_default_timezone_set('Asia/Calcutta');
       $created_on =  date('d-m-Y,g:i a');
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
                    $message = "<p>Dear ".$name.",</p>
                          <p>We are glad that you have shown interest in Sunstone Program- India’s largest management program for technology professionals. In next few days, we will email you link for the web information session, where Senior Career Coach will be talking about technology career and relevance of Sunstone.</p>
                          <p>In the meanwhile, you can visit following links to know more about the program:</p>
              <ul>
                     <li>Sunstone Alumni and Students talk about their experiences at  <a href='http://sunstone.in/management-program/student-profiles'>http://sunstone.in/management-program/student-profiles</a></li>
                     <li>Program overview and how it works at <a href='http://sunstone.in/management-program/program-details'> http://sunstone.in/management-program/program-details</a></li>
                  </ul>

                          <p>Remember to keep an eye on your inbox because we will send you the Sunstone Webinar Link in next few days.</p>

                          <p>If you have any question at any stage, please feel free to contact me.</p>

                          <p>&nbsp;</p>

                          <p>Regards,<br />
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
                }
                    $sender_name = "Sunstone Business School";
                    $mailed_to = "dinesh@sunstone.in,medha.sharma@sunstone.in,shaguna.dhall@sunstone.in,reena.jalali@sunstone.in,counselling@sunstone.in,suren.gaur@sunstone.in";
                    //$mailed_to = "dev.editsoft@gmail.com,kriti.editsoft@gmail.com";
                    $sender = "contactus@sunstone.in";
                    $to  =  $mailed_to;
                    $subject ="Sunstone Info Web Session - Registration Confirmation";
                    $message = "<p>Name : ".$name."</p></br>
                                <p>Email : ".$email."</p></br>
                                <p>Mobile : ".$mobile."</p></br>
                                <p>Experience : ".$experience."</p></br>
                                <p>Current Organization : ".$current_org."</p></br>
                                <p>Comment : ".$comment."</p></br>
                                <p>Created on : ".$created_on."</p></br>

                                ";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);

        // header("location: thankyou_Attend_Info_Web_Session");

      
        if (isset($email))
    { ?>
    <form style="display:none;" method="post"  id="dateForm" class="form_footer myForms" data-toggle="validator" role="form" enctype="application/x-www-form-urlencoded" action="https://web.mxradon.com/t/FormTracker.aspx">
    <div class="form-group">
    <input type="text"  id="FirstName"  name="FirstName" maxlength="100" value="<?php echo $name;  ?>" >

    </div>
    <div class="form-group">
    <input type="email"  id="EmailAddress"  name="EmailAddress"  value="<?php echo $email; ?>" >

    </div>
    <div class="form-group">
    <input type="number" name="Phone" id="Phone" data-error="Please Fill Mobile.No"  value="<?php echo $mobile;  ?>" >

    </div>
    <input type="hidden" name="source" value="contactform-webinar-invite" />
    <input type="hidden" name="MXHOrgCode" value="37">
   <input type="hidden" name="MXHLandingPageId" value="cb8e5d6c-8292-11e3-86b5-22000a901032"> 
   <input type="hidden" name="MXHFormBehaviour" value="1"> 
   <input type="hidden" name="MXHFormDataTransfer" value="0"> 
   <input type="hidden" name="MXHRedirectUrl" value="http://sunstone.in/management-program/thankyou_Attend_Info_Web_Session"> 
   <input type="hidden" name="MXHAsc" value="10"> 
   <input type="hidden" name="MXHPageTitle" value="Connecto"> 
   <input type="hidden" name="MXHOutputMessagePosition" value="0">
   <input type="hidden" name="MXHIsExternallyUsed" value="1">
   <button type="submit" id="form-submit-button" class="btn btn-default getintouch custom_btn" style="    color: #fbfcf1;    background: rgba(0,0,0,1);">Get more details</button>
</form>
    <script type="text/javascript">
    // alert('working');
        document.getElementById('dateForm').submit(); // SUBMIT FORM
    </script>

    <?php 
    }
       
      
    }
/*Post Values from Counselling Form Saved in This Module */
  if (isset($_POST['counselling']) && ($_POST['my_data'] == ""))
    {
      // echo "<pre>";print_r($_POST);die;
       date_default_timezone_set('Asia/Calcutta');
       $created_on =  date('d-m-Y,g:i a');
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
                    $message = "<p>Dear &nbsp;".$name.",</p>
                          <p>We have received your counselling form. Admissions team will get in touch with you to schedule a one-on-one interaction with the counsellor. </p>
              <p>Please go through the website in details so you have basic understanding of the program before you speak to the counsellor. </p>
              <p>You can reply to this email for more information.</p>
                          <p>We wish you all the best!<br /><br />
                          Sunstone Team</p>";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);
                }
                    $sender_name = "Sunstone Business School";
                    $mailed_to = "dinesh@sunstone.in,counselling@sunstone.in,medha@sunstone.in,shaguna.dhall@sunstone.in,reena.jalali@sunstone.in,suren.gaur@sunstone.in,reena.jalali@sunstone.in,counselling@sunstone.in";
                    // $mailed_to = "dev.editsoft@gmail.com,kriti.editsoft@gmail.com";
                    $sender = "contactus@sunstone.in";
                    $to  =  $mailed_to;
                    $subject ="Sunstone Counselling Registration Details ";
                    $message = "<p>Name : ".$name."</p></br>
                                <p>Email : ".$email."</p></br>
                                <p>Contact : ".$contact."</p></br>
                                <p>Ques1 : ".$ques_1."</p></br>
                                <p>Ques2 : ".$ques_2."</p></br>
                                <p>Ques3 : ".$ques_3."</p></br>
                                <p>Counselor know about you : ".$counselor_to_know_about_you."</p></br>
                                <p>Created on : ".$created_on."</p></br>

                                ";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);
         header("location: thank-you-for-sharing-details-for-counselling");

           ?>

       
       <?php
    }

    /*Post Values from BA info session form Saved in This Module */
    
    if (isset($_POST['ba-infosession']))
    {
      // echo "<pre>";print_r($_POST);die;
       date_default_timezone_set('Asia/Calcutta');
       $created_on =  date('d-m-Y,g:i a');
       $name = $_POST['name'];
       $email = $_POST['email'];
       $contact = $_POST['contact'];
       
       $experience = $_POST['experience'];
       $current_org = $_POST['current_org'];
       $comment = $_POST['comment'];
      
      $query = "INSERT INTO attend_ba_web_session(name,email,mobile,experience,current_org,comment,created_on)
                  VALUES('$name','$email','$mobile','$experience','$current_org','$comment','$created_on')";
      $result = mysql_query($query); 
      
      
      
      if($result){
                    $sender_name = "Sunstone Business School";
                    $sender = "contactus@sunstone.in";
                    $to  = $email; 
                    $subject ="Thanks for providing details for Info Session!";
                    $message = "<p>Dear &nbsp;".$name.",</p>
                          <p>We have received your request for attending Business Analytics web info session. Sunstone team will get in touch with you with further details. </p>
              <p>You can reply to this email for more information.</p>
                          <p>We wish you all the best!<br /><br />
                          Sunstone Team</p>";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);
                }
                    $sender_name = "Sunstone Business School";
                    //$mailed_to = "shaguna.dhall@sunstone.in";
                    $mailed_to = "dinesh@sunstone.in,counselling@sunstone.in,medha@sunstone.in,shaguna.dhall@sunstone.in,reena.jalali@sunstone.in,suren.gaur@sunstone.in,reena.jalali@sunstone.in,counselling@sunstone.in";
                    // $mailed_to = "dev.editsoft@gmail.com,kriti.editsoft@gmail.com";
                    $sender = "contactus@sunstone.in";
                    $to  =  $mailed_to;
                    $subject ="Sunstone BA Web Info Session Details ";
                    $message = "<p>Name : ".$name."</p></br>
                                <p>Email : ".$email."</p></br>
                                <p>Contact : ".$contact."</p></br>
                                <p>Experience : ".$experience."</p></br>
                                <p>Current Organization : ".$current_org."</p></br>
                                <p>Comments : ".$comment."</p></br>
                                <p>Created on : ".$created_on."</p></br>

                                ";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);
         header("location: thank-you-ba-info-session");

           ?>       
       


       
       <?php
    }
    
  if (isset($_POST['connect']) && ($_POST['my_data'] == ""))
    {
      // echo '<pre>';print_r($_POST);die;
       date_default_timezone_set('Asia/Calcutta');
       $created_on =  date('d-m-Y,g:i a');
       $email = $_POST['email'];
       $_SESSION["email"] = $email;
       $mobile = $_POST['mobile'];
       $connect_page = $_POST['connect_page'];

       $sql = "INSERT INTO connect_tbl(email,mobile,connect_page,created_on)
                VALUES('$email','$mobile','$connect_page','$created_on')";
                
      $result = mysql_query($sql); 
      $sender_name = "Sunstone Business School";
      $mailed_to = "dinesh@sunstone.in,medha.sharma@sunstone.in,shaguna.dhall@sunstone.in,reena.jalali@sunstone.in,counselling@sunstone.in,suren.gaur@sunstone.in";
                    //$mailed_to = "dev.editsoft@gmail.com,kriti.editsoft@gmail.com";
                    $sender = "contactus@sunstone.in";
                    $to  =  $mailed_to;
                    $subject ="Sunstone Info Web Session - Registration Confirmation";
                    $message = "<p>Name : ".$email."</p></br>
                                <p>Mobile : ".$mobile."</p></br>
                                <p>Created on : ".$created_on."</p></br>
                                ";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);

        // header("location: thankyou_Attend_Info_Web_Session");
    if (isset($email))
    { ?>
    <form style="display:none;" method="post"  id="dateForm" class="form_footer myForms" data-toggle="validator" role="form" enctype="application/x-www-form-urlencoded" action="https://web.mxradon.com/t/FormTracker.aspx">
    <div class="form-group">
    <input type="text"  id="FirstName"  name="FirstName" maxlength="100" value="User" >

    </div>
    <div class="form-group">
    <input type="email"  id="EmailAddress"  name="EmailAddress"  value="<?php echo $email; ?>" >

    </div>
    <div class="form-group">
    <input type="number" name="Phone" id="Phone" data-error="Please Fill Mobile.No"  value="<?php echo $mobile;  ?>" >

    </div>
    <input type="hidden" name="source" value="contactform-webinar-invite" />
    <input type="hidden" name="MXHOrgCode" value="37">
   <input type="hidden" name="MXHLandingPageId" value="cb8e5d6c-8292-11e3-86b5-22000a901032"> 
   <input type="hidden" name="MXHFormBehaviour" value="1"> 
   <input type="hidden" name="MXHFormDataTransfer" value="0"> 
   <input type="hidden" name="MXHRedirectUrl" value="http://sunstone.in/management-program/entrepreneurcertificate"> 
   <input type="hidden" name="MXHAsc" value="10"> 
   <input type="hidden" name="MXHPageTitle" value="Connecto"> 
   <input type="hidden" name="MXHOutputMessagePosition" value="0">
   <input type="hidden" name="MXHIsExternallyUsed" value="1">
   <button type="submit" id="form-submit-button" class="btn btn-default getintouch custom_btn" style="    color: #fbfcf1;    background: rgba(0,0,0,1);">Get more details</button>
</form>
    <script type="text/javascript">
    // alert('working');
        document.getElementById('dateForm').submit(); // SUBMIT FORM
    </script>

    <?php 
    }
       
      
    }
     
    



 ?>