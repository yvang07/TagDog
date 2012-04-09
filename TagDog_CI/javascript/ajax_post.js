jQuery(document).ready(function(){

 
	jQuery("button#share_button").click(

		function() {
			var listsize = jQuery(".alert").length;
			var itemname = "share_"+(listsize+1).toString();
			var via = jQuery(this).val();
			postStatus(itemname, via, 'info');
			
		}


	);
	 

    var keepPopover,
        delay = function() { keepPopover = setTimeout( function() { $('.popover').hide(); }, 500); };            

    jQuery('[data-action="popover"]').popover({
        trigger: 'manual'
    })


    .mouseenter(function(e) {
        var $popover = $('.popover');

        (keepPopover) && clearTimeout(keepPopover);
        ($popover.length) && $popover.remove();
        $(this).popover('show');

    })


    .mouseleave(function(e) {
        var $smarttip = $(this);

        delay();

        $('.popover')
            .mouseenter(function(e) { clearTimeout(keepPopover); })
            .mouseleave(function(e) { delay(); });
        
    }).click(function(e) {
        e.preventDefault();
    });

function postStatus(itemname, message, type) {

	jQuery("#error_list").append("<li id="+itemname+" class='alert alert-"+type+"'><a class='close' data-dismiss='alert' href='#'>&times;</a><strong>"+message+"</strong></li>"); 
	clearTextAt(itemname, 3000);
} 
function clearTextAt(itemname, when) {

	var t=setTimeout(function(){clearText(itemname)}, when);
}

function clearText(itemname) {
	//jQuery(('#'+itemname)).html("");
	jQuery(('#'+itemname)).remove();
}
});


