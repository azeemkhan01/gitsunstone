</head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
      
<div class="loader"></div>
    <div class="navbar navbar-inverse navbar-fixed-top menu" role="navigation">
      <div class="container" id="menu_section">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://sunstone.in/"><img src="img/logo.png" width="250px"></a>
          <!-- <a class="navbar-brand nav2" href="#"><span><img src="img/logo1.png"></span></a> -->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" id="nav_fix">
            <?php if ($_SESSION["is_logged_in"] == TRUE) { ?> 
            <li class="pull-right pd-t-20 pointer pd-r-20 hide_links user_div" data-toggle="modal" data-target="#myModaluser"> <i class="fa fa-user fa-fw"></i></li>
            
            <div class="user_div_functions">
              <div class="col-sm-5 col-xs-5 user_icon text-left">
                <span class="fa-stack fa-3x">
                  <i class="fa fa-circle-o fa-stack-2x"></i>
                  <i class="fa fa-user fa-stack-1x"></i>
                </span>
              </div>

              <div class="col-sm-7 col-xs-7 pd-b-10 text-left">
              <p class="user_name"><?php echo $_SESSION["rname"]; ?></p>
              <p><?php echo $_SESSION["remail"]; 
             // echo "<pre>";print_r($_SESSION);
              ?></p>
              </div><br>
              <div class="col-sm-5 col-xs-5">
                <a href="logout.php"><button type="button" class="btn btn-warning pull-left">SIGNOUT</button></a>
              </div>
            </div>
            <?php  } ?>
            
            <?php if ($_SESSION["is_logged_in"] != TRUE) { ?> 
            <script type="text/javascript">
    // $(window).load(function(){
    //     $('#myModalregister').modal('show');
    // });
</script>
<?php  }   
else{
header("location:thank-you.php");

}


 ?>

            <?php if ($_SESSION["is_logged_in"] != TRUE) { ?> 
            <!-- <li class="pull-right pd-t-20 orange_color pointer pd-r-20 hide_links circular_div" data-toggle="modal" data-target="#myModalregister"title="Register"> R </li> -->
             <li class="pull-right pointer hide_links circular_button closels" style="margin:15px" id="login_button" data-toggle="modal" data-target="#myModallogin" title="Login"><i class="fa fa-sign-in fa-fw"></i><span>SignIn/Up</span></li>
            <?php }if ($_SESSION["is_logged_in"] != TRUE) { ?>
            
             <li class="pull-right pd-t-20 orange_color pointer pd-r-20 hide_links closels" data-toggle="modal" data-target="#myModalregister"><i class="fa fa-external-link fa-fw"></i> Download brochure </li>
             <?php } if ($_SESSION["is_logged_in"] == TRUE) { ?>  
             
            <a href="thankyou_download.php"><li class="pull-right pd-t-20 orange_color pointer pd-r-20 hide_links closels" ><i class="fa fa-external-link fa-fw"></i> Download brochure </li></a>
           <?php  } ?>
            <!-- </ul> -->
            <div class="clearfix"></div>

            <li class="dropdown">

              <a  class="dropdown-toggle" data-toggle="dropdown"  aria-expanded="false">nano-MBA <span class="caret"></span></a>
              <ul class="dropdown-menu menu1  multi-level" role="menu">
                  <li><a href="program-details">Program Details</a>
                  <hr class="orange_1 ">
                  </li>
                  

                  <li>
                  <a href="admissions">Admission & Fees</a>
                  <hr class="orange_1 ">
                   <?php //echo "<pre>";print_r($_SESSION); ?>
                  </li>
                  
                  <li><a href="frequently-asked-questions">Frequently Asked Questions</a>
                  <hr class="orange_1 ">
                  </li>
                  <!--<li><a href="news-and-media">Newsroom</a>
                  <hr class="orange_1 ">
                  </li>-->
                  <li><a href="career">Careers and Placement</a>
                  <hr class="orange_1 ">
                  </li>
                  <li><a href="problem-based-learning">Problem Based Learning</a>
                  <hr class="orange_1 ">
                  </li> 
                             
              </ul>
            </li>
            <!-- <li class="dropdown">

              <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Certificate Courses <span class="caret"></span></a>

              <ul class="dropdown-menu menu1" role="menu">
                  <li>
                  <a href="allcertificates">Certificate overview</a>
                  <hr class="orange_1 ">
                  </li>
                  <li>
                  <a href="entrepreneurcertificate">Entrepreneurship course</a>
                  <hr class="orange_1 ">
                  </li>

                  <li><a href="digitalmarketingcertificate">Digital Marketing</a>
                  <hr class="orange_1 ">
                  </li>

                  <li><a href="bigdatacertificate">Big Data</a>
                  <hr class="orange_1 ">
                  </li>

                  <li><a href="analyticscertificate">Business Analytics </a>
                  <hr class="orange_1 ">
                  </li>

                  <li><a href="financecertificate">Finance for Techies</a>
                  <hr class="orange_1 ">
                  </li>
                  <li><a href="businesscommunicationcertificate"> Business Communication</a>
                  <hr class="orange_1 ">
                  </li>
                  <li><a href="leadershipcertificate">Leadership</a>
                  <hr class="orange_1 ">
                  </li>
              </ul>
            </li> -->
            <li class="dropdown">
              <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Students <span class="caret"></span></a>
              <ul class="dropdown-menu menu1" role="menu">
                  <li>
                  <a href="student-profiles">Student Profiles</a>
                  <hr class="orange_1 ">
                  </li>
                  <li>
                  <a href="student-voices">Student Voices</a>
                  <hr class="orange_1 ">
                  </li>
              </ul>
            </li>
            <li class="dropdown">
              <!-- <a href="#">Faculty</a> -->
              <!-- <hr class="red hide"> -->
              <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Faculty <span class="caret"></span></a>
              <!-- <hr class="red hide"> -->
              <ul class="dropdown-menu menu1" role="menu">
                  <li>
                  <a href="course-directors">Course Directors</a>
                  <hr class="orange_1 ">
                  </li>
                  <li>
                  <a href="industry-speakers">Industry Speakers</a>
                  <hr class="orange_1 ">
                  </li>
              </ul>
            </li>
           
            <!--//////Code edited by Aruna//////-->      
            <li>
              <a href="http://knowledge.sunstone.in/" target="_blank">Knowledge</a>
              <hr class="orange hide">
            </li>   
      <!--//////Code edited by Aruna ends//////-->  

            <li>
              <a href="pgpm">PGPM</a>
              <hr class="orange hide">
            </li>   

           <!-- <li>
              <a href="#" data-toggle="modal" data-target="#myModalr" class="fixed-btn">Brochure</a>
              <hr class="red">
            </li>
            <li>
              <a href="#" data-toggle="modal" data-target="#myModala" class="fixed-btn"> Session </a>
              <hr class="red">
            </li> -->
           <br>
        
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>   
    <script type="text/javascript">
    $(document).ready(function(){
      var infoId = $('#info_id').val();
      // alert(infoId);
      if(infoId == "model"){
            $('#myModalregister').modal('show');
      }if(infoId == "redrct"){
        window.location="thankyou_Attend_Info_Web_Session.php";
      }  
    });
