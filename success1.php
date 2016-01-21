<?php ob_start();?>
<?php include("header1.php"); ?>
<?php include("subheader.php"); ?> 

<script src="js/jquery.min.js"></script>


<?php
session_start();
include("db.php");
$firstname=$_POST["firstname"];
$email=$_POST["email"];
$contact_no = $_POST['phone'];
$cou_name = $_POST['productinfo'];
$course_name = $_POST['udf1'];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$bank = $_POST['PG_TYPE'];
$transaction_time   = $_POST['addedon'];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$salt="GQs7yium";
$status=$_POST["status"];

$merchant_id  = $_POST['key'];

          $query = "INSERT INTO payment_info(firstname,email,contact_no,course_name,amount,txnid,bank,transaction_time,posted_hash,key_value,salt_value,status)
                    VALUES('$firstname','$email','$contact_no','$course_name','$amount','$txnid','$bank','$transaction_time','$transaction_time','$posted_hash','$salt','$status')";
         $result = mysql_query($query); 

if($_POST['txnid'] != '')
{  
  if($_POST['status'] == 'success' || $_POST['status'] == 'SUCCESS')
  {
    $sub = "Payment Received";
    $body = '   
 <html>
          <head>  
            <style>
              a {
              color:#0071D8;
              text-decoration:none;
              cursor:pointer;
              transition:color 0.3s ease-out 0s;
              }
            a:hover {
              text-decoration: none;
              } 
            </style>
          </head>
           <body style="background-color:#f6f6f6;font-family:Arial;">
               <div style="width:90%;margin:0px auto;background-color:#fff;overflow:auto;padding:15px;border:1px solid #ddd;border-radius:5px;-moz-border-radius:5px;">
            <a href="www.sunstone.in"><img src="http://sunstone.in/internal/wp-content/uploads/2011/11/logo.jpg" alt="Sunstone" style="border: none;"></a>
                    <div style="margin-top:15px;color:#333;line-height:30px;padding:10px;">
                         <div style="font-size:12pt">Dear '. 'Student' .',</div>
                         <div style="font-size:11pt;margin-top:10px;text-align:justified;padding:10px;">
                            <p>Your payment has been processed successfully & you are registered for the course "'.$_POST['udf1'].'" &nbsp;</p>
                            <p>Amount Paid: '.$_POST['amount'].'</p>
                               <p>Thank you for joining our course "'.$_POST['udf1'].'". We are all excited to see you at start of the course,</br> For any queries,
                                you may write to us -<a href="https://mail.google.com/mail/u/0/?ui=2&view=btop&ver=1ghqyo9bgqbzw#to%253Dcontactus%252540sunstone.in%2526cmid%253D1" target="_blank">contactus@sunstone.in</a></p>
                <i>This is an auto-generated response email , you don t need to reply to this email. </i>
                <p>Best!,</p>';
                if ($_POST['udf4'] != "" || $_POST['udf3'] != "") {
                  $body.= ' <p>'.$_POST['udf4'].','.$_POST['udf3'].','.$_POST['udf2'].'</p>';
                } 
                 else {
                  $body.= ' <p>'.$_POST['udf2'].'</p>';
                } 
                                     
              $body.=
              '<p>Sunstone Business School</p>
              <p>+919871589883 </p>
              </body>
              </html>
                ';      


  }
  else{
    $sub ="Transaction unsuccessful - payment of Rs ".$_POST['amount'];  
    $body = '
    <html>
          <head>  
            <style>
              a {
              color:#0071D8;
              text-decoration:none;
              cursor:pointer;
              transition:color 0.3s ease-out 0s;
              }
            a:hover {
              text-decoration: none;
              } 
            </style>
          </head>
           <body style="background-color:#f6f6f6;font-family:Arial;">
               <div style="width:90%;margin:0px auto;background-color:#fff;overflow:auto;padding:15px;border:1px solid #ddd;border-radius:5px;-moz-border-radius:5px;">
            <a href="www.sunstone.in"><img src="http://sunstone.in/internal/wp-content/uploads/2011/11/logo.jpg" alt="Sunstone" style="border: none;"></a>
                    <div style="margin-top:15px;color:#333;line-height:30px;padding:10px;">
                         <div style="font-size:12pt">Dear '. 'Student' .',</div>
                         <div style="font-size:11pt;margin-top:10px;text-align:justified;padding:10px;">
                            
                  You had initiated a payment of Rs. ' .$_POST['amount'] . ' for your order on <a href="http://www.sunstone.in">www.sunstone.in</a><br/> 

                  <div style="color:#0371d8">Unfortunately, this transaction did not go through. The error code received was:'. $_POST['error']. '</div>
                  
                  Following were the details which you provided.<br/>
                            Name of Student: '.$_POST['firstname'].'<br/>
                            Email of Student: '.$email.'<br/>
                            Phone of Student: '.$_POST['phone'].'<br/>
                  <br/>
                  You may retry the payment at a later time or use alternate modes of payment. <br/>

                  If you believe that you have received this email in error, please write an email to <a href="mailto://finance@sunstone.in">finance@sunstone.in</a> noting the same.<br/>
                            <br/>
                            We wish you an enlightening learning experience.
                        </div>
                   </div>
                <div style="color:#999;font-size:11pt;width:90%;padding:10px;">
                  Best Wishes,<br/>
                  
                Sunstone Business School<br/>
              <a href="http://sunstone.in"><b>www.sunstone.in</b></a>   
                </div>
              </div>
           </body>
      </html>
    ';   
  }
  	// $bccmail_id ="vaibhav.padlikar@sunstone.in";
  		// email parameters
		$attachment  =  "";
		$fromName = 'Sunstone Business School';
		$fromMailId = 'contactus@sunstone.in';

		//$adminMailId = 'pgpm@sunstone.in';
		$adminMailId = 'shaguna@sunstone.in,medha@sunstone.in,vaibhav.padlikar@sunstone.in,dev@editsoft.in';
  
        // $headers .= 'Bcc: ' . $bccmail_id . "\r\n"; 
        $headers  =  'From: "'.$fromName.'"<'.strip_tags($fromMailId).">\r\n";
      //  $headers .= 'Bcc: ' .strip_tags($adminMailId).">\r\n";
        $headers .=  "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        // send email to user
        mail($email, $sub, $body, $headers, $attachment);

         $body = '<html>
          <head>  
            <style>
              a {
              color:#0071D8;
              text-decoration:none;
              cursor:pointer;
              transition:color 0.3s ease-out 0s;
              }
            a:hover {
              text-decoration: none;
              } 
            </style>
          </head>
           <body style="background-color:#f6f6f6;font-family:Arial;">
               <div style="width:90%;margin:0px auto;background-color:#fff;overflow:auto;padding:15px;border:1px solid #ddd;border-radius:5px;-moz-border-radius:5px;">
              <a href="www.sunstone.in">
                <img src="http://sunstone.in/internal/wp-content/uploads/2011/11/logo.jpg" alt="Sunstone" style="border: none;">
              </a>
                    <div style="margin-top:15px;color:#333;line-height:30px;padding:10px;">
                         <div style="font-size:12pt">Name :'. $firstname .'</div>
                         <div style="font-size:12pt">Email :'. $email .'</div>
                         <div style="font-size:12pt">Phone :'. $contact_no .'</div>
                         <div style="font-size:12pt">Course Name '. $course_name .'</div>
                         <div style="font-size:12pt">Amount '. $amount .'</div>
                <i>This is an auto-generated response email , you don t need to reply to this email. </i>
                <p>Sunstone Business School</p>
                <p>+919871589883 </p>
                </body>
                 </html>
                ';  
        // send a copy to admin
         mail($adminMailId , $sub, $body, $headers, $attachment);

}   
    
