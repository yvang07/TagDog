<?php

class Login extends CI_Controller {

 	function Login_post() {

		parent::Controller();
		$this->load->helper(array('url'));
 	}

	function index() {

		$data['main_content'] = 'view_login';
		$this->load->view('includes/template', $data);
	}

	function validate_credentials() {

		$this->load->model('membership_model');

	}
	function post_action() {

	
	}
}
