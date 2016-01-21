<?php include("header1.php"); ?>
<?php include("subheader.php"); 
if ($_SESSION["alert"] == TRUE) { ?>
<script type="text/javascript">
  alert("You have Successfully Registered.....");
</script>

<?php
unset($_SESSION["alert"]);
}
?> 

      <div class="container header_section">
        <div class="row">
          <div class="col-md-12" style="padding-bottom:70px;">
            <div class="pd-b-30"><span class="tagline"> Get <span class="orange_color hover_effect">Promoted </span></span>
            <div class="msgtagline">
            <span>Move to next level</span>
           <span>Increase your salary </span>
            <span>Change to management role</span>
            </div>
             <div class="pd-b-50"></div>
             <div class="pd-b-50"></div>
            <a href="program-details" class="btn btn-warning org_btn">PROGRAM DETAILS</a>
            </div>

            <!--/*<script>
		   
			 $(".hover_effect").hover(function(event) {
			 Act on the event */
			$(this).css({
			'-webkit-animation-play-state': 'paused ',
			'-moz-animation-play-state': ' paused',
			'-o-animation-play-state': ' paused',
			'animation-play-state': ' paused',
			});
			 },function(){
			 $(this).css({
			'-webkit-animation-play-state': ' running',
			'-moz-animation-play-state': ' running',
			'-o-animation-play-state': ' running',
			'animation-play-state': ' running',
			});
		 });
		
