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
                    <img src="img/digital-marketing.png" height="270px">
                </div>
                <div class="col-sm-7">
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
                                 <!-- <th>PRICE(INR)</th> -->
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>23-Aug</td>
                                 <td>8 Weeks</td>
                                 <td>Sat,Sun</td>
                                 <td>9:00 AM-11:30 AM</td>
                                 <!-- <td>15,000</td> -->
                                 <td>
                                    <!-- <form action="payment.php" method="post" id="payment-form">
                                       <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                                 <td>9:00 AM-11:30 AM</td>
                                 <!-- <td>15,000</td> -->
                                 <td>
                                    <form action="payment.php" method="post" id="payment-form">
                                        <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                                 <td>9:00 AM-11:30 AM</td>
                                 <!-- <td>15,000</td> -->
                                 <td>
                                    <form action="payment.php" method="post" id="payment-form">
                                        <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                <div class="clearfix"></div>
        <div class="col-lg-12">
                <div class="slogan mg-t-50">
                <div class="col-sm-8">
                <p>
        Students learn to generate fresh leads at a reasonable cost through effective online engagement. Course covers: outbound and inbound marketing.        
        </p>
                </div>
                <div class="col-sm-4 one_stap">
                  <form action="payment.php" method="post" id="payment-form">
                     <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
                    <input type="hidden" value="Digital Marketing certificate" name="udf1">
                     <input type="hidden" value="DINESH SINGH" name="udf2"> 
                    <button type="submit" class="btnlink" name="submit">
                      <img src="img/just.png" style="max-width:100%;">
                    </button>
                  </form>
                </div>
                </div>
                </div>
                <div class="clearfix"></div>
              <hr class="heading_line">
              <div class="heading bold faq">About the course 
              <ul class="list-inline pill_nav">
                <li><a href="#courseobjective">Course Objective</a></li>
                <li ><a href="#coursestructure">Course Structure</a></li>             
                <li><a href="#FAQ">FAQ</a></li>
              </ul>
              </div>

              <p class="para_style">
              Kickstart an exciting, dynamic career with the Sunstone Digital Marketing Certification. Whether you are

a business owner who wants to improve your online engagement or a complete beginner, this 

certification is right fit for you.
               </p>
               <p class="para_style">
             The course will provide students a thorough understanding of digital marketing concepts with the help 

of live projects, case studies and world class training methods.
               </p>
               <p class="para_style" id="courseobjective">
              The digital marketing course is designed and delivered by top industry leaders. This 

ensures you are receiving the most up-to-date information available during the course of your studies.
               </p>
               <p class="para_style">
              At Sunstone we endeavor to deliver the top notch education for would-be digital marketers.

Sunstone Digital marketing certification is a global-standard certification that you can take with you no 

matter where your exciting career takes you.
               </p>
              <!-- <hr class="heading_line" >  
              <hr class="heading_line1">
              <div class="heading2 bold faq" >Outbound Marketing</div>
              <hr class="heading_line1"> 
               <div class="clearfix"></div>
               
                 <p class="para_style">
               Today's marketer relies less on traditional big media ads and more on highly targeted online campaigns through social media, 
               campaigns, PR, cross-promotions and the like. As the rules of the game continue to change, fresh career opportunities 
               emerge for those savvy enough to play along...
               </p>
               <p class="para_style">
               In this module, students discover ways to generate leads through various online channels by:</p>
                   
              <ul class="course_list" id="inboundmarketing">
                <li><i class="fa fa-check-square-o fa-fw"></i> Creating the right online customer experience to drive purchasing decisions</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Carefully monitoring key metrics such as CLTV (customer lifetime value) and CAC (Customer acquisition cost)</li>
                <li id="commustoryboarding"><i class="fa fa-check-square-o fa-fw"></i>Engaging the customer with great content and thought leadership.</li>
              </ul>

              <div class="pd-t-40" ></div>

              <hr class="heading_line1">     
              <div class="heading2 bold faq" >Inbound Marketing</div>
              <hr class="heading_line1"> 
             
              <ul class="course_list">
                 <li><i class="fa fa-check-square-o fa-fw"></i> Content Marketing - Blogs, Newsletters,Forums .</li>
                 <li><i class="fa fa-check-square-o fa-fw"></i> Search engine advertising</li>
                 <li><i class="fa fa-check-square-o fa-fw"></i> Email</li>
                 <li><i class="fa fa-check-square-o fa-fw"></i> SEO</li>
               </ul>
               </ul>                 -->
                
              <div class="pd-t-40" ></div>

              <hr class="heading_line1">     
              <div class="heading2 bold faq" >Course Objective</div>
              <hr class="heading_line1"> 
             
               <p class="para_style">
             At the end of this course, you will be able to understand the various channels and activities required to 

