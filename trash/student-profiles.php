<?php include("header1.php"); ?>
<script type="text/javascript">
  $(document).ready(function(){
      var modId = $('#sid').val();
      if(modId){
        var modelId = '#'+ modId + 'jpg';
         $(modelId).modal();
      }
   
   
  });
</script>
    <div class="container si_section">
      <div class="row">
        <div class="col-md-12">
         <!--  <div class="">Student Interviews</div>
          <div class="red"></div> -->
          <!-- div class="si_subtagline">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, dicta saepe quia reiciendis sit. Autem, ratione, assumenda obcaecati minus possimus
          </div> -->
        </div>
      </div>
    </div>
    <?php 
        $sid = $_GET['stuid']
    ?>
    <input type="hidden" value="<?php echo $sid; ?>" id="sid">

    <div class="container no-side-padding" id="student_interviews">
      <div class="main col-md-12">
        <div class="row featured_profile">
        <div class="col-md-10 col-md-offset-1">
          <div class="pd-t-20"></div>
          <hr class="heading_line">
          <div class="heading no-side-padding bold si">Student Interviews</div>
          <hr class="heading_line"> 
          <div class="pd-t-20"></div>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <p>
            Read more about our students, their profiles and experiences as participants in the Sunstone program by clicking on their photos below.
            <br>Our complete student list is available <a style="text-decoration:underline;" href="https://www.linkedin.com/edu/alumni?id=43428&trk=edu-up-nav-menu-alumni">here.</a>
          </p>
        </div>
          <!-- <div class="col-md-2 col-md-offset-1">
            <img src="img/SI/thumbs/2.jpg" class="fp_img">
          </div>
          <div class="col-md-8">
            <div class="fp">Featured Profile</div>
            <div class="fp_name">Santosh Pandey</div>
            <h5 class="">Zonal Business Head, Timesjobs </h5>
            <div class="featured_quote">"Senior industry leaders are vested in my success!"</div>
          </div> -->
        </div>
        <div class="col-md-12">
        <div class="row">
        <ul id="og-grid" class="og-grid">
          <li>
            <a class="urlmodal1" data-target="#myModal1" data-largesrc="img/SI/thumbs/1.jpg" data-description="
            <h4>  Class of 2015  </h4>
           <h4><em> Sr. Software Analyst</em></h4>
            
            <h4> Accenture</h4>
            
            <h4>“I recommend Sunstone to every tech professional”</h4>" 

              data-title="Lopamudra Kanungo">
              <img src="img/SI/whole/1.png" alt="img01" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Lopamudra Kanungo</div>
                  <div class="designation">Sr. Software Analyst, Accenture </div> -->
                  <!-- <div class="batch">Class of 2015</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal2" data-target="#myModal2" data-largesrc="img/SI/thumbs/2.jpg" data-title="
            Santosh Pandey" data-description="
            <h4> Spring Class of 2014</h4>
            <h4><em> Zonal Business Head</em></h4>
            <h4> Timesjobs</h4>
            
            <h4>“Senior industry leaders are vested in my success!”</h4>" >
              <img src="img/SI/whole/2.png" alt="img02" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Santosh Pandey</div>
                  <div class="designation">Zonal Business Head, Timesjobs </div> -->
                  <!-- <div class="batch">Spring class 2014</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal3" data-target="#myModal3" data-largesrc="img/SI/thumbs/3.jpg" data-title="Vishal Bhat" data-description="
              <h4> Spring Class of 2015</h4>
              <h4><em>Senior Project Manager</em></h4>
              <h4> Infosys</h4>
            
            <h4>“No other program counselors asked why I wanted to do this (PGPM), where I wanted to go after doing the

program”</h4>" >
              <img src="img/SI/whole/3.png" alt="img03" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Vishal Bhat</div>
                  <div class="designation">Senior Project Manager, Infosys </div> -->
                  <!-- <div class="batch">Spring Class of 2015</div> -->
              <!-- </span> -->
            </a>
          </li> 
          <li>
            <a class="urlmodal4" data-target="#myModal4" data-largesrc="img/SI/thumbs/4.jpg" data-title="Ariful Mondal" data-description="
             <h4> Spring Class of 2014</h4>
             <h4><strong>Before Sunstone:</strong> <em> SME, Analytics & Insights, India</em></h4>
             <h4><strong>Current Role:</strong> <em> Practice Leader,  TCS, North America </em></h4>
             <h4>“My faculty and fellows have been there every step of the way to help me learn 24×7”</h4>" >
              <img src="img/SI/whole/4.png" alt="img04" class="imagee"/>
              <!--  <span class="desig_strip">
                  <div class="name">Ariful Mondal</div>
                  <div class="designation">Practice Leader, TCS</div> -->
                  <!-- <div class="batch">Fall Class of 2014</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal5" data-target="#myModal5" data-largesrc="img/SI/thumbs/5.jpg" data-title="Viswanathan Ravichandran" data-description="
            <h4> Fall Class of 2013</h4>
            <h4><em>Managing Consultant</em></h4>
            <h4> PriceWaterhouseCoopers</h4>
            
            <h4>“Senior management positions involve the ability to assimilate information, to take decisions fairly quickly, 

and to strategize for the future”</h4>" >
               <img src="img/SI/whole/5.png" alt="img05" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Viswanathan Ravichandran</div>
                  <div class="designation"> PriceWaterhouseCoopers</div> -->
                  <!-- <div class="batch">Fall Class of 2013</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal6" data-target="#myModal6" data-largesrc="img/SI/thumbs/6.jpg" data-title="Gaurav Gupta" data-description="
             <h4> Class of 2015</h4>
              <h4><em>Engineering Manager,</em></h4>
            <h4> Polycom</h4>
            <h4>“My focus was to add value to myself and network with like-minded individuals, and both purposes are 

