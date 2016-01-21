$(document).ready(function(){
  $('.query').click(function(){
      var margin = $( ".send_query" ).css("right");
         // alert(margin);
     if(margin == '-315px'){
       $('.send_query').css('right','0px').css('transition','0.4s all ease-in');
       // $('.query').css('right','300px').css('transition','0.4s all ease-in');
     }
       if(margin == '-315px'){
        $("#query_form").show();
        $("#feedback").hide();  
        $("#query_form")[0].reset();
       $('.send_query').css('right','0px').css('transition','0.4s all ease-in');
       // $('.query').css('right','300px').css('transition','0.4s all ease-in');
     }
    if(margin == '0px'){
       $('.send_query').css('right','-315px').css('transition','0.4s all ease-in');
       // $('.query').css('right','0px').css('transition','0.4s all ease-in');
     }
  });
});  
  $( function() {
    $( '#query_close' ).click(function(){
      // alert();
        //$(".query").trigger("click");
         $('.send_query').css('right','-315px').css('transition','0.4s all ease-in');
         
    });

    $( '.query_cancel' ).click(function(){
        // $(".query").trigger("click");
         $('.send_query').css('right','-315px').css('transition','0.4s all ease-in');
    });

  });  