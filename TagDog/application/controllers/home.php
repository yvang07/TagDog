<?php

class Home extends CI_Controller {

	function index() {
		$this->load->library('javascript');
		//$this->load->library('jquery', FALSE);
		$data['main_content'] = 'view_splash';
		$this->load->view('includes/template', $data);
	}

	function validate_credentials() {

		$this->load->model('membership_model');

	}
	function post_action() {

		
	}
	function share() {

		$via = $_POST['share_var'];

		if ($via != "") {

			switch ( $via ) {
	
				case "tweet":
				echo 'Tweet';
				break;
			
				default:
				echo 'Nada';
				break;
			}
		}
	}

}
