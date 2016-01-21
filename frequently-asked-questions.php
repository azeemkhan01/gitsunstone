<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
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


    <div class="container si_section">
      <div class="row">
        <div class="col-md-12 no-side-margin">
          <!-- <div class="">Frequently Asked Questions</div>
          <div class="red"></div> -->
          <!-- div class="si_subtagline">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, dicta saepe quia reiciendis sit. Autem, ratione, assumenda obcaecati minus possimus
          </div> -->
        </div>
      </div>
    </div>


<?php
   $faq = $_GET['id'];
    if($faq == 1){
       $faq1 = $faq;

    }
   
     ?>
      <input type="hidden" value="<?php echo $faq1; ?>" id="faq1">   


<div class="container no-side-padding" id="pgpm_overview">
      <div class="main col-md-8">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="pd-t-50"></div>
              <hr class="heading_line">
              <div class="heading bold">Frequently Asked Questions</div>
              <hr class="heading_line"> 
              <a name="pfaq"></a>

            <ul class="faq_btns pd-t-20">
              <a href="#pfaq" class="btn_pfaq"><li class="big_btns bold" id="btn_pfaq">Program FAQ </li></a>
              <a href="" class="btn_afaq"><li class="big_btns bold">Admission FAQ </li></a>
            </ul> 


            <div class="pgpm_content">
              <!-- <div id="pfaq"></div> -->
              <div class="pd-t-40"></div>
              <hr class="heading_line1">
              <div class="heading1 bold">Program FAQ</div>
              <hr class="heading_line1">           
              <br>
              
              
              <div class="pd-t-40"></div>
                       <div class="panel-group" id="accordion">
                       
                            <div class="panel panel-warning">
                                  <div class="panel-heading ">
                                      <h4 class="panel-title ">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOneNano">What are Nanodegree Programs?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseOneNano" class="panel-collapse collapse in">
                                      <div class="panel-body">
                                          <p class="para_style">
                                             Nanodegrees are changing the education by delivering experiential and hands-on learning by industry experts. Nanodegrees are built by industries and are widely recognized as skill-oriented programs in specific areas. The nano-MBA differences are:
                                          </p>
                                                <ul class="course_list">
                                                  <li><i class="fa fa-check-square-o fa-fw"></i> Highly interactive online model with live coaching and regular classes, which are accessible and affordable.</li>
                                                  <li><i class="fa fa-check-square-o fa-fw"></i> Non-theoretical coursework that includes hands-on skills and projects for immediate benefits</li>
                                                  <li><i class="fa fa-check-square-o fa-fw"></i> One-on-one coaching, project review and feedback</li>
                                                  <li><i class="fa fa-check-square-o fa-fw"></i> Career development center to create job opportunities and support to convert them</li>
                                                </ul>
                                              <p class="para_style">
                                                The Sunstone nano-MBA program is designed with the aim of helping working professionals steer their career in the right direction. Some wish to rise through the managerial levels in their current functions, while others prefer to change tracks altogether. For example, a delivery manager might aspire for product management roles, a technical ERP consultant could attempt to break into to functional consulting, and a post-sales delivery manager sometimes dreams of making it into pre-sales and business development.
                                              </p> 

                                      </div>
                                  </div>
                             </div>
                             
                             <div class="panel panel-warning">
                                  <div class="panel-heading ">
                                      <h4 class="panel-title ">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoNano">Who should go for nano-MBA?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseTwoNano" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p class="para_style">
                                               nano-MBA is for everyone. Any working professional solving for future growth should have strong business foundations to pitch for the right opportunity within or outside the company. Some of the typical profiles are:
                                             </p>
                                             <ul class="course_list">
                                               <li><i class="fa fa-check-square-o fa-fw"></i> Engineers / Analysts / Operations/ Sales/ Market Research people looking for growth in their current trajectory, and hence, need to learn business skills to grow their influence and communicate effectively with stakeholders.</li>             
                                               <li><i class="fa fa-check-square-o fa-fw"></i> Individual contributors/ New managers (e.g., Team Leads, Project Managers) planning to grow in people management and client engagement (Account Management, Product Management, Business Development)</li>     
                                               <li><i class="fa fa-check-square-o fa-fw"></i> Senior mid-level managers (e.g., Delivery Manager, Engagement Managers) planning to take more business responsibilities.</li>
                                               <li><i class="fa fa-check-square-o fa-fw"></i> Architects / Solution Architects planning to grow into more CTO-like roles for a product/ enterprise and looking to get a more customer view of technology.</li>
                                             </ul>

                                      </div>
                                  </div>
                              </div>
                              
                              <div class="panel panel-warning">
                                  <div class="panel-heading ">
                                      <h4 class="panel-title ">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThreeNano">What are the benefits of nano-MBA</a>
                                      </h4>
                                  </div>
                                  <div id="collapseThreeNano" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <ul class="course_list">             
                                            <li><i class="fa fa-check-square-o fa-fw"></i> <strong> Complete Business foundation knowledge </strong> in areas such as Finance, Marketing, Client Engagement, Communication to make you ready for growth, promotions, move into different roles and change your career trajectory.</li>             
                                            <li><i class="fa fa-check-square-o fa-fw"></i> <strong> Strong network </strong> of a community representing 350+ companies in 36 locations to make jobs, opportunities and mentorship accessible for life</li>             
                                            <li><i class="fa fa-check-square-o fa-fw"></i> <strong> Active career development service </strong> and career coaching to help students create job opportunities and career transitions. Sunstone students have been consistently getting significant salary increases and role changes. Read more about it at <a href="career" class="orange_color">Career</a>.</li>
                                          </ul>

                                      </div>
                                  </div>
                              </div>
                              
                              <div class="panel panel-warning">
                                  <div class="panel-heading ">
                                      <h4 class="panel-title ">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFourNano">What is Sunstone nano-MBA program?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseFourNano" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p class="para_style">
                                             Professionals need to build business skills to grow in their career paths as well as explore other career options. This certification is approved by Govt of India (NSDC) as management up-skilling program for working professionals. Following are the objectives of the program:
                                             </p>
                                             <ul class="course_list">
                                               <li><i class="fa fa-check-square-o fa-fw"></i> Become ready for business roles by understanding business ecosystem and making business decisions.</li>
                                               <li><i class="fa fa-check-square-o fa-fw"></i> Learn and practice basic management tools in all areas such as Finance, Marketing, Economics</li>
                                               <li><i class="fa fa-check-square-o fa-fw"></i> Understand your career choices and plan your career trajectory. Work with career coaches to identify opportunities</li>
                                               <li><i class="fa fa-check-square-o fa-fw"></i> Do specialized courses in area of your choice e.g., general technology management, Entrepreneurship and leadership, business analytics, digital marketing</li>
                                               <li><i class="fa fa-check-square-o fa-fw"></i> Network with Sunstone industry mentors and create a large network for life</li>
                                             </ul>

                                      </div>
                                  </div>
                              </div>
                              

                       
                       
                       
                       
                       
                              <div class="panel panel-warning">
                                  <div class="panel-heading ">
                                      <h4 class="panel-title ">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Does this program require me to leave my current job?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseOne" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>No. This program does not require you to leave your job. However, you need to spend 12-13 Hours every week to complete it on time.</p>

                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Is this a completely online program?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseTwo" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>Curriculum is delivered 100% online. However, its highly interactive program with small class sizes so 
                                          everyone! Students are connected with their peers and coaches 24X7 through the course portal.</p>
                                          <p>Sunstone also organizes networking days at certain cities where students, alumni, industry guests come together for networking sessions</p>
                                      </div>
                                  </div>
                              </div>
                              
                              
                               <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">What is a nano-MBA? How is it different from MBA?</a>
                                      </h4>
                                  </div>
                                  <div id="collapse11" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>Nanodegrees such as nano-MBA are intense, and project based programs run by industry experts to build in-demand skills in specific areas. They are considered practical learning based programs as they focus on project works rather than going through text books. They are useful for anyone who wants to learn MBA skills through practical learning in a shorter duration.</p>
                                      </div>
                                  </div>
                              </div>
                              
                              
                               <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">What are different specializations and how should I choose one?</a>
                                      </h4>
                                  </div>
                                  <div id="collapse12" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>Please refer to our curriculum <<hyperlink>> for specializations. Students choose specialization based on their career choices. For example: senior professionals or people interested in entrepreneurship choose Business Planning and Entrepreneurship as they want to learn skills such as idea generation, business planning, operating plans. Analytics is chosen by people who want to advance in careers related to analytics.
