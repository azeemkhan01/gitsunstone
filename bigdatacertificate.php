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
                    <img src="img/Analytics/big-data.png" height="270px">
                </div>
                <div class="col-sm-7">
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
                                 <!-- <th>PRICE(INR)</th> -->
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>23-Aug</td>
                                 <td>5 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>9:00 AM-11:30 AM</td>
                                 <!-- <td>14,000</td> -->
                                 <td>
                                   <!-- <form action="payment.php" method="post" id="payment-form">
                                      <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
                                      <input type="hidden" value="Big Data & Hadoop certificate" name="udf1">
                                      <input type="hidden" value="DINESH SINGH" name="udf2">
                                      <input type="hidden" value="ARIFUL MONDAL" name="udf3">
                                      <input type="hidden" value="KARTIK SARWADE" name="udf4">
                                      <button type="submit" class="btnlink" name="submit">Enroll</button>
                                    </form> -->

                                    <button class="btnlink" style="cursor:default;">Closed</button>
                                    <!-- <button class="btnlink" style="cursor:default;">Closed</button> -->
                                 </td>
                              </tr>
                              <tr>
                                 <td>27-Sep</td>
                                 <td>5 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>9:00 AM-11:30 AM</td>
                                 <!-- <td>14,000</td> -->
                                 <td>
                                    <!-- <form action="payment.php" method="post" id="payment-form">
                                      <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                                 <!-- <td>14,000</td> -->
                                 <td>
                                     <!-- <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                <div class="clearfix"></div>
				<div class="col-lg-12">
                <div class="slogan mg-t-50">
                <div class="col-sm-8">
               <p>
               After successfully completing the course you would receive a Course Completion Certificate , if you join Sunstone PGPM at a later stage you may show this certificate for getting waiver in fees.
               </p>
                </div>
                <div class="col-sm-4 one_stap">
                        <!-- <form action="payment.php" method="post" id="payment-form">
                           <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
                                      <input type="hidden" value="Big Data & Hadoop certificate" name="udf1">
                                      <input type="hidden" value="DINESH SINGH" name="udf2">
                                      <input type="hidden" value="ARIFUL MONDAL" name="udf3">
                                      <input type="hidden" value="KARTIK SARWADE" name="udf4">
                          <button type="submit" class="btnlink" name="submit"><img src="img/just.png" style="max-width:100%;"></button>
                        </form> -->
                        <button class="btnlink" style="cursor:default;">Closed</button>
                </div>
                </div>
                </div>
                <div class="clearfix"></div>
              <hr class="heading_line">
              <div class="heading bold faq">About the course 
              <ul class="list-inline pill_nav">
              <li><a href="#bigdata">Big Data & Hadoop</a></li>
              <li id="bigdata"><a href="#courseobjective">Course Objective</a></li>
              <!-- <li ><a href="#Who_should_do_it">WHO SHOULD DO IT</a></li> -->
              </ul>
              </div>
              <hr class="heading_line" >  
              <hr class="heading_line1">
              <div class="heading2 bold faq" >Big Data & Hadoop</div>
              <hr class="heading_line1"> 
               <div class="clearfix"></div>
               
               <p class="para_style" id="courseobjective">
              Big Data Analytics is an art and science of analyzing large-scale structured/semi-structured/unstructured data by applying data mining techniques, machine learning, statistical methods, business intelligence and data visualization techniques in search of extracting maximum values out of stored Big Data.
               </p>
                   
                 <!-- <ul class="course_list">
                 <li><i class="fa fa-check-square-o fa-fw"></i> Engaging with people – listening, connecting, understanding, researching .How do I understand business as a whole so that I can make better decisions?</li>
                 <li><i class="fa fa-check-square-o fa-fw"></i> Engaging with Investors - Reaching out on right forums, pitching your ideas.</li>
                 <li><i class="fa fa-check-square-o fa-fw"></i>Building credibility, including effective use of data & visual design</li>
                 <li><i class="fa fa-check-square-o fa-fw"></i> Creating situations in which others accept your idea spontaneously of their own free will</li>
               </ul> -->
                 <hr class="heading_line1">
              <div class="heading2 bold faq" >Course Objective</div>
              <hr class="heading_line1"> 
               <p class="para_style" >Big Data and Hadoop training course is designed to provide knowledge and skills to become a successful Hadoop Developer. In-depth knowledge of core concepts will be covered in the course along with implementation on varied industry use-cases.</p>

              <p class="para_style">
                Topics covered are:
              </p>
              <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> What is Big Data Analytics?</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Reactive Analytics (Business Intelligence)</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Proactive Analytics (Business Analytics and Data Mining)</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Prescriptive Analytics (Recommendations, Simulations, Condition based)</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Big Data Tools-Hadoop, Pig, Hive, Mahout</li>
              </ul>
              
              
              
             <div class="clearfix"></div>

              <hr class="heading_line" >
              <div class="heading bold faq" >FAQs:</div>
              <hr class="heading_line"> 