</script>-->  
            
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

             
            <!--<div class="header-arrow">
              <a href="#arrow_fix"><img src="img/down-arrow.png"></a>
              <div id="arrow_fix"></div>
            </div>-->
         </a>
        </div>
      </div>

      <!-- sub-title  -->
      <div class="hide subtitle">
        <span class="subtitle-icon"><i class="fa fa-paper-plane"></i></span>
        <span class="subtitle-text pd-l-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, eos quod sint neque illum commodi error atque maiores ipsa.</span>
      </div>
      <!-- end sub-title  -->
      <!-- <div>
        <button data-toggle="modal" data-target="#myModalr" class="org_btn">Request Brochure</button>
        <button data-toggle="modal" data-target="#myModala" class="org_btn">Attend Info session </button>
      </div> -->

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



    <div class="about_wrapper" id="about_wrapper">
      <div class="container about_sunstone">
        <div class="row ">
          <div class="col-md-4 col-sm-4 text-center blocks">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <!-- <span> HIGHEST ROI</span> -->
                <div class="heading" style="font-size:1.7em;">Highest ROI</div>
                <hr class="red">
                <div class="pd-t-20 subheading">
                300% return on investment and only up skilling management program 
                <font class="orange_color">approved by Govt </font>of India. Students increased their salaries by upto 
                80% within 6 months by growing vertically or changing roles.
                </div>
                <div class="row pd-t-10">
                </div>
              </div>
            </div>  
          </div>  

          <div class="col-md-4  col-sm-4 text-center blocks">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <!-- <span> BY INDUSTRY, FOR INDUSTRY</span> -->
                <div class="heading" style="font-size:1.7em;"> By Industry, For Industry</div>
                <hr class="red">
                <div class="pd-t-20 subheading">
                Program designed and delivered NOT by academicians or professors, 
                but BY senior industry leaders- CXOs and successful entrepreneurs. 
                Unlimited mentoring and coaching by senior industry experts?</div>
                <div class="row pd-t-10">
                </div>
              </div>
            </div>  
          </div>   

          <div class="col-md-4 col-sm-4 text-center blocks">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <!-- <span> DELIVERED AT YOUR HOME</span> -->
                <div class="heading" style="font-size:1.7em;">Delivered At Your Home</div>
                <hr class="red">
                <div class="pd-t-20 subheading">
                  12 Hrs/week of online learning including LIVE online sessions, coaching, 
                  and group work. Designed to accommodate working and travel schedule 
                  of professionals to provide flexibility with intensity
                </div>
                <div class="row pd-t-10">
                </div>
              </div>
            </div>  
          </div>    
        </div>
      </div>
    </div>
      <!-- STUDENT QUOTE -->
      <div class="banner">
          <ul style="padding:0px">
              <li style="background-image: url(img/slide2.jpg);">
                <div class="slide1-text">
                  <h1><b>NIHARIKA SHARMA</b></h1>
                  <h4 class="mg-b-20">Sr Product Manager, Oracle<br>Spring Class of 2014 <br>"Sunstone and senior management at Oracle helped me create this opportunity"</h4>

                  <a href="student-profiles-22">
                    <div class="quote-more">Read More</div>
                  </a>
                </div>
              </li>
              <li style="background-image: url(img/slide3.jpg);">
                <div class="slide1-text">
                  <h1><b>VAKUL AGARWAL</b></h1>
                  <h4 class="mg-b-20">Technical Product Manager,<br> Amazon<br> Spring Class of 2014<br>"Business is all about perseverance, validation and evolution"</h4>

                  <a href="student-profiles-21">
                    <div class="quote-more">Read More</div>
                  </a>
                </div>
              </li>
              <li style="background-image: url(img/slide4.jpg);">
                <div class="slide1-text">
                  <h1><b>ANSHUMAN MISRA</b></h1>
                  <h4 class="mg-b-20">Director of Engineering,<br> Bharti SoftBank<br> Class of 2012<br> "For any role that involves working beyond individual capacity….
                    business knowledge is a MUST."</h4>

                  <a href="student-profiles-18">
                    <div class="quote-more">Read More</div>
                  </a>
                </div>
              </li>
      
  <!-- Repeat the scroll, to signify the repeatedness with smooth scroll --> 


 <li style="background-image: url(img/slide2.jpg);">
                <div class="slide1-text">
                  <h1><b>NIHARIKA SHARMA</b></h1>
                  <h4 class="mg-b-20">Sr Product Manager, Oracle<br>Spring Class of 2014 <br>"Sunstone and senior management at Oracle helped me create this opportunity"</h4>

                  <a href="student-profiles-22">
                    <div class="quote-more">Read More</div>
                  </a>
                </div>
              </li>
              <li style="background-image: url(img/slide3.jpg);">
                <div class="slide1-text">
                  <h1><b>VAKUL AGARWAL</b></h1>
                  <h4 class="mg-b-20">Technical Product Manager,<br> Amazon<br> Spring Class of 2014<br>"Business is all about perseverance, validation and evolution"</h4>

                  <a href="student-profiles-21">
                    <div class="quote-more">Read More</div>
                  </a>
                </div>
              </li>
              <li style="background-image: url(img/slide4.jpg);">
                <div class="slide1-text">
                  <h1><b>ANSHUMAN MISRA</b></h1>
                  <h4 class="mg-b-20">Director of Engineering,<br> Bharti SoftBank<br> Class of 2012<br> "For any role that involves working beyond individual capacity….
                    business knowledge is a MUST."</h4>

                  <a href="student-profiles-18">
                    <div class="quote-more">Read More</div>
                  </a>
                </div>
              </li>

