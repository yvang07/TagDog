<?php
	session_start();

class Home extends CI_Controller {


	function index() {

		$this->load->library('javascript');
	
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


}
