<?php include("header1.php"); ?>
<?php include("subheader.php"); 
function base64_url_decode($input) {
 return base64_decode(strtr($input, '-_,', '+/='));
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

      </div>
      <div class="row no-side-margin text-center pd-b-40">
          <div class="col-md-12 ">


         <form class="col-sm-5 no-side-padding text-left" action="" method="post">
            <div class="form-group no-side-padding col-md-12">
              <h3>
                Reset your password
              </h3>
            </div>
            <br>
             <div id="error"style="color:red;"></div>
            <div id="success" style="color:green;"></div>
            <div class="form-group no-side-padding col-md-12">
              <label >New Password *</label><br>
              <input type="password" class="form-control" id="password" placeholder="" required="required" name="password">
            </div>
            <br>
            <div class="form-group no-side-padding col-md-12">
              <label >Confirm password *</label><br>
              <input type="password" class="form-control" id="cpassword" placeholder="" required="required"  name="cpassword">
            </div>
            <br>
            <input type="hidden" name="email" id="email" value="<?php echo base64_url_decode($_GET['info']);  ?>">
            <div class="col-md-12 no-side-padding mg-t-20">
              <input type="button" name="send" value="Update Password" id="reset_password_btn" class="btn btn-warning"> 
              <!-- <button type="submit" class="btn btn-warning" name="send" value="Update Password">Update Password</button> -->
            </div>

              </form>


       
          
      </div>
    </div>


    
            </div>
          </div>
        </div><!-- col-md-12 -->
    
      </div><!-- row -->
    </div><!-- /container -->

    <?php include("footer.php") ?>

<script language="Javascript">
  $("#reset_password_btn").click(function() {
    var password = $("#password").val();
    var cpassword = $("#cpassword").val();
    var email = $("#email").val();
    if((password==cpassword)&&(password!='')){
     $.ajax
    ({ 
        type:'POST',
        url:'reset_ajax.php',
        data: {password:password,email:email},
        cache: false,
        success:function(data){

           $('#error').hide();
            var $messageDiv = $('#success'); // get the reference of the div
            $messageDiv.show().html('Your password has been reset, please login using your new password'); // show and set the message
            setTimeout(function(){ $messageDiv.hide().html('');}, 30000);

        }
    });
  }
  else
  {
    $('#success').hide();
            var $messageDiv = $('#error'); // get the reference of the div
            $messageDiv.show().html('Password and Confirm Password does not match!'); // show and set the message
            setTimeout(function(){ $messageDiv.hide().html('');}, 30000);
         
   }
  });
</script>