plan, implement and manage a comprehensive digital marketing plan for your business.
             </p>
             
              <!-- <p class="para_style" id="coursestructure">
             At the end of the course, the participants will be able to:
              </p> -->
               
              <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> Learn the value of Digital Marketing and why it is a vital component of your overall marketing strategy.</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Design, build and effectively manage Search, Social Media, Mobile and Email Marketing campaigns.</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Learn to Integrate your Digital Marketing plans into your overall marketing strategy.</li>
                <li id="coursestructure"><i class="fa fa-check-square-o fa-fw"></i> Drive new visitor traffic to your website while improving online conversion rates.</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Understand how Digital Marketing can help you grow your business, domestically and internationally.</li> 
                <li><i class="fa fa-check-square-o fa-fw"></i> Identify various online applications and resources that can help build effective and profitable websites.</li>  
                <li><i class="fa fa-check-square-o fa-fw"></i> Measure and analyze the visitor traffic to your website to continuously develop and improve your Digital Marketing efforts.</li>  
              </ul>
                        
                
              <div class="clearfix"></div>

              <hr class="heading_line1">     
              <div class="heading2 bold faq" >Course Structure</div>
              <hr class="heading_line1"> 
              <p class="para_style">
               A certification of participation will be provided at the successful completion of the course.
              </p>
              <div class="heading3" >Digital Marketing Certification </div>

              <div class="mg-t-20">
                  <table class="table table-hover">
                    <tbody>
                    
                      <tr>
                        <th>Fees</th>
                        <td>15,000 INR</td>
                      </tr>
                      <tr>
                        <th>Duration</th>
                        <td>
                          8 weeks (3-4 hrs/Week), 60 hrs<br>
                          30 hrs LIVE classroom training<br>
                          15 hrs e-learning<br>
                          15 hrs projects
                        </td>
                      </tr>
                      <!-- <tr>
                        <th>Start</th>
                        <td>22-Aug-15</td>
                      </tr> -->
                      <tr>
                        <th>Days</th>
                        <td>Sunday</td>
                      </tr> 
                      <tr>
                        <th>Time</th>
                        <td>9:00 AM-11:30 AM</td>
                      </tr> 
                      <tr>
                        <th>Topics Covered</th>
                        <td>
                          Pay Per Click (PPC)<br>
                          Search Engine Optimization (SEO)<br>
                          Search Engine Marketing (SEM)<br>
                          Social Media<br>
                          Social Media Marketing (SMM)<br>
                          Online Media Planning<br>
                          Google Adwords Advertising<br>
                          Facebook Advertising<br>
                          Linkedin Advertising<br>
                          Blogging<br>
                          Display Marketing<br>
                          Website Optimization Strategy<br>
                          Conversion Optimization<br>
                          Affiliate Marketing<br>
                          Content Marketing<br>
                          Mobile Marketing<br id="FAQ">
                          Email Marketing<br>
                          Digital Analytics<br>
                          Google Analytics
                        </td>
                      </tr>  
                    </tbody>
                  </table>
                </div>
                        
                
              <div class="clearfix"></div>

              <hr class="heading_line" >
              <div class="heading bold faq" >FAQs:</div>
              <hr class="heading_line"> 
              <div class="heading3 faq" >1.  Do you provide placement assistance?</div>

              <p class="para_style">
                YES. Sunstone is the India's largest Business School for working professionals. Lot of recruitment firms 

contacts us for our students profiles every month The demand is ever growing for these skills. we help 

our certified students get connected to prospective employers.
              </p>
              <p class="para_style">
                We also help our customers prepare their resumes, work on real life projects and provide assistance for 

interview preparation. Having said that, please understand that we don't guarantee any placements 

however if you go through the course diligently and complete the project you will have a very good 

