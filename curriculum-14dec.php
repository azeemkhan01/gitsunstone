
Currently editing:  
/home2/taogreen/public_html/management-program/curriculum.php
 Encoding:    Reopen  Switch to Code Editor     Close  Save

<?php include("header1.php"); ?>
<?php include("subheader.php"); ?>  
    <div class="container si_section">
      <div class="row">
        <div class="col-md-12 no-side-margin">
        <!--   <div class="">PGPM Overview</div>
          <div class="red"></div> -->
          <!-- div class="si_subtagline">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, dicta saepe quia reiciendis sit. Autem, ratione, assumenda obcaecati minus possimus
          </div> -->
        </div>
      </div>
    </div>
<?php
    $values = $_GET['id'];
    if($values == 1){

       $level1 = $values;
    }
    if($values == 2){
      $level2 = $values;
    }
    if($values == 3){
      $level3 = $values;
    }
     ?>
      <input type="hidden" value="<?php echo $level1; ?>" id="level11">
      <input type="hidden" value="<?php echo $level2; ?>" id="level22">   
      <input type="hidden" value="<?php echo $level3; ?>" id="level33">   

    <div class="container no-side-padding" id="pgpm_overview">
      <div class="main col-md-12">
        <div class="row">
          <div class="col-md-10  col-md-offset-1"> 
              <div class="pd-t-50"></div>
              <hr class="heading_line">
              <div class="heading bold">Curriculum</div>
              <hr class="heading_line">      
            <div class="pgpm_content hide">
              <p>
                The Sunstone PGPM program is designed with the aim of helping working professionals steer
                their career in the right direction. Some wish to rise through the managerial levels in
                their current functions, while others prefer to change tracks altogether. For example, 
                a delivery manager might aspire for product management roles, a technical ERP consultant
                could attempt to break into to functional consulting, and a post-sales delivery manager
                sometimes dreams of making it into pre-sales business development.
             
                The greater the ambition, the harder the struggle. Young professionals who are serious about career growth grapple with tough issues such as:<br></p>
                <div class="row pd-t-50 pd-b-50">
                  <div class="col-md-4">
                    <div class="row pd-t-10 pd-b-10">
                      <div class=" col-md-8 text-right">
                        <div class="head pd-b-10">Make Better Decisions</div>
                        <div class="detail_content">How do I understand business as a whole so that I can make better decisions?</div>
                      </div>
                      <div class=" col-md-4 text-center bulb">
                      <span class="fa-stack fa-2x">
                        <i class="fa fa-circle-thin fa-stack-2x "></i>
                        <i class="fa fa-lightbulb-o fa-stack-1x"></i>
                      </span>
                      </div>
                    </div>

                    <div class="row pd-t-10 pd-b-10">
                      <div class=" col-md-8 text-right">
                        <div class="head pd-b-10">Contribute more</div>
                        <div class="detail_content">How can I contribute more to my company and to my client organization?</div>
                      </div>
                      <div class=" col-md-4 text-center bulb">
                      <span class="fa-stack fa-2x">
                        <i class="fa fa-circle-thin fa-stack-2x "></i>
                        <i class="fa fa-lightbulb-o fa-stack-1x"></i>
                      </span>
                      </div>
                    </div>

                    <div class="row pd-t-10 pd-b-10">
                      <div class=" col-md-8 text-right">
                        <div class="head pd-b-10">Faster Career Growth</div>
                        <div class="detail_content"> How do I prepare myself for a faster career growth and reach the CXO level?</div>
                      </div>
                      <div class=" col-md-4 text-center bulb">
                      <span class="fa-stack fa-2x">
                        <i class="fa fa-circle-thin fa-stack-2x "></i>
                        <i class="fa fa-lightbulb-o fa-stack-1x"></i>
                      </span>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-4 text-center">
                    <img src="img/PGPM/detail_img.png">
                  </div>
                  <div class="col-md-4">
                    
                    <div class="row pd-t-10 pd-b-10">
                      <div class=" col-md-4 text-center bulb">
                      <span class="fa-stack fa-2x">
                        <i class="fa fa-circle-thin fa-stack-2x "></i>
                        <i class="fa fa-lightbulb-o fa-stack-1x"></i>
                      </span>
                      </div>
                      <div class=" col-md-8 text-left">
                        <div class="head pd-t-10">Successful Manager </div>
                        <div class="detail_content"> I have been a successful manager so far, but I how do I grow faster?</div>
                      </div>
                    </div>

                    <div class="row pd-t-10 pd-b-10">
                     <div class=" col-md-4 text-center bulb">
                      <span class="fa-stack fa-2x">
                        <i class="fa fa-circle-thin fa-stack-2x "></i>
                        <i class="fa fa-lightbulb-o fa-stack-1x"></i>
                      </span>
                      </div>
                      <div class=" col-md-8 text-left">
                        <div class="head pd-b-10">Faster Career Growth</div>
                        <div class="detail_content"> How do I prepare myself for a faster career growth and reach the CXO level?</div>
                      </div>
                    </div>

                    <div class="row pd-t-10 pd-b-10">
                      <div class=" col-md-4 text-center bulb">
                      <span class="fa-stack fa-2x">
                        <i class="fa fa-circle-thin fa-stack-2x "></i>
                        <i class="fa fa-lightbulb-o fa-stack-1x"></i>
                      </span>
                      </div>
                      <div class=" col-md-8 text-left">
                        <div class="head pd-t-10">Avoid Mistakes</div>
                        <div class="detail_content">What can I do to avoid embarrassing mistakes that harm the business (and jeopardize my position in the company)?</div>
                      </div>
                    </div>

                </div>
                </div>

              <p>
                The Sunstone PGPM program places students in the driver’s seat of their career. 
                While most MBA/PGPM programs expound theory and jargon, Sunstone emphasizes the
                core skills for becoming an effective manager in the real world. These practical
                aspects are useful getting you ready for your new role, whether you are already
                a manager or on the verge of becoming one.
              </p>
            </div>

            
          </div>
        </div>
        <br>
      </div>


      
                
                
              
           
        <!-- </div> -->
      </div>
    </div><!-- /container -->

    <!-- Course Content Section -->
    <div class="row course-heading no-side-margin">
      <div class="col-md-10 col-md-offset-1">
        <!-- <div class="heading">Course content</div>
        <hr class="red"> -->
        <p class="para_style">The Sunstone PGPM program is a re-imagined MBA that can be completed in different 
        levels by working professionals as time permits. The levels span from learning the 
        fundamentals that you can start applying on your job right from the beginning to 
        mastering the art of management and thinking like a CXO as you gain more confidence 
        through rigorous practice.</p>
      </div>
    </div>
    <!-- END Course Content Section -->
          
    <div class="row accordion-wrap no-side-margin">
      <div class="col-md-10 col-md-offset-1">
        <div class="row">

            <div class="main">

              <ul id="cbp-ntaccordion" class="cbp-ntaccordion">
                <!-- LEVEL-1 -->
                <li id="level1">
                  <h3 class="cbp-nttrigger" >
                    PGPM Level- 1      
                    <span class="acc-months">4 months</span>
                  </h3>
                  <div class="cbp-ntcontent">
                    <ul class="cbp-ntsubaccordion">
                    
                    <!-- Subject-10 -->


                      <li>
                        <h4 class="cbp-nttrigger">Project Management</h4>
                        <div class="cbp-ntcontent">
                          <p>
                             Project management has been proven to be the most effective method of delivering projects within cost, schedule, and resource constraints. This intensive and hands-on course gives you the skills to ensure your projects are completed on time and on budget .You will gain a strong working knowledge of the basics of project management and be able to immediately use that knowledge to effectively manage work projects. Finally you will be able to identify and manage the project scope, build a work breakdown structure, create a project plan, create the project budget, define and allocate resources, manage the project development, identify and manage risks, and understand the project procurement process.
                         
                          <br><a href="project-management" class="orange_color" >Read More</a>
                          </p>
                        </div>
                      </li>
                      
                      <!-- Subject-11 -->
                      
                       <li>
                        <h4 class="cbp-nttrigger">Business Analytics</h4>
                        <div class="cbp-ntcontent">
                          <p>
                             "Patterns emerge before the reasons for them become apparent."
                          <br><br>Business Analytics is the intersection of business and technology. In this course you will study data through statistical and operations analysis, the formation of predictive models and the communication of these results to customers, business partners.

                          <br><br>The course also provide knowledge and skills to become a successful Data Analytic professional. In-depth knowledge of core concepts will be covered in the course along with implementation on varied industry use-cases.
                          
                          <br><a href="business-analytics" class="orange_color" >Read More</a>
                          </p>
                        </div>
                      </li>

                      <!-- Subject-4 -->
                      <li>
                        <h4 class="cbp-nttrigger">Entrepreneurship</h4>
                        <div class="cbp-ntcontent">
                          <p>
                          
                          This course assists aspiring entrepreneurs in developing great ideas into great companies. With strong economies presenting rich opportunities for new venture creation, and challenging economic times presenting the necessity for many to make their own job, the need to develop the skills to develop and act on innovative business opportunities is ever present.

                          <br><br>Our goal is to demystify the startup process, and to help you build the skills to identify and act on innovative opportunities now, and in the future.

                          <br><br>Often the best ideas never get heard, never get seen and therefore never get fully developed. Instead of being taken seriously, they get lost in the sea of competing ideas. 

                          <br><br>In this module, students practice the ongoing process of selling ideas within an organization, including: 

                          <br><br> <i class="fa fa-pencil-square-o fa-fw"></i> Engaging with people – listening, connecting, understanding, researching 
                           <br><i class="fa fa-pencil-square-o fa-fw"></i> Building credibility, including effective use of data & visual design 
                           <br><i class="fa fa-pencil-square-o fa-fw"></i> Creating situations in which others accept your idea spontaneously of their own free will 

                          <br><br>Students learn how to make good ideas stand out from the crowd and gain the top-line visibility they deserve.
                          
                          <br><a href="entrepreneurship" class="orange_color" >Read More</a>
                          </p>
                        </div>
                      </li>
                      
                      <!-- Subject-1 -->
                      <li>
                        <h4 class="cbp-nttrigger">Organization Structure &amp; Incentives</h4>
                        <div class="cbp-ntcontent">
                          <p>Due to the sheer number of people spread across large organizations, business leaders rarely get the luxury of controlling anything directly. Instead they cluster, delegate, motivate and empower teams of people to get things done. Hence organization structure becomes the most basic tool of the Chief Executive.In this course, students develop familiarity with the organization designer’s toolkit and how to interpret and understand their companies structural elements.
                          <br><a href="organizational-structure-effectiveness" class="orange_color">Read More</a>
                          </p>
                        </div>
                      </li>

                      <!-- Subject-2 -->
                      <li>
                        <h4 class="cbp-nttrigger">Communications &amp; Storyboarding</h4>
                        <div class="cbp-ntcontent">
                          <p>Since time immortal, humans have absorbed information and wisdom from others by means of stories. Whether sitting around the campfire, planning a battle, or jockeying in the board room, stories wield the power to influence our thoughts and emotions in ways that logic and facts rarely can. In this course, we explore the fundamentals of storytelling as it applies to communication in the corporate context. Students learn to synthesize what they have to say and articulate it in the right sequence for their audience to understand.
                          <br><a href="story-boarding" class="orange_color">Read More</a>
                          </p>
                        </div>
                      </li>

                      <!-- Subject-3 -->
                      <li>
                        <h4 class="cbp-nttrigger">Accounting &amp; Financial Statement Analysis</h4>
                        <div class="cbp-ntcontent">
                          <p>Financial numbers are the “language of business,” the primary means of communicating progress and performance. Just as any writer must be familiar with the basics of vocabulary and grammar, any aspiring business person must gain basic proficiency in the elements, principles and assumptions of modern accounting.This course familiarizes students with the purpose and use of financial statements. Students take their first step towards appreciating and working with business numbers as they apply to everyday situations.
                          <br><a href="basic-accounting" class="orange_color"  >Read More</a>
                          </p>
                        </div>
                      </li>
                      
                     <!-- Subject-4 Entrepreneurship moved to the top -->

                      <!-- Subject-5 -->
                      <li>
                        <h4 class="cbp-nttrigger">Marketing</h4>
                        <div class="cbp-ntcontent">
                          <p>Customers form the core asset of any company. But gone are the days when buyers appear out of thin air… today’s marketers find it increasingly difficult to attract new customers. Also, the competition may offer such attractive alternatives that retaining the existing customers becomes a separate problem of it’s own.
                          <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/">Read More</a> -->
                          <br><br>In this module, students learn the importance of wise marketing investments, including:

                             <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Appreciating the lifetime value of a new customer and the cost of losing an existing customer
                              <br><i class="fa fa-pencil-square-o fa-fw"></i> Calculating the ROI of marketing campaigns based on customer acquisition cost
                              <br><i class="fa fa-pencil-square-o fa-fw"></i> Familiarity with the basic tools and techniques of the marketing professional including 4Ps, SAVE model and segmentation /targeting /positioning
                              <br><i class="fa fa-pencil-square-o fa-fw"></i> Understanding the challenges and risks inherent in the sales function
                              <br><br>Students learn to weigh benefits vs. costs to make informed marketing and customer service related decisions.
                              <br><a href="marketing" class="orange_color" >Read More</a>
                          </p>
                        </div>
                      </li>

                      <!-- Subject-6 -->
                      <li>
                        <h4 class="cbp-nttrigger">Economics</h4>
                        <div class="cbp-ntcontent">
                          <p>We live in a world of scarce resources. Yet how well we utilize these resources depends on day-to-day decisions that we make. The economic concept of “supply and demand” helps us understand the decisions of ourselves and others.
                          <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a> -->
                          <br><br>In this module, students learn the basics of sound decision-making by examining choices and scarcity, including:

                          <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Understanding the true costs and benefits by analyzing at the margin
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Learning to deal with ambiguity and uncertainty in decision making
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Considering the full implications of decisions, including their hidden “opportunity costs”
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Avoiding pitfalls such as “sunk cost,” average costs, percentage costs, etc.
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Appreciating how trade creates value for both parties through the principles of “comparative advantage” and “free trade”
                          <br><br>Students learn to take better decisions for their business, their society and themselves.
                          <br><a href="economics" class="orange_color" >Read More</a>
                          </p>
                        </div>
                      </li>

                      <!-- Subject-7 -->
                      <li>
                        <h4 class="cbp-nttrigger">Career Foundations</h4>
                        <div class="cbp-ntcontent">
                          <p>MBA students often find themselves searching for clarity on career goals. But even those who feel more certain often wind up making a lot of directional shifts along the way.
                          <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a> -->
                          <br><br>This module gets students started:

                          <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Appreciating their unique professional strengths & weaknesses from the perspective of the employer
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Exploring the universe of career options available in the marketplace
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> It also covers a variety of networking essentials:

                          <br><i class="fa fa-pencil-square-o fa-fw"></i> The value of networking
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Adding value to your network
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Getting started building your network
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Activating dead networks
                          <br><br>Students assess how and where they best “fit in” to the corporate world, and step outside their comfort zone to begin the journey.
                          </p>
                        </div>
                      </li>

                      <!-- Subject-8: Leading Teams moved to Level 2 -->
                      

                      <!-- Subject-9 : Deleted : Selling Ideas by Shaguna -->
                      

                      <!-- Subject-10 -->
                      <li>
                        <h4 class="cbp-nttrigger">Budgeting &amp; Planning</h4>
                        <div class="cbp-ntcontent">
                          <p>Budgets and plans form the basis for resource allocation, performance measurement and investor guidance in many organizations. Yet managers struggle just to create them, much less to deliver on their underlying promise. On average, managers spend more than 20% of their time in budgeting and planning activities alone.
                          <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a> -->
                          <br><br>In this module, students learn to navigate the budgeting process skillfully including:

                          <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Building up revenue forecasts and individual costs on a sound basis
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Incorporating company strategy and economic / industry trends into the outlook
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Manage the budgeting process as a “negotiation” and selecting the appropriate stance (conservative/aggressive)
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Ownership of budgeted nos. and the importance of meeting commitments
                          <br><i class="fa fa-pencil-square-o fa-fw"></i> How to recover from setbacks
                          <br><br>Students learn firsthand how to create an annual budget and update it over time using quarterly plans.
                          <br><a href="budgeting-and-planning" class="orange_color"  >Read More</a>
                          </p>
                        </div>
                      </li>
                      
                    
                      

                    </ul>
                  </div>
                </li>



                <li id="level2">
                  <h3 class="cbp-nttrigger" >
                   PGPM Advanced Levels
                  </h3>
                  <div class="cbp-ntcontent">
                    <ul class="cbp-ntsubaccordion">
                      <!-- Subject-1 -->
                      <li id="level21">
                        <h4 class="cbp-nttrigger">
                         PGPM Level - 2 <!--  Business Proficiency -->
                        <span class="acc-months">4 months</span>
                        </h4>
                        <div class="cbp-ntcontent">
                           <ul class="cbp-ntsubaccordion">
                          <!-- Subject-1 -->
                          <li>
                            <h4 class="cbp-nttrigger">Creating Business Value</h4>
                            <div class="cbp-ntcontent">
                            <p>In a desperate attempt to improve performance, today’s organizations have unleashed a tsunami of lean/six sigma improvements, IT projects, HR initiatives, etc. Most new initiatives are never actually implemented, but even those that ARE often fail to create much value. Yet external and internal customers demand us to somehow demonstrate the “business value” of our activities…
    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->      <br><br>In this module, students learn how to work out the business value of individual tactics and gauge their attractiveness for the organization as a whole through:

                                <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Appreciating how changes affect operational measurements like Throughput (T), Investment (I) and Operating Expenses (OE)
                                <br><i class="fa fa-pencil-square-o fa-fw"></i> Translating these in to financial outcomes that affect Profit, ROI & Cash Flow
                                <br><i class="fa fa-pencil-square-o fa-fw"></i> Identifying the active constraint which governs overall performance, hence determining the project’s impact (if any)
                                <br><br>Students learn to search for breakthroughs that can generate disproportionate business value, and find out how to estimate the potential for the same.
                                <br><a href="cbv" class="orange_color" >Read More</a>
                                </p>
                                
                              </div>
                            </li>

                            <!-- Subject-2 -->
                            <li>
                              <h4 class="cbp-nttrigger">Growth Strategies I</h4>
                              <div class="cbp-ntcontent">
                              <p>Growth is critical for businesses to create value. Considered as the primary driver of share prices, the effects of Growth go well beyond the mere financial. It energizes the whole organization and thus helps attract and retain talent. It builds reputation among customers and suppliers. If a business does not grow, it tends to get left behind.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                         <br><br>In this module, students appreciate what growth really is and how to drive it including:

                                    <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Familiarity with the growth levers and enablers
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Understanding when to apply which lever/enabler
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> How these can be implemented to usher in growth.
                                    <br><br> Students develop as “Smart Generalists” who are prepared to solve fundamental business problems with an aim to achieve growth. 
                                    <br><a href="growth-strategies-1" class="orange_color" >Read More</a>
                                </p>
                              </div>
                            </li>

                            <!-- Subject-3 -->
                            <li>
                              <h4 class="cbp-nttrigger">Negotiating to Win</h4>
                              <div class="cbp-ntcontent">
                                <p>Whether pushing for a higher increment with your boss or managing the expectations of a demanding customer, negotiation is an indispensible skill in your personal and professional life. Negotiations tend to be stressful and unavoidable whenever there is more than one stakeholder involved. Left unresolved, these conflicts can become major roadblocks for effective business decision-making.                         
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                         <br><br>In this module, students learn to influence and resolve conflicts in a multi-stakeholders environment to:

                                    <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Uncover the priorities and interests of the opposite party
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Develop your Best Alternative to a Negotiated Agreement (BATNA)
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Create joint value to “enlarge the pie” (integrative negotiations)
                                    <br><br>Students become aware of the wide range of negotiation techniques and how these are used to work out win-win outcomes.
                                    <br><a href="negotiating-to-win" class="orange_color" >Read More</a> 
                                </p>
                              </div>
                            </li>

                            <!-- Subject-4 -->
                            <li>
                              <h4 class="cbp-nttrigger">Entrepreneurial Strategies</h4>
                              <div class="cbp-ntcontent">
                                <p>How do new age entrepreneurs take decisions and achieve such spectacular success?

                                    <br><br>In this module, students come to grips with issues such as:

                                    <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Should everything be planned in advance?
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Is strategy the most important thing?
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> What is pivoting… and when to pivot?
                                    <br><br>Students study real life cases as they begin to “unravel the code” of the successful growth hacker.
                                    <br><a href="entrepreneurial_strategies" class="orange_color" >Read More</a> 
                          </p>
                              </div>
                            </li>

                            <!-- Subject-5 -->
                            <li>
                              <h4 class="cbp-nttrigger">Revenue Recognition</h4>
                              <div class="cbp-ntcontent">
                                <p>Many of the historic financial scams involved direct manipulation of the top line. This should come as no surprise given it’s sensitivity to subjective assumptions. Note that the performance metrics and bonuses of many decision makers rely on revenue as the most variable factor. Hence “how to account for revenue” crops up as a perennial issue at the highest levels.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                          <br><br>In this module, students come to appreciate the subtleties of revenue recognition including:

                                    <br><br><i class="fa fa-pencil-square-o fa-fw"></i>   Alternative methods of revenue recognition
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Guiding principles of conservatism & matching
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i>   Rationale behind the revenue recognition policies of companies
                                    <br><br>  Students learn to decipher which transactions qualify as revenue and interpret the wider consequences on related parties in a company-customer transaction.
                                    <br><a href="revenue-recognition" class="orange_color" >Read More</a> 
                                </p>
                              </div>
                            </li>

                            <!-- Subject-6 -->
                            <li>
                              <h4 class="cbp-nttrigger">Working Capital Management</h4>
                              <div class="cbp-ntcontent">
                                <p>Suppliers, employees, banks, and the government alike depend upon reliable payments from corporations. Working capital is a critical measure of any company’s liquidity, efficiency and ability to honor financial obligations. It also provides a unique perspective on overall financial health since it takes into account cash, inventory, accounts receivables and payable as well as other current assets & liabilities.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->               <br><br>In this module, Students become familiar with the cash conversion cycle including:
                                      <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Inventory & Debt Management
                                      <br><i class="fa fa-pencil-square-o fa-fw"></i> Payments
                                      <br><i class="fa fa-pencil-square-o fa-fw"></i> Collections
                                      <br><br>Students learn the nuances of how companies maintain adequate cash flow. As the age-old saying goes: “SALES is vanity, PROFIT is sanity, but CASH is reality!”
                                    </p>
                              </div>
                            </li>

                            <!-- Subject-7 -->
                            <li>
                              <h4 class="cbp-nttrigger">Corporate Finance</h4>
                              <div class="cbp-ntcontent">
                              <p>What do capital investment decisions, ERP purchase evaluations, and bank interest rates have in common? Each hinges on the fact that money today is worth more than money tomorrow. This course builds on previous economic decision-making frameworks to take into account the time value of money.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                         <br><br>In this module, students learn to evaluate streams of cash flows spread out over time including:

                                    <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Allocating capital using concepts of discounting
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Understanding and using common decision models like:
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Payback Period
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Internal Rate of Return (IRR)
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Net Present Value (NPV)
                                    <br><br>Students learn a variety of ways to rank alternative investment options to maximize shareholder returns.
                                 </p>
                              </div>
                            </li>

                            <!-- Subject-8 -->
                            <li>
                              <h4 class="cbp-nttrigger">Change Management</h4>
                              <div class="cbp-ntcontent">
                                <p>Many changes in organizations are never fully implemented, despite elaborate efforts by management to communicate and drive new initiatives to completion. Yet Dr. Eliyahu Goldratt claims “the greatest force for improvement is resistance to change.”
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                          <br>In this module, students leverage the “Power of Resistance” to create Buy-in:

                                  <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Understanding & communicating the need to change
                                  <br><i class="fa fa-pencil-square-o fa-fw"></i> Traversing the 6 Layers of Buy-in
                                  <br><i class="fa fa-pencil-square-o fa-fw"></i> Creating an irresistible sense of urgency through first-class emergencies
                                  <br><br> Students learn how to execute high-impact changes successfully across multi-stakeholder environments.
                                  <br><a href="change_management" class="orange_color" >Read More</a> 
                                   </p>
                              </div>
                            </li>

                            <!-- Subject-9 -->
                            <li>
                              <h4 class="cbp-nttrigger">Product Management & Marketing</h4>
                              <div class="cbp-ntcontent">
                                <p>It seems practically impossible to create products that are desirable for customers, feasible for engineering and at the same time profitable for shareholders. Yet Product Managers specialize in balancing the competing demands of functionality, design and economics.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                        <br><br>  In this module, students learn to envision and articulate the evolution of a product over time by:

                                  <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Identifying and understanding the target market
                                  <br><i class="fa fa-pencil-square-o fa-fw"></i> Prioritizing the product feature roadmap
                                  <br><i class="fa fa-pencil-square-o fa-fw"></i> Measuring progress and ensuring smooth product enhancements over time
                                  <br><br>Students come to understand what makes for ‘great’ products and how to succeed as a product manager.
                                   </p>
                              </div>
                            </li>

                            <!-- Subject-10 -->
                            <li>
                              <h4 class="cbp-nttrigger">Services Delivery Management</h4>
                              <div class="cbp-ntcontent">
                                <p>Service delivery organizations are continually expected to offer higher and higher quality at a lower and lower cost. Yet many delivery professionals seem unaware that Operations is not so much about delivering products/services but as it is a means to satisfy and delight their customers.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                     <br><br>In this module, students learn how to become more effective and efficient service delivery managers by:

                                <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Listening to the voice of the customer
                                <br><i class="fa fa-pencil-square-o fa-fw"></i> Driving higher efficiency through measurements, processes improvement tools and automation
                                <br><i class="fa fa-pencil-square-o fa-fw"></i> Aligning and motivating people on an ongoing basis
                                <br><br>Students learn how to expand their career in service delivery by taking on more and more work (and delivering it with excellence).    
                                  </p>
                              </div>
                            </li>

                            <!-- Subject-11 -->
                            <li>
                              <h4 class="cbp-nttrigger">Account Management/Business Development</h4>
                              <div class="cbp-ntcontent">
                              <p>The IT industry thrives on providing B2B products and services to other industries. Hence the account manager plays a crucial role in establishing, maintaining and expanding relationships with other firms.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                         <br><br> In this module, students are immersed in the world of services sales including:

                                  <br><br><i class="fa fa-pencil-square-o fa-fw"></i> The deal closure cycle and as an opportunity progresses through the funnel
                                  <br><i class="fa fa-pencil-square-o fa-fw"></i> The different priorities and skill sets of “hunters” vs. “farmers”
                                  <br><i class="fa fa-pencil-square-o fa-fw"></i> Practical guidance for transitioning your career to these roles
                                 <br><br>Students assess their own readiness and suitability to take on a variety of exciting roles in account management and business development.
                                   </p>
                              </div>
                            </li>

                            <!-- Subject-12 -->
                            <li>
                              <h4 class="cbp-nttrigger">Digital & Content Marketing</h4>
                              <div class="cbp-ntcontent">
                              <p>Today’s marketer relies less on traditional big media ads and more on highly targeted online campaigns through social media, search engine advertising, email, mobile, SEO/content marketing and the like. As the rules of the game continue to change, fresh career opportunities emerge for those savvy enough to play along…
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                         <br><br> In this module, students discover ways to generate leads through various online channels by:

                                  <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Creating the right online customer experience to drive purchasing decisions
                                  <br><i class="fa fa-pencil-square-o fa-fw"></i> Carefully monitoring key metrics such as CLTV (customer lifetime value) and CAC (Customer acquisition cost)
                                  <br><i class="fa fa-pencil-square-o fa-fw"></i> Engaging the customer with great content and thought leadership
                                  <br><br>Students learn to generate fresh leads at a reasonable cost through effective online engagement.
                                   </p>
                              </div>
                            </li>

                            <!-- Subject-13 -->
                            <li>
                              <h4 class="cbp-nttrigger">Data Driven Decision Making</h4>
                              <div class="cbp-ntcontent">
                              <p>In the face of heightened competitive pressure, companies are on the lookout for ways to tap their vast reservoirs of data to enable better business decisions. Whether in sales & marketing, supply chain, HR, or Finance – data driven decision-making has become an integral business function.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                         <br><br> In this module students learn how to interpret big data and improve business performance through fact-based decision-making, including:

                                   <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Awareness of the typical questions being asked in different industries
                                   <br><i class="fa fa-pencil-square-o fa-fw"></i> Understand the basic problem solving approaches in analytics
                                   <br><i class="fa fa-pencil-square-o fa-fw"></i> Begin to analyze data using statistical and mathematical techniques
                                  <br><br>Students explore the use of data intensive tools and techniques across a variety of industries and functions.
                                   <br><a href="dddm" class="orange_color">Read More</a>
                                   </p>
                              </div>
                            </li>

                            <!-- Subject-14 -->
                            <li>
                              <h4 class="cbp-nttrigger">Career Development</h4>
                              <div class="cbp-ntcontent">
                                <p>You have targeted your next big career move… now what? General business knowledge, though necessary, is rarely sufficient to impress hiring managers.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                          <br><br>In this module, students prepare and position themselves by:

                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Targeting messaging to the recruiter’s needs and priorities
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Polishing their profiles including
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Resume preparation
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Linkedin and other job portal profiles
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Interview practice
                                    <br><i class="fa fa-pencil-square-o fa-fw"></i> Developing “warm channels” through on-the-ground networking
                                    <br><br>Students are equipped with the resources, skills and feedback to make their next career move a reality.
                                     </p>
                              </div>
                            </li>

                           <!-- Subject-15: Moved from Level 1 -->
                            <li>
                              <h4 class="cbp-nttrigger">Leading Teams</h4>
		                        <div class="cbp-ntcontent">
		                          <p>Leading high performance teams poses a major challenge… everyone aspires to lead, but few have the right qualities and skill sets to do so!
		                          <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/"target="_blank">Read More</a> -->
		                          <br><br>In this module, students explore how to:

		                          <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Align a team
		                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Set goals and motivate team members
		                          <br><i class="fa fa-pencil-square-o fa-fw"></i> Drive the team to find win-win solutions for clients, organization and self
		                           <br><br>Students learn how to motivate and lead high-performance teams in a constructive direction.
		                          </p>
		                        </div>
		                      </li>

                          </ul>  
                        </div>
                      </li>

                      <li id="level31">
                        <h4 class="cbp-nttrigger">
                       PGPM Level - 3 <!-- Business Expertise -->
                        <span class="acc-months">4 months</span>
                        </h4>
                        <div class="cbp-ntcontent">
                          <ul class="cbp-ntsubaccordion">
                        <!-- Subject-1 -->
                        <li>
                          <h4 class="cbp-nttrigger">Equity as a Source of Value</h4>
                          <div class="cbp-ntcontent">
                            <p>Most of us rely on “salary” as our primary compensation. Though many dream of becoming entrepreneurs, few place much importance on company ESOPs. But through the years, entrepreneurs and business people alike have created maximum value for themselves through equity.
                                <br><br>In this course, students learn how equity can be used to create and capture value including issues like:
                                <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Do profits/dividend constitute the value?
                                <br><i class="fa fa-pencil-square-o fa-fw"></i> Does value come from size & growth?
                                <br><i class="fa fa-pencil-square-o fa-fw"></i> How have different companies around us created value?
                                <br><br>Students come to appreciate the extraordinary potential for value creation through equity ownership.
                                <br><a href="equity-as-a-source-of-value" class="orange_color" >Read More</a> 
                                 </p>
                          </div>
                        </li>

                        <!-- Subject-2 -->
                        <li>
                          <h4 class="cbp-nttrigger">Growth Strategies – II</h4>
                          <div class="cbp-ntcontent">
                          <p>This module continues and deepens the themes from Growth Strategies – I.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                          </p>
                          </div>
                        </li>

                        <!-- Subject-3 -->
                        <li>
                          <h4 class="cbp-nttrigger">Business Models</h4>
                          <div class="cbp-ntcontent">
                            <p>Financial numbers are the “language of business,” the primary means of communicating progress and performance. Just as any writer must be familiar with the basics of vocabulary and grammar, any aspiring business person must gain basic proficiency in the elements, principles and assumptions of modern accounting.This course familiarizes students with the purpose and use of financial statements. Students take their first step towards appreciating and working with business numbers as they apply to everyday situations.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->                       <br><br>In this module, students learn how Business Models:

                              <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Support and enable growth
                              <br><i class="fa fa-pencil-square-o fa-fw"></i> Are modified to improve scalability
                              <br><i class="fa fa-pencil-square-o fa-fw"></i> Adapt and respond to economic, social & cultural forces
                              <br><br>Students “take businesses apart and put them back together” to better understand what lies beneath the surface.
                              <br><a href="business-model" class="orange_color" >Read More</a>
                            </p>
                          </div>
                        </li>

                        <!-- Subject-4 -->
                        <li>
                          <h4 class="cbp-nttrigger">Macro Economics</h4>
                          <div class="cbp-ntcontent">
                            <p>Managers need a big picture view of what is happening in the overall economy to make sound decisions. They also need to be prepared for crisis situations that might take typical managers by surprise.
                            <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/"target="_blank">Read More</a> -->
                            <br><br>In this module, students appreciate the subtle interplay between:

                            <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Inflation, interest rates & government monetary policy
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Commodity prices, GDP growth and corporate investment cycles
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Exchange rates and import/export activity
                            <br><br>Students become able to interpret economic data and relate it to day-to-day corporate decisions and strategy.
                            </p>
                          </div>
                        </li>

                        <!-- Subject-5 -->
                        <li>
                          <h4 class="cbp-nttrigger">Value Chain Analysis</h4>
                          <div class="cbp-ntcontent">
                            <p>We live in an age where competition is often more between rival supply chains, rather than just individual firms. Value chain analysis dissects all the activities that an industry performs in order to deliver a product or service from start to finish.
                            <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a> -->
                            <br><br>In this module, students study value chains as a way to:

                            <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Interpret the strategic position of a company
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Develop a holistic view of the business
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Understand the organization’s capabilities and ability to compete in the market
                            <br><br>Students learn to analyze the value chain of a business to derive a big-picture understanding of the overall business.
                            </p>
                          </div>
                        </li>

                        <!-- Subject-6 -->
                        <li>
                          <h4 class="cbp-nttrigger">Problem Solving</h4>
                          <div class="cbp-ntcontent">
                            <p>Faced with a dilemma, we tend to ignore the problem, lower our expectations, attempt to please everyone, avoid taking ownership, blame others, and alternate between contradictory courses of action. This does not reduce our stress… it simply makes matters worse! Our own pattern of thinking prevents us from achieving success.
                            <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a> -->
                            <br><br>In this module, students discover a way out from this continual state of compromise:

                            <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Articulating pain clearly through the Un-Desirable-Effect (UDE)
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Surfacing and invalidating harmful assumptions
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Refining our solutions to prevent negative side effects and overcome implementation obstacles
                            <br><br>Students are guided through a practical, step-by-step process to achieve breakthrough solutions in their personal and professional life.
                            <br><a href="problem-solving" class="orange_color" >Read More</a>
                            </p>
                          </div>
                        </li>

                        <!-- Subject-7 -->
                        <li>
                          <h4 class="cbp-nttrigger">Financial Market Efficiency</h4>
                          <div class="cbp-ntcontent">
                          <p>It is said that a chimpanzee picking stocks out of a hat can out-perform most professional money managers. Finance theorists and practitioners alike struggled for decades to come to grips with the a counter-intuitive reality that markets tend to adjust themselves to new information faster than some of the brightest people can even respond.
                            <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a> -->
                            <br><br>In this module, students examine the degree to which financial markets are efficient including:

                            <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Why information gets so rapidly assimilated into market values
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> How efficiency is achieved through cost arbitrage
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> What the Efficient Market Hypothesis actually means (including the three levels of market efficiency)
                            <br><br>Students understand the value of sensitive information and the speed with which markets can respond to it.
                            </p>
                          </div>
                        </li>

                        <!-- Subject-8 -->
                        <li>
                          <h4 class="cbp-nttrigger">Cost of Capital</h4>
                          <div class="cbp-ntcontent">
                            <p>When should a company issue shares to raise money, and when should it issue debt? Equity is usually considered to be more “expensive” than debt, but in bad times it can really come in handy. Debt payments are far less forgiving and failure to make payments can trigger legal action and even bankruptcy proceedings.
                            <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a> -->
                            <br><br>In this course, students learn the tradeoffs involved in financing including:

                            <br><br><i class="fa fa-pencil-square-o fa-fw"></i> How capital structure affects the profits and stability of the company
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Considerations against which a company may source equity or debt or some combination thereof
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Empirical methods to compute the cost of equity, the cost of debt and the amalgamated cost of capital for the company
                            <br><br>Students master the remaining piece of the puzzle to take informed financing and investment decision.
                            </p>
                          </div>
                        </li>

                        <!-- Subject-9 -->
                        <li>
                          <h4 class="cbp-nttrigger">Financial Markets and Institutions</h4>
                          <div class="cbp-ntcontent">
                            <p>From outside, the world of financial markets seems daunting and a bit mysterious. But actually they are just “places” where parties come together to buy and sell securities. Marketplaces rely on market forces to determine the price of financial instruments and are usually characterized by transparent pricing and regulations to promote fair trade.
                            <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a> -->
                            <br><br>In this course, students understand:

                            <br><br><i class="fa fa-pencil-square-o fa-fw"></i> The role of financial institutions like banks, brokerages, investment banks, funds and exchanges
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> The financial instruments like stock, bonds and derivatives
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Ways to value the various financial instruments appropriately
                            <br><br>Students navigate through the maze of financial markets, instruments and decisions to become much more familiar with the world of finance.


                            </p>
                          </div>
                        </li>

                        <!-- Subject-10 -->
                        <li>
                          <h4 class="cbp-nttrigger">Big Data Analytics</h4>
                          <div class="cbp-ntcontent">
                            <p>Many companies have accumulated more data than they know what to do with. As tools evolve and become more powerful, companies have become increasingly desperate to hire people with the business and technical skills to make sense out of it all.
                            <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a> -->
                            <br><br>In this module, students learn how to interpret big data and improve business performance through fact-based decision-making, including:

                            <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Practice handling and working with large data sets
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Trying out various analytical problem solving approaches
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Analyzing data using advanced software tools like R
                            <br><br>Students use data intensive tools and techniques to solve real-world business problems.
                            </p>
                          </div>
                        </li>

                         <!-- Subject-11 -->
                        <li>
                          <h4 class="cbp-nttrigger">Blue Ocean Strategy</h4>
                          <div class="cbp-ntcontent">
                            <p>When an organization offers an undifferentiated product or service in a crowded market, the competition can be fierce. Pricing and volume come under pressure as closing each sale becomes more and more difficult. Some liken this situation to a “red ocean” in which sharks get so excited by the smell of blood that they begin to feed on each other.
                            <!-- <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a> -->
                            <br><br>In this simulation, students learn to create a “blue ocean,” that is, an uncontested market space where their company can capitalize on it’s unique product and still grow at the same time using:

                            <br><br><i class="fa fa-pencil-square-o fa-fw"></i> Strategy Canvas to map out existing markets and create new ones
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Buyer Utility Map to easily locate promising areas of innovation
                            <br><i class="fa fa-pencil-square-o fa-fw"></i> Four Actions Framework to reduce costs while increasing customer value
                            <br><br>Students discover firsthand the effectiveness of value innovation as opposed to the more traditional competitive and retaliation-driven business strategies.
                            </p>
                          </div>
                        </li>


                        <!-- Subject-12 -->
                        <li>
                          <h4 class="cbp-nttrigger">Personal Coaching</h4>
                          <div class="cbp-ntcontent">
                            <p>Each L3 student will receive personalized monthly coaching from a Course Director or Sr. Faculty. Sessions may revolve around career progress, personal development, connecting to the right people, etc.
                    <!--                           <br><a href="http://sunstone.in/management-program/sunstone-business-school/program-details/course-details/" target="_blank">Read More</a>
                    -->      </p>
                          </div>
                        </li>

                      </ul>
                    </div>
                  </li>

              </ul>
            </div>
          </li> 

                

        </ul>
      </div>
    </li>
                            
      </ul>
    </div>

      </div>
      </div>
    </div>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/query.js"></script>