getting served well”</h4>" >
              <img src="img/SI/whole/6.png" alt="img06" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Gaurav Gupta</div>
                  <div class="designation">Engineering Manager, Polycom</div> -->
                  <!-- <div class="batch">Class of 2015</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal7" data-target="#myModal7" data-largesrc="img/SI/thumbs/7.jpg" data-title="Ratnesh Upadhyay" data-description="
              <h4>Spring Class of 2014</h4>
              <h4> <em>CEO,</em></h4>
            <h4> Lisa Home Solutions (P) Ltd</h4>
            
            <h4>“My top 3 takeaways from Sunstone: Confidence, Exposure and Networking.”</h4>" >
              <img src="img/SI/whole/7.png" alt="img07" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Ratnesh Upadhyay</div>
                  <div class="designation">CEO, Lisa Home Solutions (P) Ltd</div> -->
                  <!-- <div class="batch">Spring Class of 2014</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal8" data-target="#myModal8" data-largesrc="img/SI/thumbs/8.jpg" data-title="Ruchir Singhvi" data-description="
               <h4> Fall Class of 2013</h4>
              <h4> <strong>Before Sunstone:</strong> <em> Sr Manager – Bus. Development, GlobalLogic</em></h4>
              <h4> <strong>Current Role:</strong> <em>Director Sales, Calsoft Labs – An ALTEN Grp Company</em></h4>           
              <h4>“…A life long support as it extends beyond the completion of course…”</h4>" >
              <img src="img/SI/whole/8.png" alt="img08" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Ruchir Singhvi</div>
                  <div class="designation">Director Sales, Calsoft Labs</div> -->
                  <!-- <div class="batch">Fall Class of 2013</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal9" data-target="#myModal9" data-largesrc="img/SI/thumbs/9.jpg" data-title="Gopi Krishna Madugula" data-description="
             <h4> Fall Class of 2014</h4>
              <h4><em>Consultant, </em></h4>
              <h4> Ernst & Young</h4>
            
            <h4>“Sunstone showed me lot of avenues for me to grow and this opportunity is one of them.”</h4>" >
              <img src="img/SI/whole/9.png" alt="img09" class="imagee"/> 
              <!-- <span class="desig_strip">
                  <div class="name">Gopi Krishna Madugula</div>
                  <div class="designation">Consultant, Ernst & Young</div> -->
                  <!-- <div class="batch">Fall Class of 2014</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal10" data-target="#myModal10" data-largesrc="img/SI/thumbs/10.jpg" data-title="Abhishek Nimonkar" data-description="
              <h4> Class of 2012</h4>
              <h4> <em> Product Manager, </em></h4>
              <h4> Citrus Payment</h4>
           
              <h4>“(In a Product Manager) ownership is an absolute must quality.”</h4>" >
              <img src="img/SI/whole/10.png" alt="img010" class="imagee"/> 
              <!-- <span class="desig_strip">
                  <div class="name">Abhishek Nimonkar</div>
                  <div class="designation"> Citrus Payment</div> -->
                  <!-- <div class="batch">Class of 2012</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal11" data-target="#myModal11" data-largesrc="img/SI/thumbs/11.jpg" data-title="Tarun Jain" data-description="
             <h4> Class of 2012</h4>
             <h4><em> Delivery Manager,</em></h4>
             <h4> NCR Corporation </h4>
            
             <h4>“The best thing I did for my career was to join Sunstone!”</h4>" >
              <img src="img/SI/whole/11.png" alt="img011" class="imagee"/> 
              <!-- <span class="desig_strip">
                  <div class="name">Tarun Jain</div>
                  <div class="designation">NCR Corporation</div> -->
                  <!-- <div class="batch">Class of 2012</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal12" data-target="#myModal12" data-largesrc="img/SI/thumbs/12.jpg" data-title="Alok Deo Singh" data-description="
             <h4> Fall Class of 2014</h4> 
             <h4><em> Associate Consultant</em></h4>
             <h4> TCS</h4>
             <h4>“Level 1 experience has been excellent. There has been a change in my thought process.”</h4>" >
              <img src="img/SI/whole/12.png" alt="img012" class="imagee"/> 
             <!--  <span class="desig_strip">
                  <div class="name">Alok Deo Singh</div>
                  <div class="designation">Associate Consultant at TCS</div> -->
                  <!-- <div class="batch">Fall Class of 2014</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal13" data-target="#myModal13" data-largesrc="img/SI/thumbs/13.jpg" data-title="Jumana Sura" data-description="
             <h4> Fall Class of 2014</h4>
             <h4><em> Project Manager,</em></h4>
             <h4> Greytrix India Pvt Ltd</h4>
             <h4>“it’s not enough to just have technical expertise”</h4>" >
              <img src="img/SI/whole/13.png" alt="img013" class="imagee"/> 
              <!-- <span class="desig_strip">
                  <div class="name">Jumana Sura</div>
                  <div class="designation">Project Manager, Greytrix India</div> -->
                  <!-- <div class="batch">Fall Class of 2014</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal14" data-target="#myModal14" data-largesrc="img/SI/thumbs/14.jpg" data-title="Gaurav Lakhani" data-description="
               <h4> Fall Class of 2014</h4> 
             <h4><strong>Before Sunstone:</strong><em>Sr Business Analyst, Fidelity,</em></h4>
             <h4><strong>Current Role:</strong> <em> Product Manager, Cvent </em></h4>
             <h4>“Business is complex; our job is to make it simple”</h4>" >
              <img src="img/SI/whole/14.png" alt="img014" class="imagee"/> 
              <!-- <span class="desig_strip">
                  <div class="name">Gaurav Lakhani</div>
                  <div class="designation">Product Manager, Cvent</div> -->
                  <!-- <div class="batch">Fall Class of 2014</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal15" data-target="#myModal15" data-largesrc="img/SI/thumbs/15.jpg" data-title="Sandeep Goyal" data-description="
              <h4> Fall Class of 2013</h4>
              <h4><strong>Before Sunstone:</strong><em>Engineering Manager,Calypto Design Systems </em></h4>
              <h4><strong>Current Role:</strong> <em>Software Development Engineer II, Amazon </em></h4>
              <h4>“Moving to different domains is very much possible but requires persistent effort”</h4>" >
              <img src="img/SI/whole/15.png" alt="img015" class="imagee"/> 
              <!-- <span class="desig_strip">
                  <div class="name">Sandeep Goyal</div>
                  <div class="designation">Software Engineer II, Amazon</div> -->
                  <!-- <div class="batch">Fall Class of 2013</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal16" data-target="#myModal16" data-largesrc="img/SI/thumbs/16.jpg" data-title="Gunjan Gupta" data-description="
              <h4> Fall Class of 2013</h4>
              <h4><strong>Before Sunstone:</strong><em> Computer Scientist, Adobe</em></h4>
              <h4><strong>Current Role:</strong> <em> Product Manager, Magic Software </em></h4>
             <h4>“Its unbelievable how doors suddenly start opening as you widen your network.”</h4>" >
              <img src="img/SI/whole/16.png" alt="img016" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Gunjan Gupta</div>
                  <div class="designation"> Magic Software</div> -->
                  <!-- <div class="batch">Fall Class of 2013</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal17" data-target="#myModal17" data-largesrc="img/SI/thumbs/17.jpg" data-title="Kaushalendra Yadav" data-description="
               <h4> Spring Class of 2014</h4>
              <h4> <strong>Before Sunstone:</strong><em>Team Lead – Product Development, Symphony Teleca</em></h4>
              <h4> <strong>Current Role:</strong> <em> COO, Mantra Labs </em></h4>
             <h4>“Just make sure that you can survive on bare minimum and start doing what you want to do”</h4>" >
              <img src="img/SI/whole/17.png" alt="img017" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Kaushalendra Yadav</div>
                  <div class="designation">COO, Mantra Labs</div> -->
                  <!-- <div class="batch">Spring Class of 2014</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal18" data-target="#myModal18" data-largesrc="img/SI/thumbs/18.jpg" data-title="Anshuman Misra" data-description="
              <h4> Class of 2012</h4>
              <h4> <em>Director of Engineering,</em></h4>
              <h4> Bharti SoftBank</h4>
              <h4>“Any role that involves working beyond individual capacity…. business knowledge is a MUST.”</h4>" >
              <img src="img/SI/whole/18.png" alt="img018" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Anshuman Misra</div>
                  <div class="designation"> Bharti SoftBank</div> -->
                  <!-- <div class="batch">Class of 2012</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal19" data-target="#myModal19" data-largesrc="img/SI/thumbs/19.jpg" data-title="Dheeraj Garg" data-description="
              <h4> Class of 2012</h4>
              <h4> <em>Engg & Product Manager,</em></h4>
             <h4> Johnson Controls</h4>
             <h4>“This program helped me generate better growth opportunities for myself.”</h4>" >
              <img src="img/SI/whole/19.png" alt="img019" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Dheeraj Garg</div>
                  <div class="designation">Johnson Controls</div> -->
                  <!-- <div class="batch">Class of 2012</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal20" data-target="#myModal20" data-largesrc="img/SI/thumbs/20.jpg" data-title="Amit Jain" data-description="
            <h4> Spring Class of 2014</h4>
            <h4> <strong> Before Sunstone:</strong> <em> Manager Sales, Qualtech Consultants</em></h4>
            <h4><strong>Current Role:</strong> <em> Senior Manager,Business Development, QAI </em></h4>            
            <h4>“Sunstone support for me was just a phone call away.”</h4>" >
              <img src="img/SI/whole/20.png" alt="img020" class="imagee"/>
             <!--  <span class="desig_strip">
                  <div class="name">Amit Jain</div>
                  <div class="designation">Senior Manager, QAI</div> -->
                  <!-- <div class="batch">Spring Class of 2014</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal21" data-target="#myModal21" data-largesrc="img/SI/thumbs/21.jpg" data-title="Vakul Agarwal" data-description="
               <h4> Spring Class of 2014</h4>
              <h4><strong> Before Sunstone:</strong> <em> Lead Software Engg, Adobe</em></h4>
              <h4><strong>Current Role:</strong> <em> TPM, Amazon </em></h4>
              <h4>“Business is all about perseverance, validation and evolution”</h4>" >
              <img src="img/SI/whole/21.png" alt="img021" class="imagee"/>
             <!--  <span class="desig_strip">
                  <div class="name">Vakul Agarwal</div>
                  <div class="designation">TPM, Amazon</div> -->
                  <!-- <div class="batch">Spring Class of 2013</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal22" data-target="#myModal22" data-largesrc="img/SI/thumbs/22.jpg" data-title="Niharika Sharma" data-description="
              <h4> Spring Class of 2014</h4>
              <h4> <strong> Before Sunstone:</strong> <em> Sr Software Engg, Oracle</em></h4>
              <h4><strong>Current Role:</strong> <em> Sr Product Manager, Oracle</h4>            
              <h4>“Try to first move internally, if you have that opportunity”</h4>" >
              <img src="img/SI/whole/22.png" alt="img022" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Niharika Sharma</div>
                  <div class="designation">Sr Product Manager, Oracle</div> -->
                  <!-- <div class="batch">Spring Class of 2014</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal23" data-target="#myModal23" data-largesrc="img/SI/thumbs/23.jpg" data-title="Anshuman Mishra" data-description="
               <h4> Class of 2012</h4>
              <h4><em>Product Manager,</em></h4>
             <h4> Wize Commerce</h4>
             <h4>“MBA is not a destination. It’s a path to achieve your final goal.”</h4>" >
              <img src="img/SI/whole/23.png" alt="img023" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Anshuman Mishra</div>
                  <div class="designation">Wize Commerce</div> -->
                  <!-- <div class="batch">Class of 2012</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal24" data-target="#myModal24" data-largesrc="img/SI/thumbs/24.jpg" data-title="Kunal Kumar" data-description="
            <h4> Spring Class of 2013</h4>
            <h4>  <strong> Before Sunstone:</strong> <em> Technical Dev Manager, Fidelity Investments</em></h4>
            <h4> <strong>Current Role:</strong> <em> Product Manager, </em></h4>
            <h4> Knowlarity</h4>
            <h4>“Have the “real desire” to change”</h4>" >
              <img src="img/SI/whole/24.png" alt="img024" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Kunal Kumar</div>
                  <div class="designation">Product Manager, Knowlarity</div> -->
                  <!-- <div class="batch">Spring Class of 2013</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal25" data-target="#myModal25" data-largesrc="img/SI/thumbs/25.jpg" data-title="Aditya Chaturvedi" data-description="
               <h4> Class of 2012</h4>
              <h4><strong> Before Sunstone:</strong> <em>  Lead Consultant, hCentive</em></h4>
              <h4><strong>Current Role:</strong> <em> CTO, Apollo Incubations </em> </h4>           
            <h4>“You should be high energy and low maintenance”</h4>" >
              <img src="img/SI/whole/25.png" alt="img025" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Aditya Chaturvedi</div>
                  <div class="designation">CTO, Apollo Incubations</div> -->
                  <!-- <div class="batch">Class of 2012</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal26" data-target="#myModal26" data-largesrc="img/SI/thumbs/26.jpg" data-title="Tushar Gupta" data-description="
             <h4> Class of 2012</h4>
              <h4><strong> Before Sunstone:</strong> <em> Lead Quality Engineer, Adobe</em></h4>
              <h4><strong>Current Role:</strong> <em> Product Manager, Times Internet Limited </em></h4>
            <h4>“Evolve your thought process and build business perspective”</h4>" >
              <img src="img/SI/whole/26.png" alt="img026" class="imagee" />
             <!--  <span class="desig_strip">
                  <div class="name">Tushar Gupta</div>
                  <div class="designation">Product Mgr, Times Internet</div> -->
                  <!-- <div class="batch">Class of 2012</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal27" data-target="#myModal27" data-largesrc="img/SI/thumbs/27.jpg" data-title="Vaibhav Padlikar" data-description="
              <h4> Spring Class of 2013</h4>
              <h4> <strong> Before Sunstone:</strong> <em>Senior Lead Software Engineer, Adobe</em></h4>
              <h4><strong>Current Role:</strong> <em> Co-Founder, Phone Warrior </em></h4>            
            <h4>“You can’t challenge yourself enough!”</h4>" >
              <img src="img/SI/whole/27.png" alt="img027" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Vaibhav Padlikar</div>
                  <div class="designation">CoFounder, PhoneWarrior</div> -->
                  <!-- <div class="batch">Spring Class of 2013</div> -->
              <!-- </span> -->
            </a>
          </li>
          <li>
            <a class="urlmodal28" data-target="#myModal28" data-largesrc="img/SI/thumbs/28.jpg" data-title="Sahil Aggarwal" data-description="
              <h4> Class of 2012</h4>
              <h4> <em>Technical Lead, TCS</em></h4>
              <h4> <em>Alliance Manager, TCS </em></h4>
             <h4>“You have to learn rather than getting taught”</h4>" >
              <img src="img/SI/whole/28.png" alt="img028" class="imagee"/>
              <!-- <span class="desig_strip">
                  <div class="name">Sahil Aggarwal</div>
                  <div class="designation">Alliance Manager, TCS</div> -->
                  <!-- <div class="batch">Class of 2012</div> -->
              <!-- </span>             -->
            </a>
          </li>
        </ul>
        </div>
        </div>
      </div>

    </div><!-- /container -->


      <!-- Large modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

      <div class="modal fade bs-example-modal-lg modal_style" id="1jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/1.jpg" width="100px"> 
              <div class="abt_mem">
              <div class="name">Lopamudra Kanungo</div>
              <div class="designation">Sr. Software Analyst, Accenture</div>
              <div class="batch">Class of 2015</div>
              </div>
              <h4> What is your vision for yourself, personal as well as professional?</h4>
              I strive to be a person who is peaceful and an example to others, which comes from confidence in me. I am considered to be a dynamic leader in my professional world. I lead a simple life style that includes plenty of time for me, my family, and my friends as well as service to others.
              <h4>How has SBS learning impacted your quality of your work? Any examples where you have applied your learning. Have others noticed any change in you?</h4>
              My role is that of a project lead in my organization where I need to communicate with several team members and even across departments and geographies. The story boarding, organizational structure and basic economics courses have helped me realize the project goals, and my way of communication has now become much more crisp and systematic. I now have better management skills too. I was recently awarded with a very critical, and one of the top accounts of Indus Net Technology. Also I was awarded the “Rising Star” and MAD (making a difference) awards for innovation and bringing more business to my company.
              <h2>
              "I recommend Sunstone to every tech professional"
                </h2>
            
              <h4>What is your advice for professionals looking for a part time MBA?</h4>
              I will recommend that they go for courses offered by SBS, as this a real time learning method while you work. I prefer learning from an industry experienced person. The peer networking in SBS is really awesome and adds an extra value.

              <h4>Which courses did you enjoy the most at SBS? What was the key learning from those courses?</h4>
              Apart from finance, which was little difficult for me I enjoyed all the other subjects. Economics helped me to utilize resources effectively on an individual and a collective basis. I am now able to confidently decide on my career prospects, investment decisions etc. It has also helped a lot in my professional front where I need to deal with several high budget projects. Now I’m able to project the milestones and make a proper CB analysis out of the requirement.
              <h2>"A real time learning method while you work”</h2>
              <h4>Which faculty has inspired you the most and why?</h4>
              Rajul and Aniket are great; I like their way of teaching and the way they deliver the class or session is so interesting. After attending their classes, it doesn’t take much time to go through the reads, as everything just comes in front of your eyes while reading.

              <h4>How effective have you been in managing the workload?</h4>
              It was tough in the beginning to manage the workload along with SBS assignments, but now I have adapted myself with this schedule and the study is helping me to analyze my work and manage that in a better and smart way.
              <h2>“It was tough in the beginning but now I have adapted myself with this schedule”</h2>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="2jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/2.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Santosh Pandey</div>
                <div class="designation">Zonal Business Head, Timesjobs</div>
                <div class="batch">Spring class 2014</div>
              </div>
              <h4>Tell us something about yourself and the things that you are passionate about.</h4>
                Well, I’m a positive, confident & focused sales professional with 11 yrs of work experience in direct sales role and 2 yrs of experience in sales training, sales process development and process implementation. I love managing teams and being directly responsible for generating/impacting revenue/profit of the organization I work for. I’m passionate about my work, my family, giving my best and winning in all my roles….
              <h4>After a successful career of 13 years, what was the main reason behind choosing to pursue a PGPM?</h4>
                There was only one reason and that was to learn and improve upon my overall business management skills, through problem based learning.
                <h2>"Senior industry leaders are vested in my success!"</h2>
                <h4>Why did you choose Sunstone?</h4>
                <p>Sunstone was my first choice mainly because of 2 reasons:-</p>
                <p>Sunstone’s problem based learning approach to teach business management skills and concept.</p>
                <p>Opportunity to complete PGPM in 1 year, at a cost which is very reasonable for the value which one gets from Sunstone.</p>
                
                <h4>How has Sunstone experience contributed to your career progression in last one year?</h4>
                <p>It has contributed tremendously,</p>
                <p>1. Sunstone experience prepared me to see big picture and to face business challenges with ease.</p>
                <p>2. I received one on one mentoring from industry leaders like Rajul. He has always been there to guide me in my career moves. Its great to have a senior in the industry, who is vested in your success. This, I think is one of the biggest advantage of Sunstone.</p>
                <h2>“I love managing teams and being directly responsible for generating/impacting revenue/profit of the organization”</h2>
                <h4>Which courses have you enjoyed the most and why? Which faculty members have inspired you at Sunstone?</h4>
                <p>All in all, it was great experience for me and I enjoyed every bit of it. Still, what I will always remember easily are:-</p>

                <p>Whole Finance term with Aniket – being a commerce graduate I love to work and analyze business numbers – and his courses gave me ample opportunities to do so.</p>
                <p>Growth Unit with Saurabh especially while working on Markstrat and 2 industry projects (Key account management process for Mechartes Simulation Experts & Lead Quality Assessment (demand side from buyers) for Magicbricks). They gave very close and practical experience on how and why, various decisions made at each level, and various processes, are important for business, and impact business growth.</p>
                <p>Besides these, every unit by Rajul and leadership unit by David, purely because all those units were very far from books but very close to the real world.</p>
                <h4>What would be your advice to successful professionals who are looking for that next big jump in their careers?</h4>
                My advice is to:-

                <p>1. Define that big jump first…</p>
                <p>2. Prepare yourself to get that big jump…</p>
                <p>3. Reach out to people who can help you in any manner to get what you want – this help may just be in identifying what is missing or advice on how to close that gap. If you find more than this you are one of the lucky few.</p>
                <p>4. Remain honest, dedicated and determined in your effort…. Positive attitude and persistence is going to be the key.</p>
                <p>5. Have faith in yourself and expect success for yourself….</p>
                <p>6. Lastly, don’t forget to celebrate your successes. These memories definitely prep you up for your next big jump….</p>
                <h2>“Don’t forget to celebrate your successes…will prep you up for your next big jump”</h2>
                <h4>Finally, any pointers for your juniors, at Sunstone, on how to manage work and study load effectively?</h4>
                My pointers are:-

                <p>1. It’s important to be clear on why he or she is studying at Sunstone. The clarity on ‘why’ automatically gives a kick which helps in managing work and study together.</p>
                <p>2. Prioritize things at hand everyday and stick to and work on things as per priority list.</p>
                <p>3. Lastly, I accept that it seems difficult in the beginning, but just stick with it. Try to adjust and flow with things, because post 2-3 months, everything will become routine and you will find it easy to manage.</p>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="3jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/3.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Vishal Bhat</div>
                <div class="designation">Senior Project Manager, Infosys </div>
                <div class="batch">Spring Class of 2015</div>
              </div>
              <h4>Few lines that describe you personally. What is your current role?</h4>
              I am a Senior Project Manager with Infosys Ltd and manage delivery of projects, financial tracking, client engagement, identify new opportunities and mentor new teams. I have been with Infosys since 2004 and have worked in multiple Development and Quality Assurance Projects. It has been my fortune to work with clients on some exciting assignments and getting to develop skills to manage cross functional as well as geographically diverse teams.
              <h4>Why did you choose Sunstone PGPM?</h4>
              <p>Since 2010, I was thinking about joining PGPM/MBA program, but always wanted to do something along with my job so as to implement what I learnt on a daily basis. As I evaluated some other 1 year part time programs, I noticed no one asked why I wanted to do this, where I wanted to go after doing the program and whether I was fit for such a program. The interaction also did not seem to be happening that well in such programs.</p>

              <p>When I evaluated Sunstone and talked to current students, the inputs I got on faculty, interactions and monthly meet up programs helped me go ahead with the application process. And the deal cruncher was the case study evaluation, I was asked to do for the interview and the session with the career counselor. The focus of both was to understand what I wanted to achieve with this program and how I could do that.</p>
              <h2>"Many self-developed myths about how businesses work have been broken!"</h2>
              <h4>You are a current student. How has your experience been so far?</h4>
              <p>It’s been an exciting journey so far. There has been a lot of learning with lots of late evening sessions and early weekend classes. Many self-developed myths about how businesses work, how companies handle finance, strategy and make decisions have been broken. I have learnt a lot about things like selling ideas, building business strategy, new business idea creation and how to manage stakeholders. Even had the opportunity to work on a new business idea, do market analysis and present to a VC firm which was the high point for me. In addition, it’s been awesome meeting many entrepreneurs and product managers in our monthly meet ups to learn from their practical experiences.</p>

              <p>The best part has been the interactions within student groups and with faculty. Even when classes are over and modules completed, the forum interactions on varied topics like organization hierarchy, business ideas keep on enriching my thinking.</p>

              <h4>Do you feel there has been a change in the way you work since you started Sunstone? Give us some examples where you are applying your learning.</h4>
              Yes there been and a major change has been in how I present my ideas. How I now handle mails, presentations and pitch that I’m making. I have also started realizing much better why my seniors make some business decisions which might not look correct in first look. Currently, I’m in the process of identifying opportunities to contribute more to organization, where I can use the knowledge gained in Sunstone.
              <h2>“No other program counselors asked why I wanted to do this (PGPM), where I wanted to go after doing the 