</script>
    <!-- Main jumbotron for a primary marketing message or call to action -->
<?php if ($_SESSION["is_logged_in"] != TRUE) { 

        $info_id = $_GET['infoSession'];

        if ($info_id) {
          $info_id = "model";
        }
       // }
    ?>
        <input type="hidden" value="<?php echo $info_id; ?>" id="info_id"> 
<?php } ?>
<?php if ($_SESSION["is_logged_in"] == TRUE) { 

        $info_id = $_GET['infoSession'];
         if ($info_id) {
          $info_id = "redrct";
           }
       // }
    ?>
        <input type="hidden" value="<?php echo $info_id; ?>" id="info_id"> 
<?php } ?>
<script type="text/javascript">
  $('.user_div').click(function(){
    $('.user_div_functions').toggle();
  });
</script>
<?php

if ($_SESSION["alert"] == TRUE) {

    $lqr_name = $_SESSION["rname"];
    $lqr_email = $_SESSION["remail"];
    $lqr_mobile = $_SESSION["mobile"];
    $ls_source = $_SESSION["ls_source"];

      $sender_name = "Sunstone Business School";
                    $mailed_to = "dinesh@sunstone.in,medha.sharma@sunstone.in,shaguna.dhall@sunstone.in,suren.gaur@sunstone.in,reena.jalali@sunstone.in,counselling@sunstone.in";
                    // $mailed_to = "dev.editsoft@gmail.com,kriti.editsoft@gmail.com";
                    $sender = "contactus@sunstone.in";
                    $to  =  $mailed_to;
                    $subject ="New User Registration Info";
                    $message = "<p>Name : ".$lqr_name."</p></br>
                                <p>Email : ".$lqr_email."</p></br>
                                <p>Mobile : ".$lqr_mobile."</p></br>
                                ";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);

 ?>
  <script type="text/javascript">
  $(document).ready(function(){
            $('#myModalemail').modal('show');
                         });
          // alert("You have Successfully Registered.....");
    </script>
    <div style="display:none;">

    <form method="post" id="registerForm" data-toggle="validator" role="form" enctype="application/x-www-form-urlencoded"  action="https://web.mxradon.com/t/FormTracker.aspx">
    <div class="form-group col-md-6 mg-b-0">
      <div class="col-md-12 no-side-padding">
        <input type='text'  class="form_field1" id='FirstName' name='FirstName' placeholder="* Name" value="<?php echo $lqr_name;  ?>" />
      </div>
      
       <div class="help-block with-errors col-md-12"></div>
      </div>
      <div class="form-group col-md-6 mg-b-0">
      <div class="col-md-12 no-side-padding">
        <input type='email' class="form_field1" id='EmailAddress' name='EmailAddress'  value="<?php echo $lqr_email; ?>" /> <br/>
      </div>
       <div class="help-block with-errors col-md-12"></div>
      </div>
      <div class="form-group col-md-6 mg-b-0">
       <div class="col-md-12 no-side-padding">
          <input type='text' class="form_field1" id='Phone' name='Phone' value="<?php echo $lqr_mobile;  ?>" />
       </div>
       <div class="help-block with-errors col-md-12"></div>
      </div>


    <!-- <input type="hidden" name="Source" value="<?php echo $ls_source;  ?>" /> -->
    <input type="hidden" name="Source" value="Website_Registration" />
    <button id="form-submit-button" type="submit" class="formsubmitbtn">Contact me</button><br />
    <input type="hidden" name="MXHOrgCode" value="37" />
     <input type="hidden" name="MXHLandingPageId" value="cb8e5d6c-8292-11e3-86b5-22000a901032" /> 
     <input type="hidden" name="MXHFormBehaviour" value="1" /> 
     <input type="hidden" name="MXHFormDataTransfer" value="0" /> 
     <input type="hidden" name="MXHRedirectUrl" value="http://sunstone.in/management-program/" /> 
     <input type="hidden" name="MXHAsc" value="10" /> 
     <input type="hidden" name="MXHPageTitle" value="Connecto" /> 
     <input type="hidden" name="MXHOutputMessagePosition" value="0" />
     <input type="hidden" name="MXHIsExternallyUsed" value="1" />
     </form>
  </div>
    <script type="text/javascript">
        document.getElementById('registerForm').submit(); // SUBMIT FORM
    </script>


<?php
unset($_SESSION["alert"]);
unset($_SESSION["mobile"]);
unset($_SESSION["ls_source"]);
}
?> 
    <div class="modal fade text-left" id="myModalemail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <h3>You have Successfully Registered.....</h3>

                        </div>
                        
                      </div>
                    </div>
                  </div>