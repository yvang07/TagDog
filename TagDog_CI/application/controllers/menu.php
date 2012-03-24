<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	function index() {

		$this->load->view('view_menu');
	}
}