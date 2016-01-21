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
/*Post Values from Brochure Form Saved in This Module */
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
      <div class="main col-md-9">
        <div class="row">
          <div class="col-md-11 col-md-offset-1">
              <div class="pd-t-50"></div>
              <div class="pgpm_content">                 
                <div class="col-sm-5 text-center">
                  <img src="img/leader.png" height="270px">
                </div>
                <div class="col-sm-7">
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
                                 <!-- <th>PRICE(INR)</th> -->
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>26-Sep</td>
                                 <td>5 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>8:00 AM-12:00 PM</td>
                                 <!-- <td>14,000</td> -->
                                 <td>
                                    <!-- <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                                 <!-- <td>14,000</td> -->
                                 <td>
                                    <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                                 <!-- <td>14,000</td> -->
                                 <td>
                                    <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                <div class="clearfix"></div>

                <div class="col-lg-12">
                <div class="slogan mg-t-50">
                <div class="col-sm-8">
               <p>
               After successfully completing the course you would receive a Course Completion Certificate , if you join Sunstone PGPM at a later stage you may show this certificate for getting waiver in fees.
               </p>
                </div>
                <div class="col-sm-4 one_stap">
                 <form action="payment.php" method="post" id="payment-form">
                    <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
                     <input type="hidden" value="Business Leadership certificate" name="udf1">
                     <input type="hidden" value="RAJUL GARG" name="udf2">
                      <button type="submit" class="btnlink" name="submit"><img src="img/just.png" style="max-width:100%;"></button>
                    </button>
                 </form>
                </div>
                </div>
                </div>
                <div class="clearfix"></div>

              <hr class="heading_line">
              <div class="heading bold faq">About the course 
              <ul class="list-inline pill_nav">
              <li><a href="#orgstreff">Organizational Structure & Effectiveness</a></li>
              <li id="orgstreff"><a href="#leadingteams">Leading Teams</a></li>
              </ul>
              </div>
              <hr class="heading_line" >  
              <hr class="heading_line1">
              <div class="heading2 bold faq" >Organizational Structure & Effectiveness</div>
              <hr class="heading_line1"> 
               <div class="clearfix"></div>
               
               <p class="para_style" id="leadingteams">
               Due to the sheer number of people spread across large organizations, business leaders rarely get the luxury of controlling 
               anything directly. Instead they cluster, delegate, motivate and empower teams of people to get things done.
                Hence organization structure becomes the most basic tool of the Chief Executive.
               </p>
               <p class="para_style">
               In this course, students develop familiarity with the organization designer's toolkit and how to interpret and understand 
               their companies structural elements.
               </p>

              <hr class="heading_line1">
              <div class="heading2 bold faq" >Leading Teams</div>
              <hr class="heading_line1"> 
               <p class="para_style">
                 Leading high performance teams poses a major challenge.. everyone aspires to lead, but few have the right qualities and skill sets to do so!
                </p>
                <p class="para_style">In this module, students explore how to:
                </p>

                 <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> Align a team</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Set goals and motivate team members</li>
                <li id="commustoryboarding"><i class="fa fa-check-square-o fa-fw"></i> Drive the team to find win-win solutions for clients, organization and self</li>
              </ul>

                <p class="para_style">
                  Students learn how to motivate and lead high-performance teams in a constructive direction. 
                </p>
              
              
              <hr class="heading_line" >
              <div class="heading bold faq" >COURSE DIRECTORS</div>
              <hr class="heading_line"> 
               <div class="col-sm-4 pd-b-40">
                <div class="professor professor_img" data-toggle="modal" data-target="#myModal1"> 
                  <img src="img/rajul1.png" style="width:100%">
                </div>
               </div>

           
          <div class="clearfix"></div>      
        

      </div>
    </div>
  </div>

      
         
      </div>

      <?php //include("sidebar.php") ?>
    
        <div class="col-md-3 sidebar" id="sidebar">
          <div id="form_query"></div>
          <div class="row">

    <div class="col-md-12 mg-t-50" >
  <div class="query_form1 pd-b-20">
  <div class="sidebar_heading text-center">Drop Us a Query</div>
  <?php 
include("drop_query.php");
 ?>
    </div>
  <div class="list_query" >
      <ul class="list-group">
        <li class="list-group-item"><div class="sidebar_heading text-center">Course Features</div></li>
        <li class="list-group-item"><i class="glyphicon glyphicon-time"></i> Course  Hours - 12 hrs per week</li>
        <li class="list-group-item"><i class="fa fa-desktop"></i> Online Classes - 20 hrs </li>
        <li class="list-group-item"><i class="fa fa-briefcase"></i> Project & Business Plan - 20 hrs </li>
        <li class="list-group-item"><i class="fa fa-files-o"></i> Assignment - 20 hrs </li>
      </ul>
    </div>    
    </div>

  </div>               
 </div>         

<!-- modals-->
<div class="modal fade text-left" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <h4 class="modal-title" id="myModalLabel">
      <img src="img/eatrn-img/rajul.jpg" class="circle">
      <span class="bold1 pd-l-30">Rajul Garg  </span>
  </h4>
</div>
<div class="modal-body pd-b-40">
  <p>Rajul Garg is the Director of Sunstone Business School. A successful IT entrepreneur, he co-founded GlobalLogic (sold for $420M in 2013).</p>
<p>Rajul has advised a variety of VC funds including Sequoia Capital. He serves on many Boards of Directors, including PeopleStrong (USD $1bn company). Rajul is a graduate in Computer Science from IIT Delhi.</p>
</div>
</div>
</div>
</div>

<!-- modal for form-->

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" style="padding-right:15px; padding-left:15px;">
    <div class="modal-header">
  <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <h4 class="modal-title text-center" id="myModalLabel">
      <span class="bold1">JOIN NOW </span>
  </h4>
</div>
<div class="modal-body">

      <form class="form-horizontal " data-toggle="validator" role="form" action="" autocomplete="off" method="post">
    <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="" name="fname" data-error="Enter First Name" 
      placeholder="First Name" required>
    </div>
    </div>
      <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="" name="lname" placeholder="Last Name" data-error="Enter Last Name"required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="number" class="form-control" id="" name="mobile" placeholder="Mobile Number" data-error="Enter Mobile No." required>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-12">
      <input type="email" class="form-control" id="" name="email" placeholder="Email" data-error="Enter Email" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="password" class="form-control" id="password1" name="password" placeholder="Password" data-error="Enter Password" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="password" class="form-control" id="password2" name="cpassword" placeholder="Confirm Password" data-error="Please Re-Enter" required>
    </div>
  </div>
  
  <div class="form-group mg-t-30">
    <div class="col-sm-12">
      <button type="submit" name="join" value="join" class="btn btn-default org_btn btn_query btn_query_blue">Sign Up</button>
    </div>
  </div>
</form>
</div>
    </div>
  </div>
</div>


<!-- modals-->
           <style>
       .send_query{ display:none;}
       .ls_form{ display:none !important;}
       </style>       
 </div><!-- /container -->

 <?php include("footer.php") ?>
 
   
