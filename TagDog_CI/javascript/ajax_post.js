jQuery(document).ready(function(){

  
  jQuery("#submit").click( 
  
    function(){
    
        var username=jQuery("#username").val();
        var password=jQuery("#password").val();
      
        jQuery.ajax({
        type: "POST",
        url: "http://cloudedbox.com/CI/TagDog/TagDog_CI/ajax/post_action",
        dataType: "json",
        data: "username="+username+"&password="+password,
        cache:false,
        success: 
          function(data){
            jQuery("#form_message").html(data.message).css({'background-color' : data.bg_color}).fadeIn('slow'); 
          }
        
        });

      return false;

    });

   jQuery("#login_submit").click(

	function() {

	var username=jQuery("#login_username").val();
	var password=jQuery("#login_password").val();

	jQuery.ajax({

	type:	"POST",
	url:	"http://cloudedbox.com/CI/TagDog/TagDog_CI/login/post_action",
	dataType:	"json",
	data:	"login_username="+username+"&login_password="+password,
	cache:	false,
	success:
		function(data) {
			jQuery("#change_this").html(data.message).attr('class', data.newclass).fadeIn('slow');
		}

	});

	return false;
   });
  

});

