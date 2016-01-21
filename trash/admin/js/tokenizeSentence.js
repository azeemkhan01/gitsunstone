 $(document).ready(function () {
    $('#sentence_add').focusout(function(){
        var sentence = $(this).val();
        var category_text = $('#sentence_category').val();
        var dataString = 'sentence=' + sentence +'&category_text=' + category_text;
        //alert(dataString);
         $.ajax
            ({
              type: "POST",
              url: "ajax/tokenize_sentence_ajax.php",
              data: dataString,
              cache: false,
              success: function(data)
              {
                //alert(data);
                 $('#divID').append(data);
               // location.reload();
              } 
            });
    });
 });