<!-- End of Repeat --> 

          </ul>
      </div>
      <!-- END STUDENT QUOTE -->
      
      <!-- counter Wall --> 
           <div class="container-fluid text-center pd-b-50 pd-t-50 counter_bg">
      <h1 class=" pd-b-20 ">India's largest management program for Tech professionals</h1>
 
          <div class="row subtagline"> 
                    <div class="col-md-4 col-sm-4  text-center count-item">
                      <img src="img/students.png">
                      <p><span class="count1 counter" data-from="0" data-to="1000" data-speed="2000">0</span><span> +</span> </p>
                      <p class="">STUDENTS SUCCESS STORIES</p>
                    </div>
    
                    <div class="col-md-4 col-sm-4 text-center count-item">
                      <img src="img/companies.png">
                      <p><span class="count2 counter" data-from="0" data-to="350" data-speed="2000">0</span> <span>+</span></p>
                      <p class="">COMPANIES</p>
                    </div>
    
                    <div class="col-md-4 col-sm-4 text-center count-item">
                      <img src="img/cities.png">
                      <p class="count3 counter" data-from="0" data-to="36" data-speed="2000">0</p>
                      <p class="">CITIES</p>
                    </div>
    
                    <!-- <div class="col-md-3 col-sm-3  text-center count-item">
                      <img src="img/countries.png">
                      <p class="count4 counter" data-from="0" data-to="15000" data-speed="2000">0</p>
                      <p class="">HOURS LIVE SESSIONS</p>
                    </div> -->
    
    
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
      </div>
      <!-- counter Wall -->
	  
      <!-- code added by aruna -->
	  
	  
	  <!--<div class="container featuredin_section" style="padding-top:0px;">
        <div class="col-md-10 col-md-offset-1">
          <div class="heading">Must Read Articles For Success</div>
		   
          <hr class="red">
              <div>&nbsp;</div>
			  <div style="display: table;">
    <div style="display: table-row">
        <div style="width: 10%; display: table-cell;"> <img src="img/stevejobs.png" width="90" height="30px;"> </div>
        <div style=" width:25%;display: table-cell;">   <h3 style=" text-align:center"><a  target="_blank" href="http://knowledge.sunstone.in/steve-jobs-didnt-do-mba-so-why-should-i-2/" style="font-family:'roboto'; color:#2d2a2a; font-weight:400;font-size:21px;">Steve Jobs didn’t do an MBA, so why should I?</a></h3>
              <p   align="center">
				<a  target="_blank" href="http://knowledge.sunstone.in/steve-jobs-didnt-do-mba-so-why-should-i-2/"><img src="img/orange-dots.png" title="Read More" width="31" height="18"></a>
				</p></div>
				
				
				<div style="width: 10%; display: table-cell;"> <img src="img/I-quit.png"  width="110" height="276"  > </div>
        <div style=" width:25%;display: table-cell;">   <h3 style=" text-align:center"><a target="_blank"  href="http://knowledge.sunstone.in/should-i-quit-my-job/"  style="font-family:roboto; color:#2d2a2a;font-weight:400;font-size:21px;">Should I quit my job?</a></h3><p  align="center">
			<a  target="_blank" href="http://knowledge.sunstone.in/should-i-quit-my-job/"><img src="img/orange-dots.png" title="Read More"  width="31" height="18"></a>	
			</p> </div>
				
			 <div style="width: 10%; display: table-cell;"> <img src="img/Saket.jpg"  width="100px" height="30px" ></div>
        <div style=" width:30%;display: table-cell;">  <h3 style=" text-align:center"><a target="_blank"  href="http://knowledge.sunstone.in/a-software-engineers-journey-to-product-management-at-olx/" style="font-family:roboto; color:#2d2a2a;font-weight:400;font-size:21px;">An engineer’s journey to become Product Manager at OLX</a></h3>
				<p  align="center"><a  target="_blank" href="http://knowledge.sunstone.in/a-software-engineers-journey-to-product-management-at-olx/" ><img src="img/orange-dots.png" title="Read More"  width="31" height="18"></a> </p> </div>	
				
    </div>
</div>

              
			  </hr>
			  
			  <div >
			  </div>
			 
			  <div>&nbsp;</div>
			 
  </div>
		  
		 
      </div>-->
	  
	  


