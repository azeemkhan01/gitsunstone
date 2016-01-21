
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php 
include("submit.php");
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sunstone Business School</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
         
		
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/flexslider.css">
        <script src="js/modernizr.js"></script>
        <script src="js/modernizr.custom.25376.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$(".loader").fadeOut("slow");
			})
        </script>
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

            <li class="pull-right pd-t-20 orange_color pointer hide_links" data-toggle="modal" data-target="#myModala"><i class="fa fa-external-link fa-fw"></i> Attend web info session</li>
            <li class="pull-right pd-t-20 orange_color pointer pd-r-20 hide_links" data-toggle="modal" data-target="#myModalr"><i class="fa fa-external-link fa-fw"></i> Download brochure </li>
            </ul>
            <div class="clearfix"></div>
           <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <!-- <a href="pgpm.php">Program</a> -->
               <a  class="dropdown-toggle" data-toggle="dropdown"  aria-expanded="false">Program <span class="caret"></span></a>
              <!-- <hr class="red hide"> -->
              <ul class="dropdown-menu" role="menu">
                  <li><a href="program-details">PGPM Overview</a>
                  <hr class="orange_1 ">
                  </li>
                  <li>
                  <a href="how-it-works">How it works ? </a>
                  <hr class="orange_1 ">
                  </li>
                  <li>
                  <a href="curriculum">Curriculum</a>
                  <hr class="orange_1 ">
                  </li>
                  <li>
                  <a href="problem-based-learning">Problem Based Learning</a>
                  <hr class="orange_1 ">
                  </li>
                  <li>
                  <a href="news-and-media">News Room</a>
                  <hr class="orange_1 ">
                  </li>
                  <li>
                  <a href="career">Career Services</a>
                  <hr class="orange_1 ">
                  </li>
              </ul>
            </li>
            <li class="dropdown">
              <!-- <a href="admission.php">Admissions</a> -->
              <!-- <hr class="red hide"> -->
              <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admissions <span class="caret"></span></a>
              <!-- <hr class="red hide"> -->
              <ul class="dropdown-menu" role="menu">
                  <li>
                  <a href="admissions">Admissions</a>
                  <hr class="orange_1 ">
                  </li>
                  <li>
                  <a href="fee">Fees</a>
                  <hr class="orange_1 ">
                  </li>

                  <li><a href="frequently-asked-questions">Frequently Asked Questions</a>
                  <hr class="orange_1 ">
                  </li>
              </ul>
            </li>
            <li>
              <a href="student-profiles">Students</a>
              <hr class="orange hide">
            </li>
            <li class="dropdown">
              <!-- <a href="#">Faculty</a> -->
              <!-- <hr class="red hide"> -->
              <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Faculty <span class="caret"></span></a>
              <!-- <hr class="red hide"> -->
              <ul class="dropdown-menu" role="menu">
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
      if(infoId){
         $('#myModala').modal();
      }   
    });
</script>
    <!-- Main jumbotron for a primary marketing message or call to action -->
      <?php 
        $info_id = $_GET['infoSession']
    ?>
     <input type="hidden" value="<?php echo $info_id; ?>" id="info_id"> 



