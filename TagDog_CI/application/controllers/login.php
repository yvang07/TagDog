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

		if (($_POST['login_username'] == "") || ($_POST['login_password'] == "")) {

			$message = "You didn't type enough.";
			$new_class = "alert alert-error";
		} else {


			$message = "We're not accepting";
			$new_class = "alert alert-success";
		}

		$output = '{ "message": "'.$message.'", "newclass": "'.$new_class.' fade in" }';
		echo $output;

	}
}