<div class="container featuredin_section" style="padding-top:0px;">
        <div class="col-md-10 col-md-offset-1">
          <div class="heading">Must Read Articles For Success</div>
          <hr class="red">
              <div class="col-md-4 col-sm-4 col-xs-12 text-center pd-t-40 ">
			  <a  target="_blank" href="http://knowledge.sunstone.in/steve-jobs-didnt-do-mba-so-why-should-i-2/" > <img src="img/stevejobs.png" width="90" height="30px;"></a>
                <h3><a  target="_blank" href="http://knowledge.sunstone.in/steve-jobs-didnt-do-mba-so-why-should-i-2/" style="font-family:'roboto'; color:#2d2a2a; font-weight:400;font-size:18px;">Steve Jobs didn’t do an MBA, so why should I?</a></h3>
              <p  >
				<a  target="_blank" href="http://knowledge.sunstone.in/steve-jobs-didnt-do-mba-so-why-should-i-2/"><img src="img/orange-dots.png" title="Read More" width="31" height="18"></a>
				</p>
              </div>
              
              <div class="col-md-4 col-sm-4 col-xs-12 text-center pd-t-40  ">
			  <a target="_blank"  href="http://knowledge.sunstone.in/should-i-quit-my-job/" ><img src="img/I-quit.png"  width="110" height="276"  ></a>
                 <h3 ><a target="_blank"  href="http://knowledge.sunstone.in/should-i-quit-my-job/"  style="font-family:roboto; color:#2d2a2a;font-weight:400;font-size:18px;">Should I quit my job?</a></h3><p style="padding-top:30px;">
			<a  target="_blank" href="http://knowledge.sunstone.in/should-i-quit-my-job/"><img src="img/orange-dots.png" title="Read More"  width="31" height="18"></a>	
			</p>
          </div>

              <div class="col-md-4 col-sm-4 col-xs-12 text-center pd-t-40  ">
			 <a target="_blank"  href="http://knowledge.sunstone.in/a-software-engineers-journey-to-product-management-at-olx/"> <img src="img/Saket.jpg"  width="100px" height="30px" ></a>
                 <h3><a target="_blank"  href="http://knowledge.sunstone.in/a-software-engineers-journey-to-product-management-at-olx/" style="font-family:roboto; color:#2d2a2a;font-weight:400;font-size:18px;">An engineer’s journey to become Product Manager at OLX</a></h3>
				<p style="padding-top:10px;"><a  target="_blank" href="http://knowledge.sunstone.in/a-software-engineers-journey-to-product-management-at-olx/" ><img src="img/orange-dots.png" title="Read More"  width="31" height="18"></a> </p>
              </div>
			  </hr>
			  
			  <div >
			  </div>
			 

			  <div>&nbsp;</div>
			 
  </div>
		  
		 
      </div>
	  
      <!-- code added by aruna ends -->
      
             <div class="clearfix "></div>
    <div class="container latestblogs_section">
      <div class="row">
        <div class="heading">The MBA Crisis</div>
        <hr class="red">
        <div class="col-md-10 col-md-offset-1">
          <div class="row pd-t-50">
          <div class="col-md-5 col-sm-5 text-left">
          <span style="font-family:'roboto'; font-weight:400;font-size:18px;">MBA Education Is Being Challenged</span>
            <p style="padding-left:0px;padding-top:1em;">
              In an era where the MBA as a product is increasingly up for scrutiny, is considered 
              too archaic, theoretical and expensive , Sunstone provides the antidote to what ails graduate management
education globally and is now the largest management program for tech
professionals.



            </p>
          </div>
          <div class="col-md-7 col-sm-7">
            <iframe width="100%" height="390" src="https://www.youtube.com/embed/sBLH1SGhryo" frameborder="0" allowfullscreen></iframe>
            <!-- <iframe width="100%" height="390" src="https://www.youtube.com/embed/9XlTA52yQjM?rel=0" frameborder="0" allowfullscreen></iframe> -->
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


    <!-- replaced by shaguna
    <div class="container featuredin_section">
      <div class="row">
        <div class="col-md-12">
          <div class="heading">Featured In</div>
          <hr class="red">
              <div class="col-md-4 col-sm-4 col-xs-12 text-center pd-t-40 pd-b-40">
                <img src="img/featured_in/BSlogo.png">
                <h3>The future of MBA</h3>
                <label><i class="fa fa-quote-left fa-fw"></i> Sunstone is changing the face of Indian <br>management education</label> 
              </div>
              
              <div class="col-md-4 col-sm-4 col-xs-12 text-center pd-t-40  pd-b-40">
                <img src="img/featured_in/zdnet.png">
                <h3>The Engineer's Crisis</h3>
                <label><i class="fa fa-quote-left fa-fw"></i> Sunstone has devised a cost-effective solution <br>for the beleaguered Indian techie</label>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12 text-center pd-t-40  pd-b-40">
                <img src="img/featured_in/bwlogo.png">
                <h3>Democratising MBA</h3>
                <label><i class="fa fa-quote-left fa-fw"></i> Sunstone: More contemporary, practical,<br> value for money</label> 
              </div>
                        
        </div>
      </div>
    </div> 
 --> 