program”</h2>
              <h4>How do you manage your time? Many working professionals find it hard to devote time to self-development along with job.</h4>
              <p>I personally believe we need to put aside small chunks of time for personal development to start with. Be it reading on new technology trends, learning new project management techniques, taking up a new certification or course or anything that helps to address what you want to achieve.</p>

              <p>Once you get going time management becomes easier as you are now invested. I personally started using times on weekends and late nights for Sunstone study which was otherwise spent in watching TV or surfing the net.</p>

              <h4>What is your advice for professionals who are looking for part time management programs?</h4>
              First thing professionals need to understand is that management programs are not the short cut to job change or switch to management roles. They will give you the knowledge on the gamut of business concepts, make you understand how decisions are made in business and develop you into a better informed professional. The magic lies in how you as a professional, use this knowledge, and network developed by interacting with students, faculty and guest speakers, to define your own career path.
              <h2>“We need to put aside small chunks of time for personal development”</h2>
              <h4></h4>Do you feel it is important for techies to understand business skills?
              Yes it’s very important. We techies are always lost in details of implementation and are many times puzzled as to why business wants this or that. Understanding business side of work helps techies to ask the right WHY’s and also build things with an eye on business road map. A small feature change from a techie perspective might actually be one with big business impact. And with right business skills techies can get right understanding of business requirements.
          </div>
        </div>
      </div>
     
      <div class="modal fade bs-example-modal-lg modal_style" id="4jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/4.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Ariful Mondal</div>
                <div class="designation">Practice Leader, TCS, North America</div>
                <div class="batch">Fall Class of 2014</div>
              </div>
              <h4>What is your vision for yourself, personal as well as professional?</h4>
              I want to become my own boss but not the bossing around kind! I would like to create open and transparent culture within my organization or my team by leading from the front. My vision is to serve people with highest level of integrity by putting hard work. And my time at Sunstone has inspired me to revisit the dream of my own disruptive learning venture.
              <h4>Which courses did you enjoy the most at SBS? What were the key learning from those courses?</h4>
              <p>1. Accounting and Economics: Each and every problem I tackled, I could relate with business, which I was unable to do before joining SBS. Aniket and Jacob come with extensive knowledge & immense humility. I found Aniket to be the coolest teacher, with so much knowledge and passion about the subject that it was no longer boring and he made me fall in love with accounts and economics. And his Student Fund Management initiatives would be very interesting to practice in reality.</p>
              <p>2. OB, Negotiation Skills: These topics seemed very dry to me before joining SBS but Rajul made them simple to understand. Today I feel that I know at least something about my organization and am comfortable with the unknown.</p>
              <p>3. Personal Development/Self Assessments: Often we do not know how to discover ourselves. Tapan helped me to reflect on my strengths, weaknesses and guided me, to examine what I believe and to reflect on what other think about me. This is the one that I liked the most as it has helped me be confident & open to know what other think about me and how to rectify any flaws thereof.</p>
              <p>4. Strategies: It was so much fun to learn, even without knowing a business in minute detail, how to solve business problems through different strategies or how different levels of thinking can either help us solve problems or put us in a circle. Saurabh and Anupam simplified the business problem solving through real life business problems and simulations. Great learning for me!</p>
              <h2>“A PGPM meticulously designed to impart globally-relevant business skills.”</h2>
              <h4>Which faculty has inspired you the most and why?</h4>
              Before starting the program, I envisioned this as an opportunity to put myself through a process or complete journey of business. Each and every faculty contributed to my successful journey. Each one of them were very approachable, especially Dinesh and Tapan, with whom I could share what I want to do, and they have taken personal interest to guide me all the time. Many unanswered questions were answered on-line and off-line. Rajul inspired me live on my dream once again.

              <h4>How effective have you been in managing the workload? Which SBS practices and processes have been the biggest help in managing your effort?</h4>
              Honestly speaking, it is SBS that gave me opportunities to come so far, with vast blended practical learning, with greater flexibility and apt push needed to finish assignments and projects. I believe it would not have been the case with any other school. Yes, sometime it is very difficult to manage workload given the type of capacity I work within my current organization, but teamwork helped to manage extreme pressures.

              In addition, usage of alternative communications, forums, off-line & on-line platforms helped to manage my workload very effectively. I feel like learning while sleeping or driving and my faculties and fellows have been there every step of the way to help us learn 24×7!
              <h2>“This has  inspired me to revisit the dream of my own disruptive learning venture”</h2>
              <h4>As you complete each level, what impact of SBS learning have you experienced on the quality of your work? Have others noticed this shift too?<h4></h4></h4>
              Now I am more confident and organized to manage both technical and management responsibilities. Every time I finish a course, I feel richer, more confident and ready to take on bigger responsibilities outside technical roles, be it operations, strategy or product management. One of the greatest learning would be on leadership skills, just by just observing & following my young and dynamic faculty. I have also learned to tell the story of a business problem in front of internal and external stake holders. SBS taught me how to analyze business problems with broader prospective and develop solutions.

              My supervisors are well aware of my learning initiatives and they value my progress. I am getting opportunities to work with critical strategic initiatives of my organization which very few privileged colleagues would dream at my age. My association with SBS is highly appreciated by my immediate supervisor who is constantly pushing me to develop cases, for research collaboration, with our innovation labs, using my learning from SBS.

              This has been wonderful and rich journey for last one year.

              <h4>In light of this, how has your role evolved in the last few months?</h4>
              <p>Before joining SBS, I was Subject Matter Expert in Analytics in India, managing R&D and internal collaborations along with Program Management. Now, I have moved to a global leadership role in North America and working in a very dynamic capacity to manage both internal and customer collaborations for Analytics across regions. Without 360 views of business and creative learnings from SBS, I would not have succeeded in this role. My close bonding with SBS faculties and friends helped me to get support whenever required.</p>
              <p>Before: SME – Analytics & Insights, India</p>
              <p>Now: Practice Leader – Big Data Analytics, North America</p>
              <h2>“My faculty and fellows have been there every step of the way to help me learn 24×7”</h2>
              <h4>How has Sunstone equipped you for success in a global setup, since you are based in US?</h4>
              As most of the SBS faculty and coordinators are young and grown in global virtual setup, they are well equipped to fulfill the expectations of global needs. I have done my research on US and UK based schools and unlike them, SBS would make you work on real life problems throughout as the faculties are experts and leaders from the industry. I would say SBS has the added advantage of bringing in industry leaders, every now and then, to provide insights of core businesses from across the globe.

              <h4>Finally, what is your advice for professionals looking for a part time MBA?</h4>
              I always advise people that “if you need only a degree and sell yourself go to Top schools, but if you want to really learn and know how to dream choose wisely”. Now I can advise them, with my experience and dream journey with SBS, that this is as good as full-time MBA. I have been visiting faculty for couple of MBA schools, but I was not aware that MBA is fun before joining SBS. Everyone associated with SBS, whether alumni or faculty or industry leaders or batch mates, are so talented and come with an open mind to learn and share. So much to learn here and so much to share here without fear. A perfect MBA for a dreamer!
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="5jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/5.jpg" width="100px">
              <div class="abt_mem">
                <div class="name">Viswanathan Ravichandran</div>
               <div class="designation">Managing Consultant, PriceWaterhouseCoopers</div>
               <div class="batch">Fall Class of 2013</div>
              </div>
              <h4>Few lines that describe you personally</h4>  
              I hail from the steel city of Jamshedpur and was a third generation Tata employee in my family. My small town experience coupled with a traditional upbringing instilled a sense of self discipline and social responsibility from early childhood. I thrive in complexity and chaos, and have always found myself engaged in diverse activities right from my school days. I had done well academically as well as received various accolades in sports, dramatics, editing etc. I presently cherish the crazy stage of being the father to my 10 months old daughter. Further, my career is as colourful an assortment of experiences as is my personal background.
              <h4>What were you doing before Sunstone?</h4>
              I was working as a Project Manager at United Health Group at the time of joining Sunstone.
              <h2>"I had a phenomenal learning experience!"</h2>
              <h4>Where are you currently working?</h4>
              I am currently working as a Managing Consultant in the Advisory division of Pricewaterhouse Coopers. The division I work with caters to Government and Public sector clients and this is an interesting shift in my career.

              <h4>How was your experience at Sunstone?</h4>
              <p>It was like hitting the gym for the first time. You see the six pack but you don’t realise the effort. But if you persist you start feeling the difference in a few weeks. And, you end up making some good friends.</p>

              <p>I had a phenomenal learning experience. I started planning and managing a lot of P&L as well as determining account strategy. My value chain analysis to determine strategy became lost on some of my colleagues, but I felt a sense of achievement nonetheless :). But my learning and experience at Sunstone played an important role in my promotion earlier this year.</p>
              <h2>“I thrive in complexity and chaos”</h2>
              <h4>How has this helped in your transformation as a professional?</h4>
              The biggest improvement I found in myself was in my ability to network professionally. This skill is highly applicable in my current role where I have to continuously network with people to explore opportunities, negotiate, collaborate.

              <h4>What is your advice for techies who want to move to management positions?</h4>
              Senior management positions involves the ability to assimilate information, to take decisions fairly quickly, and to strategize for the future. It also requires you to meet, greet and negotiate with a lot of people both within the company and outside. Finally, it requires the ability to present your thoughts clearly. Good presentation skills come in very handy in this role.

              So, my two cents is to constantly invest in self development.
              <h2>“Senior management positions involve the ability to assimilate information, to take decisions fairly quickly, 

and to strategize for the future”</h2>
              <h4>What is your advice for professionals who are looking for part time management programs?</h4>
              A lot of MBA aspirants look at part time programs with misplaced motives. It’s not a mystical key to a fancy job which your full time MBA friend might be doing. Part time programs are primarily aimed at personal development, and the fact that you chose to pursue it demonstrates your personal commitment to fast-track your career. You come out much richer in business understanding, are much more connected by way of a network of friends, and are rejuvenated with self confidence. Completing such programs do requires a lot of motivation, discipline and personal sacrifices, all of which are acknowledged by the industry in the long run.

              <h4>Do you feel it is important for techies to understand business skills?</h4>
              Absolutely! Having a set of business skills will help understand “why” certain things are happening and “why” certain things are extremely important for business to keep running. It can be as trivial as filling time-sheets accurately or as significant as getting your next major release out on time. Without that appreciation, I have seen engineers getting overwhelmed, confused and frustrated.
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="6jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/6.jpg" width="100px"> 

              <div class="abt_mem">
                <div class="name">Gaurav Gupta</div>               
                <div class="designation">Engineering Manager, Polycom</div>
                <div class="batch">Class of 2015</div>
              </div>
              <h4>What is your current role?</h4>
              I am Engineering Manager at Polycom and lead a large and highly motivated engineering team towards building a web-based next generation collaboration products. My role entails working with Product Managers, Program Managers, other engineering teams and key stakeholders to plan and prioritise features, drive their execution, manage team-oriented and technical complexities around those, and eventually ensure quality and timely delivery.
              <h4>What is it that you aspire to do?</h4>
              <p>I love technology, and I love the company of smart people. I think it’s the right mixture to build innovative, disruptive and meaningful products. I may do a start up at some point and am keeping my options open. The important thing is that I would like to play a role which has a large impact on the business. And I am sure, opportunities will present themselves. Alternatively, I will end up creating them.</p>

              <p>In the longer term, I feel that the education system in our country, though quite widespread and large, is quite mediocre in it’s ability to impart thinking. I would like to work for its betterment, especially for the engineering graduates, where our education standards are fairly low. A majority of our student population do not have a progressive mentor-mentee system, neither at home nor at colleges. I would love to play my bit to help bridge this gap and for them to become more effective thinkers and doers.</p>

              <p>At the same time, I thoroughly enjoy what I am doing right now, and am in no hurry to make any changes yet.</p>
              <h2>"The way I used to judge my work and myself has changed, this has eased a fair amount of stress for me. I am able to enjoy my work a lot more. "</h2>
              <h4>How do you manage your time? Many working professionals find it hard to devote time to self development along with job.</h4>
              I don’t think I am doing a great job at managing time on all expected parameters. At the same time, one of my goals has always been that every single year I should be able to look back and reflect at how much I have grown. I see immense learning opportunities all around me – whether being at work, at Sunstone or even talking to my neighbours. I think it is key to keep a company of people from whom I can learn, and then consciously apply what I learn. Of course, with family and friends, the time spent is unconditional.

              <h4>Why did you choose Sunstone PGPM?</h4>
              Its largely for the teaching faculty here which seemed genuinely interested in producing the right product i.e. in seeing the growth of its students. I was most impressed with the fact that the people teaching here are practitioners who are mostly fighting it out to make it happen in their own respective fields and simultaneously teaching out of interest, rather than purely for financial gains. I find the traditional professors way too theoretical and highly boring, and I was done with them long back.

              Also, there is a vibrant start-up buzz about this place, which I simply love. At this stage of Sunstone, its a very close-knit ecosystem and its great opportunity to watch it grow and learn from it.
              <h2>“I love technology and the company of smart people as it’s the right mixture to build innovative, disruptive

