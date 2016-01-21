<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<?php include("header1.php"); ?>
<?php include("subheader.php"); ?> 

<script src="js/jquery.min.js"></script>


<script src="js/validator.min.js"></script>
  <div class="clearfix"></div>

<?php 

 if($_POST['amount'] == ""){
  
       header ('location:http://sunstone.in/management-program/');
  }


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
    //print_r($_POST);
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
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
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
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
 ?>

   <script>
    var hash = '';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }

     document.getElementById("payuForm").submit();

    }
  
  submitPayuForm();
  </script>
<body>
<div class="wrap"> <h1 class="entry-title post-title">Fee Payment Form </h1>
<p></p>
  
  <div>
Thank you for your interest in Sunstone PGPM.<br><br>
<hr>
</div>
<div class="col-md-10 col-md-offset-1 pd-t-40 pd-b-20">
  <form action="<?php echo $action; ?>" method="post" name="payuForm" id="payuForm">
    <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
    <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
    <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
          <tr>
            <td colspan="3"><b> Please enter your payment details below for payment and invoice purposes: </b></td>
          </tr>
          <tr>
            <td>Name of Student: </td>
            <td colspan="2"><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
          </tr>
          <tr>
            <td>Email of Student: </td>
            <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
          </tr>
          <tr>
            <td>Phone of Student: </td>
            <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
          </tr>
          <tr>
            <td>Amount to be paid (in INR): </td>
            <td colspan="2"><input name="amount" id="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount']; ?>" readonly /></td>
          </tr>
          <tr>
            <td colspan="4"><input type="hidden" name="productinfo" value="PGPM">
            <input type="hidden" name="surl" value="http://www.sunstone.in/management-program/success.php" size="64">     
            <input type="hidden" name="furl" value="http://www.sunstone.in/management-program/success.php" size="64"> 
            <input type="hidden" name="service_provider" value="payu_paisa" size="64">      
            <input class="class_button" type="submit" value="Submit"></td>
          </tr>
          </tbody>
      </table>
  </form>
  

  
  
  <div>
    <strong>Payment instructions:</strong><br>
      <ul>
        <li>For VISA Debit Card Issued in India (VBV)/ MasterCard Debit Card Issued in India (MSC)/ Visa/MasterCard/Any Maestro Debit Card, the charges will be <strong>PayU Money</strong></li>
        <li>After submitting the page, please wait for the intimation from the server, DO NOT press back or Refresh button in order to avoid double charge.</li>
        <li>For Credit Card users: All prices are in Indian Rupee (INR). If you use a non-Indian credit card, your bank will convert to your local currency based on prevailing exchange rates.</li>
        <li>Encountered problems while paying? Write to us at <a href="mailto:finance@sunstone.in">finance@sunstone.in</a> for support.</li>
        <li>Security Advisory: To ensure the security of your data, please close the browser window once your transaction is completed.</li>
      </ul>
  </div>
  
  <div>
    <div style="text-align:left;width:100%;"><strong>Need assistance:</strong><br>
        <span>Call us : <span data-ismobile="false" data-isrtl="false" data-isfreecall="false" data-numbertocall="+91 7838935160" onclick="SkypeClick2Call.MenuInjectionHandler.makeCall(this, event)" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" tabindex="-1" dir="ltr" class="skype_c2c_container notranslate" id="skype_c2c_container"><span skypeaction="skype_dropdown" dir="ltr" class="skype_c2c_highlighting_inactive_common"><span id="non_free_num_ui" class="skype_c2c_textarea_span"><img height="0" width="0" src="resource://skype_ff_extension-at-jetpack/skype_ff_extension/data/call_skype_logo.png" class="skype_c2c_logo_img"><span class="skype_c2c_text_span">+91 7838935160</span><span class="skype_c2c_free_text_span"></span></span></span></span></span><br>
        Email us at : <a href="mailto:finance@sunstone.in">finance@sunstone.in</a>
      </div>
  </div>
  <div style="padding-top:15px;">
    <strong>Cancellation/Refund policy:</strong><br>
        <ul>
        <li>In the event, of a participant cancellation, a cancellation notification must be sent in written at <a href="mailto:finance@sunstone.in">finance@sunstone.in</a><br></li>
        <li>Should we be unable to accept your registration request for any reason, your payment will be returned to you. In case of online payments, bank charges will be deducted.</li>
      </ul><br>
  </div>
        
      </div>
      </div>
</body>
</html>
