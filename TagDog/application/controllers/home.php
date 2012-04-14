<?php

class Home extends CI_Controller {

	function index() {
		$this->load->library('javascript');
		
		// Load the googlemaps library
		$this->load->library('googlemaps');
		// Load browse model
		$this->load->model('model_browse');
		// Initialize the map, passing through any parameters
		$config['center'] = 'Fresno, California';
		$config['zoom'] = "auto";
		$this->googlemaps->initialize($config);
		// Get the co-ordinates from the database using our model
		$coords = $this->model_browse->get_coordinates();
		// Loop through the coordinates we obtained above and add them to the map
		foreach ($coords as $coordinate) {
		$marker = array();
		$marker['position'] = $coordinate->lat.','.$coordinate->long;
		$marker['infowindow_content'] = $coordinate->item;
		$this->googlemaps->add_marker($marker);
		}
		// Create the map
		$data = array();
		$data['map'] = $this->googlemaps->create_map();

		$data['main_content'] = 'view_home';
		$this->load->view('includes/template', $data);
	}

	function share() {

		$via = $_POST['share_var'];

		if ($via != "") {

			switch ( $via ) {
	
				case "tweet":
				$message = 'Tweet';
				break;
			
				default:
				$message = 'Nada';
				break;
			}
			
			$output = '{ "message" : "'.$message.'"}';
			echo $output;
		}

	}

	function browse()
	{
		
	}

}
