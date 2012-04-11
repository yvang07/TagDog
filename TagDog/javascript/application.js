jQuery(document).ready(function(){



//Share 
jQuery("button#share_button").click(
	function() {
		var listsize = jQuery(".alert").length;
		var itemname = "share_"+(listsize+1).toString();
		var via = jQuery(this).val();
		
		jQuery.ajax ({
			 type: "POST",
			 url:  "http://cloudedbox.com/TagDog/home/share",
			 dataType: "json",
			 data: "share_var="+via,
			 cache:false,
			 success:
			  function(data) {
			    postStatus(itemname, data.message, 'info');
			  }
		});
		return false;
	});
//End Share

//Identify
jQuery("button#share_button").click(
	function() {
		var listsize = jQuery(".alert").length;
		var itemname = "share_"+(listsize+1).toString();
		var via = jQuery(this).val();
	
		jQuery.ajax ({
			 type: "POST",
			 url:  "http://cloudedbox.com/TagDog/home/share",
			 dataType: "json",
			 data: "share_var="+via,
			 cache:false,
			 success:
			  function(data) {
			    postStatus(itemname, data.message, 'info');
			  }
		});
		return false;
	});
//Toggle 
jQuery("#toggle_left .btn").click(
	function() {

		var listsize = jQuery(".alert").length;
		var itemname = "toggle_"+(listsize+1).toString();
		var via = jQuery(this).val();
		jQuery(this).button('toggle');

		jQuery.ajax ({
			 type: "POST",
			 url:  "http://cloudedbox.com/TagDog/home/toggle",
			 dataType: "json",
			 data: "toggle_var="+via,
			 cache:false,
			 success:
			  function(data) {
			    postStatus(itemname, data.message, 'info');

			  }
		});
		return false;
	});
//End Share
//Drag n Drop File
var gCtx = null;
var gCanvas = null;
var imageData = null;
var c=0;
var stype=0;

var imghtml='<div id="qrfile"><canvas id="out-canvas" width="320" height="240"></canvas>'+
    '<div id="imghelp">drag and drop a QRCode here'+
	'<br>or select a file'+
	'<input type="file" onchange="handleFiles(this.files)"/>'+
	'</div>'+
'</div>';

function dragenter(e) {
  e.stopPropagation();
  e.preventDefault();
}

function dragover(e) {
  e.stopPropagation();
  e.preventDefault();
}
function drop(e) {
  e.stopPropagation();
  e.preventDefault();

  var dt = e.dataTransfer;
  var files = dt.files;
  if(files.length>0)
  {
	handleFiles(files);
  }
  else
  if(dt.getData('URL'))
  {
	qrcode.decode(dt.getData('URL'));
  }
}

function handleFiles(f)
{
	var o=[];
	
	for(var i =0;i<f.length;i++)
	{
        var reader = new FileReader();
        reader.onload = (function(theFile) {
        return function(e) {
            gCtx.clearRect(0, 0, gCanvas.width, gCanvas.height);

			qrcode.decode(e.target.result);
        };
        })(f[i]);
        reader.readAsDataURL(f[i]);	
    }
}

function initCanvas(ww,hh)
{
    gCanvas = document.getElementById("qr-canvas");
    var w = ww;
    var h = hh;
    gCanvas.style.width = w + "px";
    gCanvas.style.height = h + "px";
    gCanvas.width = w;
    gCanvas.height = h;
    gCtx = gCanvas.getContext("2d");
    gCtx.clearRect(0, 0, w, h);
    imageData = gCtx.getImageData( 0,0,320,240);
}


function captureToCanvas() {
    flash = document.getElementById("embedflash");
    if(!flash)
        return;
    flash.ccCapture();
}

function htmlEntities(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}

function read(a)
{
    var html="<br>";
    if(a.indexOf("http://") === 0)
        html+="<a target='_blank' href='"+a+"'>"+a+"</a><br>";
    html+="<b>"+htmlEntities(a)+"</b><br><br>";
    document.getElementById("result").innerHTML=html;
}	

function isCanvasSupported(){
  var elem = document.createElement('canvas');
  return !!(elem.getContext && elem.getContext('2d'));
}


function load()
{
	if(isCanvasSupported() && window.File && window.FileReader)
	{
		initCanvas(800,600);
		qrcode.callback = read;
		document.getElementById("mainbody").style.display="inline";
	}
	else
	{
		document.getElementById("mainbody").style.display="inline";
		document.getElementById("mainbody").innerHTML='<p id="mp1">QR code scanner for HTML5 capable browsers</p><br>'+
        '<br><p id="mp2">sorry your browser is not supported</p><br><br>'+
        '<p id="mp1">try <a href="http://www.mozilla.com/firefox"><img src="firefox.png"/></a> or <a href="http://chrome.google.com"><img src="chrome_logo.gif"/></a></p>';
	}
}

function setwebcam()
{
	document.getElementById("result").innerHTML="- scanning -";
    if(stype==1)
    {
        setTimeout(captureToCanvas, 500);    
        return;
    }
    document.getElementById("outdiv").innerHTML = camhtml;
    document.getElementById("qrimg").src="qrimg2.png";
    document.getElementById("webcamimg").src="webcam.png";
    stype=1;
    setTimeout(captureToCanvas, 500);
}
function setimg()
{
	document.getElementById("result").innerHTML="";
    if(stype==2)
        return;
    document.getElementById("outdiv").innerHTML = imghtml;
    document.getElementById("qrimg").src="qrimg.png";
    document.getElementById("webcamimg").src="webcam2.png";
    var qrfile = document.getElementById("qrfile");
    qrfile.addEventListener("dragenter", dragenter, false);  
    qrfile.addEventListener("dragover", dragover, false);  
    qrfile.addEventListener("drop", drop, false);
    stype=2;
}

//End Identify
 
//Displaying Messages
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
//End Displaying Messages


// Popover Stuff
var keepPopover, delay = function() { keepPopover = setTimeout( function() { $('.popover').hide(); }, 500); };            

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
//End Popover Stuff

});


