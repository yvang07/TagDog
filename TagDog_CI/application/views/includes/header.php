<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>[TAGDOG]</title>
    <!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://cloudedbox.com/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://cloudedbox.com/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="http://cloudedbox.com/TagDog2/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      /*body {
        padding-top: 60px;
        padding-bottom: 40px;
      }*/
      .sidebar-nav {
        padding: 9px 0;
      }
	.mainScroll {
	  height: 400px;
  	overflow: auto;
  	position: relative;
	}
	#splash_page {
	width:100%;
	height:100%;
	top:0px;
	left:0px;
	position:relative;
	}
.label,.alert{background-color:#666666;}
.label:hover{background-color:#4d4d4d;}
.label-important,.alert-danger,.alert-error{background-color:#cc0000;}
.label-important:hover{background-color:#990000;}
.label-warning{background-color:#cc6d00;}
.label-warning:hover{background-color:#995200;}
.label-success,.alert-success{background-color:#5c8a00;}
.label-success:hover{background-color:#3a5700;}
.label-info,.alert-info{background-color:#007399;}
.label-info:hover{background-color:#004d66;}
.alert,.alert .alert-heading,.alert-success,.alert-success .alert-heading,.alert-danger,.alert-error,.alert-danger .alert-heading,.alert-error .alert-heading,.alert-info,.alert-info .alert-heading{color:#eeeeee;text-shadow:none;border:none;}
.alert{padding:8px 35px 8px 14px;margin-bottom:18px;text-shadow:0 1px 0 rgba(255, 255, 255, 0.5);background-color:#eeeeee;border:1px solid transparent;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;color:#a47e3c;}
.alert-heading{color:inherit;}
.alert .close{position:relative;top:-2px;right:-21px;line-height:18px;}
.alert-success{background-color:#eeeeee;border-color:#e1e1e1;color:#468847;}
.alert-danger,.alert-error{background-color:#eeeeee;border-color:#e6e6e6;color:#b94a48;}
.alert-info{background-color:#eeeeee;border-color:#dcdcdc;color:#0099cc;}
.alert-block{padding-top:14px;padding-bottom:14px;}
.alert-block>p,.alert-block>ul{margin-bottom:0;}
.alert-block p+p{margin-top:5px;}

/**********Browse Style**********/
#map_canvas { height:350px;width:60%;border:1;border-style:solid;}
/*#browse_tag_info {height:350px;width:35%;float:right;border:1;border-style:solid;}*/
/**********./Browse Style********/

    </style>

<!--google_map_js-->
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDrFQDjPnHJhXpzFHfl1TYyeCkzY1JfgL8&sensor=false">
    </script>
    <script type="text/javascript">
      function load_map() {
        var myOptions = {
          center: new google.maps.LatLng(-34.397, 150.644),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
      }
    </script>
<!--./google_map_js-->


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="http://cloudedbox.com/bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://cloudedbox.com/bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://cloudedbox.com/bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://cloudedbox.com/bootstrap/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <body onload="load_map()">
