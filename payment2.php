<?php ob_start();?>
<?php include("header1.php"); ?>
<?php include("subheader.php"); ?> 


<script src="js/jquery.min.js"></script>


<script src="js/validator.min.js"></script>
  <div class="clearfix"></div>
<?php
include("db.php");
session_start();

/* Template Name:Fee Payment Page */
// Merchant key here as provided by Payu
$MERCHANT_KEY = "Q2lcqh";
// Merchant Salt as provided by Payu
$SALT = "CJFoO6zd";
// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {

  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
  
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
       // echo "<pre>";print_r($posted);
        $txnid = $posted['txnid'];
        $amount = $posted['amount'];
        $firstname = $posted['firstname'];
        $email = $posted['email'];
        $contact_no = $posted['phone'];
        $productinfo = $posted['productinfo'];
        $course_name = $posted['udf1'];
        // $udf2 = $posted['udf2'];
        // $udf3 = $posted['udf3'];
        // $udf4 = $posted['udf4'];
        // $surl = $posted['surl'];
        // $furl = $posted['furl'];
        // $service_provider = $posted['service_provider'];
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
  
      $query = "INSERT INTO pre_payment_info(firstname,email,contact_no,course_name,amount,txnid)
                    VALUES('$firstname','$email','$contact_no','$course_name','$amount','$txnid')";
         $result = mysql_query($query); 


  $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
    $hash_string .= $SALT;


  $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  // echo "string";die;
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
   
    <div class="container si_section" style="color:#000">
      <div class="row">
        <div class="col-md-12 no-side-margin">
          <!-- <div class="">Fee Payment Form </div>
          <div class="red"></div>
          <div class="si_subtagline"> -->
          </div>
        </div>
      </div>
    </div>

    <div class="container no-side-padding" id="commstory">
      <div class="main row">
        <div class="col-md-12">
          <div class="row board">
            <div class="col-md-10 col-md-offset-1 pd-t-40 pd-b-20">
            <h3 class="pd-b-40">Fee Payment Form </h3>
              
              <form action="<?php echo $action; ?>" method="post" class="form-inline" name="payuForm" id="payuForm">
        			    <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
        			    <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
        			    <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                      <div class="col-md-12">
                    	<h4>Thank you for your interest in Sunstone PGPM.</h4>	
                      	<h6 class="pd-b-20">Please enter your payment details below for payment and invoice purposes:</h6>
                      </div>
                        <div class="form-group col-md-6">
                          <label for="">Name of Student: </label><br>
                          <input name="firstname" class="form-control" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">Email of Student: </label><br>
                          <input name="email"  class="form-control" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" />
                        </div>

                        <div class="form-group col-md-6 pd-t-20">
                          <label for="">Phone of Student: </label><br>
                          <input name="phone"  class="form-control" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" />
                        </div>
                        <?php 
                          if (empty($posted['amount'])) {
                                $pamount = 14000;
                          } else {
                                
                                $pamount = $posted['amount'];
                                $course_info = $posted['course_info'];
                                // $director= $posted['director'];
                                // $director1= $posted['director1'];
                                // $director2= $posted['director2'];

                                // $_SESSION['course_info'] = $course_info; 
                                // $_SESSION['director'] = $director; 
                                // $_SESSION['director1'] = $director1; 
                                // $_SESSION['director2'] = $director2; 
                                
                          }
                          
         // echo '<pre>';print_r($_SESSION);
                         ?>
                       <!--  <div class="form-group col-md-6 pd-t-20">
                          <label for="">Course: </label><br>
                          <input name="productinfo"  class="form-control" id="productinfo" value="<?php echo $course_info; ?>" readonly />
                        </div> -->
                        
                        <div class="form-group col-md-6 pd-t-20">
                          <label for="">Amount to be paid (in INR): </label><br>
                          <input name="amount"  class="form-control" id="amount" value="<?php echo $pamount; ?>" readonly />
                        </div>
                        <br>
                       

                          
                        <div class="col-md-12 mg-t-20">
                        <input type="hidden" name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" />
                        <input type="hidden" name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" />
                        <input type="hidden" name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" />
                        <input type="hidden" name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" />
        	               <input type="hidden" name="productinfo" value="info">
        		            <input type="hidden" name="surl" value="http://www.sunstone.in/management-program/success.php" size="64">     
        		            <input type="hidden" name="furl" value="http://www.sunstone.in/management-program/success.php" size="64"> 
        		            <input type="hidden" name="service_provider" value="payu_paisa" size="64"> 
                         	<button type="submit" class="btn btn-warning" name="" value="SUBMIT">SUBMIT</button>
                        </div>

              </form>
                 <script>
                    var hash = '<?php echo $hash ?>';
                    function submitPayuForm() {
                      if(hash == '') {
                        return;
                      }
                     document.getElementById("payuForm").submit();
                    }
                  
                  submitPayuForm();
                  </script>


              	<div class="col-md-12 pd-t-40">
	              <h4>Payment instructions:</h4>

	              	<ul class="pd-l-20">
		                <li>
		                	For VISA Debit Card Issued in India (VBV)/ MasterCard Debit Card Issued in India (MSC)/ Visa/MasterCard/Any Maestro Debit Card, the charges will be <strong>PayU Money</strong>
		                </li>
		                <li> 
		                	After submitting the page, please wait for the intimation from the server, DO NOT press back or Refresh button in order to avoid double charge.
		                </li>
		                 <li> 
		                	For Credit Card users: All prices are in Indian Rupee (INR). If you use a non-Indian credit card, your bank will convert to your local currency based on prevailing exchange rates.
		                </li>
		                 <li> 
		                	Encountered problems while paying? Write to us at <a href="mailto:finance@sunstone.in">finance@sunstone.in</a> for support.
		                </li>
		                 <li> 
		                	Security Advisory: To ensure the security of your data, please close the browser window once your transaction is completed.
		                </li>

	              	</ul>
	            </div>
              	<div class="col-md-4 pd-t-40">
              		<h4>Need assistance</h4>
              		<span>Call us : <span data-ismobile="false" data-isrtl="false" data-isfreecall="false" data-numbertocall="+917838935160" onclick="SkypeClick2Call.MenuInjectionHandler.makeCall(this, event)" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" tabindex="-1" dir="ltr" class="skype_c2c_container notranslate" id="skype_c2c_container"><span skypeaction="skype_dropdown" dir="ltr" class="skype_c2c_highlighting_inactive_common"><span id="non_free_num_ui" class="skype_c2c_textarea_span"><img height="0" width="0" src="resource://skype_ff_extension-at-jetpack/skype_ff_extension/data/call_skype_logo.png" class="skype_c2c_logo_img"><span class="skype_c2c_text_span">+91 7838935160</span><span class="skype_c2c_free_text_span"></span></span></span></span></span><br>
              		 Email us at : <a href="mailto:finance@sunstone.in">finance@sunstone.in</a>
              	</div>
              	<div class="col-md-8 pd-t-40">
              		<h4>Cancellation Policy</h4>
              		<ul>
              			<li>In the event, of a participant cancellation, a cancellation notification must be sent in written at <a href="mailto:finance@sunstone.in">finance@sunstone.in</a></li>
              			<li>Should we be unable to accept your registration request for any reason, your payment will be returned to you. In case of online payments, bank charges will be deducted.</li>
              		</ul>
              	</div>
            </div>
          </div>

        </div>

      </div>

     
    </div><!-- /container -->

 <?php 
 
 
 include("footer.php") ?>