<!--               <div class="heading3 faq" >1. Who are the Instructors?</div>

              <p class="para_style">
               Instructors are industry leaders and have at decades of experience in various leadership domains. 
              </p>
              <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> Instructor 1:  Picture and Intro (education, experience)</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Instructor 2:  Picture and Intro (education, experience)</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Instructor 3:  Picture and Intro (education, experience)</li>

              </ul> -->

              <div class="heading3 faq" >1.  Do you provide placement assistance?</div>

              <p class="para_style">
               YES. 
Sunstone is the India's largest Business School for working professionals and it's existing network includes more than 350 tech companies. Various companies contacts us for our students profiles regularly and the demand is ever growing for these skills. We regularly post such job opportunities to our certified students. Our career coaches also help prepare candidates' resumes and guide them for interview preparation. Having said that, please understand that we do not guarantee any placements however if you go through the course diligently and complete all required projects and problems, you can be almost sure of your chances of success for your next career move.


              </p>

              <p class="para_style">
              Overall you will get access to career assistance service that will include identification of relevant opportunities, job postings and guidance for interviews and resume writing.
              </p>

              <div class="heading3 faq" >2. What are the different business analytics roles in the industry?</div>
              <p class="para_style">
               Instructors are industry leaders and have at decades of experience in various leadership domains. 
              </p>
              <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> Data Analyst</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Business Analyst</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Financial Analyst</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Marketing Analytics Manager</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Pricing Analyst</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Supply Chain Analyst</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Website Analyst</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Fraud Analyst</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Retail Sales Analyst</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Clinical Analyst</li>

              </ul>

              <div class="heading3 faq" ><strong>3. WHAT ARE THE DIFFERENT companies working in Business ANALYTICS </strong></div>

                <div class="mg-t-20">
                  <table class="table table-hover certificate_table2">
                    <thead>
                      <tr>
                        <th>IT</th>
                        <th>KPO</th>
                        <th>Captive</th>
                        <th>Niche</th>
                      </tr>
                    </thead>
                     <tbody>
                      <tr>
                        <td>Accenture</td>
                        <td>Genpact</td>
                        <td>Fidelity</td>
                        <td>Brainmatics</td>
                      </tr>
                      <tr>
                      <tr>
                        <td>Infosys</td>
                        <td>WNS</td>
                        <td>Citibank </td>
                        <td>Fractal Analytics</td>
                      </tr>                      
                      <tr>
                      <tr>
                        <td>TCS</td>
                        <td class="white">-</td>
                        <td>M&S</td>
                        <td>Mu Sigma</td>
                      </tr> 
                       <tr>
                        <td>CTS</td>
                        <td class="white">-</td>
                        <td>Wal-Mart </td>
                        <td>Absolute Data</td>
                      </tr>
                       <tr>
                        <td>Dell</td>
                        <td class="white">-</td>
                        <td>Target</td>
                        <td class="white">-</td>
                      </tr>
                       <tr>
                        <td>HP</td>
                        <td class="white">-</td>
                        <td class="white">-</td>
                        <td class="white">-</td>
                      </tr>  
                      <tr>
                        <td>IBM</td>
                        <td class="white">-</td>
                        <td class="white">-</td>
                        <td class="white">-</td>
                      </tr>                   
                    </tbody>
                  </table>
                </div>

              </ul>



              <div class="heading3 faq" >4. What kind of jobs am I likely to get after this training?</div>
              <p class="para_style">
               Almost all the big corporations need analytics professionals. You can be hired in your own industry at entry/mid/senior level depending upon your experience and the training you have had. IT companies and Analytics KPOs hire people to work on client projects which cut across functional and vertical domains. If you have no prior work experience, you best option is to join one of these.
              </p>

              <div class="heading3 faq" >5. Can senior experienced professionals switch to business analytics? </div>

              <p class="para_style">
              Business analytics is the  fastest growing industry across the world. As mentioned earlier it needs  lot of  analytics trained professionals at every level. This is one of those fields that people are switching to even very late in their careers because it is exciting and extremely well-paid with exceptionally bright growth prospects. The data revolution is here! 
              </p>

              </ul>

              <div class="heading3 faq" >6. I have no IT experience. Is this program for me?</div>

              <p class="para_style">
              IT experience is not necessary for this program
              </p>

              </ul>

              <hr class="heading_line" >
              <div class="heading bold faq" >COURSE DIRECTORS</div>
              <hr class="heading_line"> 
               <div class="col-sm-4">
                <div class="professor professor_img" data-toggle="modal" data-target="#myModal1"> 
                  <img src="img/Analytics/dinesh1.png" style="width:100%">
                </div>
               </div>
               <div class="col-sm-4">
               <div class="professor professor_img" data-toggle="modal" data-target="#myModal2"> 
                  <img src="img/Analytics/ariful1.png" style="width:100%">
                </div>
               </div>
               <div class="col-sm-4">
               <div class="professor professor_img" data-toggle="modal" data-target="#myModal3"> 
                  <img src="img/Analytics/kartik1.png" style="width:100%">
                </div>
               </div>
           
          <div class="clearfix"></div>      
         <div class="col-sm-6 mg-b-50">
          <div class="col-sm-12">
            <div class="row">
            	<div class="testimonial">
                  <div class="">
                      <p>I have got a new job offer after this program. In Interview process I was asked questions 
                      such as " If we give you problem of increased cost in an  organization how will you solve it</p>
                    <p>I responded with what I have learnt at Sunstone Business Analytics course i.e. I spoke about getting 
                    meaningful data,analyse it,building hypothesis,doing prediction, then finding out which tool to use etc
                  Sunstone business analytics course & the guidance from course directors helped me to get a new job. 
                  I have even got 70% salary hike  !</p>
                    </div>
              </div>
           	</div>
          </div>
          <div class="clearfix"></div>
          <div class="col-sm-5 text-center">
             <img src="img/Analytics/Dheeraj.png" class="img-circle" style="max-width:100%;">
          </div>
          <div class="col-sm-7">
             <div class="mba_text bg_none">
                <p>Dheeraj tandon,<br>
                Technical Lead,<br>
                HP</p>       
             </div>
          </div> 
        </div>        
        <div class="col-sm-6 mg-b-50">
          <div class="col-sm-12">
            <div class="row">
              <div class="testimonial">
                <div class="">
                    <p> "It was a useful course as I got to know what is the methodology of executing anlaytics project and now i am able to understand few of the jargons and can talk with my analytics team in my office"</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
               
                </div>
              </div>
         		</div>
          </div>

          <div class="clearfix"></div>

          <div class="col-sm-5 text-center">
             <img src="img/Analytics/RAHUL.png" class="img-circle" style="width:100%;">
          </div>
          <div class="col-sm-7">
             <div class="mba_text bg_none">
                <p>Rahul Agarwal ,<br>
                   Program Management<br>
                  MI-ZE
                </p>
                
             </div>
          </div>            
        </div>

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
        <li class="list-group-item"><i class="glyphicon glyphicon-time"></i> Course  Hours - 10 hrs per week</li>
        <li class="list-group-item"><i class="fa fa-desktop"></i> Online Classes - 20 hrs </li>
        <li class="list-group-item"><i class="fa fa-briefcase"></i> Project & Business Plan - 20 hrs </li>
        <li class="list-group-item"><i class="fa fa-files-o"></i> Assignment - 30 hrs </li>
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
      <img src="img/Analytics/dinesh.jpg" class="circle">
      <span class="bold1 pd-l-30">Dinesh Singh  </span>
  </h4>
