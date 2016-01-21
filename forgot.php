<?php include("header1.php"); ?>
<?php include("subheader.php"); 
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
            <div id="error"style="color:red;"></div>
            <div id="success" style="color:green;"></div>
            <div class="form-group no-side-padding col-md-12">
              <label >Put your email:</label><br>
              <input type="text" required="required" name="email" id="email" class="form-control">
            </div>
            <br>
            <div class="col-md-12 no-side-padding mg-t-20">
              <input type="button" name="send" id="reset_password_btn" value="Send" class="btn btn-warning"> 
             
            </div>

        </form>
          
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

<script language="Javascript">
  $("#reset_password_btn").click(function() {
    var email = $("#email").val();
    var dataString = 'email=' + email 
    // alert(dataString);
     $.ajax
    ({ 
        type:'POST',
        url:'forgot_ajax.php',
        data: dataString,
        cache: false,
        success:function(data){

         var data1 = data.trim();
          if (data1 == '0') {
            $('#success').hide();
            var $messageDiv = $('#error'); // get the reference of the div
            $messageDiv.show().html('Please Enter valid Mailid.'); // show and set the message
            setTimeout(function(){ $messageDiv.hide().html('');}, 3000);
          }if (data1 =='1'){
             $('#error').hide();
            var $messageDiv = $('#success'); // get the reference of the div
            $messageDiv.show().html('Reset Password link is sent to registered Email.'); // show and set the message
            setTimeout(function(){ $messageDiv.hide().html('');}, 3000);

              }
       

        }
    });
  });
</script>

<!--     <div class="modal fade text-left" id="myModalemail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close close_style" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title" id="myModalLabel">
                              <!-- <img src="img/team/9.jpg" class="circle">
                              <span class="bold1 pd-l-30"> Gaganpreet Luthra </span> -->
                          <!-- </h4> -->
             <!--            </div>
                        <div class="modal-body pd-b-20">
                        <h3>Please check your email</h3>

                        </div>
                        
                      </div>
                    </div>
                  </div>
 --> 