and meaningful products”</h2>
              <h4>You are a current student. How has your experience been so far?</h4>
              Its been simply terrific. Personally, I didn’t join Sunstone to get a degree and flash it to get a new job (I was doing pretty ok). My focus was to add value to myself and network with like-minded individuals, and both purposes are getting served well. I think a minor regret that I have is that I did not take a break to study full-time for a year, as that wasn’t feasible in my case.

              <h4>Do you feel there has been a change in the way you work since you started Sunstone?</h4>
              Absolutely. There is a maze of data, information and choices around you and its extremely easy to get lost in it. The courses, and equally importantly, the personal guidance of the faculty here are enabling me to focus on the right things.
              <h2>“My focus was to add value to myself and network with like-minded individuals, and both purposes are 

getting served well”</h2>
              <h4>Give us some examples where you are applying your learning.</h4>
              <p>Permit me be a little specific and slightly verbose to do justice to this question.</p>

              <p><i class="fa fa-chevron-right fa-fw"></i> The Problem Solving courses helped me to understand the story behind the problem or the project and extract or present the crux of it. At times, I have seen that without an intelligent approach to solving problems, we end up creating a lot of stress because we tend to focus on inconsequential details and often miss the bigger, and more relevant, picture. And we you don’t understand the problem, we cannot take the right decisions about it. I am definitely a better problem solver, and also help others to solve more effectively.</p>
              <p><i class="fa fa-chevron-right fa-fw"></i> The Operations courses helped me to understand the C-level mindset and strategies much better, and align myself and my team with them for maximising the ROI. One of courses taught me to how to build and subsequently sell an important idea within my company. One of my ideas got funded within the organisation and I am presently implementing it. It has turned out to be one of the most promising innovations in the group.</p>
              <p><i class="fa fa-chevron-right fa-fw"></i> The Strategy courses made me to question, a lot more intelligently, our products positing in the market. Also, it helped me judge how effective are our engineering efforts in influencing the overall product positioning.</p>
              <p><i class="fa fa-chevron-right fa-fw"></i> The Leadership courses I have undertaken have helped me to understand and resolve some key people and leadership issues in my team. It helped me connect to my leaders, and has helped me leverage their expertise. They have enabled me to build more open, synergistic and productive relationships with my colleagues.</p>
              <p><i class="fa fa-chevron-right fa-fw"></i> The Finance courses have enabled me to have a much improved understanding of the financial aspects, and derive some implementable action items out of them. They also helped me in judging and funding of different projects and hence to design the right project proposals.</p>
              <p><i class="fa fa-chevron-right fa-fw"></i> I recently helped one of my friends to edit his resume, to reduce it from 8 to less than 1.5 pages, and I was positively surprised pondering over the inputs I was giving him. I don’t think I could have done that effectively before the Sunstone experience.</p>
              <p><i class="fa fa-chevron-right fa-fw"></i> Finally, very importantly, I think I have driven away some thinking biases and am changing the way I used to judge my work and myself which has eased a fair amount of stress on me. I am able to enjoy my work a lot more. From on of the industry speakers I learnt, “you have to be smart enough to know what you know what you need to learn and then go ahead and learn it”.</p>
              <p><i class="fa fa-chevron-right fa-fw"></i> And I can go on and on and on…</p>
              <p><i class="fa fa-chevron-right fa-fw"></i> Overall, the crux of the matter is that Sunstone is adding immense value to me as a professional enabling me contribute much more effectively to the organisation and hopefully build one in the future.</p>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="7jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/7.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Ratnesh Upadhyay</div>              
                <div class="designation">CEO, Lisa Home Solutions (P) Ltd</div>
                <div class="batch">Spring Class of 2014</div>
              </div>
             
              <h4>Tell us about your venture?</h4> 
              Lisa Home Solutions is a cloud-based Property Management Company that specializes in complete renting and management solution for out-stationed landlords. We are currently based in Pune and plan to expand pan-India.
              <h4>What is your background?</h4>
              Basically I am an engineer and started my career with Tech Mahindra as a software engineer and have worked on IT systems and telecom solutions. I worked for seven years with my first company itself and had in-depth exposure to client’s business in UK. I have performed various roles from writing code to analyzing business.
              <h2>"My top 3 takeaways from Sunstone: Confidence, Exposure and Networking. "</h2>
              <h4>What is your advice for techies who want to start on their own?</h4>
              My only advice would be that if you believe in the idea then just go for it. You got 40 years of working life, spending at least 5% of that on the thing you want to do is not a bad idea. If we spend enough time learning about a venture, and have time on our side, success is highly likely.

              <h4>You were already running your business when you joined Sunstone, why did you take that decision?</h4>
              I was introduced to Sunstone by my friend and when I visited the website, I realized that I could get a good platform here to learn about the things that would benefit me. The entrepreneur & highly experienced team was my major attraction.
              <h2>"Reading random books help but you need a structured learning curve."</h2>
              <h4>As an alumnus, how do you stay in touch with faculty and Sunstone team at present?</h4>
              I am in regular touch. Rather, I speak to the faculty on weekly basis. Rajul is my mentor. I take advice from him on various business issues. This is like getting top grade consulting free of cost. Others at Sunstone are always available on a phone call or email. Whatsapp, google group, LinkedIn, FB etc is widely used within the community here. In today’s world staying connected is not a problem when you have a group of which you want to be part of.

              <h4>What made you pick Sunstone over other B schools?</h4>
              For me the choice was very simple. I wanted a B school where practical knowledge is imparted and the problems in curriculum are the ones faced by me in real business. Marketing, Problem Solving, Negotiation, Growth etc. I use all this knowledge in my day to day business and am still practicing the concepts. To be honest (and my friends joke about this too), I recovered 50% of my fees in just two vendor contract negotiations after the Negotiation workshop :). Now, that’s value for money …
              <h2>"If you believe in the idea then just go for it."</h2>
              <h4>What according to you is the biggest advantage of pursuing PGPM from Sunstone?</h4>
              <p>Practical knowledge! I am an avid reader. I read at least one business book a month. Have read majority of business books from Peter Drucker classics to today’s best sellers. But now I feel, reading random books do help but still you need a structured learning curve. Once you have the structure then all the learning makes more sense and you develop better insights.</p>

              <p>Also, you have that confidence which comes when you feel empowered by the network of people around you. Entrepreneurship is a lonely journey but when you know that there are people who could help you connect, develop insights, or just plain help brainstorm it works wonders. It worked for me. For me Sunstone is Confidence delivered via Active Network & Mentoring.</p>

              <h4>What are your 3 most important take aways from Sunstone?</h4>
              Confidence, Exposure and Networking.

              <h4></h4>What would you have missed if you did not do this program?
              I would have missed great learning, student community, its people. I have made some very good friends here. PGPM was also fun during the classes and question sessions. Some sessions were stress busters. And those parties icon smile Ratnesh Upadhyay
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="8jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/8.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Ruchir Singhvi</div>              
               <div class="designation">Director Sales, Calsoft Labs</div>
               <div class="batch">Fall Class of 2013</div>
              </div>
              <h4>What is your current role?</h4>
              I am currently working as Director Sales at Calsoft Labs, an Alten group company.
              <h4>What is your vision for yourself?</h4>
              As a professional, my target is to constantly improve my skills and knowledge which can help me attain the role of a business leader.
              <h2>"…a life long support as it extends beyond the completion of course…"</h2>
              <h4>If a techie wants to move to sales in IT services, how should he go about it?</h4>
              I strongly believe having a tech background is a huge plus when moving into sales in IT services because in the end, the business is about technology. However tech alone does not help in long run as there is much to learn, about business models, strategy, marketing etc., to be an efficient and effective sales guy.

              <h4>What is your advice for professionals who are looking for part time management programs?</h4>
              Before joining any course, one should understand the background of the people and the pedagogy. A strong industry background definitely helps. It is also important that the course be framed in such a manner that it has a professional tackle real business world issues, something they can relate to and hence, appreciate better.
              <h2>"A tech background is a huge plus when moving into sales in IT services"</h2>
              <h4>As an alumni, how do you stay connected with the Sunstone community?</h4>
              Alumni networking sessions, a regular feature at Sunstone, are a great way to stay connected with other Sunstone folks.

              <h4>What according to you is the biggest advantage of Sunstone ?</h4>
              There are various but as per me, the biggest is the Sunstone team itself. They provide excellent support and guidance on an individual basis. Such mentoring enables students to explore newer avenues and guides them in uncovering the path to achieve their goals. What is even better is that this is a life long support as it extends even beyond completion of the course.
              <h2>"Alumni networking sessions, a regular feature at Sunstone, are a great way to stay connected"</h2>
              <h4>What would you have missed if you had not pursued PGPM from Sunstone?</h4>
              Being in sales, I believe I lacked the complete view of business function which Sunstone helped mitigate to a great extent.

              <h4>Which is your most memorable moment at Sunstone?</h4>
              Multiple late night assignments, especially Markstrat which ran for a period of 2-3 weeks icon smile Ruchir Singhvi
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="9jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/9.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Gopi Krishna Madugula</div>
                <div class="designation">Consultant, Ernst & Young</div>
                <div class="batch">Fall Class of 2014</div>
              </div>
              <h4>What was your role when you joined Sunstone?</h4>
              I was working as an IT Consultant with Oracle when I joined Sunstone. I was implementing Fusion CRM Sales application for Oracle, playing a techno functional role. As I was involved in internal implementation, I was not getting any client exposure in that role.
              <h4>Tell us about your new role.</h4>
              I am now moving into a Consultant position with Ernst & Young. I would be responsible for implementing Fusion CRM application for various customers across India. This would be a pure consulting position involving client meetings, understanding their business and implementing the CRM application as per their requirements. The learning curve for this job is very high as customers come from varied domains and their requirements vary drastically.
              <h2>"Sunstone showed me lot of avenues for me to grow and this opportunity is one of them."</h2>

              <h4>What is your long term vision for yourself</h4>
              I would like to continue in the CRM implementation and at some, point see myself as a Global Head for CRM implementation at a reputed company.

              <h4>You are a current student at Sunstone. How has your experience been so far</h4>
              My experience with Sunstone so far has been wonderful to say the least. I have learnt a lot which would have been impossible if I haven’t joined Sunstone. Sunstone showed me lot of avenues for me to grow and this opportunity is one of them.
              <h2>"Pick a program which teaches you practical application rather than just academic understanding"</h2>
              <h4>You are pursuing this program along with your job. How do you manage your time</h4>
              Time Management is very important to balance work and studies. I try to spend some time everyday at office on the readings provided. I use the forums to get my doubts clarified rather than wait for the webinars. This saves me a lot of time while doing my assignments.

              <h4>What is your advice for professionals who want to pursue a management program</h4>
              I would suggest to go for a program which helps you understand how the industry works and which gives you ample amount of business exposure. Go for a program which teaches you practical application rather than just academic understanding and in my opinion Sunstone is the only school that gives you this.
              <h2>"Understand the importance of a professional network"</h2>
              <h4>What are top 3 lessons learnt at Sunstone so far</h4>
              <p>1. Understand your organization and how business is done.</p>
              <p>2. Understand the importance of your role, and it’s impact.</p>
              <p>3. Finally, the importance of a professional network.</p>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="10jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/10.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Abhishek Nimonkar</div>
                <div class="designation">Product Manager, Citrus Payment</div>
                <div class="batch">Class of 2012</div>
              </div>
              <h4>What is your current role?</h4>
              I’m working as a Product Manager in Citrus Payment and am responsible for the core payment platform and merchant products.
              To realize my full potential to the extent I can and to keep pushing my personal boundaries.
              <h4>What were you doing before Sunstone?</h4>
              I was working as Software Architect for an offline payment product before I joined Sunstone. During the course I moved into the role of Program Management in my previous organization itself.
              <h2>"One year at Sunstone was like spending 3 years at various jobs put together!"</h2>
              <h4>What is your advice for techies who want to move to senior management positions?</h4>
              Get the right perspective and focus on getting things done rather than on what you can or cannot do. Start observing and interacting with the people in business roles in your own organization and see what you need to do to be in that role. Learn to develop big picture thinking. Try to go beyond just the code deliverables.

              <h4>What is your advice for professionals who are looking for part time management programs?</h4>
              First of all, evaluate why do you want to do such a program? The onus of extracting maximum value from such programs is on you, so see if you can give enough time and energy to the program. And have an open mind once you join it!
              <h4>If you were to hire product managers for your team, what skills and what profiles would you look for?</h4>
              I would look for people who can evaluate a problem on varied levels of detail, coz one has to constantly prioritize and take small to big decisions. Ownership is an absolute must quality.
              <h2>"(In a Product Manager) ownership is an absolute must quality."</h2>

              <h4>What is single biggest change you noticed in yourself after Sunstone?</h4>
              Retaining a big picture thinking while going about your daily work! It acts as a guideline and radar for you in everything you do.

              <h4>What would you have missed if you had not pursued PGPM from Sunstone?</h4>
              It brought me out of my comfort zone. Sunstone also fast forwarded the learning I could not possibly have had otherwise. One year at Sunstone was like spending 3 years at various jobs put together!

              <h4>What is your vision for yourself?</h4>
              To realize my full potential to the extent I can and to keep pushing my personal boundaries.
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="11jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/11.jpg" width="100px"> 
              
              <div class="abt_mem">
                <div class="name">Tarun Jain</div>
                <div class="designation">Delivery Manager, NCR Corporation</div>
                <div class="batch">Class of 2012</div>
              </div>
               <h4>What is your current role?</h4>
              I am presently working as Delivery Manager with NCR Corporation. My primary responsibility is to manage team of about 35 associates across various technologies and applications. I am specifically looking after sales applications and support activities to keep the business running 24X7, and across the globe. My effectiveness is measured based on metrics relating to planning, resource management and, most importantly, employee satisfaction.
              <h4>What were you doing before Sunstone?</h4>
              I was working as project lead leading a much smaller group within the same company. There, I was responsible for helping team members to keep the applications up and running, and also for grooming their technical and interpersonal skills. Surely, the span of influence was much smaller then.
              <h2>"The best thing I did for my career was to join Sunstone!"</h2>
              <h4>What is your advice for techies who want to get to move to senior management positions?</h4>
              Senior management roles are more focused towards bringing in value to the company, rather than execution. Unless you start thinking beyond technology A and technology B, and application A and application B, you will not be able to truly add value to the company. I’m not saying that being technologically oriented is bad, but unless you start thinking holistically about various other stakeholders like customers, vendors, employees, shareholders, etc, you will not be able to do effectively perform senior management roles. It’s a tall order, but to start, I advise that you should commence networking with people who are presently in such roles, both internal and external.

              <h4>What is your advice for professionals who are looking for part time management programs?</h4>
              Well, I am not marketing Sunstone here but I can speak out emphatically that the best thing I did for my career was to join Sunstone. I put in enough time to do justice to my studies even though it was a really fast-paced course and required significant time commitment from my side. As students, we were exposed to the real world issues which gave us an edge over other theoretical courses run by other institutions. Apart from that, we got many opportunities to network which I believe is paramount to one’s growth.
              <h2>"Unless you start thinking beyond technologies and applications, you will not be able to truly add value to 

