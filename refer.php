<?php ob_start();?>
<?php 

error_reporting(0);
session_start();
include("db.php");
// echo "<pre>";print_r($_POST);die;
 if (isset($_POST['ref_email']))
    {
        // echo '<pre>';print_r($_POST);die;
       date_default_timezone_set('Asia/Calcutta');
       $created_on =  date('d-m-Y,g:i a');
       $ref_name = $_POST['ref_name'];
       $ref_email = $_POST['ref_email'];
       $ref_friend_name = $_POST['ref_friend_name'];
       $ref_friend_email = $_POST['ref_friend_email'];
       $ref_friend_mobile = $_POST['ref_friend_mobile'];


       $sql = "INSERT INTO referral_tbl(ref_name,ref_email,ref_friend_name,ref_friend_email,ref_friend_mobile,created_on)
                VALUES('$ref_name','$ref_email','$ref_friend_name','$ref_friend_email','$ref_friend_mobile','$created_on')";
                
       $result = mysql_query($sql); 
        if (isset($ref_email))
        { 
        $sender_name = "Sunstone Business School";
        $sender = "contactus@sunstone.in";
        $to  = $ref_email; 
        $subject ="Thank you for the referral";
        $message = "<p>Dear ".$ref_name."</p>

          <p>Thanks for Referring your friend. We will get in touch and take it forward from here.</p>

 
          <i>This is an auto-generated response email , you don't need to reply to this email. </i>
          <p>Best!</p>
          <p>Sunstone Business School</p>
         <a href='http://click.sunstone.in/t/em/37/1/ea0114b6-7358-4b38-8619-b84ec3cc76bb/25' target='_blank'>www.sunstone.in</a></p>
          ";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
        $result = mail($to, $subject, $message, $headers); 
        

        $sender_name = "Sunstone Business School";
        $mailed_to = "dinesh@sunstone.in,medha.sharma@sunstone.in,shaguna.dhall@sunstone.in,suren.gaur@sunstone.in,reena.jalali@sunstone.in,counselling@sunstone.in";
        //$mailed_to = "devedu285@gmail.com,shaguna.dhall@sunstone.in";
        $sender = "contactus@sunstone.in";
        $to  =  $mailed_to;
        $subject ="Referral Student Details";
        $message = "<p>Name : ".$ref_name."</p></br>
                    <p>Email : ".$ref_email."</p></br>
                    <p>Reffered Name : ".$ref_friend_name."</p></br>
                    <p>Reffered Email : ".$ref_friend_email."</p></br>
                    <p>Reffered  : ".$ref_friend_mobile."</p></br>
                    <p>Created on : ".$created_on."</p></br>";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
        $result = mail($to, $subject, $message, $headers);

      ?>
    <form style="display:none;" method="post"  id="dateFormRef" class="form_footer myForms" data-toggle="validator" role="form" enctype="application/x-www-form-urlencoded" action="https://web.mxradon.com/t/FormTracker.aspx">
        <div class="form-group">
          <input type="text"  id="FirstName"  name="FirstName" maxlength="100" value="<?php echo $ref_friend_name;  ?>" >
        </div>
        <div class="form-group">
          <input type="email"  id="EmailAddress"  name="EmailAddress"  value="<?php echo $ref_friend_email; ?>" >
        </div>
        <div class="form-group">
          <input type="text"  id='mx_Referrer_Name' name='mx_Referrer_Name' maxlength="100" value="<?php echo $ref_name;  ?>" >
        </div>
        <div class="form-group">
          <input type="email"   id='mx_Referrer_Email' name='mx_Referrer_Email'  value="<?php echo $ref_email; ?>" >

        </div>
        <div class="form-group">
          <input type="number" name="Phone" id="Phone" data-error="Please Fill Mobile.No"  value="<?php echo $ref_friend_mobile;  ?>" >
        </div>
        <input type="hidden" name="Source" value="Website_ReferralForm" />
        <input type="hidden" name="MXHOrgCode" value="37">
       <input type="hidden" name="MXHLandingPageId" value="cb8e5d6c-8292-11e3-86b5-22000a901032"> 
       <input type="hidden" name="MXHFormBehaviour" value="1"> 
       <input type="hidden" name="MXHFormDataTransfer" value="0"> 
       <input type="hidden" name="MXHRedirectUrl" value="http://sunstone.in/management-program/thankyou_referafriend.php"> 
       <input type="hidden" name="MXHAsc" value="10"> 
       <input type="hidden" name="MXHPageTitle" value="Connecto"> 
       <input type="hidden" name="MXHOutputMessagePosition" value="0">
       <input type="hidden" name="MXHIsExternallyUsed" value="1">
       <button type="submit" id="form-submit-button" class="btn btn-default getintouch custom_btn" style="    color: #fbfcf1;    background: rgba(0,0,0,1);">Get more details</button>
    </form>
    <script type="text/javascript">
    // alert('working');
        document.getElementById('dateFormRef').submit(); // SUBMIT FORM
    </script>

    <?php 
    }}

 ?>