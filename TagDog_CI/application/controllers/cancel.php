<?php

class Cancel extends CI_Controller {

	function index() {

		$data['main_content'] = 'view_cancel';
		$this->load->view('includes/template', $data);
	}

}


