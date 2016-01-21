
Editing:  
/home/sunstonecpanel/public_html/sunstonev1/admissions.php
 Encoding:    Re-open Use Code Editor     Close  Save Changes

<?php include("header1.php"); ?>
 <?php include("subheader.php"); ?>    
    <div class="container si_section">
      <div class="row">
        <div class="col-md-12 no-side-margin">
          <!-- <div class="">Admissions</div>
          <div class="red"></div> -->

        </div>
      </div>
    </div>

    <div class="container no-side-padding" id="pgpm_overview">
      <div class="main col-md-8">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="pd-t-50"></div>
              <hr class="heading_line">
              <div class="heading bold">Admissions & Fee</div>
              <hr class="heading_line">      
          
            <div class="pgpm_content">
              <p>
              We are now admitting for our next batch starting from 30<sup>th</sup> January, 2016. 
              You should go through the <a href="program-details" class="orange_color">details of the program here</a>.<br/><br/>
              
              <?php if ($_SESSION["is_logged_in"] == TRUE) {  ?>
                    <a href="thankyou_Attend_Info_Web_Session.php" class="orange_color">
                <?php }else{ ?>
                 <a data-toggle="modal" data-target="#myModalregister" class="orange_color">
                 <?php } ?>Register here</a> to attend a live webinfo session.
              </p>
              
              <div class="pd-t-20"></div>
              <hr class="heading_line1">
              <div class="heading1 bold">Program Design</div>
              <hr class="heading_line1">             
              
               <div class="pd-t-20" ></div>

              
               <table class="table-bordered table-hover table-responsive level_table" width="100%">
                 <th> Duration: 5 months </th>
                 <tr><td>Online Live Classes on Saturdays: 60 Hours</td></tr>
                 <tr><td>Projects based learning: 165 Hours</td></tr>
                 <tr><td>Online Networking with Industry Experts: 25 Hours </td></tr>
                 <tr><td>Core courses to make you learn and practice all business fundamentals</td></tr>
                 <tr><td>Specialized courses to provide hands-on experience on several interest area</td></tr>
                 <tr><td>Career Development Support including career coaching, job forums, CV reviews</td></tr>
                 <tr><td>24X7 interaction with faculty and peers through web-portal, mobile forums, live webinars</td></tr>
                 <tr><td>Access to a strong global network of Sunstone community</td></tr>
                 <tr><td>Certification approved by Govt of India</td></tr>
               </table>
               
                
               <div class="pd-t-20" ></div>
              
              <div class="pd-t-20"></div>
              <hr class="heading_line1">
              <div class="heading1 bold">Admission Process</div>
              <hr class="heading_line1">             
                
                
                <p><i class="fa fa-check-square-o fa-fw"></i> <span class="bold"> Step 1: </span>Fill the <a href="http://www.sunstone.in/internal/application-form-payment/" class="orange_color">application form</a> to schedule your interview 
                for admission (Application fee INR 500). You can also <a href="counselling-form" class="orange_color">set up a counselling call </a>with counsellors </p>
                                
                <p><i class="fa fa-check-square-o fa-fw"></i> <span class="bold"> Step 2: </span> Interaction with the interview panel</p>
                
                <p><i class="fa fa-check-square-o fa-fw"></i> <span class="bold"> Step 3: </span> Receive the invitation to join the program</p>

              
              <div class="pd-t-20"></div>
              <hr class="heading_line1">
              <div class="heading1 bold">Program Fee</div>
              <hr class="heading_line1"> 
                          
              <p>
                <strong> nano-MBA : </strong> USD 860 &nbsp; (INR 55,000) 
                <br>
              </p>


              <p><br/>
                For further clarifications contact <a href="mailto:admissions@sunstone.in" class="orange_color">admissions@sunstone.in</a>
                <br>
                Refer our <a href="frequently-asked-questions.php?id=1" class="orange_color">Admission FAQs</a> for more details.
              </p>
            </div>
          </div>
        </div>
        <br>
      </div>

    <?php include("sidebar.php") ?>
    </div><!-- /container -->
   <?php include("footer.php") ?>
   
Success!