?>
<h1 class="entry-title post-title">Payment Info</h1>
<p></p>
        
        <div class="entry-content " >
          

  
    <style type="text/css">
      #content{
                            width:920px;
      }
      .class_homeBtn {
          background:-moz-linear-gradient(center top , #B22222, #570E0E) repeat scroll 0 0 rgba(0, 0, 0, 0);
          background:-webkit-linear-gradient(#B22222, #570E0E) repeat scroll 0 0 transparent;
        box-shadow:0 0 5px #DDDDDD;
        color:#DDDDDD;
        text-transform: capitalize !important;
         }
    </style>
    <div>
      <div style="border-radius:3px;background-color: #fff;margin-top:30px;min-height: 300px;" id="contentWrapper" class="class_wrapper">
      
        <div class="class_container">
          <div style="min-height: 350px;">
          <div style="width: 40%;float: left;">
                <?php
                  if($status == 'success' || $status == 'SUCCESS')
                  { 
                     // echo "<pre>";print_r($_POST);
                    echo "<h3>Thank you for the transaction!</h3>";
                    //echo "Payment Received";
                    echo "<br/>We have received the payment of <strong>INR " . $amount . " </strong> and will get back to you with the next steps.<br/>";
                  
                  } else {
                     // echo "<pre>";print_r($_POST);
                    echo "<h3 style=\"color: brown;\">Transaction Failed!</h3>";
                    //echo "Payment Failed";
                    echo '<br>Please try again or get in touch with us at <a href="mailto://finance@sunstone.in">finance@sunstone.in</a>';
                  
                  } ?>
          </div>
            <div class="class_transaction_summery">
              <div class="class_transaction_details">
                <div>Transaction Details</div>
                <table class="">
                  <tbody><tr>
                    <td style="width: 47%;">Transaction Id:</td>
                    <td><?php echo $txnid; ?></td>
                  </tr>
                  <tr>
                    <td>Time:</td>
                    <td><?php echo $_POST['addedon']; ?></td>
                  </tr>
                  <tr>
                    <td>Amount In Rs:</td>
                    <td><?php echo $amount; ?></td>
                  </tr>
                  <tr>
                    <td>Bank Name:</td>
                    <td><?php echo $_POST['PG_TYPE']; ?></td>
                  </tr>
                </tbody></table>
                  <?php
                  if($status == 'success' || $status == 'SUCCESS')
                  {
                  ?>
                    <span style="margin:0px;" class="class_success_msg">Payment Successfully Received.</span>
                  <?php
                      }
                      else
                      {
                  ?>
                        <span style="margin:0px;color:red;" class="class_success_msg">Payment Not Received.</span>
                        <br>
                        <?php  
                          //echo 'Error Message :' . $_POST['error']; 
                      }
                      ?>
            
                    
                    </div>
              <div class="class_transaction_user_details">
                <div>User Details</div>
                <table class="">
                  <tbody><tr>
                    <td><?php echo $firstname ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $email ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $contact_no ?></td>
                  </tr>
                </tbody></table>
              </div>
            </div>
          </div>
          
          
        </div>
      </div>
    </div>
  </div><!-- end .entry-content -->
  <div class="text-center">
    
    <p  class="class_success_msg">
    <div style="margin:0px;color:green;">Automatic redirect after <span id="time" style="margin:0px;color:red;">00:30</span> seconds .....</p>
    <a href="http://sunstone.in/management-program/" class="">Return</a>
  </div>
  <script type="text/javascript">
    // function startTimer(duration, display) {
    //     var timer = duration, minutes, seconds;
    //     setInterval(function () {
    //         minutes = parseInt(timer / 60, 10)
    //         seconds = parseInt(timer % 60, 10);

    //         minutes = minutes < 10 ? "0" + minutes : minutes;
    //         seconds = seconds < 10 ? "0" + seconds : seconds;

    //         display.text(minutes + ":" + seconds);

    //         if (--timer < 0) {
    //             timer = duration;
    //            location.href = "http://sunstone.in/management-program/";
    //         }
            
    //     }, 1000);
    // }

    jQuery(function ($) {
        // var fiveMinutes = 60 * .18,
         var fiveMinutes = 60 * .500,
            display = $('#time');
        startTimer(fiveMinutes, display);
    });
  </script>
  <?php         
   
?>  