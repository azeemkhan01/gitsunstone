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
                <img src="img/business-analy.png"  height="270px">
                </div>
                <div class="col-sm-7">
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
                         <!-- <th>PRICE(INR)</th> -->
                         <th></th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td>23-Aug</td>
                         <td>2 Months</td>
                         <td>Sat,Sun</td>
                         <td>9:00 AM-11:30 AM</td>
                         <!-- <td>14,000</td> -->
                         <td>
                           <!-- <form action="payment.php" method="post" id="payment-form">
                               <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                         <!-- <td>14,000</td> -->
                         <td>
                            <!-- <form action="payment.php" method="post" id="payment-form">
                               <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                         <!-- <td>14,000</td> -->
                         <td>
                           <!-- <form action="payment.php" method="post" id="payment-form">
                              <input type="hidden" value="<?php echo $course_fees; ?>" name="amount">
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
                               <input type="hidden" value="Business Analytics Certificate" name="udf1">
                                <input type="hidden" value="DINESH SINGH" name="udf2">
                                <input type="hidden" value="ARIFUL MONDAL" name="udf3">
                                <input type="hidden" value="KARTIK SARWADE" name="udf4">
                               <button type="submit" class="btnlink" name="submit"><img src="img/just.png" style="max-width:100%;"></button>
                            </form>
                </div>
                </div>
                </div>
                <div class="clearfix"></div>
              <hr class="heading_line">
              <div class="heading bold faq">About the course 
              <ul class="list-inline pill_nav">
              <li><a href="#Businessanalytics">Business Analytics</a></li>
              <li><a href="#courseobjective">Course Objective</a></li>
              <li id="Businessanalytics"><a href="#coursestructure">Course Structure</a></li>
              </ul>
              </div>
              <hr class="heading_line" >  
              <hr class="heading_line1">
              <div class="heading2 bold faq" >Business Analytics</div>
              <hr class="heading_line1"> 
               
               <p class="para_style">
              "Patterns emerge before the reasons for them become apparent." 
               </p>
               <p class="para_style">
              Business Analytics is the intersection of business and technology. In this course you will study data through statistical and operations analysis, the formation of predictive models and the communication of these results to customers, business partners. 
               </p>
               <p class="para_style" id="courseobjective">
             The course also provide knowledge and skills to become a successful Data Analytic professional. In-depth knowledge of core concepts will be covered in the course along with implementation on varied industry use-cases.
               </p>
              <div class="pd-t-40" ></div>

              <hr class="heading_line1">     
              <div class="heading2 bold faq" >Course Objective</div>
              <hr class="heading_line1"> 
             
               <p class="para_style">
              The goal of this course is to equip students with the capabilities to apply data analytic techniques to a variety of business problems and hence to help business to drive data driven decision making through extensive use of statistical/mathematical methods
             </p>
             
              <p class="para_style" id="coursestructure">
             At the end of the course, the participants will be able to:
			        </p>
               
              <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> Understand the role of business analytics within an organization.</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Analyse data using statistical and data mining techniques and understand relationships between the underlying business processes of an organization.</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Use decision-making tools/Operations Research techniques.</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Use advanced analytical tools to analyse complex problems.</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Manage business processes using analytical and management tools.</li> 
                <li><i class="fa fa-check-square-o fa-fw"></i> Use analytics in customer requirement analysis, general management, marketing, finance,operations and supply chain management.</li>  
                <li><i class="fa fa-check-square-o fa-fw"></i> Analyse and solve problems from different industries such as manufacturing, service,retail, software, banking and finance, sports, pharmaceutical, aerospace etc.</li>  
              </ul>
                        
                
              <div class="clearfix" id="coursestructure"></div>

              <hr class="heading_line1">     
              <div class="heading2 bold faq" >Course Structure</div>
              <hr class="heading_line1"> 
              <div class="heading3" >Module 1 :  Business Intelligence </div>

              <p class="para_style">
                Business Intelligence (BI) is a process for analyzing data to gain meaningful insights and art of representations of the information for business managers, corporate executives to help them drive better outcomes at every steps of their strategy planning process.
              </p>
              <p class="para_style">
                Topics covered are:
              </p>
              <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> Reporting or Management Information System (MIS) and Data Visualization</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Online Analytical Processing</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Set of techniques and tools for the transformation of raw data into meaningful and useful insights for business analysis</li>
              </ul>

              <div class="clearfix"></div>

              <div class="heading3 faq" >Module 2 :  Data Analysis & Interpretation </div>

              <p class="para_style">
                The purpose of data analysis is to obtain meaningful business information from data irrespective of whether the data is qualitative or quantitative
              </p>
              <p class="para_style">
                Topics covered are:
              </p>
              <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> Describe and summarize data - explore and aggregate</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Comparison study - compare variables, facts, history, identify differences or similarities</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Pattern Identification - Find meaningful patterns to make decisions</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Forecast - Know future outcome using analytics techniques</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Interpretation - Art and science (process) to attach meaning to the data using the insights gained through data analysis and help business to take informed decisions</li>
              </ul>


              <div class="heading3 faq" >Module 3 :  Database Concepts and Data Modeling</div> 

              <p class="para_style">
                Primary objective is to understand the concepts and standards of Database Management Systems (DBMS) and Data Modeling. It is important to know how information (data) stored or can be stored in the Databases to make efficient use of the data.
              </p>
              <p class="para_style">
                Topics covered are:
              </p>
              <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> Databases and database systems</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Architecture of Database systems</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Data Modeling</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> SQL</li>
              </ul>

              <div class="heading3 faq" >Module 4 :  Data Mining</div>

              <p class="para_style">
                Data Mining or Knowledge Discovery is an analytic process to dig large-scale (sometime can be referred as big data) and extracting meaningful usable information for prediction of behaviors and future business trends, which allows business to make knowledge-based decision (proactive/perspective/prescriptive).
              </p>

              <p class="para_style">
                This process also helps to discover systematic patterns, correlations through methods at the intersection of Artificial intelligence, machine learning, statistics and database systems.
              </p>

              <p class="para_style">
                Topics covered are:
              </p>
              <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> Selection of Data</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Pre-processing of Data</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Transformation of Variables</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Data Mining Techniques</li>
              </ul>
                        
              <hr class="heading_line" >
              <div class="heading4" >Get Certification from John Hopkins Bloomberg School, USA & Sunstone Business School</div>
              <hr class="heading_line">  
              <div class="clearfix"></div>

              <p  class="para_style">
                <img src="img/johnshopkinscertificate.png" width="100%">
              </p>

              <hr class="heading_line" >
              <div class="heading bold faq" >FAQs:</div>
              <hr class="heading_line"> 

