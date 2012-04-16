<<<<<<< HEAD
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	function index() {

		$this->load->view('view_menu');
	}
}
=======
<?php

class Menu extends CI_Controller {

 	

	function index() {

		//$data['main_content'] = 'view_menu';
		$this->load->view("view_menu");
	}


}
>>>>>>> e80a3cb667c8f2174953ba67dd05993747b37cd9
