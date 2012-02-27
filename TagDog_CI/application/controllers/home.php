<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function index() {

		$data['main_content'] = 'view_home';
		$this->load->view('includes/template', $data);
	}

	function validate_credentials() {


	}
}