the company."</h2>
              <h4>You have a team of techies you manage. Do you feel it is important for techies to understand business skills?</h4>
              Unequivocally yes! After certain tenure, you need to understand how the activities you are doing relate to business. I repeat, keep asking yourself on how you can you add value to your company? It’s a very important mindset switch – from someone who does what he/she is told to someone who seeks opportunities and pursues it. Without this change, unfortunately, your growth will stall.

              <h4>If you were to hire managers in your team, which skills would you look for and which profiles?</h4>
              At NCR, we are heavily focused on Java technologies, so as a baseline, we do look for candidates who have a working understanding of Java and programming. Yet personally, I believe that attitude towards the learning and understanding business is much more important. I really can’t have anyone work on Java code forever; both he/she and I have to move up to a higher responsibility plane and therefore if one is forthcoming in proposing novel ideas and open to learning and unlearning, I would seriously like to consider him/her for a role in my team.
              <h2>"if one is forthcoming in proposing novel ideas and open to learning and unlearning, I would seriously like to 

consider him/her for a role in my team"</h2>
              <h4>What is single biggest change you noticed in yourself after Sunstone?</h4>
              Change of perspective, or how I view things. Earlier I never appreciated the big picture and strategic management decisions. Now, I appreciate and am able to see the rationale behind most strategic decisions and changes. At a personal level, I am much more comfortable to take risks and counter new challenges. Not only this, I feel I have become much more outgoing and enjoy networking, something which was hard for me to do a few years back.

              <h4>What would you have missed if you had not pursued PGPM from Sunstone?</h4>
              I think I would have been doing things in same way, which would surely have been sub-optimal for my personal and professional growth. I would definitely have missed the go-getter attitude. It’s indeed a big transformation.
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="12jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/12.jpg" width="100px"> 
              
              <div class="abt_mem">
                <div class="name">Alok Deo Singh</div>
                <div class="designation">Associate Consultant at TCS</div>
                <div class="batch">Fall Class of 2014</div>
              </div>
              <h4>What is your current role?</h4>
              Program Manager"
              <h4>How do you manage your time?</h4>
              <p>9-6 is for office</p>
              <p>6-9 with family</p>
              <p>9-12 study</p>
              There are many professionals who find it hard to pursue personal development courses with their jobs! How do you manage your time?
              I feel that it is best to pursue this course when you are in job. You can apply the concepts in your daily official activities.
              <h2>"Level 1 experience has been excellent. There has been a change in my thought process."</h2>
              <h4>Do you feel there has been a change in the way you work since you started Sunstone?</h4>
              <p>Yes! There has been a shift in my thought process.</p>

              <p>Will quote a recent example, I was working on a proposal that involved all the bigwigs. I felt more confident when answering to them and was able to connect to what they were discussing and why was that important. They were asking questions like – show me the margins with this proposal in next 2-3 years, what investment we are doing for the client to grab the proposal, pricing strategy etc..etc..although I was assigned only the area related to project management..I could understand all the business development decisions.</p>

              <p>Recently, I have been promoted to look after a program, after working as project manager for 3-4 years and my next step.</p>

              <h4>Why did you choose Sunstone PGPM?</h4>
              Sunstone was suggested to me by a friend. The best part was that I can do it with my job. Then courses and teaching were pragmatic and addressed real problems.
              <h2>"As for my time, 9-6 is for my job, 6-9 for family and 9-12 is earmarked for study"</h2>
              <h4>How has your experience been so far?</h4>
              Experience has been excellent. It has helped me to look into the problem from generalist lens rather than specialist which was plaguing my thought process these years.
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="13jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/13.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Jumana Sura</div>
                <div class="designation">Project Manager, Greytrix India Pvt Ltd</div>
                <div class="batch">Fall Class of 2014</div>
              </div>
              <h4>What is your current role?</h4>
              Project Manager @ Greytrix India Pvt. Ltd.
              <h4>There are many professionals who find it hard to pursue personal development courses with their jobs! How do you manage your time?</h4>
              To manage my time and give time to courses, I try to take up one course at a time, as usually two courses run in parallel. Since the course schedule and assignment dates have difference of one or two days from each other after office I do make it a point to check communications from Sunstone (which are very prompt) and plan my time accordingly. Sometimes when I miss my class discussion, I go through the recording whenever I get time, sometimes in parts.
              <h2>"I was assigned product management tasks in my company, due to my understanding of marketing and sales concepts learnt at Sunstone."</h2>
              <h4>What is your advice to professionals who are considering pursuing a management program?</h4>
              <p>Now a days, with technology moving at such fast pace, its not enough to just have technical expertise. In current market situations, there is increasing demand of professionals, who understand the business behind technology well too. Also knowledge of domains, which we chose to pursue is of greater importance.</p>

              <p>Management programs should be more practical and focused to industry demands, so that we could understand the application of concepts, which Sunstone Business School serves very well.</p>

              <h4>Why did you choose Sunstone PGPM?</h4>
              <p>I had enrolled earlier for executive MBA from another institute, where in they just send me the study material and I was required to study and book exam slot and give my exam… I never got time to touch those books and the times when I did I got bored as I could not visualize how concepts will be implemented in my work actually.</p>

              <p>Then I came across Sunstone on Linkedin and I went through the site, and thought of inquiring. Then I got a call for counselling and interview by some industry leaders and after interacting with them, I got convinced to take it up as the course was completely case studies and simulations based, where we can apply the learnt concepts and refine our learning based on feedback of expert faculty of Sunstone.</p>
              <h2>"Management programs should be more practical and focused to industry demands"</h2>
              <h4>How has your experience been so far?</h4>
              <p>Sunstone is completely industry focused. They have best in class faculty with excellent educational backgrounds and industry experience. They are always available for help in case of doubts and are prompt in their reply. Besides faculty the course is structured in form of case studies and simulations. Also we are provided with excellent reads of Harvard Business Review to enhance our understanding of subjects. The assignments are either individual or group assignments, which are mostly case study based. Knolscape is a great tool for understanding and application of Accounting concepts.</p>

              <p>One you embark on this exciting journey, be prepared that you’ll not get time to take it easy. It will require dedicated time and effort towards successful completion of courses. But you’ll enjoy the roller coaster ride. At least I am enjoying along with learning. Learning management concepts would be so easy and fun, I had never thought so. Also you get to form a b network with Alumni which takes you forward by better knowledge sharing across the industry.</p>

              <h4>Do you feel there has been a change in the way you work since you started Sunstone?</h4>
              <p>Oh Yes! Recently I was given product manager role in my company, due to my understanding of marketing and sales concepts. Product management is different from regular Project management, in the sense that Project management is just about taking care of timely and quality delivery of project to the customer, as per customer needs as specified.</p>
              <p>Product management expands the horizon to understanding market needs, cost and POI analysis by investing in product, Product distribution and becoming aware of distribution channels, Marketing and sales and much more… I got to learn all these concepts in Sunstone and could apply the thinking while preparing a solid business case.</p>
              <h2>"it’s not enough to just have technical expertise"</h2>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="14jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/14.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Gaurav Lakhani</div>
                <div class="designation">Product Manager, Cvent</div>
                <div class="batch">Fall Class of 2014</div>
              </div>
              <h4>What was your role when you joined Sunstone?</h4>
              I was managing a Fund Supermarket Product of Fidelity as an Analyst. Managing multiple stakeholders, defining opportunities & prioritising them in a product roadmap to deliver products from concept to implementation. The product is an enabler at Fidelity for growing asset management business across UK.
              <h4>Tell us about your new role.</h4>
              I would be managing an Event Management Product at Cvent from Global Expansion Perspective. Building a product strategy and roadmap for UK, German & Australian Markets. Cvent is a world leader in Event Management Platform consisting bouquet of point solutions varying from Web & Mobile based products.
              <h2>"I got this opportunity because of Sunstone"</h2>
              <h4>Were you actively looking for a switch? How did you get this opportunity?</h4>
              <p>It happened because of Sunstone.</p>

              <p>I started interacting with mentors at Sunstone, Rajul and Tapan regarding my career aspirations. They helped me identify the prospective role & platform for career growth.</p>
              Once we had identified the kind of roles I should go for, I contacted Mritunjay – A Product Management expert at Sunstone who helped me build effective resume through multiple reviews and a sound pitch through mock interviews.
              Interestingly the opportunity at Cvent came through one of my peers at Sunstone. I happened to mention to him that I was looking for a job and he mentioned that his company Cvent is looking for product managers. He passed my resume in his company and after few rounds of interviews I was offered this role.
              What is your long term vision for yourself?
              Creating Value either through entrepreneurship or intrapreneurship. Do Epic Shit!

              <h4>You are a current student at Sunstone. How has your experience been so far?</h4>
              It has been a great experience interacting with everyone at Sunstone. Sunstone Business School has reminded me who I can be. It has convinced me not to wait for opportunities but rather create them.
              <h2>"Business is complex; our job is to make it simple"</h2>
              <h4>What are top 3 lessons learnt at Sunstone so far?</h4>
              Business is complex; our job is to make it simple.
              Managing Expectation & Perception are key to success.
              Learn, Implement & Manage Risk – Have No Fear
              You are pursuing this program along with your job. How do you manage your time?
              Time Management comes only with practice, you cannot learn until you practice it. I do manage part time program through structured approach, effective collaboration & rebated sleep.

              <h4>What is your advice for professionals who want to pursue a management program?</h4>
              If you are ready to work hard & want to build a successful career then Sunstone is the place for you. You get mentors for life here icon smile Gaurav Lakhani
            <h2>"Time Management comes only with practice"</h2>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="15jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/15.jpg" width="100px"> 
              
              <div class="abt_mem">
                <div class="name">Sandeep Goyal</div>
                <div class="designation">Software Development Engineer II, Amazon</div>
                <div class="batch">Fall Class of 2013</div>
              </div>
              <h4>What were you doing when you joined Sunstone?</h4>
              I was working at Calypto Design Systems, an EDA startup, for last 7-8 years. There I was managing power-optimization product.
              <h4>What are you current responsibilities at Amazon?</h4>
              At Amazon, I am part of Amazon Associates Program, web’s most popular and successful Affiliate Program. Here we are responsible for processing data and reports for publishers throughout the world for various programs such as CPA, CPC and CPM. This requires managing terabytes of data daily and involves some of the latest technologies of real-time data processing and Big-Data.
              <h2>"EDA (Electronic Design Automation) to Online Advertising at Amazon."</h2>
              <h4>You moved into an engineering position after your PGPM. Why?</h4>
              <p>This was a very conscious decision. In fact, I had the opportunity to be interviewed for engineering manager position at Amazon and was in similar position in Calypto also. But coming from a totally different technology background, I realized it wouldn’t do justice to the role that requires managing the technology and also won’t go long. That’s why I chose to move into engineering position that will allow me to understand and appreciate the nuances of depth and breadth of Big-Data and cloud technologies.</p>

              <p>Equipped with right technical skills from this experience and management knowledge from PGPM, I believe it will lay right foundation for better prospects.</p>

              <p>I would also like to highlight that my learnings at Sunstone, especially sessions of digital marketing, problem solving and networking with experts of these technologies at Sunstone was of great help in landing with this opportunity.</p>
              <h4>What is your advice for EDA domain folks who want to move out of it?</h4>
              <p>I would say that moving to different domains is very much possible but requires persistent effort. Being a part of technology world, it requires that we are aware of the technologies of the domain that we aspire to move into. For this, I would suggest to learn more about that domain.</p>

              <p>In my case, I was very much keen to move into distributed computing and cloud technology space. So, I learnt about Hadoop and related technologies.</p>

              <h2>"Moving to different domains is very much possible but requires persistent effort"</h2>
              <h4>Would you advice professionals with your kind of experience to pursue a management program?</h4>
              Absolutely yes. A management program, especially the one like Sunstone program with its case study based pedagogy, equips professionals with relevant business and decision making skills to deal effectively in the industry and be prepared to take up leadership roles. Moreover, working executives can relate their learnings with their job experiences. Above all, the program provides opportunity to network with professionals and experts of different domain and learn from them.

              <h4>What were your top 3 take aways from Sunstone PGPM?</h4>
              A resourceful network of professionals and entrepreneurs. The importance of teamwork that makes us achieve much more and the lesson that learning should never stop.
              <h2>"A resourceful network of professionals and entrepreneurs"</h2>
              <h4>What would you have missed if you did not pursue PGPM at Sunstone?</h4>
              Two things I would have surely missed. First, the industry interaction sessions where I got the opportunity to understand about the various possibilities about the career progression. Second, the skill to dive through ambiguity and complexity of any given situation learnt in problem solving and strategy sessions.

              <h4>What is your vision for your future?</h4>
              In near future I see myself either associated with startup or in leadership position at e-commerce/data-analytics Company.
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="16jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/16.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Gunjan Gupta</div>
                <div class="designation">Product manager, Magic Software</div>
                <div class="batch">Fall Class of 2013</div>
              </div>
              <h4>What is your current role? What are your responsibilities in your current role?</h4>
              I am currently working as a Product Manager in Magic Software. My responsibilities include creating a future road-map for Magic’s products by understanding market requirements and then getting the product made and delivered by internal teams.
              <h4>What were you doing before this?</h4>
              Prior to joining Magic software, I was working as a computer scientist at Adobe Systems which was a hardcore techie job involving technical architecture and coding. I have also been involved in multiple incubation/ideation projects at Adobe.
              <h2>"Its unbelievable how doors suddenly start opening as you widen your network."</h2>
              <h4>What is your advice for techies who want to move to Product Management?</h4>
              Try to get as much exposure of the market as you can. Even if you are totally in development profile, you can still try to figure out the business needs for building your product by talking to appropriate stakeholders in your company and also through analyzing what the competitors are doing. Most of the time techies have a very constrained view of their work, which is limited to the technical requirements but they fail to look at the broader picture of why the product is being built at the first place, how are the users going to use it, who is going to pay for it etc.

              <h4>Why did you select Sunstone PGPM?</h4>
              Sunstone PGPM gives the unique opportunity to get top class management education without leaving your current job. Moreover the Sunstone team comprised of entrepreneurs and industry leaders thus emphasizing practical knowledge as opposed to more theoretical and academic stuff taught in traditional B-Schools.
              <h2>"Unless you are able to synthesize the results and present them in a way that the listener can understand, all

