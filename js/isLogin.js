    $(document).ready(function() {
      $("#loginform").click(function() {
      var email = $("#lemail").val();
      var password = $("#lpassword").val();
      var dataString = 'email1=' + email + '&password1=' + password ;
      if(email != "" && password != ""){
            $.ajax
            ({ 
              type:'POST',
              url:'loginuser.php',
              data: dataString,
              cache: false,
              success:function(data){
                 // alert(data);
                if (data == 'abc') {
                   $("#invalidusr").hide(); 
                  $("#validuser").show(); 
                  var msg = "Logging in, please wait ...";
                 $('#validuser').text(msg);
                 location.reload();

                } if(data == "Invalid Username and Password.."){
                  $("#validuser").hide(); 
                  $("#invalidusr").show(); 
                  var msg1 = "Invalid Username or Password..";
                 $('#invalidusr').text(msg1);
                }

              }
            });
          
        }else{
          var msg2 ='Please Enter Username and Email.';
          $("#invalidusr").show(); 
          $('#invalidusr').text(msg2);
        }
      });
          $('.registerformsubmit').keypress(function (e) {
           if(e.which == 13) {
                var email = $("#lemail").val();
                var password = $("#lpassword").val();
                var dataString = 'email1=' + email + '&password1=' + password ;
                if(email != "" && password != ""){
                      $.ajax
                      ({ 
                        type:'POST',
                        url:'loginuser.php',
                        data: dataString,
                        cache: false,
                        success:function(data){
                           // alert(data);
                          if (data == 'abc') {
                             $("#invalidusr").hide(); 
                            $("#validuser").show(); 
                            var msg = "Logging in, please wait ...";
                           $('#validuser').text(msg);
                           location.reload();

                          } if(data == "Invalid Username and Password.."){
                            $("#validuser").hide(); 
                            $("#invalidusr").show(); 
                            var msg1 = "Invalid Username or Password..";
                           $('#invalidusr').text(msg1);
                          }

                        }
                      });
                    
                  }else{
                    var msg2 ='Please Enter Username and Email.';
                    $("#invalidusr").show(); 
                    $('#invalidusr').text(msg2);
                  }

            }
          });
    });
