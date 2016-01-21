$(document).ready(function(){
        $( ".statusUser" ).click(function() {
          var href = $(this).attr('name');
          var stat = $(this).attr('type');
          var dataString = 'id='+ href +'&status='+ stat;
          // alert(dataString);
          var confirm_msg = confirm("Are You Sure");
          if(confirm_msg == true)
          {
            $.ajax
            ({
              type: "POST",
              url: "ajax/status_affiliates.php",
              data: dataString,
              cache: false,
              success: function(data)
              {
                alert(data);
                location.reload();
              } 
            });
          }
        });
      });