your results are useless"</h2>
              <h4>Your top 3 learnings from Sunstone PGPM</h4>
              <p>Network, network and network: I think if I have to take out one single learning from the whole program then it has to be the importance of networking. Its totally unbelievable how doors suddenly start opening as you widen your network circle. Rajul really pushed hard to drive home the importance of networking and can I only say that his effort was totally worth it.</p>
              <p>Build a story for everything: You can do deep analysis of a problem, gather extensive data, read all references, but unless you are able to synthesize the results and present them in a way that the listener can understand, all your results are useless. Story building comes to the rescue here and we extensively used it to reason about the problem and present the solution. Its not just a presentation tool but a whole different way to think about how problems need to be approached.</p>
              <p>Leave your comfort zone for the magic to happen: Working for years in the same job profile and doing the same type of work gives us a sense of security because we become so expert in our work that any problem is just a child’s play. There is no hard problem which we can not solve. This is our comfort zone. There is no uncertainty in one’s comfort zone, and life is very predictable. Unfortunately this predictability also makes life very boring. There is nothing new. And even the security that the comfort zone gives is just an illusion. Technology is changing so fast that you wouldn’t even realize and freshers coming out of college will outsmart you while you will still be stuck with the age old work which suddenly no one needs. Faculty at Sunstone was really able to coax us to get out of our comfort zone and explore the world by trying out new opportunities.</p>
              <h4>Your future vision for your career</h4>
              Innovation has been passion. I would like to spearhead innovation wherever my career takes me.
            <h2>"… Techies have a very constrained view of their work… they fail to look at why the product is being built in 