</p>
                                          <p>You don’t need to decide it at the time of admission. You will do the core courses first, and then you can discuss with coaches to identify right area for you.</p>
                                      </div>
                                  </div>
                              </div>
                              
                              

                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Is there placement assistance?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseThree" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>Yes. Sunstone is the only program for working professionals in India with a career development service. It helps students to create opportunities and pitch for those opportunities</p>
                                      </div>
                                  </div>
                              </div>


                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">How is the program delivered?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseFour" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>Sunstone curriculum is built on Problem based learning, it’s NOT a textbook based program. Faculty 

                                            acts like a coach and help students to solve business problems. Sunstone is considered the most 

                                            interactive online program with 4 Hrs/week of online LIVE classes and another 8 Hrs/week of group 

                                            learning through problems. All students have access to Sunstone portal with licensed content from 

                                            our partners including Harvard Business Publishing. Assignments, Project work, Team Workshops 

                                            and Networking Events are other parts of the Curriculum.</p>
                                      </div>
                                  </div>
                              </div>


                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">I don’t want to move into business roles or management. How will this program help?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseFive" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>Some Sunstone students want to grow as individual contributor or technical specialists. nano-MBA is the right program for them as it provides foundational knowledge and skills that are required to manage stakeholders and understand their perspective. Even when you follow a technical specialist path, it’s important to build these skills so you can appreciate other perspective and sell your ideas.</p>
                                      </div>
                                  </div>
                              </div>



                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">How is this program recognized by Technology companies?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseSix" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>Sunstone certification has a huge value because it signals the knowledge and skills of our students. 

                                              Sunstone is a rigorous program that requires sincerity and commitment to complete. Various 

                                              companies have been posting relevant jobs through placement services. Our recognition is also a 

                                              result of our alumni’s success and performance in their companies. However, it ultimately comes 

                                              down to specific student’s knowledge and skills.</p>
                                      </div>
                                  </div>
                              </div>


                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">I have only done technical roles in the past. Can I really move to management roles through this program?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseSeven" class="panel-collapse collapse">
                                      <div class="panel-body">
                                      <p>This program helps you create differentiation by building critical business knowledge required to move 

                                      and grow in management roles. Sunstone students started to move towards a management career 

                                      path after doing this program. You need to be persistent with your effort and commitment to make it 

                                      happen</p> 
                                     </div>
                                  </div>
                              </div>
                              


                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">How many hours of commitment will be required to complete the program?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseEight" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <p>Majority students complete the program by spending 12-13 hours every week. You would not be able 

                                        to complete the program in given time frame if you can’t spend this time regularly.</p>                                      
                                      </div>
                                  </div>
                              </div>

                               <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Who are you affiliated with?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseNine" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>Sunstone is the largest Govt of India approved up-skilling management program in India. Students will get NSDC (National Skills Development Center) approved certificates.</p>
                                      </div>
                                  </div>
                              </div>



                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">What if I have to travel out during the program?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseEleven" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <p>Nothing changes. Most of the delivery of the program is done through web based classes and group 

                                        assignments which require co-ordination over email, phone etc. You still need to spend 12-13 

                                        Hrs/week to be regular.</p>
                                      </div>
                                  </div>
                              </div>

                              
                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTweleve">How are students evaluated? How are exams conducted?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseTweleve" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <p>There is no final exam. This is a credit based system so students need to complete (pass) required 

                                        number of courses in the level. If you fail any course, you need to repeat it to clear it.</p>
                                        <p>All courses have their own evaluation criterion, which can be a mix of individual assignments, group

                                          problems, project work, class participation.</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">What if I can’t spend required time?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseThirteen" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <p>If you can’t spend time on program due to higher workload or some other situation, you can drop certain courses in between and complete the certificate in a little bit longer time. You are allowed to complete program in one year.</p>
                                      </div>
                                  </div>
                              </div>

                             
                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseForteen">I want to be an entrepreneur, will this program help?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseForteen" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <p>Sunstone has one of the strongest ecosystems for entrepreneurs. Multiple successful companies 

                                        have come out from Sunstone community as we feel passionately about developing a spirit of 

                                        entrepreneurship. Sunstone runs “Sunstone Capital Fund” to invest in startups by Sunstone alumni. 

                                        Senior jobs in start-ups are also an important part of our placement focus.</p>
                                      </div>
                                  </div>
                              </div>

 
