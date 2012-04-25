<?php
	session_start();

class Home extends CI_Controller {


	function index() {

		$this->load->library('javascript');

		// Load the googlemaps library
		$this->load->library('googlemaps');
		// Load browse model
		$this->load->model('model_browse');
		// Initialize the map, passing through any parameters
		$config['center'] = 'auto';  //'Fresno, California';
		$config['zoom'] = "auto";
		
		//get user's coordinates and place map
		$config['onboundschanged'] = 'if (!centreGot) {
		var mapCentre = map.getCenter();
		marker_0.setOptions({
		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
		});
		}
		centreGot = true;';
		$this->googlemaps->initialize($config);
		
		$marker = array();
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
		$marker['infowindow_content'] = "You're here";
		$this->googlemaps->add_marker($marker);
		// Get the co-ordinates from the database using our model

		//This section is commented out until the database it references
		//is created at cloudedbox.com ---

		/*$coords = $this->model_browse->get_coordinates();
		// Loop through the coordinates we obtained above and add them to the map
		foreach ($coords as $coordinate) {
		$marker = array();
		$marker['position'] = $coordinate->lat.','.$coordinate->long;
		$marker['infowindow_content'] = $coordinate->item;
		$this->googlemaps->add_marker($marker);
		}*/

		// Create the map
		$data = array();
		$data['map'] = $this->googlemaps->create_map();
	
		$data['main_content'] = 'view_home';
		$this->load->view('includes/template', $data);

	}

	function share() {

		if (isset($_SESSION['username'])) {
			$_SESSION['username']=$_SESSION['username']+1;
		} else {
			$_SESSION['username'] = 1;
		}

		//Share button pressed
		$via = $_POST['share_var'];
		if ($via != "") {

			switch ( $via ) {
	
				case "tweet":

				$img = imagecreatefrompng('https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl="cameron"');
				imagepng($img, 'testqr.png');

				$message = 'Tweet';
				break;
				case "email":
				$message = 'Mail Client';
				break;
				case "save":
				$message = $_SESSION['username'];
				break;
				case "print":
				$message = 'Print Menu';
				break;
	
				default:
				$message = 'Nada';
				break;
			}
			
			$output = '{ "message" : "'.$message.'"}';
			echo $output;
		}

	}

	function toggle() {

		$via = $_POST['toggle_var'];

		if ($via != "") {

			switch ( $via ) {
	
				case "track":
				$message = 'Track Toggled';
				break;
			
				case "missing":
				$message = 'Missing Toggled';
				break;

				default:
				$message = 'Error';
				break;
			}
			
			$output = '{ "message" : "'.$message.'"}';
			echo $output;
		}

	}

	function browse()
	{
		//this function will get user's coordinates and drop pin on map
	}


}
