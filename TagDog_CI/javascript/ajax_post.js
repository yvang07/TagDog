jQuery(document).ready(function(){

  
	jQuery("#title_tagdog").hover(

		function(){
			var listsize = jQuery(".info_item").length;
			var itemname = "info_item"+(listsize+1).toString();
			jQuery("#info_list").append("<li id='"+itemname+"' class='info_item'>Hovered the title</li>"); 
			clearTextAt(itemname, 3000);},
		function(){}
	);
	jQuery("#title_tagdog").click(

		function(){
			var listsize = jQuery(".alert").length;
			var itemname = "error_item"+(listsize+1).toString();

			jQuery("#error_list").append("<li id="+itemname+" class='alert alert-error'><a class='close' data-dismiss='alert' href='#'>&times;</a><strong>Warning!</strong> You broked it.</li>"); 
			clearTextAt(itemname, 3000);}
	);	
	
  
function clearTextAt(itemname, when) {

	var t=setTimeout(function(){clearText(itemname)}, when);
}

function clearText(itemname) {
	//jQuery(('#'+itemname)).html("");
	jQuery(('#'+itemname)).remove();
}
});


