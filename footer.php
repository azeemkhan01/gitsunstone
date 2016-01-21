<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/query.js"></script>
<script src="js/external.js"></script>
<!-- <script src="js/external1.js"></script> -->
<script type="text/javascript">
    $(document).ready(function() {
     $("#close_function").click(function () {
    $(".ls_form").hide();

  });
});
  </script>
<link href="./css/style.css" rel="stylesheet">
<script src="js/register.js"></script>
<script>
function refreshCaptcha(){
  var img = document.images['captchaimg'];
  img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<footer id="gotofooter">
    <div class="footer">
      <div class="row pd-b-40">
        <div class="col-md-3 col-md-offset-1 col-sm-3 mg-b-20 footer_section">
          <p class="heading">SUNSTONE</p>
          <p>At Sunstone Business School, our aim is to <br>
                      inculcate in our students the self-belief and <br>
                      skills to be able to provide leadership to the <br>
                      industry at large.</p>
        </div>
        <div class="col-md-2 col-sm-3 text-center footer_section">
          <i class="fa fa-flag"></i><br>
             <p class="head">Know more?</p>
          <a href="management-team">Management Team</a><br>
          <!-- <a href="#">Our Work</a><br>
          <a href="#">Manifesto</a><br>
          <a href="#">Blog</a> -->
        </div>

        <div class="col-md-2 col-sm-3 text-center footer_section">
          <i class="fa fa-phone"></i><br>
             <p class="head"> Talk to us</p>
              <p>Call us at +91 7838935160</p>
              <p>Not a big talker? Email us at</p>
          <a href="mailto:contactus@sunstone.in">contactus@sunstone.in</a>

        </div>

        <div class="col-md-3 col-sm-3 text-center">
          <i class="fa fa-paper-plane" style="padding-bottom:5px;"></i>
      
          <div class="col-lg-10 col-lg-offset-1">
           <?php include("footer-form.php"); ?>
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
          <span class="pd-l-20"><img src="img/member-new.jpg" height="51px" width="164px"></span>
         </div>
         <div class="clearfix"></div>
          <!-- <a href="#">About</a>
          <a href="#">Our Work</a>
          <a href="#">Manifesto</a>
          <a href="#">Blog</a><br> -->
          <p class="pd-t-10"> Copyright © 2014 Sunstone Learning Pvt Ltd. All rights reserved.</p>
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
        <div class="row">
          <div class="circular_button col-sm-6 col-sm-offset-3" style="cursor:pointer;margin-top:15px" data-toggle="modal" data-target="#referafriend"><b>Refer a Friend</b></div>
        </div>
        </div>

        </div>
      </div>

     </div> 
    </footer>
<script src="js/isLogin.js"></script>   

      <!-- REFER A FRIEND -->
      <div class="modal fade text-left" id="referafriend" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content register-content">
            <div class="modal-header">
              <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>           
            <div class="modal-body register-body">
              <form class="form row" data-toggle="validator" role="form" action="refer.php" method="POST">
                <div class="form-group">
                  <h3 class="text-center">Refer A Friend To Sunstone
                  </h3>
                  <label>Your Details:</label>
                </div>
                <div id="text-success" style="color: green;font-size: .7em;" ></div>
                <div id="mend-field" style="color: red;font-size: .7em;" ></div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label for="" name="" class="control-label">Name<font color="#FF0000">*</font></label>
                    <div class="">
                      <input type="text" name="ref_name" class="form-control" id="" data-error="Please Fill Name" required>
                      <div class="help-block with-errors"></div>
                    </div>

                  </div>
                  <div class="form-group col-sm-6">
                    <label for="" class=" control-label">Email <font color="#FF0000">*</font></label>
                    <div class="">
                      <input type="email" name="ref_email" class="form-control" id="" data-error="Please Fill Email" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group">

                  <label>Referral Details:</label>
                </div>

                <div class="row">
                
                  <div class="form-group col-sm-6">
                    <label for="" name="" class="control-label">Friend Name<font color="#FF0000">*</font></label>
                    <div class="">
                      <input type="text" name="ref_friend_name" class="form-control" id="" data-error="Please Fill Name" required>
                      <div class="help-block with-errors"></div>
                    </div>

                  </div>
                  
                  <div class="form-group col-sm-6">
                    <label for="" class=" control-label">Friend Email <font color="#FF0000">*</font></label>
                    <div class="">
                      <input type="email" name="ref_friend_email" class="form-control" id="" data-error="Please Fill Email" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                   <div class="form-group col-sm-6">
                    <label for="" class=" control-label">Friend Mobile <font color="#FF0000">*</font></label>
                    <div class="">
                      <input type='tel' name="ref_friend_mobile" data-error="Please Fill Mobile.No" pattern="[7-9]{1}[0-9]{9}" title='Phone Number (Format: 9876543210)'  class="form-control" id="" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  
                    <div class="form-group col-sm-12">
                      <div class="">
                        <button type="submit" id="" name="refer_registration" value="registration" class="btn btn-warning">REFER</button>
                      </div>
                    </div>
                </div>

              </form>
            </div>
         
          </div>
        </div>
      </div>
      <!-- REFER A FRIEND -->


      <!-- MODAL FOR LOGIN AND REGISTER -->

      <div class="modal fade text-left" id="myModallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog login-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <!-- <h4 class="modal-title" id="myModalLabel"> -->
                  <!-- <img src="img/team/9.jpg" class="circle">
                  <span class="bold1 pd-l-30"> Gaganpreet Luthra </span> -->
              <!-- </h4> -->
            </div>
            <div class="modal-body pd-b-20">
            

              <form class="form-horizontal pd-t-20 form23" method="post" data-toggle="validator" role="form">
                <div class="form-group"><h3>LOGIN</h3></div>
                <div class="with-errors text-danger" id="invalidusr" style="font-size: 13px;"></div>
                <div class="with-success text-success" id="validuser" style="font-size: 15px;"></div>
                <div class="form-group">
                  <label for="" class=" control-label">Email <font color="#FF0000">*</font></label>
                  <div class=" ">
                    <input type="email" name="lemail" id="lemail" data-error="Please Fill Email" class="form-control registerformsubmit" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="control-label">Password <font color="#FF0000">*</font></label>
                  <div class="">
                    <input type="password" name="lpassword" id="lpassword" data-error="Please Fill Password" class="form-control registerformsubmit"  required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="">
                    <button type="button" name="loginform" value="loginform"  id="loginform" class="btn btn-warning">LOGIN</button>
                  </div>
                </div>
                <div class="form-group text-center">
                  <!-- <small><i>login via</i></small> -->
                 <!--  <a href="javascript:void(0);" class="black  fb_login fbbtn">
                      <img src="img/FB1.png">
                  </a>

                  <a href="javascript:void(0);" onclick="login()" class="black gplusbtn">
                      <img src="img/G+1.png">
                   </a> -->
                  <small><a href="forgot.php">Forgot Password</a></small>
                   <div class="text-center pd-t-10">
                      <small>New User ? <a  data-toggle="modal" data-target="#myModalregister"  id="register_button">Register Here</a></small>
                   </div>
                 <!--  <a  href="javascript:void(0);" class="black  fb_login">
                      <i class="fa fa-facebook fa-lg"></i>
                  </a> -->
                 

        <script>
            $('.fbbtn').click(function(){
                $('#myModallogin').modal('hide');
            });
            $('.gplusbtn').click(function(){
               $('#myModallogin').modal('hide');
            });
            window.fbAsyncInit = function() {
               FB.init({
                    appId      : '1708179932727193',
                    status     : false, 
                    cookie     : true,
                    xfbml      : true,
                    version    : 'v2.5',
                    oauth      : true
                });
                $(".fb_login").click(function() {
                   FB.login(Facebook_login);
                }); 
            };


            (function(d){
            var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id; js.async = true;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            d.getElementsByTagName('head')[0].appendChild(js);
            }(document));

          function Facebook_login () {
            FB.getLoginStatus(function(response) {
              // alert(JSON.stringify(response));
              
                if (response.status === 'connected') {
                  FB.api('/me?fields=name,email', function(response1) 
                  {
                    // alert (JSON.stringify(response1)); 
                     var email = response1.email;
                     var name = response1.name; 
                      $.post("sociallogin.php", {
                      email: email,
                      name: name
                      }, function(data) {
                      if (data == 'You have Successfully Loggedin.....') {
                      
                      //location.reload();
                      }
                    
                      // alert(data);
                      
                      });
                  });
                }
            });
          }                
        </script>
        
                  <!-- <a  href="javascript:void(0);" onclick="login()" class="black">
                      <i class="fa fa-google-plus fa-lg"></i>
                   </a> -->

                    <script>


        var OAUTHURL    =   'https://accounts.google.com/o/oauth2/auth?';
        var VALIDURL    =   'https://www.googleapis.com/oauth2/v1/tokeninfo?access_token=';
        var SCOPE       =   'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email';
        var CLIENTID    =   '235714740019-uf2n0vqn3403ji3smjqmn1lac62pnk5a.apps.googleusercontent.com';
        var REDIRECT    =   'http://sunstone.editsoft.in/oauth2callback'
        var LOGOUT      =   'http://accounts.google.com/Logout';
        var TYPE        =   'token';
        var _url        =   OAUTHURL + 'scope=' + SCOPE + '&client_id=' + CLIENTID + '&redirect_uri=' + REDIRECT + '&response_type=' + TYPE;
        var acToken;
        var tokenType;
        var expiresIn;
        var user;
        var loggedIn    =   false;

        function login() {
            var win         =   window.open(_url, "windowname1", 'width=800, height=600'); 

            var pollTimer   =   window.setInterval(function() { 
                try {
                    console.log(win.document.URL);
                    if (win.document.URL.indexOf(REDIRECT) != -1) {
                        window.clearInterval(pollTimer);
                        var url =   win.document.URL;
                        acToken =   gup(url, 'access_token');
                        tokenType = gup(url, 'token_type');
                        expiresIn = gup(url, 'expires_in');
                        win.close();

                        validateToken(acToken);
                    }
                } catch(e) {
                }
            }, 500);
        }

        function validateToken(token) {
            $.ajax({
                url: VALIDURL + token,
                data: null,
                success: function(responseText){  
                    getUserInfo();
                    loggedIn = true;
                    $('#loginText').hide();
                    $('#logoutText').show();
                },  
                dataType: "jsonp"  
            });
        }

        function getUserInfo() {
            $.ajax({
                url: 'https://www.googleapis.com/oauth2/v1/userinfo?access_token=' + acToken,
                data: null,
                success: function(response) {
                    //alert(JSON.stringify(response));
            var payload={name:response.name,email:response.email}
         
          $.ajax({
          type: "POST",
          url: "sociallogin.php",
          data:payload,
          cache: false,
          success: function(result){ 
           location.reload();
          }
      });
          
    },
                dataType: "jsonp"
            });
        }

        //credits: http://www.netlobo.com/url_query_string_javascript.html
        function gup(url, name) {
            name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
            var regexS = "[\\#&]"+name+"=([^&#]*)";
            var regex = new RegExp( regexS );
            var results = regex.exec( url );
            if( results == null )
                return "";
            else
                return results[1];
        }

        

                    </script>
 
<!--                   <a target="_blank" href="https://twitter.com/sunstonebschool" class="black">
                      <i class="fa fa-twitter fa-lg"></i>
                  </a>

                  <a target="_blank" href="https://www.linkedin.com/company/sunstone-business-school" class="black">
                      <i class="fa fa-linkedin fa-lg"></i>
                  </a> -->
                </div>
              </form>


            </div>
            
          </div>
        </div>
      </div>

<script src="js/isNumber.js"></script>     
      <div class="modal fade text-left" id="myModalregister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content register-content">
            <div class="modal-header">
              <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <!-- <h4 class="modal-title" id="myModalLabel"> -->
                  <!-- <img src="img/team/9.jpg" class="circle">
                  <span class="bold1 pd-l-30"> Gaganpreet Luthra </span> -->
              <!-- </h4> -->
            </div>
            <!-- Registration to website -->
           <?php if ($_SESSION["is_logged_in"] != TRUE) { ?>
            <div class="modal-body register-body">
              <form class="form11 row" data-toggle="validator" role="form" >
              <div class="form-group">
                <h3>REGISTER <?php echo $_SESSION["is_logged_in"]; ?>
                  <small class="pd-t-20 pull-right">Already Register? <a id="loginbtn" data-toggle="modal" data-target="#myModallogin">Sign in</a></small>
                </h3>
                
              </div>
               <div id="text-success" style="color: green;font-size: .7em;" ></div>
                <div id="mend-field" style="color: red;font-size: .7em;" ></div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="" name="" class="control-label">Name<font color="#FF0000">*</font></label>
                  <div class="">
                    <input type="text" name="reg_name" class="form-control" id="reg_name" data-error="Please Fill Name" required>
                    <div class="help-block with-errors"></div>
                  </div>

                </div>
                <div class="form-group col-sm-6">
                  <label for="" class=" control-label">Mobile <font color="#FF0000">*</font></label>
                  <div class="">
                    <input type='tel' data-error="Please Fill Mobile.No" pattern="[7-9]{1}[0-9]{9}" title='Phone Number (Format: 9876543210)' name="reg_mobile" class="form-control" id="reg_mobile" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>

              <div class="row">
                
                <div class="form-group col-sm-6">
                  <label for="" class=" control-label">Email <font color="#FF0000">*</font></label>
                  <div class="">
                    <input type="email" name="reg_email" class="form-control" id="reg_email" data-error="Please Fill Email" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                 <div class="form-group col-sm-6">
                  <label for="" class="control-label">Password <font color="#FF0000">*</font></label>
                  <div class="">
                    <input type="password" name="reg_password" class="form-control" id="reg_password" data-error="Please Fill Password" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>

               <!--  <div class="form-group">
                  <label for="" class="control-label">Confirm Password <font color="#FF0000">*</font></label>
                  <div class="">
                    <input type="password" name="reg_cpassword" class="form-control" id="reg_cpassword" data-error="Please Fill Confirm Password"  required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div> -->
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="" class="control-label">Captcha <font color="#FF0000">*</font></label><br/>
                  <div id="captcha-info" style="color: red;font-size: .7em;" class="info"></div ><br/>
                  <input id="captcha_code" name="captcha" type="text" class="form-control demoInputBox" data-error="Please Fill Capcha code"  required >
                  <!-- <input type="text" name="captcha" id="captcha" class="form-control demoInputBox" data-error="Please Fill Capcha code"  required><br> -->
                </div>
                <div class="form-group col-sm-8 pd-t-30">
                  <img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'>
                  
                  <!-- <img id="captcha_code" src="captcha_code.php" /> -->
                  <!-- <button name="submit" class="btnRefresh" onClick="refreshCaptcha();">Refresh Captcha</button> -->
                    <br>
        Can't read the image? click <a class="captcha" href='javascript: refreshCaptcha();'>here</a> to refresh
                </div>
                <!-- <div class="row"> -->
                  <div class="form-group col-sm-12">
                    <div class="">
                      <button type="button" id="registration" name="registration" value="registration" class="btn btn-warning">REGISTER</button>
                    </div>
                  </div>
                <!-- </div> -->




              </form>


            </div>
          <?php } ?>  
          </div>
        </div>
      </div>
      <!-- MODAL FOR LOGIN AND 

      TER -->

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
                        
                          <form class="form-horizontal pd-t-20" action="submit.php" method="post">

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
                                <!-- <input type="text" name="mobile" class="form-control" id=""  required> -->
                                <input type='tel' pattern="^\d{10}$" title='Phone Number (Format: 9876543210)' name="mobile" class="form-control" id=""  required> 
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Experience <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <!--<input type="text" name="experience" class="form-control" id="" placeholder="" required>-->
                                <select class="form-control"name="experience" required>
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
                            <input type="text" name="my_data" style="display:none;" >
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Your Query</label>
                              <div class="col-sm-8 col-md-offset-1">
                                <textarea name="any_query" class="txtarea"></textarea>
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
                        <div class="modal-body pd-b-20">
                        <h3>Attend Info Web Session</h3>
          
                        <p>The Info session takes place every Tuesday & Thursday at 10 pm and Saturday at 12 pm.</p>
                        <p>Please fill the following form if you are interested in attending 
                        our info web session and we’ll get back to you with the details</p>
                          <form class="form-horizontal pd-t-20" action="submit.php" method="post">

                            <div class="form-group">
                              <label for="" name="" class="col-sm-3 control-label">Name<font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="text" name="name" class="form-control" id=""  required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Mobile <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type='tel' pattern="^\d{10}$" title='Phone Number (Format: 9876543210)' name="mobile" class="form-control" id="" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Email <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <input type="email" name="email" class="form-control" id="" required>
                              </div>
                            </div>
                            <input type="text" name="my_data" style="display:none;" >
                            <div class="form-group">
                              <label for="" class="col-sm-3 control-label">Years of experience <font color="#FF0000">*</font></label>
                              <div class="col-sm-8 col-md-offset-1">
                                <select class="form-control"name="experience" required>
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

                           <!--  <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="remind_me"> Not free this time, but let me know about next info session
                                  </label>
                                </div>
                              </div>
                            </div> -->

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
                  <script>
                      // WRITE THE VALIDATION SCRIPT IN THE HEAD TAG.
                      function isNumber(evt) {
                          var iKeyCode = (evt.which) ? evt.which : evt.keyCode
                          if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57)){
                              alert('Please Enter valid Phone number.')
                              return false;
                          }else{
                               return true;
                          }
                      }    
                  </script>

                <div class="send_query test hidden-xs">
                    
                    <div class="query_form" id="query_div">

                      <h3 class="text-center">SEND A QUERY</h3>
                      <form class="form-horizontal pd-t-20 " id="query_form">
                          <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Name <font color="#FF0000">*</font></label>
                            <div class="col-sm-7 ">
                              <input type="text" class="form-control form-field1" id="name"  name="name" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Email <font color="#FF0000">*</font></label>
                            <div class="col-sm-7 ">
                              <input type="email" class="form-control form-field1" id="email"  name="email" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-4 control-label">Phone <font color="#FF0000">*</font></label>
                            <div class="col-sm-7 ">
                              <input type="phone" class="form-control form-field1" id="phone"  name="phone" onkeypress="javascript:return isNumber (event)">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-4 control-label"  name="msg" >Message <font color="#FF0000"></font></label>
                            <div class="col-sm-7 ">
                              <textarea class="txtarea" name="msg"  id="msg"></textarea>
                            </div>
                          </div>
                          <input type="text" name="my_data" id="my_data" style="display:none;" >
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

                    <button class="query" id="query">SEND A QUERY</button>
                </div> 
                <style type="text/css">
                .has-error .form-control {
    border-color: #a94442;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
}
                </style>  
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/validator.min.js"></script>
         
        
 <?php
