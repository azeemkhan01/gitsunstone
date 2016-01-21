<?php include("header1.php"); ?>
<?php include("subheader.php"); 
function base64_url_encode($input) {
 return strtr(base64_encode($input), '+/=', '-_,');
}

?> 
    <div class="container si_section">
      <div class="row">
        <div class="col-md-12 no-side-margin">
        </div>
      </div>
    </div>

    <div class="container no-side-padding" id="commstory">
      <div class="main row">
        <div class="col-md-12">
          <div class="row board">
            <div class="col-md-10 col-md-offset-1 pd-t-40 pd-b-20">
              <div class="comm_board ">

        <hr class="heading_line">
        <div class="text-center" style="height: auto;z-index: 4;">
        <div class="contents" style="color: #000000;display: inline-block;width: 100%;padding: 20px;">
        <h1>
        <span class="thnx_msg">
        <font color="rgb(62, 58, 58)">Have you forgotten your password ?</font></span></h1></div>
        </div>
        <hr class="heading_line">
      </div>
      <div class="row no-side-margin text-center pd-b-40">
          <div class="col-md-12">

         <form class="col-sm-5 no-side-padding text-left" action="" method="post">
            <div class="form-group no-side-padding col-md-12">
              <h3>
                Apply for new password
              </h3>
            </div>
            <br>
            <div class="form-group no-side-padding col-md-12">
              <label >Put your email:</label><br>
              <input type="text" required="required" name="email" class="form-control">
            </div>
            <br>
            <div class="col-md-12 no-side-padding mg-t-20">
              <input type="submit" name="send" value="Send" class="btn btn-warning"> 
             
            </div>

        </form>
        <?php
    if($_POST['send']){
			include('db.php');

    $email=$_POST['email']; // Password Encryption, If you like you can also leave sha1.
  
    $result = mysql_query("SELECT name FROM registration WHERE email='$email'");
    $data = mysql_num_rows($result);
    //$row =mysql_fetch_array($result);
    if(($data)==0){
    echo "Invalid email";
    }else{
      $row =mysql_fetch_array($result);
		//$email=$row['email'];

    
    
			  $sender_name = "Sunstone Business School";
                    $sender = "contactus@sunstone.in";
                    $to  = $email; 
                    $subject ="Password reset request on sunstone.in";
                    $email = base64_url_encode($email);

                    $message = "<p>Hi ".$name.",</p>
                       
                          
                          <p>We received a request to change your password on http://sunstone.in/,
                             if you authorize it Click here to change your password
                          http://sunstone.editsoft.in/resetpassword.php?info=".$email."
                          </p>
                          <p>Otherwise ignore this email.</p>

                          <p>&nbsp;</p>

                          <p>Thanks,<br />
                           Sunstone Team<br />
                          </p>
                          ";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From:'.$sender_name.'<'.$sender.'>'."\r\n";
                    $result = mail($to, $subject, $message, $headers);
                    // echo "<h3>Please Check your mail<h3>";

                    echo "<script type='text/javascript'>
						$(document).ready(function(){
						$('#myModalemail').modal('show');
				                 });
						</script>";

				}
			}
        ?>
          
      </div>
    </div>

    <div class="clearfix"></div>

      <!-- <div class="col-lg-12 text-center"><a href="index.php "><button class="btn btn-warning">GO TO HOMEPAGE</button></a></div> -->
            </div>
          </div>
        </div><!-- col-md-12 -->
    
      </div><!-- row -->
    </div><!-- /container -->

    <?php include("footer.php") ?>



    <div class="modal fade text-left" id="myModalemail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <h3>Please check your email</h3>

                        </div>
                        
                      </div>
                    </div>
                  </div>

