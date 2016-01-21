      $(function() {
        $('.contactformstatus').change(function() {
          var id = $(this).attr('name');
          var status = $(this).attr('alt');
          if (status == 1) {

            status = 0;
            $(this).attr({"alt" : 0});

          } else{
            status = 1;
            $(this).attr({"alt" : 1});

          }
           var dataString = 'id=' + id +'&status=' + status;
        // alert(dataString);
         $.ajax
            ({
              type: "POST",
              url: "ajax/contact_formstatus_ajax.php",
              data: dataString,
              cache: false,
              success: function(data)
              {
               
              } 
            });

          
        })
      })