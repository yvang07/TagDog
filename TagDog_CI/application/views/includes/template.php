<?php $this->load->view('includes/header'); ?>

<?php $this->load->view('includes/navbar'); ?>

<?php $this->load->view($main_content); 

	$this->load->view('view_create');
	$this->load->view('view_identify');
	$this->load->view('view_browse');
	$this->load->view('view_share');
	$this->load->view('view_toggles');
?>

<?php $this->load->view('includes/footer'); ?>