</div>
<div class="modal-body pd-b-40">
  <p>Dinesh is from IIT Kanpur, & Cornell University, McKinsey & Co. His areas of interests are product positioning, go-to-market, consumer segmentation, and microeconomics.</p>
<p>. He contributes to specific problems in courses Marketing Decision Making & Product Management and S
Dinesh has spent significant time in sales and go-to-market strategies with start-ups. <a href="https://in.linkedin.com/pub/dinesh-singh/1/321/442">Linked In</a>
.</p>
</div>
</div>
</div>
</div>
<div class="modal fade text-left" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <h4 class="modal-title" id="myModalLabel">
      <img src="img/Analytics/Ariful.jpg" class="circle">
      <span class="bold1 pd-l-30"> ARIFUL MONDAL</span>
  </h4>
</div>
<div class="modal-body pd-b-40">
  <p>Research & Analytics Professional .Tata Consultancy Services, San Francisco Bay Area
</p>
<p>Ariful’s area of interest are Consulting, Client Management, Business Strategies, Finance & Accounting. Program Management, Research & Development, Analytics, Data Sciences & Big Data Analytics
<a href="https://www.linkedin.com/in/arifulmondal">Linked In</a>
</p>
</div>
</div>
</div>
</div>                  
<div class="modal fade text-left" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <h4 class="modal-title" id="myModalLabel">
      <img src="img/Analytics/kartik.jpg" class="circle">
      <span class="bold1 pd-l-30">Kartik Sarwade </span>
  </h4>
</div>
<div class="modal-body pd-b-40">
  <p>Kartik is the founder of Capital 7 Advisors, an Execution Advisory firm that works with Early Stage startups.
</p>
<p>Kartik co-founded Scholars' League, an education services startup in 2001. He has since headed a $50m M&A fund for a large services company and is a member of 7 Avenues, an investment company that runs "old economy" businesses in India. Kartik is a graduate of IIT Kharagpur and went on to do his MBA from IIM Lucknow.
<a href="https://in.linkedin.com/in/sarwade">Linked In</a>
</p>
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
 
   
