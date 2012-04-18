          </div>
	</span>




            <!--p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p-->
          </div>

        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>Team TagDog <span style="color:#b40001">@FresnoState </span> <small>Spring 2012</small></p>
      </footer>

    </div><!--/.fluid-container-->
<!--/div><splash page--> 
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap-transition.js"></script>
    <script src="../bootstrap/js/bootstrap-alert.js"></script>
    <script src="../bootstrap/js/bootstrap-modal.js"></script>
    <script src="../bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="../bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="../bootstrap/js/bootstrap-tab.js"></script>
    <script src="../bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="../bootstrap/js/bootstrap-popover.js"></script>
    <script src="../bootstrap/js/bootstrap-button.js"></script>
    <script src="../bootstrap/js/bootstrap-collapse.js"></script>
    <script src="../bootstrap/js/bootstrap-carousel.js"></script>
    <script src="../bootstrap/js/bootstrap-typeahead.js"></script>
    <!--script src="javascript/prototype.js" type="text/javascript"></script>
    <script src="javascript/effects.js" type="text/javascript"></script>
    <script src="javascript/dragdrop.js" type="text/javascript"></script>
    <script src="javascript/controls.js" type="text/javascript"></script-->
    <script src="javascript/application.js" type="text/javascript"></script>
	<script>
		jQuery(".alert").alert();
		jQuery('#mainDisplay').scrollspy();
		jQuery(".link_tags, .link_options").popover();
	</script>

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


	var map; // Global declaration of the map
			var iw = new google.maps.InfoWindow(); // Global declaration of the infowindow
			var lat_longs = new Array();
			var markers = new Array();
			function initialize() {
				
				 var myLatlng = new google.maps.LatLng(36.7477272, -119.7723661);
				var myOptions = {
			  		zoom: 13,
					center: myLatlng,
			  		mapTypeId: google.maps.MapTypeId.ROADMAP}
				map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
				
			var myLatlng = new google.maps.LatLng(36.752800, -119.706062);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				icon: "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000"		
			};
			marker_0 = createMarker(markerOptions);
	
			var qr =  "<div id=\"qr_img\"><img styel='height:200px; width:200px;' src='./images/nytimes.PNG' /></div>";	

			marker_0.set("content", "<img style='height:200px; width:200px;' src='./images/nytimes.PNG' />");
			
			google.maps.event.addListener(marker_0, "click", function() {
				iw.setContent(qr);
				iw.open(map, this);
			
			});
			
			var myLatlng = new google.maps.LatLng(38.580002, -121.489998);
				
			var markerOptions = {
				map: map,
				position: myLatlng,
				icon: "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=B|9999FF|000000"		
			};
			marker_1 = createMarker(markerOptions);
		

			marker_1.set("content", "<div style='height:500px;'><img src='./images/nytimes.PNG' /></div>");
			
			google.maps.event.addListener(marker_1, "click", function() {
				iw.setContent(qr);
				iw.open(map, this);
			
			});
			
			fitMapToBounds();
			
			
			}
		
		
		function createMarker(markerOptions) {
			var marker = new google.maps.Marker(markerOptions);
			markers.push(marker);
			lat_longs.push(marker.getPosition());
			return marker;
		}
		
			function fitMapToBounds() {
				var bounds = new google.maps.LatLngBounds();
				if (lat_longs.length>0) {
					for (var i=0; i<lat_longs.length; i++) {
						bounds.extend(lat_longs[i]);
					}
					map.fitBounds(bounds);
				}
			}
			
		  	window.onload = initialize;
			
			//]]>

    </script>
<!--./google_map_js-->



  </body>
</html>

