<?php

class Home extends CI_Controller {

	function index() {
		$this->load->library('javascript');
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

}