<script src="js/external.js"></script>
    <footer>
    <div class="footer">
      <div class="row pd-b-40">
        <div class="col-md-3 col-md-offset-1 col-sm-3 mg-b-20 footer_section">
          <p class="heading">SUNSTONE</p>
          <p>At Sunstone Business School, our aim is to <br>
                      inculcate in our students the self-belief and <br>
                      skills to be able to provide leadership to the <br>
                      industry at large.</p>
        </div>
        <div class="col-md-2 text-center col-sm-3 footer_section">
          <i class="fa fa-flag"></i><br>
             <p class="head">Know more?</p>
          <a href="management-team">Management Team</a><br>
          <!-- <a href="#">Our Work</a><br>
          <a href="#">Manifesto</a><br>
          <a href="#">Blog</a> -->
        </div>

        <div class="col-md-2 text-center col-sm-3 footer_section">
          <i class="fa fa-phone"></i><br>
             <p class="head"> Talk to us</p>
              <p>Call us at +91 7838935160</p>
              <p>Not a big talker? Email us at</p>
          <a href="mailto:contactus@sunstone.in">contactus@sunstone.in</a>

        </div>

        <div class="col-md-3 col-sm-3 text-center">
          <i class="fa fa-paper-plane" style="padding-bottom:5px;"></i>
          <div class="col-lg-10 col-lg-offset-1">
            <form method="post" class="form_footer" enctype="application/x-www-form-urlencoded" action="https://web.mxradon.com/t/FormTracker.aspx">
                <div class="form-group">
                <input type="text" class="form-control" id="FirstName" placeholder="Name" name="FirstName" maxlength="100" value="" autocomplete="off" required>
                </div>
                <div class="form-group">
                <input type="email" class="form-control" id="EmailAddress"  placeholder="Email" name="EmailAddress" maxlength="100" value="" autocomplete="off" required>
                </div>
                <div class="form-group">
                <input type="number" class="form-control" id="Phone"  placeholder="Phone" name="Phone" maxlength="20" value="" autocomplete="off" required="required">
                </div>
                <input type="hidden" name="source" value="contactform-webinar-invite" />
                <input type="hidden" name="MXHOrgCode" value="37">
               <input type="hidden" name="MXHLandingPageId" value="cb8e5d6c-8292-11e3-86b5-22000a901032"> 
               <input type="hidden" name="MXHFormBehaviour" value="1"> 
               <input type="hidden" name="MXHFormDataTransfer" value="0"> 
               <input type="hidden" name="MXHRedirectUrl" value="http://sunstone.in/management-program/thanks-ls/"> 
               <input type="hidden" name="MXHAsc" value="10"> 
               <input type="hidden" name="MXHPageTitle" value="Connecto"> 
               <input type="hidden" name="MXHOutputMessagePosition" value="0">
               <input type="hidden" name="MXHIsExternallyUsed" value="1">
            <button type="submit" id="form-submit-button" class="btn btn-default getintouch custom_btn">Invite for Free Webinar</button>
            </form>
              <script type="text/javascript"> var MXLandingPageId = 'cb8e5d6c-8292-11e3-86b5-22000a901032'; </script>
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
          <a href="" class="pd-l-20"><img src="img/member-new.jpg" height="51px" width="164px"></a>
         </div>
         <div class="clearfix"></div>
          <!-- <a href="#">Our Work</a>
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
                        
                          <form class="form-horizontal pd-t-20" action="" method="post">

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
                                <input type="text" name="mobile" class="form-control" id=""  required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Experience <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <!--<input type="text" name="experience" class="form-control" id="" placeholder="" required>-->
                                <select class="form-control">
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
                                <a target="_blank" href="Sunstone_eBrochure.pdf"><button type="submit" name="brochure" value="brochure_request" class="btn btn-warning">Request Brochure</button></a>
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
                          <form class="form-horizontal pd-t-20" action="" method="post">

                            <div class="form-group">
                              <label for="" name="" class="col-sm-3 control-label">Name<font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="name" class="form-control" id=""  required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Mobile <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="mobile" class="form-control" id="" required>
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
                               <select class="form-control">
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



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/grid.js"></script>
        <script>
          $(function() {
            Grid.init();
          });
        </script>

        <script>
            // $('.dmm').click(function(){
            //   alert("TEST");
            // });

            // $('.og-expanded').append("<input type='text'>");
        </script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/unslider.js"></script>
        <script type="text/javascript">
		    $(document).ready(function(){
		        $("button").click(function(){
		
		            $.ajax({
		                type: 'POST',
		                url: 'script.php',
		                success: function(data) {
		                    
		                    
		
		                }
		            });
		   });
		});
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
              animationLoop: true,
              directionNav:false,
              itemWidth: 310,
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
            }
            else if (x > 100) {
              $(".tothetop").fadeIn(500);
              $('.navbar').css('background','#0e152b');
              }
          });
        </script>

        <script src="js/jquery.cbpNTAccordion.min.js"></script>

        <script>
              $( function() {
                $( '#cbp-ntaccordion' ).cbpNTAccordion();

              } );  
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