<!-- 
              <div class="heading3 faq" >1. Who are the Instructors?</div>

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


<!--               <ul class="course_list">
                <li><i class="fa fa-check-square-o fa-fw"></i> Instructor 1:  Picture and Intro (education, experience)</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Instructor 2:  Picture and Intro (education, experience)</li>
                <li><i class="fa fa-check-square-o fa-fw"></i> Instructor 3:  Picture and Intro (education, experience)</li>

              </ul> -->


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

              <div class=" faq" ><strong>3. WHAT ARE THE DIFFERENT companies working in Business ANALYTICS </strong></div>

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
                        <!-- <td class="white">-</td> -->
                        <td>Evalueserve </td>
                        <td>M&S</td>
                        <td>Mu Sigma</td>
                      </tr> 
                       <tr>
                        <td>CTS</td>
                        <td>EXL</td>
                        <td>Wal-Mart </td>
                        <td>Absolute Data</td>
                      </tr>
                       <tr>
                        <td>Dell</td>
                        <td>24x7</td>
                        <td>Target</td>
                        <td>Convergytics </td>
                      </tr>
                       <tr>
                        <td>HP</td>
                        <td>Buxton</td>
                        <td>Barclays</td>
                        <td>Crayon Data</td>
                      </tr>  
                      <tr>
                        <td>IBM</td>
                        <td>Adventity</td>
                        <td>RBS</td>
                        <td>Infinite Analytics</td>
                      </tr>                   
                    </tbody>
                  </table>
                </div>

              <!-- </ul> -->



              <div class="heading3 faq" >4. What kind of jobs am I likely to get after this training?</div>
              <p class="para_style">
               Almost all the big corporations need analytics professionals. You can be hired in your own industry at entry/mid/senior level depending upon your experience and the training you have had. IT companies and Analytics KPOs hire people to work on client projects which cut across functional and vertical domains. If you have no prior work experience, you best option is to join one of these.
              </p>

              <div class="heading3 faq" >5. Can senior experienced professionals switch to business analytics? </div>

              <p class="para_style">
              Business analytics is the  fastest growing industry across the world. As mentioned earlier it needs  lot of  analytics trained professionals at every level. This is one of those fields that people are switching to even very late in their careers because it is exciting and extremely well-paid with exceptionally bright growth prospects. The data revolution is here! 
              </p>

              <!-- </ul> -->
              <div class="heading3 faq" >6. I have no IT experience. Is this program for me?</div>

              <p class="para_style">
              IT experience is not necessary for this program.
              </p>

               <div class="heading3 faq" >7. Do I need to pay anything extra for John Hopkins certifications?</div>

              <p class="para_style">
                No. Your final fees consist of 1 certificate from Sunstone Business School and 2 certification from John Hopkins School.
              </p>


               <div class="heading3 faq" >8. What is the validity of this program?</div>

              <p class="para_style">
              The combined certification from Sunstone Business School and John Hopkins Bloomberg School is recognized worldwide.
              </p>

               <div class="heading3 faq" >9. Will i get physical or a soft copy of the certification?</div>

              <p class="para_style">
              You will get a soft copy of the certification which you can print it off to include it in your resume.
              </p>

               <div class="heading3 faq" >10. Do I need to travel outside the country in order to get John Hopkins Certification?</div>

              <p class="para_style">
              No. You dont have to travel as this education will be imparted online.
              </p>

               <div class="heading3 faq" >11. I have further questions. What shall I do?</div>

              <p class="para_style">
              Contact us and we will be happy to address.
              </p>

              <!-- </ul> -->

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
 
   
