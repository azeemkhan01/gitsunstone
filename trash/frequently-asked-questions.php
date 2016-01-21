<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<?php include("header1.php"); ?>

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
            <ul class="faq_btns pd-t-20">
              <a href="" class="btn_pfaq"><li class="big_btns bold" id="btn_pfaq">Program FAQ </li></a>
              <a href="" class="btn_afaq"><li class="big_btns bold">Admission FAQ </li></a>
            </ul> 

            <div class="pgpm_content">
              <!-- <div id="pfaq"></div> -->
              <div class="pd-t-40"></div>
              <hr class="heading_line">
              <div class="heading bold faq">Program FAQ</div>
              <hr class="heading_line">           
              <br>
              <!-- <div class="pd-b-10">
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold pd-b-10">Does this program require me to leave my current job?</span>
              </div>
              <div class="pd-b-10">
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">When will the next batch start and how can I apply for it?</span> 
              </div>
              <div class="pd-b-10">  
                 <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">What are the eligibility criteria for PGPM?</span>
              </div>
              <div class="pd-b-10">  
                 <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">Why does this program require significant work experience?</span>
              </div>
              <div class="pd-b-10">  
                 <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">Is there placement assistance?</span>
              </div>
              <div class="pd-b-10">  
                 <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">Who has designed the curriculum?</span>
              </div>
              <div class="pd-b-10">  
                 <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">How is the program delivered?</span>
              </div>
              <div class="pd-b-10">  
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">How is the program delivered?</span>
              </div>
              <div class="pd-b-10">  
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">How many hours of commitment will be required to complete the program?</span>
              </div>
              <div class="pd-b-10">  
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">Do I need to be in Delhi, Bangalore or Pune to be able to enroll in the program?</span>
              </div>
              <div class="pd-b-10">  
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">Who are you affiliated with?</span>
              </div>
              <div class="pd-b-10">  
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">Where is the networking day conducted?</span>
              </div>
              <div class="pd-b-10">  
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">What if I have to travel out during the program?</span>
              </div>
              <div class="pd-b-10">  
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">What if my workload is very high?</span>
              </div>
              <div class="pd-b-10">  
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">I want to be an entrepreneur, will this program help?</span>
              </div>
              <div class="pd-b-10">  
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">I want to be an entrepreneur, will this program help?</span>
              </div> -->



              <div class="pd-t-40"></div>
                  <div class="panel-group" id="accordion">
                              <div class="panel panel-warning">
                                  <div class="panel-heading ">
                                      <h4 class="panel-title ">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Does this program require me to leave my current job?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseOne" class="panel-collapse collapse in">
                                      <div class="panel-body">
                                          <p>No. This program does not require you to leave your job. However, it is a rigorous program and would require 12-13 Hours of work every week for you to complete it in 1 year.</p>

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
                                          <p>Sunstone also organizes networking days at certain cities once in a month where students, alumni, 
                                          industry guests come together for networking sessions</p>
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
                                          <p>Yes. Sunstone is the only program for working professionals in India with a placement service. 
                                          Placement service helps students to create opportunities and pitch for those opportunities.</p>
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
                                          <p>Some Sunstone students want to grow as individual contributor or technical specialists. PGPM Level-

                                              1 is the right program for them as it provides foundational knowledge and skills that are required to 

                                              manage stakeholders and understand their perspective. Even when you follow a technical specialist 

                                              path, it’s important to build these skills so you can appreciate other perspective and sell your ideas.</p>
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
                                          <p>Sunstone is the largest Govt of India approved up-skilling management program in India. Students will

                                          get NSDC (National Skills Development Center) approved certificates after all levels.</p>
                                      </div>
                                  </div>
                              </div>

                               <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">What are the cities where we conduct monthly networking day conducted?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseTen" class="panel-collapse collapse">
                                      <div class="panel-body">
                                          <p>One networking day every month is conducted at Delhi region (Delhi, Noida, Gurgaon), Chennai, 

                                            Bangalore, Mumbai, Pune, Hyderabad. One Industry webinar is organized every month for students 

                                            from other cities.</p>
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
                                        <p>If you can’t spend time on program due to higher workload or some other situation, then you can drop

                                        certain courses in between and complete the certificate in a little bit longer time. If you fail a course, 

                                        you are given two more chances to complete the course. After that, you need to pay penalty to 

                                        complete a course.</p>
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
              <hr class="heading_line">
              <div class="heading bold faq">Admissions FAQ</div>
              <hr class="heading_line">  
              <div class="pd-t-40"></div>

             <!--  <div class="pd-b-10">
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold pd-b-10">When should I apply?</span>
              </div>
              <div class="pd-b-10">
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">Can I talk to previous or current students to know more about the program?</span> 
              </div>
              <div class="pd-b-10">  
                 <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">I might shift my location to a different city (e.g., Delhi to Bangalore) during the program. Will the program allow me to shift the batch?</span>
              </div>
              <div class="pd-b-10">  
                 <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">Do I have to complete the program in 1 year only?</span>
              </div>
              <div class="pd-b-10">  
                 <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">I might have unplanned travel (long term, more than 3 months) in coming year so can I still complete it, if I am unavailable on a contact day?</span>
              </div>
              <div class="pd-b-10">  
                 <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">I am an engineer working in non-tech industry, can I apply?</span>
              </div>
              <div class="pd-b-10">  
                 <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">What would be the size for next batch?</span>
              </div>
              <div class="pd-b-10">  
                <i class="fa fa-check-square-o fa-fw"></i>
                  <span class="bold">What is the fee structure?</span>
              </div> -->
              
                  <div class="panel-group" id="accordion2">
                              <div class="panel panel-warning">
                                  <div class="panel-heading ">
                                      <h4 class="panel-title ">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1">When will the next batch start and how can I apply for it?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseOne1" class="panel-collapse collapse in">
                                      <div class="panel-body">
                                      <p>Admission process is in progress for our next batch. You can check the admissions page or 

                                      send an e-mail to <a href="mailto:admissions@sunstone.in" class="blue_color">admissions@sunstone.in</a> for further</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo1">When should I apply??</a>
                                      </h4>
                                  </div>
                                  <div id="collapseTwo1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                      <p>We have an ongoing admission process so candidates are encouraged to schedule interview

                                          whenever they are ready for the interaction. You can send an  e-mail to <a href="mailto:admissions@sunstone.in" class="blue_color">admissions@sunstone.in</a> for 

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
                                         <p>Yes, we encourage you to speak to them. If you need assistance in getting connected to our alumni or students, reach out to admissions team at <a href="mailto:admissions@sunstone.in" class="blue_color">admissions@sunstone.in</a> .</p>
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
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFive1">Do I have to complete the program in 4 months only?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseFive1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <p>Not necessarily. Your are given 8 months to complete the program. Penalty will be applied if you can’t 

                                        complete in 8 months.</p>
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
                                          <p>We follow a cohort based learning and every cohort is up to 30 students. Our batches are usually about 100 students.</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseEight1">What is the fee structure?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseEight1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                         <p>Please check Fee section <a href="fee" class="blue_color"> FEE </a>for this information. You need to pay Level-1 fee once you are 
                                         offered admission. You can check with admission about student loans and instalments options.</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-warning">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseNine1">What are the eligibility criteria for the program?</a>
                                      </h4>
                                  </div>
                                  <div id="collapseNine1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <p>Eligibility isn’t based on your previous education but your work experience. You need to have a 

                                        minimum 3 years of experience to apply. Check admission page<a href="admission" class="blue_color"> ADMISSION</a> for more clarification.</p>
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