the first place…"</h2>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="17jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/17.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Kaushalendra Yadav</div>
                <div class="designation">COO, Mantra Labs</div>
                <div class="batch">Spring Class of 2014</div>
              </div>
              <h4>What were you doing before you joined Sunstone?</h4>
              I was employed with Symphony Teleca with designation “Team Lead – Product Development”. I worked on creating windows installers and configuration management for one of the client. Later I worked as test automation engineer.
              <h4>Whats your current role?</h4>
              My current designation is Chief Operating Officer icon smile Kaushalendra Yadav . I founded this company with my partner Parag in 2009. Parag continued to work full time while I have joined it full time in April 2014 after finishing my PGPM from Sunstone.
              <h2>"After finishing Sunstone PGPM I gained confidence to move to business role."</h2>
              <h4>Did you always plan to start you own firm or was this a recent development?</h4>
              I had some stake from the beginning in Mantra Labs, but I never worked full time as my technical expertise was different than what Mantra does. I always thought to join Mantra Labs full time at some point of time. After finishing PGPM I gained confidence to make this switch.

              <h4>Tell us more about your business.</h4>
              Mantra Labs, is a creative technology lab, which develops cost-effective and quality solutions using cutting-edge technologies. We are a full-service lab merging design, engineering and product-management practices to lead strategies in the cloud-connected channel. We are platform Universalists and embrace Vision-to-Product throughout our work. We leverage our project management expertise with the highest quality standards that forms the backbone of our deliverables. Mantra Labs provides a comprehensive end-to-end product definition, design, development, roll-out and maintenance services.
              <h2>"Starting on your own is difficult in the beginning but later it provides immense satisfaction"</h2>
              <h4>How is starting on your own different from working for a big company?</h4>
              <p>Starting on your own is difficult in the beginning but later it provides immense satisfaction. You are generating employment in this economy and you hope to make it big one day. Your employees have some expectations and you feel more responsible towards them. You interact with clients directly and try to help them and learn from them. You end up performing more functions.</p>

              <p>Working for big company gives the feeling of job security, continuous monthly cash-flow and less uncertainty but less challenges , probably slow learning process, you may end up doing same job for longer times, its difficult to change work.</p>

              <h4>What made you pursue management education from Sunstone?</h4>
              I wanted to switch from individual contributors profile to management profile. Sunstone provided perfect platform to learn about management without leaving my job. I was impressed with the delivery model and the problem based learning methodology. I knew a couple of my batch-mates who had already finished their PGPM from sunstone and they encouraged me to join it.
              <h2>"Just make sure that you can survive on bare minimum and start doing what you want to do"</h2>
              <h4>What would you have missed if you had not done this program?</h4>
              The confidence to switch to management role. We have done enough exercises during this program where you are asked to be in a position of decision maker, which has helped a lot.

              <h4>Whats your advice for professionals who have an itch to start on their own? icon smile Kaushalendra Yadav</h4>
              There are so many great people who have answered this question and so much reading material. I would just like to add that we should not think too much before starting on our own. Just make sure that you can survive on bare minimum and start doing what you want to do.

              <h4>Whats your vision for your venture and yourself?</h4>
              <p>Right now we are 30 people. We are working as engineering partner for some great startups. Its a service based model and we are seeing growth so we would like to grow organically as much as possible while maintaining quality of our delivery. We are targeting some enterprise customers for long term contracts, which will provide some stability.</p>

              <p>Personally I have got an opportunity to apply what I have learned in PGPM and keep learning on the job. I am enjoying the role and responsibilities.</p>

              ​<p>My long term goal is to continue to invest and acquire new skills every year, follow my passion, remain active in implementing things that I dreamt of.</p>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="18jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/18.jpg" width="100px">
              <div class="abt_mem">
                <div class="name">Anshuman Misra</div>
                <div class="designation">Director of Engineering, Bharti SoftBank</div>
                <div class="batch">Class of 2012</div>
              </div>
              <h4>What is your current role?</h4>
              Today I am Director of Engineering at BSB – Bharti SoftBank. Before this is I was Director of Product here.
              <h4>What is the single biggest change you have noticed in yourself?</h4>
              <p>For me there are 2 very important things:</p>

              <p>1. I realised that others who have ideas different from me, could also be right, so I have become open to other’s ideas. Working with my peers at Sunstone was my greatest learning. A bunch of smart professionals discussing and solving business problems was the best learning tool.</p>
              <p>2. Big picture thinking – I am now able to see the big picture of why I am doing a task, earlier it was about just getting it done.</p>
              <h2>"Working with my peers at Sunstone was my greatest learning."</h2>
              <h4>What impressed you most about Sunstone?</h4>
              <p>I was able to rediscover my self. Also I realised the importance of structured thinking. With structured thinking I am able to accomplish even more.</p>
              <h4>What would you have missed if you had not done the Sunstone program?</h4>
              <p>I will say how to accomplish a business role – understanding of how businesses run…</p>

              <p>Getting a business role is not difficult – living it day in and day out is what one needs to learn and appreciate.</p>

              <p>For example, when it comes to driving a car, any one can ‘switch on’ the ignition, but the question is can you drive at 150 km/hr with out hitting and injuring any one …(smiles)</p>
              <h2>"Any role that involves working beyond individual capacity…. business knowledge is a MUST."</h2>
              <h4>What is your advice to everyone who is considering doing an MBA program?</h4>
              Ask yourself if the time is right, do you feel the need? If you can’t appreciate what is being taught, it will not benefit you, but if you really needed this education, always felt the gap and then you get business education, you will do wonders with it!

              <h4>Do you think business awareness is important?</h4>
              <p>In my domain of Mobile internet, tech and business can not be seen as 2 different roles, they are literally married to each other. You should know how to build a product, launch it, market it, control the churn…etc.</p>

              <p>I will say its very important in mobility.</p>

              <p>Any role that involves working beyond individual capacity – like operations, managing people , delivery management. For these roles business knowledge is a MUST.</p>
              <h2>"With structured thinking I am able to accomplish even more"</h2>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="19jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/19.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Dheeraj Garg</div>
                <div class="designation">Engg & Product Manager, Johnson Controls</div>
                <div class="batch">Class of 2012</div>
              </div>

              <h4>What is your current role?</h4>
              Today I am Director of Engineering at BSB – Bharti SoftBank. Before this is I was Director of Product here.
              <h2>"This program helped me generate better growth opportunities for myself."</h2>
              <h4>What is your advice to professionals aiming to do part time MBA program?</h4>
              There is no short cut…As far as my experience goes, no part time program can give you a ticket to jump levels in hierarchy or land up with an unusually aspired job. One should do part time program to understand what steps can be taken to succeed and be equipped with the skills needed. You still need to put effort to progress in your career.
              <h2>"Every individual is going to perform any task better if they know the purpose of accomplishing the task"</h2>
              <h4>What impressed you most about Sunstone?</h4>
              The teaching methodology followed by Sunstone impressed me the most. We solved many real business problems that made us apply all the concepts that we had learnt during the lectures. Sometimes we struggled through the assignments but the learning at the end was immense. We also interacted with industry leaders to understand the application of business concepts from them. So over all, we were very hands on throughout the program.
              <h2>"There is no short cut"</h2>
              <h4>What are the short-term and long-term benefits from Sunstone</h4>
              Other than learning business skills of sales, marketing, finance etc.,

              <h6>Short-term benefits for me were:</h6>
              <p><i class="fa fa-chevron-right fa-fw"></i> I sharpened my presentation skills</p>
              <p><i class="fa fa-chevron-right fa-fw"></i> I was able to empathize with my seniors and my organization. I understood their challenges and that made me understand how I can help better.</p>
              <p><i class="fa fa-chevron-right fa-fw"></i> In business discussions, I was able to participate and get noticed.</p>
              <p>Long term benefits: I want to grow vertically and with this program I am able to generate better growth opportunities for my self.</p>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="20jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/20.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Amit Jain</div>
                <div class="designation">Senior Manager, Business Dev, QAI</div>
                <div class="batch">Spring Class of 2014</div>
              </div>
              <h4>What is your current role?</h4>
              I am Engineering and Product Manager with Johnson Control
              <h4>What is youradvice to everyone who is considering doing an MBA program?</h4>
            It is not a cakewalk. Be prepared to work hard, put immense amount of time and effort and stay committed through ​difficult ​times. ​This journey shall prepare you for the change you want for yourself and I’m confident that you will cherish this experience for the time to come.
            <h2>"Sunstone support for me was just a phone call away."</h2>
            <h4>What is the biggest change you have noticed in yourself after Sunstone?</h4>
            A few significant changes that I’ve experienced are:

            ​<p><i class="fa fa-chevron-right fa-fw"></i>I’ve started to take more informed decisions not only in professional life but also in personal affairs</p>
            ​<p><i class="fa fa-chevron-right fa-fw"></i>I’ve started to deal with situations more effectively. Be it Goal setting with my manager, negotiating a deal with client or creating report for management.</p>
            <p><i class="fa fa-chevron-right fa-fw"></i>A few skills like knowing the BATNA, Zoom-in and Zoom-Out, Invest time to look at the tasks / challenges holistically and then decide the next course of action, and most importantly Networking skills along with other management trainings are helping a lot to complete tasks effectively.</p>
            ​<p><i class="fa fa-chevron-right fa-fw"></i>I believe that ​solving countless real business problems at Sunstone and the guidance by mentors has helped me reach here</p>
            <h4>What impressed you most about Sunstone?</h4>
            Amongst several things that I liked at Sunstone, two of them stand out :

            People – ​always ready to help – ​faculty, management team, peers are supportive, at any point of time help is available. Faculty is helpful in resolving doubts, guiding when I am stuck to being inspirational
            Pedagogy – exceptional – The method of learning is by solving real business problems in a hands-on manner. I have also learnt a lot from other students while solving the assignments as a team.
            What would you have missed if you had not done the Sunstone program?
            Other than the obvious ones around business knowledge and soft skills I would have missed the professional network of people that I was able to build during the course. Without the guidance and support I received from the faculty, I would ​never have thought of the impact my decisions will have on the future.
            <h2>"(a management program) is not a cakewalk"</h2>
            <h4>How did Sunstone help you in career opportunities?</h4>
            The Sunstone program helped me at each and every stage:

            ​<p><i class="fa fa-chevron-right fa-fw"></i>I ​ had sessions with various people (faculty, coaches etc.) ​to understand my expectations, ​goals, skills</p>
            ​<p><i class="fa fa-chevron-right fa-fw"></i>My coaches ​​discussed options ​that is available for me and ​then showed me the path</p>
            ​<p><i class="fa fa-chevron-right fa-fw"></i>The placement team also ​identified opportunities for me for my next role</p>
            ​<p><i class="fa fa-chevron-right fa-fw"></i>My career coaches helped me prepare for interview​ by conducting Mock interviews​.​</p>
            <p><i class="fa fa-chevron-right fa-fw"></i>Coaches also helped me at various stages of my interview​ like in the strategy project given to me</p>
            <p><i class="fa fa-chevron-right fa-fw"></i>Team ​Sunstone ​and their extended ​​support was just a phone call away. ​I’m confident that the support shall continue ​ for life time​.</p>
            <h2>"My long term goal is to continue to invest and acquire new skills every year"</h2>
           <h4> What is your vision for your future?</h4>
            <p>I’ve gained significant experience in ​Management ​Consulting world be it ​Strategy Consulting (India Entry Consulting), IT Consulting (Retail lending and Global Limits management) and now Process consulting.</p>

            <p>My goal for this year is to invest in gaining in-depth knowledge in the areas of Mergers & Acquisitions and shall start my own blog to evaluate and discuss the major transactions happening around the world (more specifically in Automotive and Hi-Tech sectors).</p>

            ​<p>My long term goal is to continue to invest and acquire new skills every year, follow my passion, remain active in implementing things that I dreamt of.</p>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="21jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/21.jpg" width="100px">
              <div class="abt_mem">
                <div class="name">Vakul Agarwal</div>
                <div class="designation">TPM, Amazon</div>
                <div class="batch">Spring Class of 2013</div>
              </div> 
              
              <h4>What do I do now?</h4>
              I am currently working as Technical Product Manager for Amazon India responsible for Hardlines Shopping experience. My role is to identify, propose, lead and launch projects evolving consumer experience for Amazon Hardlines categories.
              <h4>My journey </h4>

              <p>Before coming to Sunstone, I was a Lead Software Engineer with Adobe India. During my Sunstone Program, I transitioned into the role of product manager within Adobe and after performing it for a while realized the need of change that brought me to Amazon.</p>

              <p>When I started Sunstone program, my intent was to evolve my thought process.</p>
              Along with my IT role at Adobe, I was also contributing to my family business of textile processing back at home for about 7 years. I realized that I was not considering all possible opportunities in the ecosystem due to lack of exposure to the SME world and Adobe being my only corporate job. Sunstone provided me an opportunity to interact with experts from diverse industries including technology, e tailing, consultancy, retail, insurance, banking, government etc. This experience compelled me to think beyond my comfort zone. My perspective on solutions and my thought process found new ways to evolve.
              <h2>"As humans, we tend to remain in our comfort zones. Breaking it and most importantly perseverance to remain out of it is what Sunstone program taught me. "</h2>
              <h4>What I learnt most from Sunstone?</h4>
              <p>Sunstone experience taught me perseverance, overcoming hesitation to connect, structured thinking and self-awareness.</p>

              <p>As humans, we tend to remain in our comfort zones. Breaking it and most importantly perseverance to remain out of it is what Sunstone program taught me. We tend to think that engineering roles are the most challenging ones and doing anything alongwith it is simply not possible. So many of us don’t even try to get into business aspects. Considering the business aspect of any task/ assignment is not an option, it has to be done to get the best of technology to support business. Business thinking pattern is something that has to be always on, it doesn’t matter whatever you are doing. Sunstone program taught me to handle both the technical and the business aspects.</p>

              <p>As engineers, we boost ourselves in doing tasks that are actually a very small part of a massive system. Sunstone makes you self-aware of where you are in the actual value chain of your organization.</p>

              <p>I was very hesitant when it came to network with other people. All sorts of if’s and but’s used to come into my mind when trying to expand my networking circle. Sunstone helped me to break-free from the barriers that I had created for myself. During the program, I met with colleagues from diverse backgrounds, expert faculty from various walks of life and most importantly able got opportunities to connect with industry leaders which helped me get out of the hesitation loop.</p>

              <p>All of us have a business thought process but all we lack is the structure and tools to amplify it. Know-how of structure, frameworks, business tools and business problems make you confident enough to dive into unknown waters. It is not about being an expert of all but knowing all tits and bits of business basics makes you confident in pursuing any challenge.</p>
              <h2>"Business is all about perseverance, validation and evolution"</h2>
              <h4>Who should enroll in Sunstone program?</h4>
              The one who has an itch to understand business or pursue business roles or wants to be an entrepreneur. Engineers should understand business because you cannot excel without understanding it. Sunstone program provides a launch pad for evolving the thought process required for business roles.

              <h4>My advice for current students</h4>
              Sunstone is all about pushing yourself out of your limits that you set for yourself. The more you explore yourself, the more self-aware you would become. Business is all about perseverance, validation and evolution. Sunstone provides you with tools to tackle all of them. The more you put into this program, the more exponential return you would get out of it.
            <h2>"All of us have a business thought process but all we lack is the structure and tools to amplify it"</h2>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="22jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/22.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Niharika Sharma</div>
                <div class="designation">Sr Product Manager, Oracle</div>
                <div class="batch">Spring Class of 2014</div>
              </div> 
              <h4>What was your role before Sunstone?</h4>
              I was a senior software engineer at Oracle.
              <h4>What is the single biggest change you have noticed in yourself?</h4>
              During this one year with Sunstone, my thinking has evolved a lot. I will say single biggest change is my mindset. Its now more business oriented. Now I not only understand why certain strategic decisions are being taken in my organisation, but also contribute to them.
              <h2>" Sunstone and senior management at Oracle helped me create this opportunity"</h2>
              <h4>What impressed you most about Sunstone?</h4>
              Sunstone’s way of teaching is what impressed me. There is no cramming, no pressure to learn theory from books, you know, the kind we all experience in most schools and colleges. We solved so many business cases, we had to apply our mind and the concepts we learnt. There was no need to mug up anything. I remember so many things that were taught because I applied those concepts, and sometimes really struggled with the business cases.

              <h4>What would you have missed if you had not done the Sunstone program?</h4>
              Honestly, I think I would not have had this role.
              <h2>"Try to first move internally, if you have that opportunity"</h2>
              <h4>What is your advice to everyone who is considering doing an MBA program?</h4>
              Be clear why you are doing the program, and then remember to work towards that goal through out the year.

              <h4>What is your advice to people who are in tech and want to move to product management?</h4>
              From my experience I will say, try to first move internally, if you have that opportunity. This way you are in a familiar environment, you understand the product, so you can focus just on the new role and responsibilities.
              <h2>"Be clear why you are doing the program"</h2>
              <h4>How did Sunstone help you in career transition?</h4>
              The faculty and career counsellors at Sunstone suggested that I should explore internally and talk to my senior management. I approached my senior management and everything worked out well. So I will say they helped me create the opportunity. I also had a brief discussion around what kind of questions are asked for this role, so I was better prepared.
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="23jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/23.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Anshuman Mishra</div>
                <div class="designation">Product Manager, Wize Commerce</div>
                <div class="batch">Class of 2012</div>
              </div>
              <h4>What was your role before Sunstone?</h4>
              I was a technical lead prior to joing the course and during the course my role got transitioned to a Product manager.
              <h4>What is the single biggest change you have noticed in yourself?</h4>
              As a technical guy, you tend to see everything in as black and white. You always believe that requirements have to be crystal clear, why do PMs change requirement every now and then and waste dev efforts. However after changing the sides, I have understood that everything is grey in business. You tend to experiment really fast, fail and start a new experiment until you succeed.
              <h2>"MBA is not a destination. It’s a path to achieve your final goal.  "</h2>
              <h4>Do you feel more confident in taking up a higher role / more business centric role? Why?</h4>
              Yes I feel more confident. Sunstone gave me exposure to different speakers from Industry and during these discussions and informal chats you tend to realize that these people are not alpha males. Anyone can become that by following some discipline in life. Also in my prior exposure, I headed the technology division and managed a team of 40. Exposure from Sunstone and crisis at Times has already given me opportunity and belief to handle these kind of roles.

              <h4>What impressed you most about Sunstone?</h4>
              Industry centric practical approach. The pedagogy is unique and you can relate to real business problems. Also the small batch and interaction proved tremendously helpful.
              <h2>"Take control of the situation by interacting with various stakeholders and being in their shoes"</h2>
              <h4>What would you have missed if you had not done the Sunstone program?</h4>
              It would have taken me longer to realize that managers have infinite time and bandwidth. Also I learnt nuances of business world by noticing the action of faculty especially Rajul. He does a lot of things in parallel and still he is free for you whenever you want.

              <h4>What is your advice to everyone who is considering doing a MBA program?</h4>
              MBA is not a destination. It’s a path to achieve your final goal. Maximise the program by getting the most out of it on things which you want to achieve in your career instead of doing the MBA first and deciding later which career path to choose from.
              <h2>"Managers have infinite time and bandwidth"</h2>
              <h4>What is your advice to people who are in tech and want to move to product management?</h4>
              <p>1. Think positive whenever you scrap a piece of development because of changing requirement.</p>
              <p>2. Try to get a bigger picture of what will happen after developing a feature/story etc. How is it going to change the life of consumer? Try to relate a number to this which could be in monetary terms OR in customer experience terms OR will make a specific process lean or less error prone. Try to attach a KPI to this.</p>
              <p>3. If you are able to successfully do even 50% of the above, you are on the right path of becoming a PM. Take control of the situation by interacting with various stakeholders and being in their shoes. “Influencing without authority” is what a PM does and this is very well taught during Sunstone program.</p>
              <p>4. Leave rest for learning on the job. Don’t overstress yourself and jump the gun. Being watchful of your action and understanding the impact is sufficient to start with.</p>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="24jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/24.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Kunal Kumar</div>
                <div class="designation">Product Manager, Knowlarity</div>
                <div class="batch">Spring Class of 2013</div>
              </div>
              <br><br>
              After a year at Sunstone, my perspective about things around me has changed. I have a more positive mind-set now and can understand things from the perspective of other side as well; I can now connect dots and understand the big picture.
              <h4>Why did I decide to pursue a Management Program?</h4>
              As a technical development manager, I felt myself as a small part of the organization who did not have the complete visibility into “why” of the decision making. I would receive requests from the business for making changes to the existing product, or on creating something new. But I was not always sure of “why we are doing this”, and “what impact would it have on the business or on my work in the future”. It was lack of understanding of what the big picture is that prompted me for a Management degree.
              <h2>" The biggest change is in the mind-set."</h2>
              <h4>Why did I choose Sunstone Business School?</h4>
              <p>One of the main reasons was that I could do it without leaving my job.</p>

              <p>Moreover, one of my batch-mates from IIT Kharagpur was pursuing the PGPM program at that time and he strongly recommended it. He mentioned about the faculty and the interactive nature of student mentoring.  I was also particularly impressed by the problem-based approach of teaching. The fact that you are given a real-world problem to solve at and you work on it in collaboration with students and also teachers is very unique and effective.</p>

              <h4>What did I like about the program?</h4>
              <p>I liked the teaching method a lot. It is very interactive and you can approach the faculty anytime and can discuss your problems. The level of support and mentoring we received in problem solving is great.</p>

              <p>Another thing is the exposure to the industry. We get a lot of senior people from the industry to come and speak to us. This helps us understand the emerging trends in the market.</p>

              <p>In fact, we even present our assignments in front of the guests from the industry. This is great because we get real feedback from the people who understand the industry and know what is going on and what would work.</p>
              <h2>"A great networking opportunity"</h2>
              <h4>What has changed in me personally after attending the program?</h4>
              <p>For me, the biggest change is in the mind-set. After a year at Sunstone, my perspective about things around me has changed. I have a more positive mind-set now. For example, earlier we used to complain about things at work – about the appraisal system, salaries, company strategy, politics etc. However, now I have developed a constructive perspective. I can now think in the shoes of the management and understand how the changes are part of company vision and how will they help us in the long run.</p>

              <p>So, basically for me, it is the mind-set change. I have a better understanding of company vision and goals and about how and where I fit in. This helps in contributing to the organization better and also in being a better leader to my team.</p>

              <h4>What am I now after Sunstone?</h4>
              <p>I joined Knowlarity as a Product Manager recently. After Sunstone, I was very clear that I would join a role where I could leverage my experience and technology skills but which will also help in venture into business domain as well. The role at Knowlarity is a good fit for me – “Best of both worlds” as I see it. I am working with technical teams as well as sales and operations teams.</p>

              <p>Since we are a start-up and are growing at a tremendous rate, I see a greater opportunity ahead of me. Moreover, I am also helping in multiple areas – product management, process improvement etc. – which is very good.</p>
              <h2>"Have the “real desire” to change"</h2>
              <h4>One thing I learnt at Sunstone that is helping or will help me succeed at Knowlarity?</h4>
              <p>I think it is the way I am communicating with everyone. I am more confident now in talking to people across all the levels and can put my ideas through more effectively</p>

              <h4>What is my advice to students joining Sunstone Business School?</h4>
              <p>My advice to future students is to be open to and have the “real desire” to change. They should not think of just going through with the coursework to complete the program but should challenge themselves to gain the most.</p>

              <p>This is also a great networking opportunity. So, you should interact with your peers and with faculty to get the most out of it.</p>

              <p>Another thing, they should not restrict themselves into thinking of this as just a “job changing” platform. In my opinion, the course will change the way you think that you might even leave with a different viewpoint of your current job. The program will change your mindset and your approach towards doing things. So, be open to change.
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="25jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/25.jpg" width="100px">
              <div class="abt_mem">
                <div class="name">Aditya Chaturvedi</div>
                <div class="designation">CTO, Apollo Incubations</div>
                <div class="batch">Class of 2012</div>
              </div>
              <h4>What do I do now?</h4>
              My current title is CTO, Mountain Apollo incubation and my job is to identify, invest and work with start-ups to grow them to a level so they can work on their own. We have few investments such as Cloe in Indian lingerie segment, so we keep trying to streamline it more and more. My first focus is existing investments and second focus is to research on new areas. We have a wide charter – including education, healthcare or consulting for Apollo existing ventures. I keep meeting new people to understand new and exciting areas and evaluate opportunities to invest.
              <h4>My journey</h4>
              <p>Before coming to Sunstone, I was a Lead Consultant, Technology at hCentive – a small healthcare technology company at the time. I left it in between my Sunstone Program to open my own venture in kid’s education, which was a great learning experience and was helpful in transitioning to the new role at Mountain Apollo.</p>

              <p>I never thought I would be doing what I am doing today. Not at all. When I started considering the program, I was thinking about various positions in IT like Product Manager, Business Development etc. I wanted to be in technology so I wanted to explore different roles within technology. During Sunstone, I met a lot of people from technology, retail, finance and entrepreneurial background and came across many opportunities that I had never thought about.</p>
              <h2>" Leverage Sunstone opportunity to the fullest "</h2>
              <h4>What I learnt most from Sunstone?</h4>
              <p>Sunstone provided me 3 things that are most crucial from me at this stage- business perspective, networking, business tools and framework.</p>

              <p>Business perspective is very important since it makes you empathize with business. You become a problem solver so you don’t say it can’t be done but look for ways to do it. It’s about changing your mindset and taking any problem to its logical conclusion. For example- In my previous company, a project had to be done in 12 months, deadline shifted to 9 months and the delivery teams were not happy. But there was a strategic reason of doing it and once you understand that, you won’t say it can’t be done but identify ways to do it in 9 months. If you understand business, you’ll know the strategic importance.</p>

              <p>Networking exposes you to the industry. Industry professionals feel more comfortable if you keep meeting new people and telling your story. Only a degree on your resume won’t help- people need to know you to give you the responsibility. I do think you learn a lot by simply exposing you to other people. If you meet 20 different industry guys at Sunstone in 1 year, you will create lot of opportunity for yourself. I learnt the power of networking.</p>

              <p>Knowledge of business tools and frameworks make you feel comfortable – balance sheet, direct costs etc. You won’t understand everything in detail, but you will get a feel and you will feel confident that you can handle everything. I end up using these every day now.</p>

              <h2>"You should be high energy and low maintenance"</h2>
              <h4>Who should enroll in Sunstone program</h4>
              People who have some kick to understand business and want to be in business roles. Knowledge workers should understand business because you can’t grow in the absence of it. Whether you want to be a business person, project manager, product manager, you can’t avoid building deep business perspective; this program is a fun way of doing it.
              <h4>My advice for current students</h4>
              <p>Use this opportunity to fullest and leverage everything you can. It’s the best playground you can have. I had no idea that all simple things I did in this low risk environment are going to be that useful. For example- a simple thing like making a storyline and making PPTs is so important that I use it all the time.</p>

              <p>I know it can be rigorous at times and it’s tough because it gets you out of your comfort zone. But honestly, in real business also, you’ll never have enough time, so the practice to come out with right solutions in less time turned out very important.</p>

              <p>Finally, you should be high energy and low maintenance. Everyone likes high-energy people around them. You will be a lot more successful if you are energetic all the time and you have ability to solve your own problems.
              <h2>"You learn a lot by simply exposing yourself to other people."</h2>
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="26jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/26.jpg" width="100px"> 
               <div class="abt_mem">
                <div class="name">Tushar Gupta</div>
                 <div class="designation">Product Mgr, Times Internet</div>
                 <div class="batch">Class of 2012</div>
              </div><br><br>
              I enrolled in Sunstone PGPM in 2011 and honestly, it was a lot of hard work during the program. I was required to understand business holistically after working in technology roles for nearly a decade when I joined Sunstone.  I thoroughly enjoyed the program and ended up getting what I was looking for- the big picture of business and an exciting career path.

              <h4>My role before and after Sunstone</h4>
              I was working for Adobe as a QA Lead and had around a decade of experience in testing in enterprise domain. I was contemplating on choosing a right career path for me that can take me much closer towards business for CXO roles. I explored various roles in product management and marketing and ended up joining Times City as a Product Manager.  My current responsibilities include deciding strategy of the firm, think about new ideas to increase visits, and decide product roadmap. It is a business oriented role where I can still use my passion for technology.
              <h2>"Evolve your thought process and build business perspective "</h2>
              <h4>What did I get out of Sunstone?</h4>
              <p>Sunstone helped me in two areas- evolving my thought process and helping me in my career path.</p>

              <p>My approach and thought process were oriented primarily around technology and I needed to develop more strategic view point to help in business decision making. Solving strategic problems helped me start seeing the big picture, which was my biggest challenge. Learning with equally motivated and hardworking people also helped me set my aspirations right.</p>

              <p>Also, I had contemplated many roles and Sunstone helped me discover different paths and transition opportunities.  Also, I was regularly connecting to senior industry professionals through Sunstone that helped me evaluate opportunities and manage my expectations</p>
              <h2>"You can’t get much out of the program if you are not passionate about business"</h2>
              <h4>Things to know if you are looking to apply for Sunstone</h4>
              <p>You can’t get much out of the program if you are not passionate about business and not willing to put the required hard work. The program doesn’t require you to have good business exposure but it’s important that you are eager to learn. The program is for experienced people so they can relate more to the situations and context of problems. If you have been in technology centric roles, your thinking would be very different and narrow so it would take you to come out of the comfort zone.</p>

              <p>I personally spent a lot of time on problems- sometimes more than required, but you should be ready to put that effort. Your output from Sunstone will be proportional to the time and energy you spend during the program.</p>

              <p>As a student, you should be ready to leverage all Sunstone resources from faculty, industry connects, your peer group and go out of the way to meet different people. Beside the curriculum, it’s very important to understand stakeholders’ perspective in different scenario so you are prepared with the right skills in the future.</p>

              <p>Finally, if are serious in investing in yourself and understand that there isn’t any short-cut when it comes to learning- go for it!
              <h2>"Learning with equally motivated and hardworking people also helped me set my aspirations right."</h2>
          </div>
        </div>
      </div>


      <div class="modal fade bs-example-modal-lg modal_style" id="27jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/27.jpg" width="100px"> 
              
              <div class="abt_mem">
                <div class="name">Vaibhav Padlikar</div>
                <div class="designation">CoFounder, PhoneWarrior</div>
                <div class="batch">Spring Class of 2013</div>
              </div><br><br>
              You’ll never know your true strength if you don’t stretch yourself enough. Sunstone program is simply a platform to challenge yourself and you’ll get a lot out of it if you keep challenging yourself.

              <h4>My Story</h4>
              I worked for 3 years at Infosys and 6 years at Adobe before joining Sunstone. I was leading QA teams at Adobe in Mobile as primarily an individual contributor. It was a great experience since I was passionate about Mobile. I was always looking to come out of my comfort zone and also joined BITS Pilani MS program during my job. It helped me but I was working mostly just before the exams so it wasn’t tough. Sunstone program was very different and it challenged me all the time through different problems. I received criticism of my work and feedback was often direct and harsh. However, as an outcome – I was ready to take any challenging opportunity and ended up joining PhoneWarrior as a co-founder few months back. Here, I head Technology and Product side of things on Mobile front. It involved everything from developing the strategy, marketing, customer retention and building the team.
              <h2>"You can’t challenge yourself enough!"</h2>
              <h4>How my aspirations changed?</h4>
              I never thought of becoming co-founder of a start-up company. I liked Product Management and also wanted to do MBA, but never able to get time to do it. Sunstone was a great opportunity and I did problems around investment and entrepreneurship that increased my confidence on becoming an entrepreneur I can be the owner of the product. I also realized that there is nothing called “failed entrepreneurs” so it turned out to be an easy decision to take the plunge. I have seen my friends going to top business schools and paying a huge fee for that. Their output salary expectations go very high and their risk appetite is reduced because of this burden. I was fortunate to change my aspirations.
              <h2>"Be ready to accept shortcomings"</h2>
              <h4>What did I get out of Sunstone?</h4>
              I would say 3 things:

              <p>A life time support systems from Sunstone network. I know so many people at different places who are ready to help me whether I am solving technology problem, hiring problems or meeting investors. I have some lifelong mentors and coaches now.</p>
              <p>Curriculum is extremely relevant. Every problem I did at Sunstone is useful- market sizing, product management, strategy etc. Sometime, we felt that curriculum problems are too vague and we didn’t have clear instructions but I am realizing now that it is very similar in real business situations.</p>
              <p>I found ad-hoc Non-curriculum based projects very useful. This included industry projects, internships etc. I really need to push myself to get time to do all these but they provided a real flavour in an intense environment. The burden of quality was also high there so it provided a great platform</p>
              <h2>"There is nothing called “failed entrepreneurs”"</h2>
              <h4>Who should do this program and how should they do it?</h4>
              <p>People who can challenge themselves and come out of comfort zone should do this program. They should be ready to accept shortcoming. It is a structured and fun way to work on it but it requires your passion as well. Sometimes, we blame others when we do not get promotions or job offers. Probably, it’s a signal that you aren’t challenging yourself enough. Don’t take your future career growth for granted and keep investing in yourself.</p>

              For current students, my advice would be to not be flustered about things. Work hard and don’t be free riders- it’s a serious waste of time if you do so. Also, students should not worry about short-term, and focus on long-term goals. You’ll get more out of it if you’ll try to learn rather than quick-fix certain issues.
          </div>
        </div>
      </div>

      <div class="modal fade bs-example-modal-lg modal_style" id="28jpg" data-toggle="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              </div>
              <img src="img/SI/thumbs/28.jpg" width="100px"> 
              <div class="abt_mem">
                <div class="name">Sahil Aggarwal</div>                
                <div class="designation">Alliance Manager, TCS</div>
                <div class="batch">Class of 2012</div>
              </div>
              <h4>What do I do?</h4>
              <p>I am Alliance Manager for Nordic region for TCS, currently based out of Stockholm and I am greatly enjoying the endless summer sun of the Nordic region.</p>
              <p>My goal is develop new revenue lines for TCS by building alliances. This requires me to market TCS to our partners, jointly build market ready solutions, and work with them to pitch to prospective and existing clients as part of a joint sales effort. Essentially, our partners have innovative product offerings and that combined with a strong service and solution offering from TCS makes for a strong value proposition for our clients.</p>

              <p>To do this, building trust with our partners is key. Building relationships with people is a big part of building trust and I am always focused on that.</p>
              <h2>"Build relationships, build connections  "</h2>
              <h4>My journey before Sunstone and afterwards…</h4>
              <p>In my previous role, I was a senior technology lead at TCS. Throughout my career, I have been working with technology, solving challenges faced by companies. I have been focused on product design, how to implement and reach to next level. I have tended to favor re-design to take the product to the next level. I have worked with several companies and multiple clients, sometimes as a systems engineer, then in the storage space – continuously developing new solutions for clients.</p>

              <p>I never really imagined I would be working as Alliance Manager at TCS. This is a very entrepreneurial role – building new clients sitting in TCS, not many people know about this role. I only knew about pre-sales roles before this.</p>

              <h4>What did I learn at Sunstone?</h4>
              <p>There were a lot of little things and it’s difficult to list all of them but two things have stayed stayed with me more than others.</p>

              <p>First is this habit to connect and building relationships. I remember Rajul talking about it at length and now I appreciate it even more. My current role requires it all the time. You can’t be successful if you can’t collaborate.</p>

              <p>The second big thing is that it broadens your horizon. I remember hearing the words “Zoom out” many times and applying it at various instances during the program. You look at the complete picture from 20,000 feet which can be lost easily when we are in too much detail. The pedagogy presents the overall picture to you and then also shows you the ground reality – this helps you develop the thinking about how to execute it.</p>
              <h2>"You have to learn rather than getting taught"</h2>
              <h4>About who should enroll in Sunstone Program</h4>
              Everyone should think about it.  Normally, whatever you do in office, you only know that. Once you go through the program, you see what else is going on in the overall ecosystem and you realize you have the potential to do other things. You accomplish tasks and develop a passion and belief to do other things. Unless you do such a program, you will not get to know about it.

              <h4>Advice to current Sunstone students</h4>
              You have to learn rather than getting taught! Learning is far more fun, even if it demands more time. My main advice would be to keep engaging with people that you see. Rest, you will learn on the job. It’s not easy to get such a great group of people to interact with. Even though working in groups was demanding, but discussion with my class about the projects was very useful. You think in a certain way, only when you discuss you discover alternate way of thinking.
              <h2>"Zoom out"</h2>
              <h4>And pressure during the program</h4>
              I believe that you can stretch yourself a lot. Just like any other activity like yoga, gradually stretch yourself to achieve more. When there were too many deliverables, even then, discussing with my peers is what added immense value.
          </div>
        </div>
      </div>


   <?php include("footer.php") ?>
      <!-- <?php
        // if (isset($_GET['stuid'])) {
        //   $stuid = ".urlmodal".$_GET['stuid'];
        //   // echo "<script> $('".$stuid."').parent().trigger('click'); </script>"; 
        //   echo "<script> 
        //           $( function() {
        //               $('.og-grid .urlmodal1').trigger('click');
        //             } 
        //           </script>"; 
        // }
      ?> -->