hands on experience to work on a Live project.
              </p>
              <p class="para_style">
              Overall you will get access to career assistance service includes resume building, interview preparation and identification of relevant opportunities.
              </p>

              <div class="heading3 faq" >2. Is this a program for me?</div>
              <p class="para_style">
               This program is for anyone who falls in below category 
              </p>
              <ul class="course_list">
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Undergraduate</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Individuals / beginners seeking career opportunities in the digital marketing</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Fresh College graduates</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Professionals who want to shift to digital marketing</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Marketing professionals</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Web marketers who want to enhance their professional skills in the marketing domain</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Entrepreneurs</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Affiliate marketers who want to use digital media to improve their business performance</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Media Professionals</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Professionals in Marketing/Publishing/Advertising etc</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Ecommerce professionals</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Business Development Professionals</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Sales professionals</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Professionals who seek to improve the performance of their digital marketing campaigns</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> E-Business/Advertising</li>
                <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Real Estate professionals who want to attract online customers</li>
                <!-- <li class="col-md-6"><i class="fa fa-check-square-o fa-fw"></i> Undergraduate</li> -->
                

              </ul>
              <div class="heading3 faq" >3. WHAT ARE THE DIFFERENT Digital Marketing ROLES IN THE INDUSTRY?</div>
              <p class="para_style">
               There are hundreds of different types of roles exist for digital marketing professionals 
              </p>
              <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> Digital Marketing Analyst</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Digital Marketing Executive</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Digital Marketing Manager</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Online Manager</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> SEO executive</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Social Media Manager</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Social Media Analyst</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Marketing Analytics Manager</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Website Analyst</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Marketing Manager</li>

              </ul>

              <div class=" faq" ><strong>4. WHAT ARE THE DIFFERENT companies working in Digital Marketing </strong></div>

                <div class="mg-t-20">
                  <table class="table table-hover certificate_table3">
                    <thead>
                      <tr class="hidden-xs">
                        <th>IT</th>
                        <th>Captive</th>
                        <th>e-Commerce</th>
                        <th>Misc</th>
                        <th>Real Estate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Accenture</td>
                        <td>Genpact</td>
                        <td>Flipkart</td>
                        <td>Ola</td>
                        <td>Maakaan.com</td>
                      </tr>
                      <tr>
                      <tr>
                        <td>Infosys</td>
                        <td>Citibank </td>
                        <td>Snapdeal</td>
                        <td>Uber</td>
                        <td>Magicbricks.com</td>
                      </tr>                      
                      <tr>
                      <tr>
                        <td>TCS</td>
                        <td>M&S</td>
                        <td>Jabong</td>
                        <td>TaxiforSure</td>
                        <td>Housing.com</td>
                      </tr> 
                       <tr>
                        <td>CTS</td>
                        <td>Wal-Mart </td>
                        <td>Olx</td>
                        <td>Meru Cabs</td>
                        <td class="white">-</td>
                      </tr>
                       <tr>
                        <td>Dell</td>
                        <td>Target</td>
                        <td>eBay</td>
                        <td class="white">-</td>
                        <td class="white">-</td>
                      </tr>
                       <tr>
                        <td>HP</td>
                        <td class="white">-</td>
                        <td>Amazon</td>
                        <td class="white">-</td>
                        <td class="white">-</td>
                      </tr>  
                      <tr>
                        <td>IBM</td>
                        <td class="white">-</td>
                        <td>bigbasket</td>
                        <td class="white">-</td>
                        <td class="white">-</td>
                      </tr> 
                       <tr>
                        <td>Google</td>
                        <td class="white">-</td>
                        <td class="white">-</td>
                        <td class="white">-</td>
                        <td class="white">-</td>
                      </tr>                  
                    </tbody>
                  </table>
                </div>

              </ul>



              <div class="heading3 faq" >5. What kind of jobs am I likely to get after this training?</div>
              <p cloass="para_style">
              Almost all the big corporations need Digital Marketing professionals. You can be hired in your own 

industry at entry/mid/senior level depending upon your experience and the training you have had. IT 

companies and Digital Marketing Agencies hire people to work on client projects which cut across 

functional and vertical domains. If you have no prior work experience, you best option is to join one of 

these.
              </p>

              <div class="heading3 faq" >6. Can senior experienced professionals switch to Digital Marketing? </div>

              <p class="para_style">
                Digital Marketing is one of the fastest growing industry across the world. As mentioned earlier it needs 

lot of Digital Marketing trained professionals at every level. 

This is one of those fields that people are switching to even very late in their careers because it is 

exciting and extremely well-paid with exceptionally bright growth prospects!
              </p>

              </ul>

              <div class="heading3 faq" >7. I have no IT experience. Is this program for me?</div>

              <p class="para_style">
              IT experience is not necessary for this program

If you love social media, this program is for you :)
              </p>

              </ul>

              <hr class="heading_line" >
              <div class="heading bold faq" >COURSE DIRECTORS</div>
              <hr class="heading_line"> 
               <div class="col-sm-4 pd-b-40">
                <div class="professor professor_img" data-toggle="modal" data-target="#myModal1"> 
                  <img src="img/Analytics/dinesh1.png" style="width:100%">
                </div>
               </div>

           
          <div class="clearfix"></div>   
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
        <li class="list-group-item"><i class="glyphicon glyphicon-time"></i> Course  Hours - 3-4 hrs/Week</li>
        <li class="list-group-item"><i class="fa fa-desktop"></i> Online Classes - 15 hrs </li>
        <li class="list-group-item"><i class="fa fa-briefcase"></i> Project - 15 hrs </li>
        <!-- <li class="list-group-item"><i class="fa fa-files-o"></i> Assignment - 20 hrs </li> -->
      </ul>
    </div>   
    <!-- <div id="sticky-anchor"></div>
    <div id="sticky">
     <div class="list_query">
      <ul class="list-group">
        <li class="list-group-item"><div class="sidebar_heading text-center">FAQ</div></li>
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
                A) No, the duration of the course is 5-6 weeks. You may join at a later stage.      </div>
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
        </div>
    </li>
     </ul>
    </div>
    </div> -->
    
    </div>

  </div>               
 </div>         

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
           <style>
       .send_query{ display:none;}
       .ls_form{ display:none !important;}
       </style>       
 </div><!-- /container -->

 <?php include("footer.php") ?>
 
  