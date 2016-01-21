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
        <title></title>
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
        <link rel="stylesheet" href="css/flexslider.css">
        <script src="js/modernizr.js"></script>
        <script src="js/modernizr.custom.25376.js"></script>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top menu" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="200px"></a>
          <a class="navbar-brand nav2" href="#"><span><img src="img/logo1.png"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="pgpm2.php">Program</a>
              <hr class="red hide">
            </li>
            <li>
              <a href="admission.php">Admissions</a>
              <hr class="red hide">
            </li>
            <li>
              <a href="stu_int.php">Students</a>
              <hr class="red hide">
              </li>
            <li>
              <a href="#">Faculty</a>
              <hr class="red hide">
              </li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
      </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    
      <div class="container header_section">
        <div class="row">
          <div class="col-md-12" style="padding-bottom:90px;">
            <div class="tagline">World's largest Business <br><span class="bold">Certification for tech professionals</span></div>
              <div class="row subtagline"> 
                <div class="col-md-3 col-sm-3 col-xs-6 text-center count-item">
                  <img src="img/students.png">
                  <p class="count1 counter" data-from="0" data-to="1000" data-speed="2000">0</p>
                  <p class="">GRADUATES</p>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6 text-center count-item">
                  <img src="img/cities.png">
                  <p class="count3 counter" data-from="0" data-to="12" data-speed="2000">0</p>
                  <p class="">CITIES</p>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6 text-center count-item">
                  <img src="img/countries.png">
                  <p class="count4 counter" data-from="0" data-to="36" data-speed="2000">0</p>
                  <p class="">COUNTRIES</p>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6 text-center count-item">
                  <img src="img/companies.png">
                  <p class="count2 counter" data-from="0" data-to="350" data-speed="2000">0<span> </span></p>
                  <p class="">COMPANIES</p>
                </div>
              </div>

              <div class="row subtagline hide"> 
                  <span class="count-item no-side-padding">
                    <span class="count1 counter" data-from="0" data-to="1000" data-speed="2000">0</span>+
                    <span class="who"> GRADUATES </span>
                  </span>

                  <span class="count-item no-side-padding">
                    <span class="count3 counter" data-from="0" data-to="12" data-speed="2000">0</span>
                    <span class="who"> CITIES </span>
                  </span>

                  <span class="count-item no-side-padding">
                    <span class="count4 counter" data-from="0" data-to="36" data-speed="2000">0</span>
                    <span class="who"> COUNTRIES </span>
                  </span>

                  <span class="count-item no-side-padding">
                    <span class="count2 counter" data-from="0" data-to="350" data-speed="2000">0</span>+
                    <span class="who"> COMPANIES </span>
                  </span>
              </div>
            
            <div id="slider_section" class="hide">
              <div class="flexslider header_slider">
                  <ul class="slides header_slides">
                    <!-- <li>
                      <span class="circle"></span><span class="text">1market value # sunstone</span>
                    </li> -->
                    <li data-toggle="modal" data-target="#myModal1">
                      <span><img src="img/header_img/1.jpg"class="circle"></span><span class="text">2market value # sunstone</span>
                    </li>
                    <li data-toggle="modal" data-target="#myModal1">
                      <span><img src="img/header_img/2.jpg"class="circle"><span class="text">3market value # sunstone</span>
                    </li>
                    <li data-toggle="modal" data-target="#myModal1">
                      <span><img src="img/header_img/3.jpg"class="circle"><span class="text">4market value # sunstone</span>
                    </li>
                    <li data-toggle="modal" data-target="#myModal1">
                      <span><img src="img/header_img/1.jpg"class="circle"><span class="text">5market value # sunstone</span>
                    </li>
                    <li data-toggle="modal" data-target="#myModal1">
                      <span><img src="img/header_img/2.jpg"class="circle"><span class="text">6market value # sunstone</span>
                    </li>
                    <li data-toggle="modal" data-target="#myModal1">
                      <span><img src="img/header_img/3.jpg"class="circle"><span class="text">7market value # sunstone</span>
                    </li>
                    <li data-toggle="modal" data-target="#myModal1">
                      <span><img src="img/header_img/1.jpg"class="circle"><span class="text">8market value # sunstone</span>
                    </li>
                    <li data-toggle="modal" data-target="#myModal1">
                      <span><img src="img/header_img/2.jpg"class="circle"><span class="text">9market value # sunstone</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>  

            <div class="header-arrow">
              <a href="#student_wall_id"><img src="img/down-arrow.png"></a>
            </div>
             
         </a>
        </div>
      </div>

      <!-- sub-title  -->
      <div class="hide subtitle">
        <span class="subtitle-icon"><i class="fa fa-paper-plane"></i></span>
        <span class="subtitle-text pd-l-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, eos quod sint neque illum commodi error atque maiores ipsa.</span>
      </div>
      <!-- end sub-title  -->
      <div>
        <button data-toggle="modal" data-target="#myModalr" class="org_btn">Request Brochure</button>
        <button data-toggle="modal" data-target="#myModala" class="org_btn">Attend Info session </button>
      </div>
      <!-- Student Wall -->
      <div class="container studentwall_section" id="student_wall_id">
      <div class="heading">Student Wall</div>
        <hr class="red">
        <div class="pd-b-20"></div>
         <!-- Proximity Wall -->
        <section class="mg-t-20 proximity_wall">
        <div class="container">
          <section class="pe-container">
            <ul id="pe-thumbs" class="pe-thumbs">
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/1.jpg" /><div class="pe-description"><h3>Abhishek Nimonkar</h3><p>Product Manager, Citrus Payment | Class of 2012</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/2.jpg" /><div class="pe-description"><h3>Aditya Chaturvedi</h3><p>CTO, Apollo Incubations | Class of 2012</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/3.jpg" /><div class="pe-description"><h3>virtue</h3><p>Whiles both his youth and virtue did intend</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/4.jpg" /><div class="pe-description"><h3>endeavors</h3><p>The good endeavors of deserving praise</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/5.jpg" /><div class="pe-description"><h3>monument</h3><p>What memorable monument can last</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/6.jpg" /><div class="pe-description"><h3>name</h3><p>Whereon to build his never-blemished name</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/7.jpg" /><div class="pe-description"><h3>life was graced</h3><p>But his own worth, wherein his life was graced</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/8.jpg" /><div class="pe-description"><h3>the same</h3><p>Sith as that ever he maintained the same?</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/9.jpg" /><div class="pe-description"><h3>oblivion</h3><p>Oblivion in the darkest day to come</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/10.jpg" /><div class="pe-description"><h3>sin shall tread</h3><p>When sin shall tread on merit in the dust</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/11.jpg" /><div class="pe-description"><h3>lamentable tomb</h3><p>Cannot rase out the lamentable tomb</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/12.jpg" /><div class="pe-description"><h3>short-lived deserts</h3><p>Of his short-lived deserts; but still they must</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/13.jpg" /><div class="pe-description"><h3>hearts and memories</h3><p>Even in the hearts and memories of men</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/14.jpg" /><div class="pe-description"><h3>respect</h3><p>Claim fit respect, that they, in every limb</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/15.jpg" /><div class="pe-description"><h3>comfort</h3><p>Remembering what he was, with comfort then</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/16.jpg" /><div class="pe-description"><h3>pattern</h3><p>May pattern out one truly good, by him</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/17.jpg" /><div class="pe-description"><h3>truly good</h3><p>For he was truly good, if honest care</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/18.jpg" /><div class="pe-description"><h3>harmless conversation</h3><p>Of harmless conversation may commend</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/19.jpg" /><div class="pe-description"><h3>recompensed</h3><p>Ill recompensed only in his end</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/20.jpg" /><div class="pe-description"><h3>tongue</h3><p>Nor can the tongue of him who loved him least</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/21.jpg" /><div class="pe-description"><h3>superlative</h3><p>To one superlative above the rest</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/22.jpg" /><div class="pe-description"><h3>steady faith</h3><p>Of many men in steady faith reprove</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/23.jpg" /><div class="pe-description"><h3>constant temper</h3><p>His constant temper, in the equal weight</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/24.jpg" /><div class="pe-description"><h3>thankfulness</h3><p>Of thankfulness and kindness: Truth doth leave</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/25.jpg" /><div class="pe-description"><h3>proof</h3><p>Sufficient proof, he was in every right</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/1.jpg" /><div class="pe-description"><h3>thankful</h3><p>As kind to give, as thankful to receive.</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/2.jpg" /><div class="pe-description"><h3>curious eye</h3><p>The curious eye of a quick-brained survey</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/3.jpg" /><div class="pe-description"><h3>scantly find</h3><p>Could scantly find a mote amidst the sun</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/4.jpg" /><div class="pe-description"><h3>too-shortened days</h3><p>Of his too-shortened days, or make a prey</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/5.jpg" /><div class="pe-description"><h3>faulty errors</h3><p>Of any faulty errors he had done</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/6.jpg" /><div class="pe-description"><h3>spleenful sense</h3><p>Not that he was above the spleenful sense</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/7.jpg" /><div class="pe-description"><h3>spite of malice</h3><p>And spite of malice, but for that he had</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/8.jpg" /><div class="pe-description"><h3>innocence</h3><p>Warrant enough in his own innocence</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/9.jpg" /><div class="pe-description"><h3>nature</h3><p>Against the sting of some in nature bad</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/10.jpg" /><div class="pe-description"><h3>absolutely blest</h3><p>Yet who is he so absolutely blest</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/11.jpg" /><div class="pe-description"><h3>mortal frame</h3><p>That lives encompassed in a mortal frame</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/12.jpg" /><div class="pe-description"><h3>name</h3><p>Whereon to build his never-blemished name</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/13.jpg" /><div class="pe-description"><h3>life was graced</h3><p>But his own worth, wherein his life was graced</p></div></a></li>
              <li><a href="stu_int.php" target="_blank"><img src="images/thumbs/14.jpg" /><div class="pe-description"><h3>the same</h3><p>Sith as that ever he maintained the same?</p></div></a></li>
              
              
            </ul>
          </section>
        </div>
      </section>
          <!-- end Proximity Wall -->
    </div>
      <!-- End Student Wall -->


    <div class=" hide container">
      <div class="row member_section">
        <div class="col-md-4 text-center pd-t-50" data-toggle="modal" data-target="#myModalsq">
            <img src="img/member.jpg" class="members">
            <div class="members_name">DINESH SINGH</div>
            <hr class="red">
            <p class="pd-t-10">
              <span>Vice President at Microsoft</span><br>
              and I would like to give all the<br>
              credit to great sunstone programs
            </p> 
        </div>
        <div class="col-md-4 text-center pd-t-50" data-toggle="modal" data-target="#myModalsq">
            <img src="img/member.jpg" class="members">
            <div class="members_name">DINESH SINGH</div>
            <hr class="red">
            <p class="pd-t-10">
             <span>Vice President at Microsoft</span><br>
              and I would like to give all the<br>
              credit to great sunstone programs
            </p> 
       </div>
        <div class="col-md-4 text-center pd-t-50" data-toggle="modal" data-target="#myModalsq">
            <img src="img/member.jpg" class="members">
            <div class="members_name">DINESH SINGH</div>
            <hr class="red">
            <p class="pd-t-10">
             <span>Vice President at Microsoft</span><br>
              and I would like to give all the<br>
              credit to great sunstone programs
            </p> 
        </div>
      </div>


      <div class="load-more-1">
        <div class="row member_section1 pd-t-30 pd-b-30">
          <div class="col-md-4 text-center pd-t-50" data-toggle="modal" data-target="#myModalsq">
              <img src="img/member.jpg" class="members">
              <div class="members_name">DINESH SINGH</div>
              <hr class="red">
              <p class="pd-t-10">
                <span>Vice President at Microsoft</span><br>
                and I would like to give all the<br>
                credit to great sunstone programs
              </p> 
        
          </div>
          <div class="col-md-4 text-center pd-t-50" data-toggle="modal" data-target="#myModalsq">
              <img src="img/member.jpg" class="members">
              <div class="members_name">DINESH SINGH</div>
              <hr class="red">
              <p class="pd-t-10">
               <span>Vice President at Microsoft</span><br>
                and I would like to give all the<br>
                credit to great sunstone programs
              </p> 
         </div>
          <div class="col-md-4 text-center pd-t-50" data-toggle="modal" data-target="#myModalsq">
              <img src="img/member.jpg" class="members">
              <div class="members_name">DINESH SINGH</div>
              <hr class="red">
              <p class="pd-t-10">
               <span>Vice President at Microsoft</span><br>
                and I would like to give all the<br>
                credit to great sunstone programs
              </p> 
          </div>
        </div>
      </div>

      <p class="text-center"><a class="btn btn-default btn_custom" id="load" role="button">LOAD MORE</a></p>
        
        
    </div> <!-- /container -->   

    <div class="about_wrapper">
      <div class="container about_sunstone">
        <div class="row">
          <div class="col-md-4 text-center blocks">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <span> HIGHEST ROI</span>
                <div class="pd-t-20 subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, porro in saepe reiciendis magnam repudiandae culpa ipsam ut harum repellendus?</div>
                <div class="row pd-t-10">
                </div>
              </div>
            </div>  
          </div>  

          <div class="col-md-4 text-center blocks">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <span> BY INDUSTRY, FOR INDUSTRY</span>
                <div class="pd-t-20 subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, porro in saepe reiciendis magnam repudiandae culpa ipsam ut harum repellendus?</div>
                <div class="row pd-t-10">
                </div>
              </div>
            </div>  
          </div>   

          <div class="col-md-4 text-center blocks">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <span> DELIVERED AT YOUR HOME</span>
                <div class="pd-t-20 subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, porro in saepe reiciendis magnam repudiandae culpa ipsam ut harum repellendus?</div>
                <div class="row pd-t-10">
                </div>
              </div>
            </div>  
          </div>    

        </div>
      </div>
    </div>
      
    <div class="container latestblogs_section">
      <div class="row">
        <div class="heading">MBA Crisis</div>
        <hr class="red">
        <div class="col-md-10 col-md-offset-1">
          <div class="row pd-t-50">
          <div class="col-md-5 text-left">
          <span style="font-family:'roboto'; font-weight:500;font-size:1.8em;">DELIVERED AT YOUR HOME</span>
            <p style="padding-left:0px;padding-top:1em;">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="col-md-7">
            <iframe width="640" height="390" src="https://www.youtube.com/embed/9XlTA52yQjM?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>


            <!-- BLOG POST 1 -->
            <div class="blog-post-1 col-md-4 text-center mg-t-50 hide">
            <div class="row">
              <div class="col-md-10 col-md-offset-1 blog no-side-padding">
                <img src="img/blog.jpg" class="blog_img">
                <!-- <div> -->
                <!--   <div class="blog_overlay">
                    <div class="blog_by text-center">DINESH SINGH</div>
                    <img src="img/student.png" class="overlay_image">
                    <i class="fa fa-facebook fa-lg fa-fw" class="social_icons"></i>
                    <i class="fa fa-twitter fa-lg fa-fw" class="social_icons"></i>
                    <i class="fa fa-linkedin fa-lg fa-fw" class="social_icons"></i>
                    <i class="fa fa-skype fa-lg fa-fw" class="social_icons"></i>
                  </div> -->
                  <div class="blog_overlay" >
                    <div class="row blog_by text-center">DINESH SINGH</div>
                    <div class="col-md-4 no-side-padding">
                    <img src="img/student.png" class="overlay_image text-left">
                    </div>
                    <div class="col-md-8 no-side-padding text-left">
                      <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                      <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                      <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                      <a href="#"><i class="fa fa-skype fa-fw"></i></a>
                    </div>
                  </div>

                <!-- </div> -->
                <div class="blog_heading"> Entrepreneurs</div>
                  <p>Life of any individuals starts with
                      very basic questions of why is he
                      or she born on this planet.</p>
                  <p class="text-center"><a href="http://knowledge.sunstone.in/" class="btn btn-default btn_custom" id="load" role="button">Read More</a></p>
              </div>
            </div>
              
            </div> <!-- end BLOG POST 1 -->
            
            <!-- BLOG POST 2 -->
            <div class="blog-post-2 col-md-4 text-center mg-t-50 hide">
             <div class="row">
              <div class="col-md-10 col-md-offset-1 blog no-side-padding">
                <img src="img/blog.jpg" class="blog_img">
                <div class="blog_overlay" >
                    <div class="row blog_by text-center">DINESH SINGH</div>
                    <div class="col-md-4 no-side-padding">
                    <img src="img/student.png" class="overlay_image text-left">
                    </div>
                    <div class="col-md-8 no-side-padding text-left">
                      <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                      <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                      <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                      <a href="#"><i class="fa fa-skype fa-fw"></i></a>
                    </div>
                  </div>
                <div class="blog_heading"> Entrepreneurs</div>
                  <p>Life of any individuals starts with
                      very basic questions of why is he
                      or she born on this planet.</p>
                  <p class="text-center"><a href="http://knowledge.sunstone.in/" class="btn btn-default btn_custom" id="load" role="button">Read More</a></p>
              </div>
            </div>
            </div> <!-- end BLOG POST 2 -->

            <!-- BLOG POST 3 -->
            <div class="blog-post-3 col-md-4 text-center mg-t-50 hide">
              <div class="row">
              <div class="col-md-10 col-md-offset-1 blog no-side-padding">
                <img src="img/blog.jpg" class="blog_img">

                  <div class="blog_overlay" >
                    <div class="row blog_by text-center">DINESH SINGH</div>
                    <div class="col-md-4 no-side-padding">
                    <img src="img/student.png" class="overlay_image text-left">
                    </div>
                    <div class="col-md-8 no-side-padding text-left">
                      <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                      <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                      <a href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                      <a href="#"><i class="fa fa-skype fa-fw"></i></a>
                    </div>
                  </div>
                <div class="blog_heading"> Entrepreneurs</div>
                  <p>Life of any individuals starts with
                      very basic questions of why is he
                      or she born on this planet.</p>
                  <p class="text-center"><a href="http://knowledge.sunstone.in/" class="btn btn-default btn_custom" id="load" role="button">Read More</a></p>
              </div>
            </div>
            </div> <!-- end BLOG POST 3 -->
          
          </div>
        </div>
      </div>
    </div>

    <!-- Featured In -->
    <div class="container featuredin_section">
      <div class="row">
        <div class="col-md-12">
          <div class="heading">Featured In</div>
          <hr class="red">
          <div id="slider_section">
            <div class="flexslider featuredin_slider">
                  <ul class="slides featuredin_slides">     
                    <li>
                      <img src="img/featured_in/BSlogo.png">
                      <h3>The future of MBA</h3>
                      <p>Sunstone is changing the face of Indian <br>management education</p> 
                    </li>
                    <li>
                      <img src="img/featured_in/zdnet.png">
                      <h3>The Engineer's Crisis</h3>
                      <p>Sunstone has devised a cost-effective solution <br>for the beleaguered Indian techie</p>
                    </li>
                    <li>
                      <img src="img/featured_in/bwlogo.png">
                      <h3>Democratising MBA</h3>
                      <p>Sunstone: More contemporary, practical,<br> value for money</p>
                    </li>
                    <li>
                      <img src="img/featured_in/BSlogo.png">
                      <h3>The future of MBA</h3>
                      <p>Sunstone is changing the face of Indian <br>management education</p> 
                    </li>
                    <li>
                      <img src="img/featured_in/zdnet.png">
                      <h3>The Engineer's Crisis</h3>
                      <p>Sunstone has devised a cost-effective solution <br>for the beleaguered Indian techie</p>
                    </li>
                    <li>
                      <img src="img/featured_in/bwlogo.png">
                      <h3>Democratising MBA</h3>
                      <p>Sunstone: More contemporary, practical, <br>value for money</p>
                    </li>
                    <li>
                      <img src="img/featured_in/BSlogo.png">
                      <h3>The future of MBA</h3>
                      <p>Sunstone is changing the face of Indian <br>management education</p> 
                    </li>
                    <li>
                      <img src="img/featured_in/zdnet.png">
                      <h3>The Engineer's Crisis</h3>
                      <p>Sunstone has devised a cost-effective solution <br>for the beleaguered Indian techie</p>
                    </li>
                    <li>
                      <img src="img/featured_in/bwlogo.png">
                      <h3>Democratising MBA</h3>
                      <p>Sunstone: More contemporary, practical, <br>value for money</p>
                    </li>
                    <li>
                      <img src="img/featured_in/BSlogo.png">
                      <h3>The future of MBA</h3>
                      <p>Sunstone is changing the face of Indian <br>management education</p> 
                    </li>
                    <li>
                      <img src="img/featured_in/zdnet.png">
                      <h3>The Engineer's Crisis</h3>
                      <p>Sunstone has devised a cost-effective solution <br>for the beleaguered Indian techie</p>
                    </li>
                    <li>
                      <img src="img/featured_in/bwlogo.png">
                      <h3>Democratising MBA</h3>
                      <p>Sunstone: More contemporary, practical,<br> value for money</p>
                    </li>
                  </ul>
            </div>

             <!-- Arrow section -->
              <div class="arrow text-center hide">
                  <img src="img/l-arrow.png" class="prev" alt="left-arrow">
                  <img src="img/r-arrow.png" class="next" alt="right-arrow">
              </div>
              <!-- End Arrow section -->
          </div>
        </div>  
      </div>
    </div>
    <!-- End Featured In -->
    <!-- <hr>
    <div class="container comparison_section">
      <div class="row">
        <div class="col-md-4 text-center blocks">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <i class="fa fa-paper-plane fa-fw fa-2x"></i><span> WATCH</span>
              <div class="subheading">Our most personal device yet.</div>
              <div class="row pd-t-10">
                <div class="col-md-6 col-md-offset-3">
                  <img src="img/student.png">
                </div>
              </div>
            </div>
          </div>  
        </div>  

        <div class="col-md-4 text-center blocks">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <i class="fa fa-apple fa-fw fa-2x"></i><span> WATCH</span>
              <div class="subheading">Our most personal device yet.</div>
              <div class="row pd-t-10">
                <div class="col-md-6 col-md-offset-3">
                  <img src="img/student.png">
                </div>
              </div>
            </div>
          </div>
        </div>   

        <div class="col-md-4 text-center blocks">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <i class="fa fa-android fa-fw fa-2x"></i><span> WATCH</span>
              <div class="subheading">Our most personal device yet.</div>
              <div class="row pd-t-10">
                <div class="col-md-6 col-md-offset-3">
                  <img src="img/student.png">
                </div>
              </div>
            </div>
          </div>
        </div>    

      </div>
    </div> -->

      <!-- STUDENT QUOTE -->

      <div class="banner mg-t-40 ">
          <ul style="padding:0px">
              <li style="background-image: url(img/slide2.jpg);">
                <div class="slide1-text">
                  <h1><b>DINESH SINGH</b></h1>
                  <h4 class="mg-b-20">Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit. Ipsam, ipsum incidunt quam<br> inventore rem architecto cumque nemo Corp<br> debitism ipsum dolor.</h4>

                  <a>
                    <div class="quote-more">Read More</div>
                  </a>
                </div>
              </li>
              <li style="background-image: url(img/slide3.jpg);">
                <div class="slide1-text">
                  <h1><b>DINESH SINGH</b></h1>
                  <h4 class="mg-b-20">Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit. Ipsam, ipsum incidunt quam<br> inventore rem architecto cumque nemo Corp<br> debitism ipsum dolor.</h4>

                  <a>
                    <div class="quote-more">Read More</div>
                  </a>
                </div>
              </li>
              <li style="background-image: url(img/slide4.jpg);">
                <div class="slide1-text">
                  <h1><b>DINESH SINGH</b></h1>
                  <h4 class="mg-b-20">Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit. Ipsam, ipsum incidunt quam<br> inventore rem architecto cumque nemo Corp<br> debitism ipsum dolor.</h4>

                  <a>
                    <div class="quote-more">Read More</div>
                  </a>
                </div>
              </li>
          </ul>
      </div>
      <!-- END STUDENT QUOTE -->
    <footer>
    <div class="footer">
      <div class="row pd-b-40">
        <div class="col-md-3 col-md-offset-1 footer_section">
          <p class="heading">SUNSTONE</p>
          <p>At Sunstone Business School, our aim is to <br>
                      inculcate in our students the self-belief and <br>
                      skills to be able to provide leadership to the <br>
                      industry at large.</p>
        </div>
        <div class="col-md-2 text-center footer_section">
          <i class="fa fa-flag"></i><br>
             <p class="head">Want more?</p>
          <a href="#">About</a><br>
          <a href="#">Our Work</a><br>
          <a href="#">Manifesto</a><br>
          <a href="#">Blog</a>
        </div>

        <div class="col-md-2 text-center footer_section">
          <i class="fa fa-phone"></i><br>
             <p class="head"> Talk to us</p>
              <p>Call us at +91 9015145156</p>
              <p>Not a big talker? Email us at</p>
          <a href="mailto:contactus@sunstone.in" target="_blank">contactus@sunstone.in</a>

        </div>

        <div class="col-md-3 text-center">
          <i class="fa fa-paper-plane"></i>
              <p>Sunstone, INJ Campus,
              Plot No. 10, Knowledge Park-3,
              Greater Noida(201308)</p>
              <a class="getintouch" target="_blank" href="https://www.google.co.in/maps/place/INJ+Business+School/@28.474978,77.49113,17z/data=!3m1!4b1!4m2!3m1!1s0x390cea0d11e5b153:0x7925e98dd70246e8?hl=en">
                Get Directions
              </a>
        </div>
      </div>
      <div class="row">
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
      <div class="row">
        <div class="col-md-8 col-md-offset-1">        
          <a href="#">SUNSTONE</a>
          <a href="#">About</a>
          <a href="#">Our Work</a>
          <a href="#">Manifesto</a>
          <a href="#">Blog</a><br>
          <p> Copyright © 2014 Anytime Learning Pvt Ltd. All rights reserved.</p>
        </div>
        <div class="col-md-3">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>

          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
          </span>

          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
          </span>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-offset-2">
          <p> Copyright © 2014 Anytime Learning Pvt Ltd. All rights reserved.</p>
        </div>
      </div> -->
     </div> 
    </footer>


            <!-- Modal 1-->
                  <div class="modal fade text-left" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                         #sunstone is great, you get to 
                          learn amazing new things here...
                          I’m loving very moment of teaching
                          to the awesome students!

                        </div>
                        <div class="text-center about">
                            Rajul Garg . a few days ago<br>
                           
                         </div>
                        <div class="text-right social">
                          <i class="fa fa-retweet fa-2x fa-fw"></i>
                           <i class="fa fa-star fa-2x fa-fw"></i>
                           <i class="fa fa-twitter fa-2x fa-fw"></i>
                        </div>
                      </div>
                    </div>
                  </div>  

                <!-- Modal student quote-->
                  <div class="modal fade text-left" id="myModalsq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <!-- <h4 class="modal-title" id="myModalLabel"> -->
                              <!-- <img src="img/team/9.jpg" class="circle">
                              <span class="bold1 pd-l-30"> Gaganpreet Luthra </span> -->
                          <!-- </h4> -->
                        </div>
                        <div class="modal-body pd-b-20 mg-b-50">
                         I would like to give all the credit to great 
                          sunstone programs for making my career 
                          a success. Two year ago I was just ordinary
                          programmer but now lorem ipsum dorem 
                          quorotsa for an amazing iposque jotomia.
                          Two year ago I was just a loremqui ipsum
                          dorem quorotsa to beome a great manager.

                        </div>
                        <div class="membr_name text-center">DINESH SINGH</div>

                        <div class="abt_member row no-side-margin">

                          <div class="col-md-4">
                          <img src="img/student.png" class="" width="150px">
                          </div>

                          <div class="col-md-8 ">
                            <div class="pd-t-10 pd-b-10">Vice president at Microsoft</div>
                            <span class="social_students">
                              <i class="fa fa-facebook"></i>
                              <i class="fa fa-twitter"></i>
                              <i class="fa fa-linkedin"></i>
                            </span>
                          </div>

                        </div>
                        
                      </div>
                    </div>
                  </div>   

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
                        <div class="modal-body pd-b-20 mg-b-50">
                        <h3>Sunstone Business School Specialized 1 year MBA for IT Professionals</h3>
                        
                         <form class="form-horizontal pd-t-20" action="" method="post">

                            <div class="form-group">
                              <label for="" class="col-sm-2 control-label">Name</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="name" class="form-control" id="" placeholder="Name" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="email" name="email" class="form-control" id="" placeholder="Email"required>
                              </div>
                            </div>
                             <div class="form-group">
                              <label for="" class="col-sm-2 control-label">Mobile</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="mobile" class="form-control" id="" placeholder="Mobile" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-2 control-label">Experience</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="experience" class="form-control" id="" placeholder="" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-2 control-label">Company </label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="company" class="form-control" id="" placeholder="" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-2 control-label">Your Query</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <textarea name="any_query"></textarea>
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
                        <div class="modal-body pd-b-20 mg-b-50">
                        <h3>Attend Info Web Session</h3>
                        <p>Please fill the following form if you are interested in attending 
                        our info web session and we’ll get back to you with the details</p>
                         <form class="form-horizontal pd-t-20" action="" method="post">

                            <div class="form-group">
                              <label for="" name="" class="col-sm-2 control-label">Name</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="name" class="form-control" id="" placeholder="Name" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="" class="col-sm-2 control-label">Mobile</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="mobile" class="form-control" id="" placeholder="Mobile" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="email" name="email" class="form-control" id="" placeholder="Email"required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-2 control-label">Year of experience</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="experience" class="form-control" id="" placeholder="" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-2 control-label">Current Organization </label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="current_org" class="form-control" id="" placeholder="" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-2 control-label">Comments</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <textarea name="comment" ></textarea>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="remind_me"> Not free this time, but let me know about next info session
                                  </label>
                                </div>
                              </div>
                            </div>

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


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/jquery.proximity.js"></script>
        <script src="js/custom.proximity.js"></script>
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
          $(function() {
              $('.banner').unslider();
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

        <script>
          $(window).scroll(function(){
            var x = $("body").scrollTop();
            var width = $(window).width();
            if (x == 0){
              $(".tothetop").fadeOut(100);
              $('.navbar').css('background','none').css('border-bottom','none');
              $('.navbar-brand').css('display','block');
              $(".nav2").css('display','none');
              $( function(){

                  $('.nav li a').hover( function(){

                      $(this).css('color', '#fff');

                  },
                  function(){

                      $(this).css('color', '#999');

                  });

              });
              // $('.navbar-brand').html('');
              // $('.menu').css('display','block');
              // $(".navbar").css('background-color','transparent');
              // $(".navbar").css('box-shadow','none');
              // if (width <= 500) {$(".navbar").css('margin-top','7.5em');}
              
            }
            else if (x > 100) {
              $(".tothetop").fadeIn(500);
              $('.navbar').css('background','rgb(255,255,255)').css('border-bottom','1px solid #d2d2d2');
              $(".navbar-brand").css('display','none');
              $(".nav2").css('display','block');
               $( function(){

                  $('.nav li a').hover( function(){

                      $(this).css('color', '#000');

                  },
                  function(){

                      $(this).css('color', '#999');

                  });

              });
              // $(".nav").hover('color','#000!important');
              // $('.menu').css('display','none');
              // $(".navbar").css('margin-top','0em').css('background','rgba(0,0,0,0.4)').css('box-shadow','0px 1px 0 0 #ddd');
              // if (width <= 500) {$(".navbar").css('margin-top','2.5em');}
              }
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
    </body>
</html>
