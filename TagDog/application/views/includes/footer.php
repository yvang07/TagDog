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
    </script>
<!--./google_map_js-->


  </body>
</html>

