<?php

class Register extends CI_Controller {

	function index() {

		$data['main_content'] = 'view_register';
		$this->load->view('includes/template', $data);
	}

	function validate_credentials() {

		$this->load->model('membership_model');

	}

}



