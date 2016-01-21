<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<?php
error_reporting(-1);
include("db1.php");
$course_fees = 14000;
if (isset($_GET['utm']))
  {
    function curPageName() {
     return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    }
     $page = curPageName();
     $utm = $_GET['utm'];
     $que = "INSERT INTO campaign_tbl(campaign,page)
                VALUES('$utm','$page')";
     $result = mysql_query($que); 
  }
 include("sub-mit.php");
      ?>
<?php include("header1.php"); ?>
<?php include("subheader.php"); ?> 

<script src="js/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){ 
    $('.btn_afaq').click(function(){
        $('html, body').animate({
            scrollTop: $( '#afaq' ).offset().top
        }, 500);
        return false;
    });
  });
</script>

<script>
function sticky_relocate() {
  var window_top = $(window).scrollTop();
  var div_top = $('#sticky-anchor').offset().top;
  if (window_top > div_top) {
    $('#sticky').addClass('stick');
  } else {
    $('#sticky').removeClass('stick');
  }
}

$(function() {
  $(window).scroll(sticky_relocate);
  sticky_relocate();
});
</script>
<script type="text/javascript">
window.onload = function () {
    document.getElementById("password1").onchange = validatePassword;
    document.getElementById("password2").onchange = validatePassword;
}
function validatePassword(){
var pass2=document.getElementById("password2").value;
var pass1=document.getElementById("password1").value;
if(pass1!=pass2)
    document.getElementById("password2").setCustomValidity("Passwords Don't Match");
else
    document.getElementById("password2").setCustomValidity('');  
//empty string means no validation error
}
</script>
<script src="js/validator.min.js"></script>
 
  <div class="clearfix"></div>
    <div class="container si_section">
      <div class="row">
        <div class="col-md-12 no-side-margin">

        </div>
      </div>
    </div>

    <div class="container no-side-padding" id="pgpm_overview">
      <div class="main col-md-12">
        <div class="row">

          <div class="col-md-10 col-md-offset-1 pd-b-40">


            <div class="certificates">
              <div class="col-sm-4">
                  <img src="img/group.png" height="270px" width="100%">
              </div>
              <div class="col-sm-8">
                <div class="mba_text bg_none">
                  <div class="certificate_box">
                    <div class="certificate">Entrepreneurship certificate</div>
                    <div class="text-center pills_2">
                        <span class="label label-default">COURSE FEE</span>&nbsp;&nbsp; INR 14,000
                    </div>
            
                    <div class="mg-t-20">
                      <table class="table table-hover certificate_table">
                       <thead>
                          <tr>
                             <th>NEXT BATCH</th>
                             <th>DURATION</th>
                             <th>DAYS</th>
                             <th>TIME(IST)</th>
                             <th></th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td>18-Jul</td>
                             <td>8 Weeks</td>
                             <td>Sat,Sun</td>
                             <td>8:00 AM-12:00 PM</td>
                             <td>
                                <!-- <form action="payment.php" method="post" id="payment-form">

                                   <input type="hidden" value="14000" name="amount">
                                   <input type="hidden" value="Entrepreneurship certificate" name="udf1">
                                   <input type="hidden" value="RAJUL GARG" name="udf2">
                                   <input type="hidden" value="KARTIK SARWADE" name="udf3">
                                   <input type="hidden" value="ADITYA CHATURVEDI" name="udf4">
                                   <button type="submit" class="btnlink amt_val" name="submit">Enroll</button>
                                </form> -->
                                <button class="btnlink" style="cursor:default;">Closed</button>
                             </td>
                          </tr>
                          <tr>
                             <td>15-Aug</td>
                             <td>8 Weeks</td>
                             <td>Sat,Sun</td>
                             <td>8:00 AM-12:00 PM</td>
                             <td>
                                <!-- <form action="payment.php" method="post" id="payment-form">
                                   <input type="hidden" value="16000" name="amount">
                                   <input type="hidden" value="Entrepreneurship certificate" name="udf1">
                                   <input type="hidden" value="RAJUL GARG" name="udf2">
                                   <input type="hidden" value="KARTIK SARWADE" name="udf3">
                                   <input type="hidden" value="ADITYA CHATURVEDI" name="udf4">
                                   <button type="submit" class="btnlink" name="submit">Enroll</button>
                                </form> -->
                                <button class="btnlink" style="cursor:default;">Closed</button>
                             </td>
                          </tr>
                          <tr>
                             <td>10-Oct</td>
                             <td>8 Weeks</td>
                             <td>Sat,Sun</td>
                             <td>8:00 AM-12:00 PM</td>
                             <td>
                                <!-- <form action="payment.php" method="post" id="payment-form">
                                   <input type="hidden" value="14000" name="amount">
                                   <input type="hidden" value="Entrepreneurship certificate" name="udf1">
                                   <input type="hidden" value="RAJUL GARG" name="udf2">
                                   <input type="hidden" value="KARTIK SARWADE" name="udf3">
                                   <input type="hidden" value="ADITYA CHATURVEDI" name="udf4">
                                   <button type="submit" class="btnlink" name="submit">Enroll</button>
                                </form> -->
                                <button class="btnlink" style="cursor:default;">Closed</button>
                             </td>
                          </tr>
                          <tr>
                       </tbody>
                    </table>
                    </div>
                  </div>


                </div>
              </div>
              <div class="text-right col-sm-12">
                <a href="entrepreneurcertificate.php">
                  <button type="button" class="btn btn-warning">KNOW MORE</button>
                </a>
              </div>
              <div class="clearfix"></div>
            </div>

            <div class="certificates"> 

              <div class="col-sm-4">
                  <img src="img/business-analy.png" height="270px">
              </div>
              <div class="col-sm-8">
                <div class="mba_text bg_none">
                  <div class="certificate_box">
                    <div class="certificate" style="font-size:1.5em;">Business Analytics Certificate</div>
				            <div class="text-center pills_2">
                       <span class="label label-default">COURSE FEE</span>&nbsp;&nbsp; INR 14,000
                    </div>
                
                    <div class="mg-t-20">
                      <table class="table table-hover certificate_table">
                         <thead>
                            <tr>
                               <th>NEXT BATCH</th>
                               <th>DURATION</th>
                               <th>DAYS</th>
                               <th>TIME(IST)</th>
                               <th></th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td>23-Aug</td>
                               <td>2 Months</td>
                               <td>Sat,Sun</td>
                               <td>9:00 AM-11:30 AM</td>
                               <td>
                                <!--  <form action="payment.php" method="post" id="payment-form">
                                     <input type="hidden" value="14000" name="amount">
                                     <input type="hidden" value="Business Analytics Certificate" name="udf1">
                                      <input type="hidden" value="DINESH SINGH" name="udf2">
                                      <input type="hidden" value="ARIFUL MONDAL" name="udf3">
                                      <input type="hidden" value="KARTIK SARWADE" name="udf4">
                                     <button type="submit" class="btnlink" name="submit">Enroll</button>
                                  </form> -->

                                  <button class="btnlink" style="cursor:default;">Closed</button>
                               </td>
                            </tr>
                            <tr>
                               <td>27-Sep</td>
                               <td>2 Months</td>
                               <td>Sat,Sun</td>
                               <td>9:00 AM-11:30 AM</td>
                               <td>
                                  <!-- <form action="payment.php" method="post" id="payment-form">
                                     <input type="hidden" value="14000" name="amount">
                                     <input type="hidden" value="Business Analytics Certificate" name="udf1">
                                      <input type="hidden" value="DINESH SINGH" name="udf2">
                                      <input type="hidden" value="ARIFUL MONDAL" name="udf3">
                                      <input type="hidden" value="KARTIK SARWADE" name="udf4">
                                     <button type="submit" class="btnlink" name="submit">Enroll</button>
                                  </form> -->
                                  <button class="btnlink" style="cursor:default;">Closed</button>
                               </td>
                            </tr>
                            <tr>
                               <td>25-Oct</td>
                               <td>2 Months</td>
                               <td>Sat,Sun</td>
                               <td>9:00 AM-11:30 AM</td>
                               <td>
                                  <!-- <form action="payment.php" method="post" id="payment-form">
                                     <input type="hidden" value="14000" name="amount">
                                     <input type="hidden" value="Business Analytics Certificate" name="udf1">
                                    <input type="hidden" value="DINESH SINGH" name="udf2">
                                    <input type="hidden" value="ARIFUL MONDAL" name="udf3">
                                    <input type="hidden" value="KARTIK SARWADE" name="udf4">
                                     <button type="submit" class="btnlink" name="submit">Enroll</button>
                                  </form> -->
                                  <button class="btnlink" style="cursor:default;">Closed</button>
                               </td>
                            </tr>
                            <tr>
                         </tbody>
                      </table>
                    </div>
                  </div>

                </div>
              </div>
              <div class="text-right col-sm-12">
                <a href="analyticscertificate.php">
                  <button type="button" class="btn btn-warning">KNOW MORE</button>
                </a>
              </div>
              <div class="clearfix"></div>
            </div>

            <div class="certificates"> 
               <div class="col-sm-4">
                    <img src="img/business-communication.png" height="270px">
                </div>
                <div class="col-sm-8">
                  <div class="mba_text bg_none">
                    <div class="certificate_box">
                      <div class="certificate" style="font-size:1.4em;">Business Communication certificate</div>
                      <div class="text-center pills_2">
                        <span class="label label-default">COURSE FEE</span>&nbsp;&nbsp; INR 14,000
                      </div>
                
                      <div class="mg-t-20">
                        <table class="table table-hover certificate_table">
                           <thead>
                              <tr>
                                 <th>NEXT BATCH</th>
                                 <th>DURATION</th>
                                 <th>DAYS</th>
                                 <th>TIME(IST)</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>5-Sep</td>
                                 <td>5 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>8:00 AM-12:00 PM</td>
                                 <td>
                                   <!--  <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="14000" name="amount">
                                       <input type="hidden" value="Business Communication certificate" name="udf1">
                                         <input type="hidden" value="RAJUL GARG" name="udf2">
                                         <input type="hidden" value="MRITYUNJAY KUMAR" name="udf3">
                                         <input type="hidden" value="TAPAN RAYAGURU" name="udf4">
                                       <button type="submit" class="btnlink" name="submit">Enroll</button>
                                    </form> -->
                                    <button class="btnlink" style="cursor:default;">Closed</button>
                                 </td>
                              </tr>
                              <tr>
                                 <td>19-Sep</td>
                                 <td>5 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>8:00 AM-12:00 PM</td>
                                 <td>
                                    <!-- <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="14000" name="amount">
                                       <input type="hidden" value="Business Communication certificate" name="udf1">
                                         <input type="hidden" value="RAJUL GARG" name="udf2">
                                         <input type="hidden" value="MRITYUNJAY KUMAR" name="udf3">
                                         <input type="hidden" value="TAPAN RAYAGURU" name="udf4">
                                       <button type="submit" class="btnlink" name="submit">Enroll</button>
                                    </form> -->
                                    <button class="btnlink" style="cursor:default;">Closed</button>
                                 </td>
                              </tr>
                              <tr>
                                 <td>25-Oct</td>
                                 <td>5 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>8:00 AM-12:00 PM</td>
                                 <td>
                                    <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="14000" name="amount">
                                       <input type="hidden" value="Business Communication certificate" name="udf1">
                                         <input type="hidden" value="RAJUL GARG" name="udf2">
                                         <input type="hidden" value="MRITYUNJAY KUMAR" name="udf3">
                                         <input type="hidden" value="TAPAN RAYAGURU" name="udf4">
                                       <button type="submit" class="btnlink" name="submit">Enroll</button>
                                    </form>
                                 </td>
                              </tr>
                              <tr>
                           </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-right col-sm-12">
                  <a href="businesscommunicationcertificate.php">
                    <button type="button" class="btn btn-warning">KNOW MORE</button>
                  </a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="certificates"> 

              <div class="col-sm-4">
                    <img src="img/Analytics/big-data.png" height="270px" >
              </div>
              <div class="col-sm-8">
                <div class="mba_text bg_none">
                  <div class="certificate_box">
                    <div class="certificate"style="font-size:1.7em;">Big Data & Hadoop certificate</div>
                    <div class="text-center pills_2">
                        <span class="label label-default">COURSE FEE</span>&nbsp;&nbsp; INR 14,000
                    </div>
              
                    <div class="mg-t-20">
                      <table class="table table-hover certificate_table">
                       <thead>
                          <tr>
                             <th>NEXT BATCH</th>
                             <th>DURATION</th>
                             <th>DAYS</th>
                             <th>TIME(IST)</th>
                             <th></th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td>23-Aug</td>
                             <td>5 Weeks</td>
                             <td>Sat,Sun</td>
                             <td>9:00 AM-11:30 AM</td>
                             <td>
                                 <!-- <form action="payment.php" method="post" id="payment-form">
                                   <input type="hidden" value="14000" name="amount">
                                   <input type="hidden" value="Big Data & Hadoop certificate" name="udf1">
                                    <input type="hidden" value="DINESH SINGH" name="udf2">
                                    <input type="hidden" value="ARIFUL MONDAL" name="udf3">
                                    <input type="hidden" value="KARTIK SARWADE" name="udf4">
                                   <button type="submit" class="btnlink" name="submit">Enroll</button>
                                </form> -->
                                <button class="btnlink" style="cursor:default;">Closed</button>
                             </td>
                          </tr>
                          <tr>
                             <td>27-Sep</td>
                             <td>5 Weeks</td>
                             <td>Sat,Sun</td>
                             <td>9:00 AM-11:30 AM</td>
                             <td>
                               <!--  <form action="payment.php" method="post" id="payment-form">
                                   <input type="hidden" value="14000" name="amount">
                                   <input type="hidden" value="Big Data & Hadoop certificate" name="udf1">
                                    <input type="hidden" value="DINESH SINGH" name="udf2">
                                    <input type="hidden" value="ARIFUL MONDAL" name="udf3">
                                    <input type="hidden" value="KARTIK SARWADE" name="udf4">
                                   <button type="submit" class="btnlink" name="submit">Enroll</button>
                                </form> -->
                                <button class="btnlink" style="cursor:default;">Closed</button>
                             </td>
                          </tr>
                          <tr>
                             <td>25-Oct</td>
                             <td>5 Weeks</td>
                             <td>Sat,Sun</td>
                             <td>9:00 AM-11:30 AM</td>
                             <td>
                                <!-- <form action="payment.php" method="post" id="payment-form">
                                   <input type="hidden" value="14000" name="amount">
                                   <input type="hidden" value="Big Data & Hadoop certificate" name="udf1">
                                    <input type="hidden" value="DINESH SINGH" name="udf2">
                                    <input type="hidden" value="ARIFUL MONDAL" name="udf3">
                                    <input type="hidden" value="KARTIK SARWADE" name="udf4">
                                   <button type="submit" class="btnlink" name="submit">Enroll</button>
                                </form> -->
                                <button class="btnlink" style="cursor:default;">Closed</button>
                             </td>
                          </tr>
                          <tr>
                       </tbody>
                    </table>
                    </div>
                  </div>

                </div>
              </div>
              <div class="text-right col-sm-12">
                <a href="bigdatacertificate.php">
                  <button type="button" class="btn btn-warning">KNOW MORE</button>
                </a>
              </div>
              <div class="clearfix"></div>
            </div>

            <div class="certificates">
              <div class="col-sm-4">
                    <img src="img/digital-marketing.png" height="270px">
              </div>
              <div class="col-sm-8">
                <div class="mba_text bg_none">
                  <div class="certificate_box">
                    <div class="certificate"  style="font-size:1.5em;">Digital Marketing certificate</div>
                    <div class="text-center pills_2">
                      <span class="label label-default">COURSE FEE</span>&nbsp;&nbsp; INR 14,000
                    </div>
              
                    <div class="mg-t-20">
                     <table class="table table-hover certificate_table">
                           <thead>
                              <tr>
                                 <th>NEXT BATCH</th>
                                 <th>DURATION</th>
                                 <th>DAYS</th>
                                 <th>TIME(IST)</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>23-Aug</td>
                                 <td>8 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>8:00 AM-12:00 PM</td>
                                 <td>
                                    <!-- <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="15000" name="amount">
                                        <input type="hidden" value="Digital Marketing certificate" name="udf1">
                                        <input type="hidden" value="DINESH SINGH" name="udf2"> 
                                       <button type="submit" class="btnlink" name="submit">Enroll</button>
                                    </form> -->
                                    <button class="btnlink" style="cursor:default;">Closed</button>
                                 </td>
                              </tr>
                              <tr>
                                 <td>24-Oct</td>
                                 <td>8 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>8:00 AM-12:00 PM</td>
                                 <td>
                                    <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="14000" name="amount">
                                        <input type="hidden" value="Digital Marketing certificate" name="udf1">
                                         <input type="hidden" value="DINESH SINGH" name="udf2"> 
                                       <button type="submit" class="btnlink" name="submit">Enroll</button>
                                    </form>
                                 </td>
                              </tr>
                              <tr>
                                 <td>28-Nov</td>
                                 <td>8 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>8:00 AM-12:00 PM</td>
                                 <td>
                                    <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="14000" name="amount">
                                        <input type="hidden" value="Digital Marketing certificate" name="udf1">
                                         <input type="hidden" value="DINESH SINGH" name="udf2"> 
                                       <button type="submit" class="btnlink" name="submit">Enroll</button>
                                    </form>
                                 </td>
                              </tr>
                              <tr>
                           </tbody>
                        </table>
                    </div>
                  </div>
                 </div>
              </div>
              <div class="text-right col-sm-12">
                <a href="digitalmarketingcertificate.php">
                  <button type="button" class="btn btn-warning">KNOW MORE</button>
                </a>
              </div>
              <div class="clearfix"></div>
            </div>

            <div class="certificates">
              <div class="col-sm-4">
                    <img src="img/leader.png" height="270px">
              </div>
              <div class="col-sm-8">
                <div class="mba_text bg_none">
                  <div class="certificate_box">
                    <div class="certificate" style="font-size:1.4em;">Business Leadership certificate</div>
                    <div class="text-center pills_2">
                      <span class="label label-default">COURSE FEE</span>&nbsp;&nbsp; INR 14,000
                    </div>
              
                    <div class="mg-t-20">
                      <table class="table table-hover certificate_table">
                           <thead>
                              <tr>
                                 <th>NEXT BATCH</th>
                                 <th>DURATION</th>
                                 <th>DAYS</th>
                                 <th>TIME(IST)</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>26-Sep</td>
                                 <td>5 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>8:00 AM-12:00 PM</td>
                                 <td>
                                    <!-- <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="14000" name="amount">
                                       <input type="hidden" value="Business Leadership certificate" name="udf1">
                                       <input type="hidden" value="RAJUL GARG" name="udf2">
                                       <button type="submit" class="btnlink" name="submit">Enroll</button>
                                    </form> -->
                                    <button class="btnlink" style="cursor:default;">Closed</button>
                                 </td>
                              </tr>
                              <tr>
                                 <td>28-Nov</td>
                                 <td>5 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>8:00 AM-12:00 PM</td>
                                 <td>
                                    <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="14000" name="amount">
                                       <input type="hidden" value="Business Leadership certificate" name="udf1">
                                       <input type="hidden" value="RAJUL GARG" name="udf2">
                                       <button type="submit" class="btnlink" name="submit">Enroll</button>
                                    </form>
                                 </td>
                              </tr>
                              <tr>
                                 <td>30-Jan</td>
                                 <td>5 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>8:00 AM-12:00 PM</td>
                                 <td>
                                    <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="14000" name="amount">
                                       <input type="hidden" value="Business Leadership certificate" name="udf1">
                                       <input type="hidden" value="RAJUL GARG" name="udf2">
                                       <button type="submit" class="btnlink" name="submit">Enroll</button>
                                    </form>
                                 </td>
                              </tr>
                              <tr>
                           </tbody>
                        </table>
                    </div>
                  </div>

                </div>
              </div>
              <div class="text-right col-sm-12">
                <a href="leadershipcertificate.php">
                  <button type="button" class="btn btn-warning">KNOW MORE</button>
                </a>
              </div>
              <div class="clearfix"></div>
            </div>

            <div class="certificates">
              <div class="col-sm-4">
                    <img src="img/finance.png" height="270px">
              </div>
              <div class="col-sm-8">
                <div class="mba_text bg_none">
                  <div class="certificate_box">
                    <div class="certificate" style="font-size:1.4em;"> Finance for Non-Finance Managers</div>
                    <div class="text-center pills_2">
                      <span class="label label-default">COURSE FEE</span>&nbsp;&nbsp; INR 13,000
                    </div>
            
                    <div class="mg-t-20">
                     <table class="table table-hover certificate_table">
                       <thead>
                          <tr>
                             <th>NEXT BATCH</th>
                             <th>DURATION</th>
                             <th>DAYS</th>
                             <th>TIME(IST)</th>
                             <th></th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td>4-Jul</td>
                             <td>5 Weeks</td>
                             <td>Sat,Sun</td>
                             <td>8:00 AM-12:00 PM</td>
                             <td>
                                <!-- <form action="payment.php" method="post" id="payment-form">
                                   <input type="hidden" value="13000" name="amount">
                                   <input type="hidden" value="Finance for Non-Finance Managers" name="udf1">
                                    <input type="hidden" value="ANIKET KHERA" name="udf2">
                                   <button type="submit" class="btnlink" name="submit">Enroll</button>
                                </form> -->
                                <button class="btnlink" style="cursor:default;">Closed</button>
                             </td>
                          </tr>
                          <tr>
                             <td>15-Aug</td>
                             <td>5 Weeks</td>
                             <td>Sat,Sun</td>
                             <td>8:00 AM-12:00 PM</td>
                             <td>
                               <!--  <form action="payment.php" method="post" id="payment-form">
                                   <input type="hidden" value="13000" name="amount">
                                   <input type="hidden" value="Finance for Non-Finance Managers" name="udf1">
                                     <input type="hidden" value="ANIKET KHERA" name="udf2">
                                   <button type="submit" class="btnlink" name="submit">Enroll</button>
                                </form> -->
                                <button class="btnlink" style="cursor:default;">Closed</button>
                             </td>
                          </tr>
                          <tr>
                             <td>5-Sep</td>
                             <td>5 Weeks</td>
                             <td>Sat,Sun</td>
                             <td>8:00 AM-12:00 PM</td>
                             <td>
                                <!-- <form action="payment.php" method="post" id="payment-form">
                                   <input type="hidden" value="13000" name="amount">
                                   <input type="hidden" value="Finance for Non-Finance Managers" name="udf1">
                                    <input type="hidden" value="ANIKET KHERA" name="udf2">
                                   <button type="submit" class="btnlink" name="submit">Enroll</button>
                                </form> -->
                                <button class="btnlink" style="cursor:default;">Closed</button>
                             </td>
                          </tr>
                          <tr>
                       </tbody>
                    </table>
            
                    </div>
                  

                  </div>

                </div>
              </div>
              <div class="text-right col-sm-12">
                <a href="financecertificate.php">
                  <button type="button" class="btn btn-warning">KNOW MORE</button>
                </a>
              </div>
              <div class="clearfix"></div>
            </div>

          </div>


               


        </div>
      </div>
    <!-- modals-->            
    </div><!-- /container -->
    <style>
     .send_query{ display:none;}
     .ls_form{ display:none !important;}
    </style> 
 <?php include("footer.php") ?>
 
   
