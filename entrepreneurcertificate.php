<?php ob_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
   <![endif]-->
   <!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8">
      <![endif]-->
<?php
session_start();
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
                        <img src="img/group.png" width="100%;">
                     </div>
                  </div>
                  <div class="col-sm-7">
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
                                       <!-- <th>PRICE(INR)</th> -->
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>18-Jul</td>
                                       <td>8 Weeks</td>
                                       <td>Sat,Sun</td>
                                       <td>8:00 AM-12:00 PM</td>
                                       <!-- <td><del>16,000</del> 14,000</td> -->
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
                                       <td>15-Aug</td>
                                       <td>8 Weeks</td>
                                       <td>Sat,Sun</td>
                                       <td>8:00 AM-12:00 PM</td>
                                       <!-- <td>16,000</td> -->
                                       <td>
                                          <!-- <form action="payment.php" method="post" id="payment-form">
                                             <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                                       <!-- <td>16,000</td> -->
                                       <td>
                                            <?php //echo "<pre>";print_r($_SESSION); ?>
                                           <!-- <form action="payment.php" method="post" id="payment-form">
                                             <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                            <?php $v = "18-Jul";
                               // echo "<pre>";print_r($_SESSION);
                               // echo $_SESSION['email'];
                                date_default_timezone_set('Asia/Calcutta');
                                 $course_data =  date('d-M');
                                if ($course_data <= $v ) {
                                  $cour_fee = 14000;
                                } else {
                                  $cour_fee = 16000;
                                } ?>
                                             <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
                                             <input type="hidden" value="Entrepreneurship certificate" name="udf1">
                                             <input type="hidden" value="RAJUL GARG" name="udf2">
                                             <input type="hidden" value="KARTIK SARWADE" name="udf3">
                                             <input type="hidden" value="ADITYA CHATURVEDI" name="udf4">
                                             <button type="submit" class="btnlink" name="submit"><img src="img/just.png" style="max-width:100%;"></button>
                                          </form>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                    <?php 
                        if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                              ?>
                              <script type="text/javascript">
                                  $(document).ready(function(){
                                      $("#myModalstudentdetail").modal('show');
                                  });
                              </script>
                              <?php
                        } 
                    ?>
                  <hr class="heading_line">
                  <div class="heading bold faq">
                     About the course 
                     <ul class="list-inline pill_nav">
                        <li><a href="#Entrepreneurial">ENTREPRENEURIAL VENTURE PLANNING</a></li>
                        <li><a href="#startupfunding">STARTUP FUNDING FOR ENTREPRENEURS </a></li>
                        <li id="Entrepreneurial"><a href="#Selling_Ideas">SELLING YOUR IDEAS</a></li>
                     </ul>
                  </div>
                  <hr class="heading_line" >

                  <p class="para_style">
                     This course assists aspiring entrepreneurs in developing great ideas into 
                     great companies. With strong economies presenting rich opportunities for 
                     new venture creation, and challenging economic times presenting the 
                     necessity for many to make their own job, the need to develop the 
                     skills to develop and act on innovative business opportunities is ever present.
                    </p>

                    <p class="para_style">
                     Our goal is to demystify the startup process, and to help you build the 
                     skills to identify and act on innovative opportunities now, and in the future.
                    </p>

                  
                  <hr class="heading_line1">
                  <div class="heading2 bold faq" >Entrepreneurial Venture Planning</div>
                  <hr class="heading_line1">
                  <div class="clearfix"></div>
                  <p class="para_style">
                     Using proven content, methods, and models for new venture opportunity assessment and analysis, students will learn how to enhance their entrepreneurial mindset and develop their functional skill sets to see and act entrepreneurially. 
                  </p>
                
                  <ul class="course_list">
                     <li><i class="fa fa-check-square-o fa-fw"></i> How to develop the business model with attention to value propositions</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Customer segments</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Market Channels</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Customer relationships</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Revenue models</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Partners.resources, activities, and costs</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Keys to discovering the customer with an emphasis on problem-solution fit</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Proposed MVP, and proposed funnels</li>
                     <li id="startupfunding"><i class="fa fa-check-square-o fa-fw"></i> Validating the customer via product-market fit</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Sales and marketing road mapping</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Developing Innovative Ideas for New Companies</li>
                  </ul>
                  <div class="pd-t-40" ></div>
                  <hr class="heading_line1">
                  <div class="heading2 bold faq">Startup Funding For Entrepreneurs</div>
                  <hr class="heading_line1">
                  <p class="para_style">
                     Examine the many financing options available to get your new venture funded. Learn the basics of finance, valuations, dilution and non-dilutive funding sources. Understand capital structure for new ventures, term sheets and how to negotiate them, and the differences between early-stage versus later-stage financing.
                  </p>

                  <ul class="course_list">
                     <li><i class="fa fa-check-square-o fa-fw"></i> How to pitch the venture through a written analysis of the business model </li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Importance of video for your investor pitch</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Dos and Dont of Elevator Pitch</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Understanding VC's priorities</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Type of Investors,investment by stage and locating Investors</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Different fundraising options</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Keys to discovering the customer with an emphasis on problem-solution fit</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Proposed MVP, and proposed funnels</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Validating the customer via product-market fit</li>
                     <li id="Selling_Ideas"><i class="fa fa-check-square-o fa-fw"></i> Sales and marketing road mapping</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Developing Innovative Ideas for New Companies</li>
                  </ul>

                  <div class="pd-t-40" ></div>
                  <hr class="heading_line" >
                  <div class="heading2 bold faq" >Selling Your Ideas</div>
                  <hr class="heading_line">
                   <p class="para_style">
                     Often the best ideas never get heard, never get seen and therefore never get fully developed. Instead of being taken seriously, they get lost in the sea of competing ideas.In this module, students practice the ongoing process of selling ideas within an organization, including:
                  </p>
                  <div class="clearfix"></div>
                  <ul class="course_list">
                     <li><i class="fa fa-check-square-o fa-fw"></i> Engaging with people – listening, connecting, understanding, researching .How do I understand business as a whole so that I can make better decisions?</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Engaging with Investors - Reaching out on right forums, pitching your ideas.</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Building credibility, including effective use of data & visual design.</li>
                     <li><i class="fa fa-check-square-o fa-fw"></i> Creating situations in which others accept your idea spontaneously of their own free will.</li>
                  </ul>
                  <p class="para_style">
                     Students learn how to make good ideas stand out from the crowd and gain the top-line visibility they deserve.
                  </p>
                  <div class="clearfix"></div>
                  <hr class="heading_line" >
                  <div class="heading bold faq" >COURSE DIRECTOR</div>
                  <hr class="heading_line">
                  <div class="col-sm-4">
                     <div class="professor professor_img" data-toggle="modal" data-target="#myModal1"> 
                        <img src="img/rajul1.png" style="width:100%">
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="professor professor_img" data-toggle="modal" data-target="#myModal2"> 
                        <img src="img/kartik1.png" style="width:100%">
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="professor professor_img" data-toggle="modal" data-target="#myModal3"> 
                        <img src="img/aditya1.png" style="width:100%">
                     </div>
                  </div>
                  <div class="clearfix"></div>

                  <hr class="heading_line" >
                  <div class="heading bold faq" >STUDENT TESTIMONIALS</div>
                  <hr class="heading_line">


                    <div class="col-sm-6 mg-b-50">
                     <div class="col-sm-12">
                        <div class="row">
                           <div class="testimonial">
                              <div class="">
                                 <p> <strong>At Sunstone I solved challenging problems that increased my confidence to become an entrepreneur. </strong></p>
                                 <p>I received feedback on my work which was often direct and harsh. However, as an outcome – I was ready to take any 
                                 challenging opportunity and ended up joining PhoneWarrior as a co-founder.
                                 </p>
                                 <br>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-sm-5 text-center">
                        <img src="img/eatrn-img/student-3.png" class="img-circle" style="max-width:100%;">
                     </div>
                     <div class="col-sm-7">
                        <div class="mba_text bg_none">
                           <p> Vaibhav Padlikar,<br>
                              Co-Founder, <br>
                              Phonewarrior.com 
                           </p>
                        </div>
                     </div>
                  </div>


                  <div class="col-sm-6 mg-b-50">
                     <div class="col-sm-12">
                        <div class="row">
                           <div class="testimonial">
                              <div class="">
                                 <p > <strong>Essential course before stepping into real world of Entrepreneurship </strong></p>
                                 <p>EVP course is designed in a way that I had to apply all my learnings on the aspects of marketing, economics , accounting , budgeting & story boarding in 
                                    one single go. I would say a very effective and must do course before stepping into the real world!
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-sm-5 text-center">
                        <img src="img/eatrn-img/student-1.png" class="img-circle" style="max-width:100%;">
                     </div>
                     <div class="col-sm-7">
                        <div class="mba_text bg_none">
                           <p>Smitha Basavaraj,<br>
                              Co-Founder,<br>
                              Riflexions Consulting
                           </p>
                        </div>
                     </div>
                  </div>

                   <div class="clearfix"></div>

                  <hr class="heading_line" >
                  <div class="heading bold faq" >STUDENT VOICES</div>
                  <hr class="heading_line">

                  <iframe width="100%" height="550" class="pd-t-20" src="https://www.youtube.com/embed/La3gG-QzDQo" frameborder="0" allowfullscreen></iframe>

                  <div class="clearfix"></div>
                  <div class="pd-t-30"></div>
                  <hr class="heading_line" >
                  <div class="heading bold faq" >ENDLESS SUCCESS STORIES</div>
                  <hr class="heading_line">

                  <div class="col-sm-4 text-center pd-t-10 pd-b-40">
                    <img src="img/eatrn-img/Pankaj.jpg" width="170px">
                    <h4 class="pd-t-10">Pankaj Yadav</h4>
                    <h5>Founder & CEO, 99rpm.com</h5>
                  </div>

                  <div class="col-sm-4 text-center pd-t-10 pd-b-40">
                    <img src="img/eatrn-img/Lokesh.jpg"  width="170px">
                    <h4 class="pd-t-10">Lokesh Gupta</h4>
                    <h5>Founder iTestiWin.com</h5>
                  </div>

                  <div class="col-sm-4 text-center pd-t-10 pd-b-40">
                    <img src="img/eatrn-img/Srinivasareddy.jpg" width="170px">
                    <h4 class="pd-t-10">Srinivasareddy</h4>
                    <h5>Co-Founder Mobileforce.in</h5>
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
                     <li class="list-group-item">
                        <div class="sidebar_heading text-center">Course Features</div>
                     </li>
                     <li class="list-group-item"><i class="glyphicon glyphicon-time"></i> Course  Hours - 12 hrs per week</li>
                     <li class="list-group-item"><i class="fa fa-desktop"></i> Online Classes - 20 hrs </li>
                     <li class="list-group-item"><i class="fa fa-briefcase"></i> Project & Business Plan - 20 hrs </li>
                     <li class="list-group-item"><i class="fa fa-files-o"></i> Assignment - 30 hrs </li>
                  </ul>
               </div>
               <div id="sticky-anchor"></div>
               <div id="sticky">
                  <div class="list_query">
                     <ul class="list-group">
                        <li class="list-group-item">
                           <div class="sidebar_heading text-center">FAQ</div>
                        </li>
                        <li class="list-group-item">
                           <div class="panel-group list_panal" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                       <span data-toggle="collapse" data-parent="#accordion" href="#a1" aria-expanded="true" aria-controls="collapseOne" class="collpas_span">

                                       Q) Will I have access to the online material after the course?
                                       <i class="glyphicon glyphicon-plus pull-right "></i></span>
                                    </h4>
                                 </div>
                                 <div id="a1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                       A) Yes, you get lifetime support for all courses and get to build strong
                                    </div>
                                 </div>
                              </div>
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                       <span class="collapsed collpas_span" data-toggle="collapse" data-parent="#accordion" href="#a2" aria-expanded="false" aria-controls="collapseTwo" >
                                       Q) Can I take break between the certificate ? 
                                       <i class="glyphicon glyphicon-plus pull-right "></i></span>
                                    </h4>
                                 </div>
                                 <div id="a2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                       A) No, the duration of the course is 5-6 weeks. You may join at a later stage.      
                                    </div>
                                 </div>
                              </div>
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                       <span class="collapsed collpas_span" data-toggle="collapse" data-parent="#accordion" href="#a3" aria-expanded="false" aria-controls="collapseThree" >
                                       Q) Will I be awarded by a certificate & where can I use it ? 
                                       <i class="glyphicon glyphicon-plus pull-right "></i> </span> 
                                    </h4>
                                 </div>
                                 <div id="a3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                       A) Yes, certificate of completion will be awarded. Sunstone is NSDC approved program, and would be recognized in your CV.
                                    </div>
                                 </div>
                              </div>

                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                       <span class="collapsed collpas_span" data-toggle="collapse" data-parent="#accordion" href="#a4" aria-expanded="false" aria-controls="collapseThree" >
                                       Q) Can I see a demo lecture to know more around online classes? 
                                       <i class="glyphicon glyphicon-plus pull-right "></i> </span> 
                                    </h4>
                                 </div>
                                 <div id="a4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                       A) Yes, you may see a demo video lecture - <a  data-toggle="modal" data-target="#myModalstudentdetail" style="color:blue;">here</a> .Your online classes will be conducted in similar format. 
                                    <!-- <iframe width="100%" height="450" class="pd-t-20" src="https://www.youtube.com/embed/2UMIjryNXdI" frameborder="0" allowfullscreen></iframe> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="list_query off_small">
                     <ul class="list-group">
                        <li class="list-group-item" style="padding:0">
                           <div class="sidebar_heading text-center"><a href="#form_query" style="color:#B3B3B3"></a></div>
                        </li>
                        <li class="list-group-item" style="padding:0">
                           <div class="sidebar_heading text-center"><a href="#course_feature" style="color:#B3B3B3">Course Features</a></div>
                        </li>
                     </ul>
                  </div>
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
      <div class="modal fade text-left" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">
                     <img src="img/eatrn-img/kartik.jpg" class="circle">
                     <span class="bold1 pd-l-30"> Kartik Sarwade </span>
                  </h4>
               </div>
               <div class="modal-body pd-b-40">
                  <p>Kartik Sarwade is the founder of Capital 7 Advisors, an Execution Advisory firm that works with Early Stage startups.</p>
                  <p>Kartik co-founded Scholars' League, an education services startup in 2001. He has since headed a $50m M&A fund for a large services company and is a 
                     member of 7 Avenues, an investment company that runs "old economy" businesses in India. Kartik is a graduate of IIT Kharagpur and went on to do his MBA from 
                     IIM Lucknow.
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
                     <img src="img/eatrn-img/aditya.jpg" class="circle">
                     <span class="bold1 pd-l-30">Aditya Chaturvedi</span>
                  </h4>
               </div>
               <div class="modal-body pd-b-40">
                  <p>Aditya Chaturvedi is the CTO, Incubations of Mountain Apollo India. A startup guy with consistent track record of setting up and growing business operations.</p>
                  <p>Aditya has been part of core teams of multiple startups like hCentive, GlobalLogic & 3CLogic and helped them grow manyfold. Aditya is graduate from HBTI 
                     Kanpur and post graduate from Sunstone Business School
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


      <!--Modal for Getting student detail-->
      <div class="modal fade text-left" id="myModalstudentdetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <!-- <h4 class="modal-title" id="myModalLabel"> -->
                  <!-- <img src="img/team/9.jpg" class="circle">
                     <span class="bold1 pd-l-30"> Gaganpreet Luthra </span> -->
                  <!-- </h4> -->
               </div>
               <div class="modal-body pd-b-20">
                  <?php 
                  if($_SESSION['email'] == ""){
                    
                     ?>
                  <div  class="enterepreneurmodal" id="enterepreneurmodal">
                   <h3>Connect With Us</h3>
                  <form class="form-horizontal pd-t-20"  method="post" action="submit.php">

                     <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Email <font color="#FF0000">*</font></label>
                        <div class="col-sm-8 col-md-offset-1">
                           <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Mobile <font color="#FF0000">*</font></label>
                        <div class="col-sm-8 col-md-offset-1">
                           <input type='tel' pattern="^\d{10}$" title='Phone Number (Format: 9876543210)' name="mobile" class="form-control" id="mobile" required>
                        </div>
                     </div>
                     <?php 
                          function connPageName() {
                             return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                          }
                             $connect_page = connPageName();

                     ?>
                         <input type="hidden" name="connect_page" value="<?php echo $connect_page; ?>" class="form-control" id="connect_page" >
                         <input type="hidden" name="my_data" value="" class="" id="my_data" >
                     <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                           <button type="submit" name="connect"  id="connectform" value="connect" class="btn btn-warning">CONNECT</button>
                        </div>
                     </div>
                  </form>
               </div>
               <?php }
                
              
                ?>
                 <div  class="enterepreneurvideo " id="enterepreneurvideo" <?php if($_SESSION['email'] == ""){ ?>style="display:none;" <?php  } ?>>
                   <iframe width="100%" height="450" class="pd-t-20" src="https://www.youtube.com/embed/luaKlRr55SA" frameborder="0" allowfullscreen></iframe>
                 </div>
                
               </div>


               

            </div>
         </div>
      </div>


      <!--<div class="modal fade bs-example-modal-sm" id="myModal_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
           <h4 class="modal-title text-center" id="myModalLabel">
               <span class="bold1">JOIN NOW & START LEARNING</span>
           </h4>
         </div>
         <div class="modal-body">
           
         </div>
         </div>
         </div>
         </div>-->
      <!-- modals-->
      <script type="text/javascript">
        $(document).ready(function(){   

          function validateEmail($email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test( $email );
          }

          $( "#connectform" ).click(function() {
            var email = $('#email').val();

            var phone = $('#mobile').val(),
            intRegex = /[0-9 -()+]+$/;
            var connect_page = $('#connect_page').val();
            var my_data = $('#my_data').val();
            var dataString = 'email='+ email +'&mobile='+ phone +'&connect_page='+ connect_page+'&my_data='+ my_data;
             // alert(dataString); 
            if(!validateEmail(email) || email == '')
            {
                 alert('Please enter a valid email address.');
                 return false;
            }
            if((phone.length < 6) || (!intRegex.test(phone)))
            {
                 alert('Please enter a valid phone number.');
                 return false;
            }
            
            $.ajax
            ({
              type: "POST",
              url: "enter_ajax.php",
              data: dataString,
              cache: false,
              success: function(data)
              {
                  console.log(data);
                 //$( "#enterepreneurmodal" ).hide();
                 //$( "#enterepreneurvideo" ).show();
              } 
            });
          });
        });
      </script>
      <style>
         .send_query{ display:none;}
         .ls_form{ display:none !important;}
      </style>
      </div><!-- /container -->
      <?php include("footer.php") ?>
