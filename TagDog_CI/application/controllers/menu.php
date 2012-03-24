<?php

class Menu extends CI_Controller {

 	

	function index() {

		//$data['main_content'] = 'view_menu';
		$this->load->view("view_menu");
	}


}
