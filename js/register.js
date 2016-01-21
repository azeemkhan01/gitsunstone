    $(document).ready(function() {
      $("#registration").click(function() {
      var name = $("#reg_name").val();
      var email = $("#reg_email").val();
      var mobile = $("#reg_mobile").val();
      var captcha = $("#captcha_code").val();

 // alert(captcha);
      var password = $("#reg_password").val();
      var cpassword = $("#reg_cpassword").val();
        if (name == '' || email == '' || password == '' || cpassword == '' || mobile == ''  || captcha == '') {
        //alert("Please fill all fields...!!!!!!");
         $('#mend-field').show().html("Please fill all fields...!!!!!!");
         setTimeout(function(){ $('#mend-field').hide().html();}, 30000);
        }else if (!(password).match(cpassword)) {
        //alert("Your passwords don't match. Try again?");
        } else {
        $.post("register.php", {
        name1: name,
        email1: email,
        mobile1: mobile,
        password1: password,
        captcha: captcha
        }, function(data) {
        if (data == 'You have Successfully Registered.....') {
         $('#text-success').show().html(data);
          setTimeout(function(){   location.reload(); }, 3000);
       
        
        }else{
          $('#captcha-info').show().html(data);
          setTimeout(function(){ $('#captcha-info').hide().html();}, 30000);
        }
         
       
        // location.reload();
        
        });
        }
      });
    });