$getpageName = basename($_SERVER['PHP_SELF']);
$removepageExtension = preg_replace('/\\.[^.\\s]{3,4}$/', '', $getpageName);
$checkpagesstatusquery ="SELECT * FROM pages WHERE page_name = '$removepageExtension'";
$respages = mysql_query($checkpagesstatusquery);
$valcheck = mysql_fetch_array($respages);
$form_status = $valcheck['contact_form_status'];
// echo "<pre>";print_r($_SESSION);die;
//if ($form_status == 1 ) {


//if ($_SESSION["is_logged_in"] != TRUE) { 

 ?>
 
 
  <div class="ls_form" id="ls_form" style="display:none;">
    <div class="title">Want us to contact you?  <span class="orange_color pull-right"  id="close_function"><i class="fa fa-close"></i></span></div>
    <form method="post" data-toggle="validator" role="form" enctype="application/x-www-form-urlencoded"  action="https://web.mxradon.com/t/FormTracker.aspx">
    <div class="form-group col-md-6 mg-b-0">
      <div class="col-md-12 no-side-padding">
        <input type='text'  class="form_field1" id='FirstName' name='FirstName' maxlength='100' value='' autocomplete='off' 
      required='required' placeholder="* Name" data-error="Please Fill Name" />
      </div>
      
       <div class="help-block with-errors col-md-12"></div>
      </div>
      <div class="form-group col-md-6 mg-b-0">
      <div class="col-md-12 no-side-padding">
        <input type='email' class="form_field1" id='EmailAddress' name='EmailAddress' data-error="Please Fill Email" maxlength='100' value='' autocomplete='off' required='required'  placeholder="* Email"/> <br/>
      </div>
       <div class="help-block with-errors col-md-12"></div>
      </div>
      <div class="form-group col-md-6 mg-b-0">
       <div class="col-md-12 no-side-padding">
          <input type='text' class="form_field1" id='Phone' name='Phone' data-error="Please Fill Mobile No" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder=" * Mobile" maxlength="10" onkeypress="return isNumberKey(event)" value="" autocomplete="off" required="required" />
       </div>
       <div class="help-block with-errors col-md-12"></div>
      </div>
      <div class="form-group col-md-6 mg-b-0">
      <div class="col-md-12 no-side-padding">
        <select id='mx_Years_of_Experience' name='mx_Years_of_Experience' data-error="Please Fill Experience" placeholder="*Experience (Years)" class="form_field1" required='required'>
          <option value='' >Years of Experience</option>
          <option value='&lt;3' >&lt;3</option>
          <option value='3' >3</option>
          <option value='4' >4</option>
          <option value='5' >5</option>
          <option value='6' >6</option>
          <option value='7' >7</option>
          <option value='8' >8</option>
          <option value='9' >9</option>
          <option value='10' >10</option>
          <option value='11' >11</option>
          <option value='12' >12</option>
          <option value='13' >13</option>
          <option value='14' >14</option>
          <option value='15' >15</option>
          <option value='&gt;15' >&gt;15</option>
        </select>
      </div>
      <div class="help-block with-errors col-md-12"></div>
      </div>

      <input type="hidden" name="Source" value="contactform" />
      <button id="form-submit-button" type="submit" class="formsubmitbtn">Contact me</button><br />
    <input type="hidden" name="MXHOrgCode" value="37" />
     <input type="hidden" name="MXHLandingPageId" value="cb8e5d6c-8292-11e3-86b5-22000a901032" /> 
     <input type="hidden" name="MXHFormBehaviour" value="1" /> 
     <input type="hidden" name="MXHFormDataTransfer" value="0" /> 
     <input type="hidden" name="MXHRedirectUrl" value="http://sunstone.in/management-program/thanks-ls/" /> 
     <input type="hidden" name="MXHAsc" value="10" /> 
     <input type="hidden" name="MXHPageTitle" value="Connecto" /> 
     <input type="hidden" name="MXHOutputMessagePosition" value="0" />
     <input type="hidden" name="MXHIsExternallyUsed" value="1" />
     </form>
  </div>
  <?php //} }?>
 <script type="text/javascript"> var MXLandingPageId = 'cb8e5d6c-8292-11e3-86b5-22000a901032'; </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="js/grid.js"></script>
        <script>
          $(function() {
            Grid.init();
          });
        </script>
        <script src="js/jquery.proximity.js"></script>
        <!-- // <script src="js/custom.proximity.js"></script> -->
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
          // $(function() {
          //     $('.banner').unslider();

          // });
          $('.banner').unslider({
            // speed: 3000              //  The speed to animate each slide (in milliseconds)
            delay: 8000            //  The delay between slide animations (in milliseconds)
                        //  Support responsive design. May break non-responsive designs
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
        <script type="text/javascript">
            $(document).ready(function() {
              
              $(".ls_form").delay(3000).fadeIn(500);
              
            });

        </script>

        <script>
          $(window).scroll(function(){
            var x = $("body").scrollTop();
            var width = $(window).width();
            if (x == 0){
              $(".tothetop").fadeOut(100);
       // $('.hide_links').css('opacity','0');
              // $('.navbar').css('background','none').css('border-bottom','none');
              
            }
            else if (x > 100) {
              $(".tothetop").fadeIn(500);
              // $(".ls_form").css('display','block');
              // $('.navbar').css('background','#3e3a3a');
              $('.navbar').css('background','#0e152b');
              //$('.hide_links').css('opacity','1');
              // x = 0;
              }
          });
        </script>
        <script src="js/jquery.cbpNTAccordion.min.js"></script>

        <script>
          $( function() {
            $( '#cbp-ntaccordion' ).cbpNTAccordion();

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

        <script>
          var contact_value = $('#contact_id').val();
          if (contact_value == "true") {
             $('html, body').animate({
                  scrollTop: $("#gotofooter").offset().top
              });
          }
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



<!-- Google Analytics -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-22653884-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>


<!-- Google Code for Remarketing tag -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 952528978;
var google_conversion_label = "CU4GCPa1_wYQ0uCZxgM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<!-- <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
// </script>-->
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/952528978/?value=0&amp;label=CU4GCPa1_wYQ0uCZxgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script type="text/javascript">
adroll_adv_id = "EUNO3DRQ4ZCQPG2UPJBUUM";
adroll_pix_id = "HCLWWX7OXJGOJIKRLZP23I";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>


<!--LeadSquared Tracking Code Starts-->
<script type="text/javascript" src="http://web.mxradon.com/t/Tracker.js"></script>
<script type="text/javascript">
      //Overwrite Associated Score
      //Asc = 20;
      //Tracker 
      pidTracker('37');
</script>
<!--LeadSquared Tracking Code Ends-->

<!--Start of Connecto Script-->
<script type="text/javascript">
// var _TConnecto = _TConnecto || {'licenseKey': '00003'};
// (function() {
//   var con = document.createElement('script'); con.type = 'text/javascript';
//   con.src = 'http://server.connecto.io/javascripts/connect.prod.min.js';
//   var s = document.getElementsByTagName('script')[0];
//   s.parentNode.insertBefore(con, s);
// })();
</script>
<!--End of Connecto Script--> 

<script type="text/javascript">
  $(document).ready(function(){
    $("#register_button").click(function(){
        $("#myModallogin").modal('hide');
    });
});
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#loginbtn").click(function(){
        $("#myModalregister").modal('hide');
    });
});
</script>

<!--By Suren: FB Pixel: edited on 1 Sept 2014 -->
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
    </body>

</html>
