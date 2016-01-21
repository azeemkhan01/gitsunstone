$(document).ready(function(){
        $( ".deleteWebUser" ).click(function() {
          var href = $(this).attr('name');
          var dataString = 'id='+ href;
          var confirm_msg = confirm("Are You Sure you Want Delete");
          if(confirm_msg == true)
          {
            $.ajax
            ({
              type: "POST",
              url: "ajax/ajax_del_web_session_user.php",
              data: dataString,
              cache: false,
              success: function(data)
              {
                location.reload();
              } 
            });
          }
        });
      });