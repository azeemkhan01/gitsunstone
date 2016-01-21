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

 <?php //include("footer.php") ?>
 
   
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/query.js"></script>
<script src="js/external.js"></script>
<!-- <script src="js/external1.js"></script> -->
<script type="text/javascript">
    $(document).ready(function() {
     $("#close_function").click(function () {
    $(".ls_form").hide();

  });
});
  </script>

<footer id="gotofooter">
    <div class="footer">
      <div class="row pd-b-40">
        <div class="col-md-3 col-md-offset-1 col-sm-3 mg-b-20 footer_section">
          <p class="heading">SUNSTONE</p>
          <p>At Sunstone Business School, our aim is to <br>
                      inculcate in our students the self-belief and <br>
                      skills to be able to provide leadership to the <br>
                      industry at large.</p>
        </div>
        <div class="col-md-2 col-sm-3 text-center footer_section">
          <i class="fa fa-flag"></i><br>
             <p class="head">Know more?</p>
          <a href="management-team">Management Team</a><br>
          <!-- <a href="#">Our Work</a><br>
          <a href="#">Manifesto</a><br>
          <a href="#">Blog</a> -->
        </div>

        <div class="col-md-2 col-sm-3 text-center footer_section">
          <i class="fa fa-phone"></i><br>
             <p class="head"> Talk to us</p>
              <p>Call us at +91 9717898231</p>
              <p>Not a big talker? Email us at</p>
          <a href="mailto:contactus@sunstone.in">contactus@sunstone.in</a>

        </div>

        <div class="col-md-3 col-sm-3 text-center">
          <i class="fa fa-paper-plane" style="padding-bottom:5px;"></i>
          <div class="col-lg-10 col-lg-offset-1">
            <form role="form " class="form_footer">
                <div class="form-group">
                <input type="text" class="form-control" id="Name" placeholder="Name" required>
                </div>
                <div class="form-group">
                <input type="email" class="form-control" id="email"  placeholder="Email" required>
                </div>
                <div class="form-group">
                <input type="number" class="form-control" id="number"  placeholder="Phone" required>
                </div>
            <button type="submit" class="btn btn-default getintouch custom_btn">Get more details</button>
            </form>
              <!--<p>Sunstone, INJ Campus,
              Plot No. 10, Knowledge Park-3,
              Greater Noida(201308)</p>
              <a class="getintouch" target="_blank" href="https://www.google.co.in/maps/place/Sunstone+Business+School/@28.475099,77.491135,17z/data=!3m1!4b1!4m2!3m1!1s0x390d18b47de149f3:0xdf80374ffff13b7d">
                Get Directions
              </a>-->
              </div>
        </div>
      </div>
      <div class="row hide">
        <div class="col-md-10 col-md-offset-1">

          <div class="row footer_section2">
            <div class="col-md-3">
              <div class="row">
                <div class="col-md-3">
                  <i class="fa fa-android"></i>
                </div>
                <div class="col-md-9">
                  <p>It is a long established fact that a reader will.</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="row">
                <div class="col-md-3">
                  <i class="fa fa-angellist"></i>
                </div>
                <div class="col-md-9">
                  <p>It is a long established fact that a reader will.</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="row">
                <div class="col-md-3">
                  <i class="fa fa-apple"></i>
                </div>
                <div class="col-md-9">
                  <p>It is a long established fact that a reader will.</p>
                </div>
              </div>

            </div>

            <div class="col-md-3">
              <div class="row">
                <div class="col-md-3">
                  <i class="fa fa-btc"></i>
                </div>
                <div class="col-md-9">
                  <p>It is a long established fact that a reader will.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

     <div class="copyright"> 
      <div class="row no-side-margin">
        <div class="col-md-8 col-md-offset-1 ">
        
        <div class="col-sm-3">
        <p>Content From</p>     
          <a href="https://cb.hbsp.harvard.edu/cbmp/pages/home" class="pd-l-20"><img src="img/HBSP_Logo.jpg"  height="51px" width="164px"></a>
        </div>
        <div class="col-sm-3">
          <p>Approved By</p>
          <span class="pd-l-20"><img src="img/member-new.jpg" height="51px" width="164px"></span>
         </div>
         <div class="clearfix"></div>
          <!-- <a href="#">About</a>
          <a href="#">Our Work</a>
          <a href="#">Manifesto</a>
          <a href="#">Blog</a><br> -->
          <p class="pd-t-10"> Copyright © 2014 Anytime Learning Pvt Ltd. All rights reserved.</p>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-12 text-center">
        <a target="_blank" href="https://www.facebook.com/SunstoneBusinessSchool">
          <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>
        </a>
          
        <a target="_blank" href="https://twitter.com/sunstonebschool">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
          </span>
        </a>

        <a target="_blank" href="https://plus.google.com/101194102431970297843/posts">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
          </span>
         </a>
          
        <a target="_blank" href="https://www.linkedin.com/company/sunstone-business-school">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        </div>
      </div>

     </div> 
    </footer>

                <!--Modal for requestbrochure & attend info session-->

                  <div class="modal fade text-left" id="myModalr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <h3>Download brochure to get Program details</h3>
                        
                          <form class="form-horizontal pd-t-20" action="submit.php" method="post">

                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Name <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="name" class="form-control" id="" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Email <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="email" name="email" class="form-control" id="" required>
                              </div>
                            </div>
                             <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Mobile <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <!-- <input type="text" name="mobile" class="form-control" id=""  required> -->
                                <input type='tel' pattern="^\d{10}$" title='Phone Number (Format: 9876543210)' name="mobile" class="form-control" id=""  required> 
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Experience <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <!--<input type="text" name="experience" class="form-control" id="" placeholder="" required>-->
                                <select class="form-control"name="experience" required>
                                <option value=""></option>
                                <option value="<3">&lt;3</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value=">15">&gt;15</option>
                               </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Company <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="company" class="form-control" id="" placeholder="" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Your Query</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <textarea name="any_query" class="txtarea"></textarea>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" name="brochure" value="brochure_request" class="btn btn-warning">Request Brochure</button>
                              </div>
                            </div>
                          </form>

                        </div>
                        
                      </div>
                    </div>
                  </div>   

                  <div class="modal fade text-left" id="myModala" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <h3>Attend Info Web Session</h3>
          
                        <p>The Info session takes place every Tuesday & Thursday at 10 pm and Saturday at 12 pm.</p>
                        <p>Please fill the following form if you are interested in attending 
                        our info web session and we'll get back to you with the details</p>
                          <form class="form-horizontal pd-t-20" action="submit.php" method="post">

                            <div class="form-group">
                              <label for="" name="" class="col-sm-3 control-label">Name<font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="name" class="form-control" id=""  required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Mobile <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type='tel' pattern="^\d{10}$" title='Phone Number (Format: 9876543210)' name="mobile" class="form-control" id="" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Email <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="email" name="email" class="form-control" id="" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Years of experience <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <select class="form-control"name="experience" required>
                                <option value=""></option>
                                <option value="<3">&lt;3</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value=">15">&gt;15</option>
                               </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Current Organization <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="current_org" class="form-control" id="" placeholder="" required>
                               
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Comments</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <textarea name="comment" class="txtarea" ></textarea>
                              </div>
                            </div>

                           <!--  <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="remind_me"> Not free this time, but let me know about next info session
                                  </label>
                                </div>
                              </div>
                            </div> -->

                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" name="websession" value="websession" class="btn btn-warning">SUBMIT</button>
                              </div>
                            </div>
                          </form>


                        </div>
                        
                      </div>
                    </div>
                  </div>

                <div class="send_query test hidden-xs">
                    <button class="query" id="query">SEND A QUERY</button>
                    <div class="query_form" id="query_div">

                      <h3 class="text-center">SEND A QUERY</h3>
                      <form class="form-horizontal pd-t-20 " id="query_form">
                          <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Name <font color="#FF0000">*</font></label>
                            <div class="col-sm-7 ">
                              <input type="text" class="form-control" id="name"  name="name">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Email <font color="#FF0000">*</font></label>
                            <div class="col-sm-7 ">
                              <input type="email" class="form-control" id="email"  name="email">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-4 control-label"  name="msg" >Message <font color="#FF0000"></font></label>
                            <div class="col-sm-7 ">
                              <textarea class="txtarea" name="msg"  id="msg"></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-3">
                              <button type="button" class="btn btn-warning" id="send_query" name="query" value="SUBMIT">SUBMIT</button>
                            </div>
                            <div class="col-sm-offset-1 col-sm-3">
                              <a class="btn btn-warning query_cancel">CANCEL</a>
                            </div>
                          </div>
                        </form>
                        
                        <div class="form-horizontal"style="display:none;" id="feedback" >
                          <div class="">
                         <h5 class="text-center text-muted">Your feedback has been successfully sent</h5>
                         <p class="text-center"><button type="submit" class="btn btn-default " id="query_close">Close</button></p>
                        </div>
                        </div>
                    </div>
                </div>   
  <div class="ls_form" id="ls_form" style="display:none;">
    <div class="title">Want us to contact you?  <span class="orange_color pull-right"  id="close_function"><i class="fa fa-close"></i></span></div>
    <form method="post" enctype="application/x-www-form-urlencoded" action="https://web.mxradon.com/t/FormTracker.aspx">
      <input type='text'  class="form_field" id='FirstName' name='FirstName' maxlength='100' value='' autocomplete='off' 
      required='required' placeholder="* Name"/>
      <input type='text' class="form_field" id='EmailAddress' name='EmailAddress' maxlength='100' value='' autocomplete='off' required='required'  placeholder="* Email"/> <br/>
      <input type='text' class="form_field" id='Phone' name='Phone' maxlength='20' value='' autocomplete='off' required='required' placeholder="* Phone No." />

      <select id='mx_Years_of_Experience' name='mx_Years_of_Experience' placeholder="*Experience (Years)" class="form_field" >
      <option value='' >Years of Experience</option>
      <option value='&lt;3' >&lt;3</option>
      <option value='3' >3</option>
      <option value='4' >4</option>
      <option value='5' >5</option>
      <option value='6' >6</option>
      <option value='7' >7</option>
      <option value='8' >8</option>
      <option value='9' >9</option>
      <option value='10' >10</option>
      <option value='11' >11</option>
      <option value='12' >12</option>
      <option value='13' >13</option>
      <option value='14' >14</option>
      <option value='15' >15</option>
      <option value='&gt;15' >&gt;15</option>
      </select>
      <input type="hidden" name="source" value="connectopgpm" />
      <button id="form-submit-button" type="submit" class="formsubmitbtn">Contact me</button><br />
    <input type="hidden" name="MXHOrgCode" value="37" />
     <input type="hidden" name="MXHLandingPageId" value="cb8e5d6c-8292-11e3-86b5-22000a901032" /> 
     <input type="hidden" name="MXHFormBehaviour" value="1" /> 
     <input type="hidden" name="MXHFormDataTransfer" value="0" /> 
     <input type="hidden" name="MXHRedirectUrl" value="http://sunstone.in/management-program/thanks-ls/" /> 
     <input type="hidden" name="MXHAsc" value="10" /> 
     <input type="hidden" name="MXHPageTitle" value="Connecto" /> 
     <input type="hidden" name="MXHOutputMessagePosition" value="0" />
     <input type="hidden" name="MXHIsExternallyUsed" value="1" />
     </form>
  </div>
 <script type="text/javascript"> var MXLandingPageId = 'cb8e5d6c-8292-11e3-86b5-22000a901032'; </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="js/grid.js"></script>
        <script>
          $(function() {
            Grid.init();
          });
        </script>
        <script src="js/jquery.proximity.js"></script>
        <!-- // <script src="js/custom.proximity.js"></script> -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/grid.js"></script>
        <script src="js/main.js"></script>
        <script src="js/unslider.js"></script>
        <script>
           $('.count-item').waypoint(function() {
                 $('.counter').countTo();
                 $('.counter').removeClass('counter');
              }, { offset: '90%' });
        </script>
        <script>
          // $(function() {
          //     $('.banner').unslider();

          // });
          $('.banner').unslider({
            // speed: 3000              //  The speed to animate each slide (in milliseconds)
            delay: 8000            //  The delay between slide animations (in milliseconds)
                        //  Support responsive design. May break non-responsive designs
          });
        </script>
        <script type="text/javascript">
          $(window).load(function() {
            $('.header_slider').flexslider({
              animation: "slide",
              animationLoop: true,
              itemWidth: 423,
              itemMargin: 0,
              controlNav:false,
              move:0,
            });
          });
        </script>
        <script type="text/javascript">
        $('#load').click(function(){
          $(".load-more-1").fadeToggle();
        });
        </script>
        <script type="text/javascript">
          $(window).load(function() {
            $('.abtsunstone_slider').flexslider({
              animation: "slide",
              animationLoop: true,
              controlNav:true,
              directionNav:false,
            });
          });
        </script>

        <script type="text/javascript">
          $(window).load(function() {
            $('.featuredin_slider').flexslider({
              animation: "slide",
              animationLoop: false,
              slideshow:false,
              directionNav:false,
              // itemWidth: 310,
              itemWidth: 415,
              itemMargin: 0,
              controlNav:false,
            });
          });

          $('.prev').on('click', function(){
                $('.featuredin_slider').flexslider('prev')
            });

            $('.next').on('click', function(){
                $('.featuredin_slider').flexslider('next')
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
              
              $(".ls_form").delay(3000).fadeIn(500);
              
            });

        </script>

        <script>
          $(window).scroll(function(){
            var x = $("body").scrollTop();
            var width = $(window).width();
            if (x == 0){
              $(".tothetop").fadeOut(100);
       // $('.hide_links').css('opacity','0');
              // $('.navbar').css('background','none').css('border-bottom','none');
              
            }
            else if (x > 100) {
              $(".tothetop").fadeIn(500);
              // $(".ls_form").css('display','block');
              // $('.navbar').css('background','#3e3a3a');
              $('.navbar').css('background','#0e152b');
              //$('.hide_links').css('opacity','1');
              // x = 0;
              }
          });
        </script>
        <script src="js/jquery.cbpNTAccordion.min.js"></script>

        <script>
          $( function() {
            $( '#cbp-ntaccordion' ).cbpNTAccordion();

          });  
        </script>     
        <script src="js/wow.min.js"></script>
        <script>
         new WOW().init();
        </script>
        <!-- Smooth Scroll -->
        <script>
          $(document).ready(function() {
          function filterPath(string) {
          return string
            .replace(/^\//,'')
            .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
            .replace(/\/$/,'');
          }
          var locationPath = filterPath(location.pathname);
          var scrollElem = scrollableElement('html', 'body');
         
          $('a[href*=#]').each(function() {
            var thisPath = filterPath(this.pathname) || locationPath;
            if (  locationPath == thisPath
            && (location.hostname == this.hostname || !this.hostname)
            && this.hash.replace(/#/,'') ) {
              var $target = $(this.hash), target = this.hash;
              if (target) {
                var targetOffset = $target.offset().top;
                $(this).click(function(event) {
                  event.preventDefault();
                  $(scrollElem).animate({scrollTop: targetOffset}, 800, function() {
                    location.hash = target;
                  });
                });
              }
            }
          });
         
          // use the first element that is "scrollable"
          function scrollableElement(els) {
            for (var i = 0, argLength = arguments.length; i <argLength; i++) {
              var el = arguments[i],
                  $scrollElement = $(el);
              if ($scrollElement.scrollTop()> 0) {
                return el;
              } else {
                $scrollElement.scrollTop(1);
                var isScrollable = $scrollElement.scrollTop()> 0;
                $scrollElement.scrollTop(0);
                if (isScrollable) {
                  return el;
                }
              }
            }
            return [];
          }
         
        });
        </script>
        <!-- End Smooth Scroll -->

        <script>
          var contact_value = $('#contact_id').val();
          if (contact_value == "true") {
             $('html, body').animate({
                  scrollTop: $("#gotofooter").offset().top
              });
          }
        </script>
        
<!-- script added on 19 Jan 15 for digicliff -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47263271-1', 'auto');
  ga('send', 'pageview');

</script>



<!-- Google Analytics -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-22653884-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>


<!-- Google Code for Remarketing tag -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 952528978;
var google_conversion_label = "CU4GCPa1_wYQ0uCZxgM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<!-- <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
// </script>-->
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/952528978/?value=0&amp;label=CU4GCPa1_wYQ0uCZxgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script type="text/javascript">
adroll_adv_id = "EUNO3DRQ4ZCQPG2UPJBUUM";
adroll_pix_id = "HCLWWX7OXJGOJIKRLZP23I";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>


<!--LeadSquared Tracking Code Starts-->
<script type="text/javascript" src="http://web.mxradon.com/t/Tracker.js"></script>
<script type="text/javascript">
      //Overwrite Associated Score
      //Asc = 20;
      //Tracker 
      pidTracker('37');
</script>
<!--LeadSquared Tracking Code Ends-->

<!--Start of Connecto Script-->
<script type="text/javascript">
// var _TConnecto = _TConnecto || {'licenseKey': '00003'};
// (function() {
//   var con = document.createElement('script'); con.type = 'text/javascript';
//   con.src = 'http://server.connecto.io/javascripts/connect.prod.min.js';
//   var s = document.getElementsByTagName('script')[0];
//   s.parentNode.insertBefore(con, s);
// })();
</script>
<!--End of Connecto Script--> 



<!--By Suren: FB Pixel: edited on 1 Sept 2014 -->
<!-- Facebook Conversion Code for Sunstone PGPM Pixel -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6018869365440', {'value':'0.00','currency':'INR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6018869365440&amp;cd[value]=0.00&amp;cd[currency]=INR&amp;noscript=1" /></noscript>
    </body>

</html>