<script src="js/query.js"></script>
<script type="text/javascript">
  $('.query').click(function(){

      var margin = $( ".send_query" ).css("right");
       // alert(margin);
     if(margin == '-310px'){
       $('.send_query').css('right','0px').css('transition','0.4s all ease-in');
       // $('.query').css('right','300px').css('transition','0.4s all ease-in');
     }
       if(margin == '-307px'){
       $('.send_query').css('right','0px').css('transition','0.4s all ease-in');
       // $('.query').css('right','300px').css('transition','0.4s all ease-in');
     }
    if(margin == '0px'){
       $('.send_query').css('right','-307px').css('transition','0.4s all ease-in');
       // $('.query').css('right','0px').css('transition','0.4s all ease-in');
     }
  });
</script>
<script>
  $( function() {
    $( '#query_close' ).click(function(){
        $(".query").trigger("click");
    });

    $( '.query_cancel' ).click(function(){
        $(".query").trigger("click");
    });

  });  
</script>
<script>
  $( function() {
   var lav1 =  $('#level11').val();
   var lav2 =  $('#level22').val();
   var lav3 =  $('#level33').val();
  
   if(lav1){
    $( "#level1" ).addClass( "cbp-ntopen" );
   }
   if(lav2){
    $( "#level2" ).addClass( "cbp-ntopen" );
    $( "#level21" ).addClass( "cbp-ntopen" );
   }
   if(lav3){
    $( "#level2" ).addClass( "cbp-ntopen" );
    $( "#level31" ).addClass( "cbp-ntopen" );
   }
  });  
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



<!-- Google Code for SBS-PGPM-Conversion-SD Conversion Page -->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 952528978;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "cYhvCNadrgoQ0uCZxgM";
var google_conversion_value = 0;
var google_remarketing_only = false;
/* ]]> */
</script>


<!-- Spacing Element-->

<!--<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>-->




<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/952528978/?value=0&amp;label=cYhvCNadrgoQ0uCZxgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


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



<!-- Facebook Conversion Code for Sunstone Pixel-22-12-2014: from Suren -->
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
window._fbq.push(['track', '6019772638228', {'value':'0.01','currency':'INR'}]);
</script>

<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6019772638228&amp;cd[value]=0.01&amp;cd[currency]=INR&amp;noscript=1" /></noscript>

    </body>

</html>
