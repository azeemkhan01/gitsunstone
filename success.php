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
$udf1 = $course_name = $_POST['udf1'];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$bank = $_POST['PG_TYPE'];
$transaction_time   = $_POST['addedon'];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$salt="GQs7yium";
$status=$_POST["status"];

// $email="dev@editsoft.in";
// $txnid="8748541564";
// $status="success";
// $udf1="Business Analytics Certificate";


$merchant_id  = $_POST['key'];

          $query = "INSERT INTO payment_info(firstname,email,contact_no,course_name,amount,txnid,bank,transaction_time,posted_hash,key_value,salt_value,status)
                    VALUES('$firstname','$email','$contact_no','$course_name','$amount','$txnid','$bank','$transaction_time','$transaction_time','$posted_hash','$salt','$status')";
         $result = mysql_query($query); 

  if($_POST['txnid'] != '')
      // if(TRUE)                
 {  
  if($_POST['status'] == 'success' || $_POST['status'] == 'SUCCESS')
  // if(TRUE)
  {
    // echo "string";die;
    
    $sub = 'Payment Successful: Welcome to Sunstone '. $firstname .'.You are now registered for '.$udf1.' ';
    
   
    if (($udf1 == "Business Analytics Certificate") ) {
  
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
            <a href="www.sunstone.in"><img src="http://sunstone.in/internal/wp-content/uploads/2011/11/logo.jpg" alt="Sunstone" style="border: none;"></a>
                    <div style="margin-top:15px;color:#333;line-height:30px;padding:10px;">
                         <div style="font-size:12pt">Dear '. $firstname .',</div>
                         <div style="font-size:11pt;margin-top:10px;text-align:justified;padding:10px;">
                            <p>Welcome to the Sunstone Business School .You are now Successfully registered for '. $udf1 .' &nbsp;</p>
                            <p>Please go through below pre-reads before the opener session. These are the Case Studies and Generic Reads on Data Driven Decision Making</p>
                            <ul><li style="margin-left:15px">
                                <b>Making data-driven marketing decisions - McKinsey&nbsp;</b><br>
                                </li>
                            </ul>
                          <blockquote style="font-size:12.8000001907349px;margin:0px 0px 0px 40px;border:none;padding:0px">
                              <blockquote style="">
                                <p>
                                  <a href="http://www.mckinsey.com/~/media/mckinsey/dotcom/client_service/retail/articles/perspectives%20book/02%20data%0driven.ashx" target="_blank">http://www.mckinsey.com/~/<wbr>media/mckinsey/dotcom/client_<wbr>service/retail/articles/<wbr>perspectives%20book/02%20data%<wbr>0driven.ashx</a>
                                </p>
                              </blockquote>
                          </blockquote>
                  <div style="font-size:12.8000001907349px">
                    <ul><li style="margin-left:15px"><b>Strength in Numbers: How Does Data-Driven Decisionmaking Affect Firm Performance?</b><br></li></ul></div>
                  <blockquote style="font-size:12.8000001907349px;margin:0px 0px 0px 40px;border:none;padding:0px"><blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><p><a href="http://www.a51.nl/storage/pdf/SSRN_id1819486.pdf" target="_blank">http://www.a51.nl/storage/pdf/<wbr>SSRN_id1819486.pdf</a></p></blockquote></blockquote>
                  <div style="font-size:12.8000001907349px"><p></p><ul><li style="margin-left:15px"><b>The State of Data-Driven Decision Making in Retailing &amp; CPG&nbsp;</b><br></li></ul><p></p></div>
                  <blockquote style="font-size:12.8000001907349px;margin:0px 0px 0px 40px;border:none;padding:0px"><blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><p><a href="http://www.baylor.edu/business/collaboratory/doc.php/230970.pdf" target="_blank">http://www.baylor.edu/<wbr>business/collaboratory/doc.<wbr>php/230970.pdf</a></p></blockquote></blockquote>
                  <div style="font-size:12.8000001907349px"><ul><li style="margin-left:15px"><b>Elementary Statistics (must read)</b><br></li></ul></div>
                  <blockquote style="font-size:12.8000001907349px;margin:0px 0px 0px 40px;border:none;padding:0px"><blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><p><a href="http://www.statsoft.com/textbook/elementary-statistics-concepts" target="_blank">http://www.statsoft.com/<wbr>textbook/elementary-<wbr>statistics-concepts</a></p></blockquote><blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><p><a href="http://www.statsoft.com/Textbook/Basic-Statistics" target="_blank">http://www.statsoft.com/<wbr>Textbook/Basic-Statistics</a></p></blockquote></blockquote>
                  <div style="font-size:12.8000001907349px"><br></div>
                            <i>This is an auto-generated response email , you don t need to reply to this email. </i>
              <div style="font-size:12.8000001907349px">Best Regards</div>
              <div style="font-size:12.8000001907349px">Reena Jalali</div>
              <div style="font-size:12.8000001907349px">Program Manager</div>
              <div style="font-size:12.8000001907349px">Sunstone Business School,</div>
              <div style="font-size:12.8000001907349px">www.sunstone.in</div>
              <div style="font-size:12.8000001907349px">counselling@sunstone.in</div>
              <div style="font-size:12.8000001907349px">"Indias Largest Management Program for working Professionals"</div>
              </body>
              </html>';

      
    }
    if (($udf1 == 'Big Data & Hadoop certificate') ) {
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
            <a href="www.sunstone.in"><img src="http://sunstone.in/internal/wp-content/uploads/2011/11/logo.jpg" alt="Sunstone" style="border: none;"></a>
                    <div style="margin-top:15px;color:#333;line-height:30px;padding:10px;">
                         <div style="font-size:12pt">Dear '. $firstname .',</div>
                         <div style="font-size:11pt;margin-top:10px;text-align:justified;padding:10px;">
                            <p>Welcome to the Sunstone Business School .You are now Successfully registered for '. $udf1 .' &nbsp;</p>
                            <p>Please go through below pre-reads before the opener session. These are the Case Studies and Generic Reads on Data Driven Decision Making</p>
                            <div style="font-size:12.8000001907349px"><ul><li><b style="font-size:12.8000001907349px">What is Big Data&nbsp;</b></li></ul></div>
                            <blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><div style="font-size:12.8000001907349px"><b style="font-size:12.8000001907349px"><a href="https://en.wikipedia.org/wiki/Big_data" style="font-size:12.8000001907349px;font-weight:normal" target="_blank">https://en.wikipedia.org/wiki/<wbr>Big_data</a></b></div></blockquote></blockquote>
                            <blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><p style="font-size:12.8000001907349px"><a href="http://www.forbes.com/sites/lisaarthur/2013/08/15/what-is-big-data/" style="font-size:12.8000001907349px" target="_blank">http://www.forbes.com/sites/<wbr>lisaarthur/2013/08/15/what-is-<wbr>big-data/</a></p></blockquote>
                            <ul><li><b style="font-size:12.8000001907349px">Top big data analytics Platforms</b><br></li></ul>
                            <blockquote style="font-size:12.8000001907349px;margin:0px 0px 0px 40px;border:none;padding:0px"><blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><div style="font-size:12.8000001907349px"><div style="font-size:12.8000001907349px"><a href="http://www.informationweek.com/big-data/big-data-analytics/16-top-big-data-analytics-platforms/d/d-id/1113609" target="_blank">http://www.informationweek.<wbr>com/big-data/big-data-<wbr>analytics/16-top-big-data-<wbr>analytics-platforms/d/d-id/<wbr>1113609</a><br></div><div style="font-size:12.8000001907349px"><a href="http://www.pentaho.com/big-data-analytics/hadoop" target="_blank">http://www.pentaho.com/big-<wbr>data-analytics/hadoop</a></div><div><br></div></div></blockquote></blockquote>
                            <b style="font-size:12.8000001907349px"><ul><li><b style="font-size:12.8000001907349px">Making data-driven marketing decisions - McKinsey&nbsp;</b><br></li></ul></b>
                            <blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><p><a href="http://www.mckinsey.com/~/media/mckinsey/dotcom/client_service/retail/articles/perspectives%20book/02%20data%0driven.ashx" target="_blank">http://www.mckinsey.com/~/<wbr>media/mckinsey/dotcom/client_<wbr>service/retail/articles/<wbr>perspectives%20book/02%20data%<wbr>0driven.ashx</a></p></blockquote>
                            <div style="font-size:12.8000001907349px"><div><br></div><b style="font-size:12.8000001907349px"><ul><li><b style="font-size:12.8000001907349px">Strength in Numbers: How Does Data-Driven Decision making Affect Firm Performance?</b><br></li></ul></b><div><br></div></div>
                            <blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><p><a href="http://www.a51.nl/storage/pdf/SSRN_id1819486.pdf" target="_blank">http://www.a51.nl/storage/pdf/<wbr>SSRN_id1819486.pdf</a></p></blockquote>
                            <b style="font-size:12.8000001907349px"><ul><li><b style="font-size:12.8000001907349px">The State of Data-Driven Decision Making in Retailing &amp; CPG&nbsp;</b><br></li></ul></b>
                            <blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><p><a href="http://www.baylor.edu/business/collaboratory/doc.php/230970.pdf" target="_blank">http://www.baylor.edu/<wbr>business/collaboratory/doc.<wbr>php/230970.pdf</a></p></blockquote>
                            <b style="font-size:12.8000001907349px"><ul><li><b style="font-size:12.8000001907349px">Elementary Statistics (must read)</b><br></li></ul></b>
                            <blockquote style="font-size:12.8000001907349px;margin:0px 0px 0px 40px;border:none;padding:0px"><blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><p><a href="http://www.statsoft.com/textbook/elementary-statistics-concepts" target="_blank">http://www.statsoft.com/<wbr>textbook/elementary-<wbr>statistics-concepts</a></p></blockquote><blockquote style="margin:0px 0px 0px 40px;border:none;padding:0px"><p><a href="http://www.statsoft.com/Textbook/Basic-Statistics" target="_blank">http://www.statsoft.com/<wbr>Textbook/Basic-Statistics</a></p></blockquote></blockquote>
                            <span style="font-size:12.8000001907349px">I have also attached a pdf document titled "Hadoop Begineer s Guide by Garry Turkington as an suggestive read<br></span>
                  <div style="font-size:12.8000001907349px"><br></div>
                            <i>This is an auto-generated response email , you don t need to reply to this email. </i>
              <div style="font-size:12.8000001907349px">Best Regards</div>
              <div style="font-size:12.8000001907349px">Reena Jalali</div>
              <div style="font-size:12.8000001907349px">Program Manager</div>
              <div style="font-size:12.8000001907349px">Sunstone Business School,</div>
              <div style="font-size:12.8000001907349px">www.sunstone.in</div>
              <div style="font-size:12.8000001907349px">counselling@sunstone.in</div>
              <div style="font-size:12.8000001907349px">"Indias Largest Management Program for working Professionals"</div>
              </body>
              </html>';

      
    }
    if (($udf1 != "Business Analytics Certificate") && ($udf1 !="Big Data & Hadoop certificate" )) {
      
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
                         <div style="font-size:12pt">Dear '. $firstname .',</div>
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

		// $adminMailId = 'dev@editsoft.in';
		 $adminMailId = 'shaguna@sunstone.in,medha@sunstone.in,vaibhav.padlikar@sunstone.in,suren.gaur@sunstone.in,dinesh@sunstone.in,medha.sharma@sunstone.in,dev@editsoft.in';
  
   
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
      <div  id="contentWrapper" class="class_wrapper container-fluid">
      
        <div class="class_container col-md-10 col-md-offset-1">
          <div>
          <div>
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
                <h3>Transaction Details</h3>
                <table class="">
                  <tbody><tr>
                    <td style="width: 47%;"><h4>Transaction Id:</h4></td>
                    <td><?php echo $txnid; ?></td>
                  </tr>
                  <tr>
                    <td><h4>Time:</h4></td>
                    <td><?php echo $_POST['addedon']; ?></td>
                  </tr>
                  <tr>
                    <td><h4>Amount In Rs:</h4></td>
                    <td><?php echo $amount; ?></td>
                  </tr>
                  <tr>
                    <td><h4>Bank Name:</h4></td>
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
                <div><h4>User Details</h4></div>
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
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.text(minutes + ":" + seconds);

            if (--timer < 0) {
                timer = duration;
               location.href = "http://sunstone.in/management-program/";
            }
            
        }, 1000);
    }

    jQuery(function ($) {
        // var fiveMinutes = 60 * .18,
         var fiveMinutes = 60 * .500,
            display = $('#time');
        startTimer(fiveMinutes, display);
    });
  </script>
  <?php         
   
?>  