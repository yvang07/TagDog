jQuery(document).ready(function(){

  
	jQuery("#title_tagdog").hover(

		function(){ 
			var elementToChange = "#information"
			clearTextAt(elementToChange, 3000);}
	);	
  


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
  
function clearTextAt(idOfElement, when) {
	var t=setTimeout(function(){clearText(idOfElement)}, when);
}

function clearText(idOfElement) {
	jQuery(idOfElement).html("You hovered the title 3 seconds ago.");
}
});


