$(document).ready(function(){
		$('#send_query').click(function(){
			// alert('sds');
			var name  = $('#name').val();
			var email = $('#email').val();
			var phone = $('#phone').val();
			var  msg = $('#msg').val();
			var  my_data = $('#my_data').val();
			if (my_data == "") {
				var dataString = 'name=' + name + '&email=' + email + '&msg=' + msg + '&phone=' + phone;
				// alert(dataString);
				
				if( name != "" && email != "" && phone != ""){
						$.ajax
						({ 
							type:'POST',
							url:'query_ajax.php',
							data: dataString,
							cache: false,
							success:function(data){
								$("#query_form").hide();
								$("#feedback").show();	
							}
						});
					
				}else{
					alert('Please Fill required fields.');
				}

			}else{
				return false;
			}
		});

    });

