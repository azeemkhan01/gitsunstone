<?php include("header1.php"); ?>
<?php include("subheader.php"); ?>  

<style>
/*.my_speaks img {
    height: 100px !important;
    width: 85px !important ; 
}
*/
.my_speaks span { max-width:200px; padding-left:15px; }

.industry_speaks{display:table-cell; vertical-align: middle;}

</style> 
    <div class="container si_section">
      <div class="row">
        <div class="col-md-12 no-side-margin">
       <!--    <div class="">Problem Based Learning</div>
          <div class="red"></div> -->
          <!-- div class="si_subtagline">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, dicta saepe quia reiciendis sit. Autem, ratione, assumenda obcaecati minus possimus
          </div> -->
        </div>
      </div>
    </div>

    <div class="container no-side-padding" id="pgpm_overview">
      <div class="main col-md-8">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="pd-t-50"></div>
            <hr class="heading_line">
            <div class="heading bold">VIDEO PROTOTYPE</div>
            <hr class="heading_line">      
            <!-- <ul class="level_list pd-t-20">
              <li>Course Contents:</li>
              <li class="course_level bold"><a href="#level1">Level 1 </a></li>
              <li class="course_level bold"><a href="#level2">Level 2 </a></li>
              <li class="course_level bold"><a href="#level3">Level 3 </a></li>
            </ul> --> 

            <div class="row pd-t-20" >
			
			      <!--code edited by Aruna on 23rd April 2015-->
              <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                  <div class="col-sm-6">
                    <img src="img/business-analy.png" width="100%">
                  </div>
                  <div class="col-sm-6 text-center" style="padding-top:7em;">
                    <!-- <a  data-toggle="modal" data-target="#mymodalvideo" style="color:blue;">here</a> -->
                    <button class="btn btn-warning" data-toggle="modal" data-target="#mymodalvideo" >Click here</button>
                  </div>
                </div>
              </div>
              
            </div>


          </div>
        </div>
        <br>
      </div>
      
      <?php include("sidebar.php") ?>
    </div><!-- /container -->

<div class="modal fade" tabindex="-1" role="dialog" id="mymodalvideo">
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
                  <?php 
                  if($_SESSION['email'] == ""){
                    
                     ?>
                  <div  class="enterepreneurmodal" id="enterepreneurmodal">
                   <h3>Connect With Us</h3>
                  <form class="form-horizontal pd-t-20"  method="post" action="submit.php">

                     <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Email <font color="#FF0000">*</font></label>
                        <div class="col-sm-8 col-md-offset-1">
                           <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Mobile <font color="#FF0000">*</font></label>
                        <div class="col-sm-8 col-md-offset-1">
                           <input type='tel' pattern="^\d{10}$" title='Phone Number (Format: 9876543210)' name="mobile" class="form-control" id="mobile" required>
                        </div>
                     </div>
                     <?php 
                          function connPageName() {
                             return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                          }
                             $connect_page = connPageName();

                     ?>
                         <input type="hidden" name="connect_page" value="<?php echo $connect_page; ?>" class="form-control" id="connect_page" >
                         <input type="hidden" name="my_data" value="" class="" id="my_data" >
                     <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                           <button type="button" name="connect"  id="connectform" value="connect" class="btn btn-warning">CONNECT</button>
                        </div>
                     </div>
                  </form>
               </div>
               <?php }
                
              
                ?>
                 <div  class="enterepreneurvideo " id="enterepreneurvideo" <?php if($_SESSION['email'] == ""){ ?>style="display:none;" <?php  } ?>>
                   <iframe width="100%" height="450" class="pd-t-20" src="https://www.youtube.com/embed/luaKlRr55SA" frameborder="0" allowfullscreen></iframe>
                 </div>
                
               </div>


               

            </div>
         </div>
</div><!-- /.modal -->


<?php include("footer.php") ?>