<!--
                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen">Can I pause or completely stop after completing Level 1/Level2?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseFifteen" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <p>Yes. We also recommend students to think about a level at a time. A large number of students only 

                                        complete PGPM Level-1 and receive benefits in their career. Level-1 is enough to provide to strong 

                                        business foundational skills and it also provide strong networking opportunities through Sunstone 

                                        community.</p>
                                      </div>
                                  </div>
                              </div>
-->

                              <div class="panel panel-warning"id="afaq">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen">Who has designed the curriculum?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseSixteen" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <p>The basis of our program is learning by problem solving. We take real world problem situations and

                                        impart management concepts in the course of solving them. Our program is designed and monitored 

                                        and delivered by senior Industry professionals.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
              
              <!-- <div id="afaq"></div> -->
              <div class="pd-t-40" ></div>
              <div id="level11"></div>
              <hr class="heading_line1">
              <div class="heading1 bold faq">Admissions FAQ</div>
              <hr class="heading_line1">  
              <div class="pd-t-40"></div>

              
                  <div class="panel-group" id="accordion2">

                   
                              <div class="panel panel-warning">
                                  <div class="panel-heading ">
                                      <h4 class="panel-title ">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1">When will the next batch start and how can I apply for it?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseOne1" class="panel-collapse collapse in">
                                      <div class="panel-body">
                                      <p>Admission process is in progress for our next batch. You can check the <a href="admissions" class="orange_color">admissions page</a> or 

                                      send an e-mail to <a href="mailto:admissions@sunstone.in" class="orange_color">admissions@sunstone.in</a> for further details.</p>
                                      </div>
                                  </div>
                              </div>

 
                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo1">When should I apply?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseTwo1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                      <p>We have an ongoing admission process so candidates are encouraged to schedule interview

                                          whenever they are ready for the interaction. You can send an  e-mail to <a href="mailto:admissions@sunstone.in" class="orange_color">admissions@sunstone.in</a> for 

                                          more information</p>
                                      </div>
                                  </div>
                              </div>

 
                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree1">Can I talk to previous or current students to know more about the program?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseThree1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                         <p>Yes, we encourage you to speak to them. If you need assistance in getting connected to our alumni or students, reach out to admissions team at <a href="mailto:admissions@sunstone.in" class="orange_color">admissions@sunstone.in</a> .</p>
                                      </div>
                                  </div>
                              </div>

 
                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFour1">I might shift my location to a different city (e.g., Delhi to Bangalore) during the program. Will the program allow me to shift the batch?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseFour1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>The program is run in an integrated fashion for all our students worldwide. There is no concept of a local batch. Hence its easy to continue with the program if you shift your location. Within India, we have critical mass in North (Delhi region), West (Pune/Mumbai) and South (Bangalore/Chennai/Hyderabad).</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFive1">Do I have to complete the program in 5 months only?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseFive1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <p>Not necessarily. You are given 12 months to complete the program. Penalty will be applied if you can’t complete in 12 months.</p>
                                      </div>
                                  </div>
                              </div>

 
                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseSix1">I am an engineer working in non-tech industry, can I apply?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseSix1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>Yes you can apply. The program is designed to make sense for most professionals who are passionate to build perspective and committed to grow more on the business side of any industry.</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven1">What would be the size for next batch?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseSeven1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>We follow a cohort based learning and every cohort is up to 30 students. Our batches are usually about 30-60 students.</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseEight1">What is the fee structure and are there any EMI options?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseEight1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                         <p>Please check <a href="admissions" class="orange_color">Fee section </a>for this information. There are several bank and credit card partnership so you can break it in instalments at a very nominal interest rate. You can check with admissions team about student loans and instalments options.</p>
                                      </div>
                                  </div>
                              </div>


 
                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTen1">Do I need to be in certain locations to enroll in the program?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseTen1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                         <p>Sunstone has students from 11 countries and 36 different locations. Students can join the program

                                            from anywhere in India or globally. Most of the delivery of the program is done through web based live 

                                            classes and group assignments which require co-ordination over email, phone etc. Classes are held 

                                            late evenings on weekdays and mornings on Saturday as per India time. All classes are recorded as 

                                            well so that students can view them later.</p>
                                      </div>
                                  </div>
                              </div>
                  </div>
            </div>
          </div>
        </div>
        <br>
      </div>
       <script>
        $( function() {
         var lav1 =  $('#faq1').val();

         if(lav1){
          $(".btn_afaq").trigger("click");
         }
         
        });  
      </script>

      <?php include("sidebar.php") ?>
    </div><!-- /container -->

 <?php include("footer.php") ?>