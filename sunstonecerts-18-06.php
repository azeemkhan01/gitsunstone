<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<?php
error_reporting(-1);
include("db1.php");
/*Post Values from Brochure Form Saved in This Module */
  if (isset($_POST['submit']))
  {
     date_default_timezone_set('Asia/Calcutta');
     $created_on =  date('d-m-Y g:i a');
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $query = $_POST['query'];
     $sql = "INSERT INTO certificate_query_tbl(fname,lname,email,mobile,query,created_on)
                VALUES('$fname','$lname','$email','$mobile','$query','$created_on')";
     $result = mysql_query($sql); 
         if($result)
         {
            	     $sender_name = "Sunstone Business School";
                    $mailed_to = "dev.editsoft@gmail.com,vaibhav.paddlikar@sunstone.in,azemmkhan@sunstone.in";
                    $sender = "vaibhav.paddlikar@sunstone.in";
                    //$sender = "dev.editsoft@gmail.com";
                    $to  =  $mailed_to;
                    $subject ="Drop Query Info";
                   $message = "<p>Name : ".$fname."</p></br>
                                <p>Email : ".$email."</p></br>
                                <p>Mobile : ".$mobile."</p></br>
                                <p>Query : ".$query."</p></br>
                                <p>Created on : ".$created_on."</p></br>";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);
                    ?>
                    <script type="text/javascript">
              		alert("Your Query is sent.We will back soon to you.");
              	    </script>
              <?php  
          }  
              $sender_name = "Sunstone Business School";
              $sender = "vaibhav.paddlikar@sunstone.in";
              $to  = $email; 
              $subject ="Dear ".$fname.",Good to hear from you";
              $message = "<p>Dear ".$fname."</p>

                <p>Thanks for showing your interest . We will get back you soon...&nbsp;</p>

              

                <p>Sunstone Business School</p>

                
               <a href='http://click.sunstone.in/t/em/37/1/ea0114b6-7358-4b38-8619-b84ec3cc76bb/25' target='_blank'>www.sunstone.in</a></p>
                ";
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
              $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
              $result = mail($to, $subject, $message, $headers); 
  } 
    if (isset($_POST['join']))
  {
     date_default_timezone_set('Asia/Calcutta');
     $created_on =  date('d-m-Y g:i a');
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $password = $_POST['password'];
     $sql1 = "INSERT INTO join_now(fname,lname,email,mobile,password,created_on)
                VALUES('$fname','$lname','$email','$mobile','$password','$created_on')";  
     $result1 = mysql_query($sql1); 
         if($result1)
         {
            $sender_name = "Sunstone Business School";
                	$mailed_to = "dev.editsoft@gmail.com,vaibhav.paddlikar@sunstone.in,azemmkhan@sunstone.in";
                    $sender = "vaibhav.paddlikar@sunstone.in";
                    $to  =  $mailed_to;
                    $subject ="Join Info";
                    $message = "<p>Name : ".$fname."</p></br>
                                <p>Email : ".$email."</p></br>
                                <p>Mobile : ".$mobile."</p></br>
                                <p>Created on : ".$created_on."</p></br>";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);
                    ?>
                    <script type="text/javascript">
	              	alert("Details successfully sent.We will back you soon.");
	              </script>
              <?php
                    
          }
          $sender_name = "Sunstone Business School";
              $sender = "vaibhav.paddlikar@sunstone.in";
              $to  = $email; 
              $subject ="Dear ".$fname.",Good to hear from you";
              $message = "<p>Dear ".$fname."</p>

                <p>Thanks for showing your interest . We will get back you soon...&nbsp;</p>

              

                <p>Sunstone Business School</p>

                
               <a href='http://click.sunstone.in/t/em/37/1/ea0114b6-7358-4b38-8619-b84ec3cc76bb/25' target='_blank'>www.sunstone.in</a></p>
                ";
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
              $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
              $result = mail($to, $subject, $message, $headers);   
  } 
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
                <div class="col-sm-5">
                <div class="mba_text bg_none">
                <img src="img/group.png" width="100%;">
                </div>
                </div>
                <div class="col-sm-7">
                <div class="mba_text bg_none">
                <div class="certificate_box">
                <div class="certificate">Entrepreneurship certificate</div>
				<div class="text-center pills_2">
                <span class="label label-default">START DATE</span>&nbsp;&nbsp; 4th JULY <span class="label label-default">COURSE DURATION</span>&nbsp;&nbsp; 6 WEEKS<span class="label label-default">COURSE FEE</span>&nbsp;&nbsp; INR 14,000
                </div>
                
                <div class="mg-t-20">
                <table class="table table-hover certificate_table">
                  <thead>
                    <tr>
                      <th>START</th>
                      <th>DURATION</th>
                      <th>DAYS</th>
                      <th>TIME(IST)</th>
                      <th>PRICE(INR)</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>13-June</td>
                      <td>5 Weeks</td>
                      <td>Sat,Sun</td>
                      <td>7:30 AM-10:00 AM</td>
                      <td>19,000</td>
                      <td><a href="" data-toggle="modal" data-target=".bs-example-modal-sm">Enroll</a></td>
                    </tr>
                    <tr>
                      <td>13-June</td>
                      <td>5 Weeks</td>
                      <td>Sat,Sun</td>
                      <td>7:30 AM-10:00 AM</td>
                      <td>19,000</td>
                      <td><a href="" data-toggle="modal" data-target=".bs-example-modal-sm">Enroll</a></td>
                    </tr>
                    <tr>
                      <td>13-June</td>
                      <td>5 Weeks</td>
                      <td>Sat,Sun</td>
                      <td>7:30 AM-10:00 AM</td>
                      <td>19,000</td>
                      <td><a href="" data-toggle="modal" data-target=".bs-example-modal-sm">Enroll</a></td>
                    </tr>
                  </tbody>
                </table>
                
                </div>
                </div>
                <!--<div class="text-center">
                <a href="" class="btn btn-warning org_btn">ENROLL NOW</a>
                </div>-->
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
               <a href="" data-toggle="modal" data-target=".bs-example-modal-sm"> <img src="img/just.png" style="max-width:100%;"></a>
                </div>
                </div>
                </div>
                <div class="clearfix"></div>
              <hr class="heading_line">
              <div class="heading bold faq">About the course 
              <ul class="list-inline pill_nav">
              <li><a href="#Selling_Ideas">SELLING IDEAS</a></li>
              <li><a href="#Entrepreneurial">ENTREPRENEURIAL VENTURE PLANNING</a></li>
              <li id="Selling_Ideas"><a href="#Who_should_do_it">WHO SHOULD DO IT</a></li>
              </ul>
              </div>
              <hr class="heading_line" >  
              <hr class="heading_line1">
              <div class="heading2 bold faq" >Selling Ideas</div>
              <hr class="heading_line1"> 
               <div class="clearfix"></div>
               
               <p class="para_style">
               Often the best ideas never get heard, never get seen and therefore never get fully developed. Instead of being taken seriously, they get lost in the sea of competing ideas.
               </p>
               <p class="para_style">
               In this module, students practice the ongoing process of selling ideas within an organization, including:
               </p>
                   
                 <ul class="course_list">
                 <li><i class="fa fa-check-square-o fa-fw"></i> Engaging with people – listening, connecting, understanding, researching .How do I understand business as a whole so that I can make better decisions?</li>
                 <li><i class="fa fa-check-square-o fa-fw"></i> Engaging with Investors - Reaching out on right forums, pitching your ideas.</li>
                 <li><i class="fa fa-check-square-o fa-fw"></i>Building credibility, including effective use of data & visual design</li>
                 <li><i class="fa fa-check-square-o fa-fw"></i> Creating situations in which others accept your idea spontaneously of their own free will</li>
               </ul>
               
               <p class="para_style" id="Entrepreneurial">Students learn how to make good ideas stand out from the crowd and gain the top-line visibility they deserve.</p>
              <div class="pd-t-40" ></div>
              
              
              
              <hr class="heading_line1">     
              <div class="heading2 bold faq" >Entrepreneurial Venture Planning</div>
              <hr class="heading_line1"> 
             
               <p class="para_style">
              Assembling the ingredients of a successful new venture is a very ambitious undertaking even for the most seasoned businessperson. Commercial acumen, technological expertise, people skills and just plain luck play critical roles. Some people compare the likelihood of getting all the ingredients just right to the probability of spotting a unicorn.
             </p>
             
              <p class="para_style" id="Who_should_do_it">
             Students learn to think holistically about a business opportunity to create a venture investible business plan.   
			 </p>
                
                
                
                
              <div class="pd-t-40" ></div>
              <hr class="heading_line" >
              <div class="heading2 bold faq" >Who should do it</div>
              <hr class="heading_line">  
               <div class="clearfix"></div>
                   
                 <ul class="course_list">
                 <li><i class="fa fa-check-square-o fa-fw"></i> Aspiring Entrepreneurs - Those who have business startup ideas.</li>
                 <li><i class="fa fa-check-square-o fa-fw"></i> Innovators - People who do not like status quo, they see problems around them and think of ideas to solve them.</li>
                 <li><i class="fa fa-check-square-o fa-fw"></i> Early stage start-up Founders - To understand how to pitch to VCs and Angels.</li>
                 <li id="FAQ"><i class="fa fa-check-square-o fa-fw"></i> Network - Those who would like to build industry network in startup & business community.</li>
               </ul>
                        
                
                 <div class="clearfix"></div>
     <hr class="heading_line" >
              <div class="heading bold faq" >COURSE DIRECTOR</div>
              <hr class="heading_line"> 
     <div class="col-sm-4">
		<div class="professor professor_img" data-toggle="modal" data-target="#myModal1"> 
   			<img src="img/rajul1.png" style="max-width:100%">
	    </div>
     </div>
     <div class="col-sm-4">
     <div class="professor professor_img" data-toggle="modal" data-target="#myModal2"> 
   			<img src="img/kartik1.png" style="max-width:100%">
	    </div>
     </div>
     <div class="col-sm-4">
     <div class="professor professor_img" data-toggle="modal" data-target="#myModal3"> 
   			<img src="img/aditya1.png" style="max-width:100%">
	    </div>
     </div>
     
      <div class="clearfix"></div>      
