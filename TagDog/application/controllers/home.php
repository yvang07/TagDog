<?php

class Home extends CI_Controller {

	function index() {

		$this->load->library('javascript');

	
		$data['main_content'] = 'view_home';
		$this->load->view('includes/template', $data);


		//Session stuff
		$this->load->library('session');
	}


	function share() {

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
				$message = 'Save Window';
				break;
				case "print":
				$message = $ip;
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


}