<!--//////Code edited by Aruna//////--> 
    <div class="container featuredin_section"  style="padding-top:0px;">
        <div class="col-md-12">
          <div class="heading">Featured In</div>
          <hr class="red">
              <div class="col-md-4 col-sm-4 col-xs-12 text-center pd-t-40 ">
               <a target="_blank" href="http://indiatoday.intoday.in/prnewswire/index.jsp?doc=201504010644PR_NEWS_EURO_ND__enIN201504013328_indiapublic&dir=25"> <img src="img/featured_in/indiatoday-logo_35.jpg" width="180" height="50" ></a>
                <h3><a target="_blank" href="http://indiatoday.intoday.in/prnewswire/index.jsp?doc=201504010644PR_NEWS_EURO_ND__enIN201504013328_indiapublic&dir=25" style="font-family:'roboto'; color:#2d2a2a; font-weight:400;font-size:18px;">Sunstone Graduates See up to 150% Increase in Salaries</a></h3>
                <label style="font-size:16px;"><i class="fa fa-quote-left fa-fw"></i>Sunstone Business School saw an average 1.7x salary increase in salaries of its alumni group.</label> 
				
				 <p><a  target="_blank" href="http://indiatoday.intoday.in/prnewswire/index.jsp?doc=201504010644PR_NEWS_EURO_ND__enIN201504013328_indiapublic&dir=25"><img src="img/orange-dots.png" title="Read More" width="31" height="18"></a> </p></div>
				
             
              
              <div class="col-md-4 col-sm-4 col-xs-12 text-center pd-t-40  ">
             <a target="_blank"  href="http://www.zdnet.com/article/the-engineers-crisis-sunstones-program-for-mid-career-techies-part-2/" >   <img src="img/featured_in/zdnet.png"></a>
                <h3><a target="_blank"  href="http://www.zdnet.com/article/the-engineers-crisis-sunstones-program-for-mid-career-techies-part-2/"  style="font-family:'roboto'; color:#2d2a2a; font-weight:400;font-size:18px;">The Engineer's Crisis</a></h3>
                <label style="font-size:16px;"><i class="fa fa-quote-left fa-fw"></i> Sunstone has devised a cost-effective solution <br>for the beleaguered Indian techie</label>
				 <p style="padding-top:30px;">
				<a  target="_blank" href="http://www.zdnet.com/article/the-engineers-crisis-sunstones-program-for-mid-career-techies-part-2/"><img src="img/orange-dots.png" title="Read More"  width="31" height="18"></a> 
              </p>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12 text-center pd-t-40  ">
               <a target="_blank"  href="http://www.businessworld.in/news/opinion/interviews/democratising-mba/1420042/page-1.html" > <img src="img/featured_in/bwlogo.png"></a>
                <h3><a target="_blank"  href="http://www.businessworld.in/news/opinion/interviews/democratising-mba/1420042/page-1.html"  style="font-family:'roboto'; color:#2d2a2a; font-weight:400;font-size:18px;">Democratising MBA</a></h3>
                <label style="font-size:16px;"><i class="fa fa-quote-left fa-fw"></i> Sunstone: More contemporary, practical,<br> value for money</label>
				 <p style="padding-top:30px;">
				<a  target="_blank" href="http://www.businessworld.in/news/opinion/interviews/democratising-mba/1420042/page-1.html" ><img src="img/orange-dots.png" title="Read More"  width="31" height="18"></a> 
              </p>
              </div>
			  </hr>
			  
			  <div >
			  </div>

         </div>
    </div>  

 <!--//////Code edited by Aruna ends//////-->  

    <!-- End Featured In -->



    <!-- Featured In -->
    <div class="container featuredin_section hide">
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

     
     <script type="text/javascript">
    $(document).ready(function(){
      var broId = $('#bro_id').val();
      if(broId){
         $('#myModalr').modal();
      }
   
   
  });
</script>
    <!-- Main jumbotron for a primary marketing message or call to action -->
      <?php 
        $bro_id = $_GET['brochure']
    ?>
     <input type="hidden" value="<?php echo $bro_id; ?>" id="bro_id"> 

     <?php 
        $contact_id = $_GET['contact']
    ?>
     <input type="hidden" value="<?php echo $contact_id; ?>" id="contact_id">  
     <a id="footertrigger" href="#gotofooter" style="display:none !important;"></a>

<?php include("footer.php") ?>