<div class="col-sm-6 mg-b-50">
         <div class="col-sm-12">
         <div class="row">
    	  <div class="testimonial">
      <div class="">
               <p > <strong>Essential course before stepping into real world of Entrepreneurship </strong></p>
               <p>EVP course is designed in a way that I had to apply all my learnings on the aspects of marketing, economics , accounting , budgeting & story boarding in 
                  one single go. I would say a very effective and must do course before stepping into the real world!</p>
           
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
                  Riflexions Consulting</p>       
               </div>
            </div> 
         </div>        
<div class="col-sm-6 mg-b-50">
         <div class="col-sm-12">
            <div class="row">
      <div class="testimonial">
      <div class="">
                <p> <strong>I am now confident in presenting my idea to an investor </strong></p>
               <p>While one could independently learn courses like Finance, Marketing, Unit Economics and storyboarding – this course helps put all that together to make a meaningful story 
                  for that idea in your head with the ultimate aim of selling it to an investor.</p>
            </div>
      </div>
 			</div>
      </div>
      <div class="clearfix"></div>
            <div class="col-sm-5 text-center">
               <img src="img/eatrn-img/student-2.png" class="img-circle" style="max-width:100%;">
            </div>
            <div class="col-sm-7">
               <div class="mba_text bg_none">
                  <p>Satender Patwal,<br>
                     Lead Cloud Optimization<br>
                     Engineer, Adobe
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
  <form class="form-horizontal " data-toggle="validator" role="form" action="" autocomplete="off" method="post">
  <div class="form-group">
    <div class="col-sm-6">
      <input type="text" class="form-control" id="" name="fname" placeholder="First Name" data-error="Please Enter First Name" required>
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="" name="lname" placeholder="Last Name" data-error="Please Enter Last Name"required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="number" class="form-control" name="mobile" id="inputPassword3" data-error="Please Enter Mobile Number" placeholder="Mobile Number" required>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-12">
      <input type="email" class="form-control" id="inputPassword3" name="email" placeholder="Email"  data-error="Please Enter Email"required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
     <textarea placeholder="Your Query" name="query"></textarea>
       <div id="course_feature"></div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit"  name="submit" value="submit" class="btn btn-default org_btn btn_query">Submit Query</button>
    
    </div>
  </div>
</form>
    </div>
	<div class="list_query" >
      <ul class="list-group">
        <li class="list-group-item"><div class="sidebar_heading text-center">Course Features</div></li>
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
     <div class="list_query off_small">
      <ul class="list-group">
        <li class="list-group-item" style="padding:0"><div class="sidebar_heading text-center"><a href="#form_query" style="color:#B3B3B3"></a></div></li>
		<li class="list-group-item" style="padding:0"><div class="sidebar_heading text-center"><a href="#course_feature" style="color:#B3B3B3">Course Features</a></div></li>
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
IIM Lucknow.</p>
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
Kanpur and post graduate from Sunstone Business School</p>
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