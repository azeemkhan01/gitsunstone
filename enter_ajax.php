<?php ob_start();?>
<?php 

error_reporting(0);
session_start();
include("db.php");
// echo "<pre>";print_r($_POST);die;
 if (isset($_POST['email']) && ($_POST['my_data'] == ""))
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
   <input type="hidden" name="MXHRedirectUrl" value=""> 
   <input type="hidden" name="MXHAsc" value="10"> 
   <input type="hidden" name="MXHPageTitle" value="Connecto"> 
   <input type="hidden" name="MXHOutputMessagePosition" value="0">
   <input type="hidden" name="MXHIsExternallyUsed" value="1">
   <button type="submit" id="form-submit-button" class="btn btn-default getintouch custom_btn" style="    color: #fbfcf1;    background: rgba(0,0,0,1);">Get more details</button>
</form>
    <script type="text/javascript">
    alert('working');
        document.getElementById('dateForm').submit(); // SUBMIT FORM
    </script>

    <?php 
    }}

 ?>