<?php
class Accueil extends MY_Controller {

	public function __construct() {
		parent::__construct ();
		// load MY_Controller (qui est dans le core)
	}
	public function index() {
		$this->accueil ();
	}
	public function accueil() {
		$data ['title'] = 'Accueil';

		$this->load->view ( 'templates/header', $data );
		$this->load->view ( 'tinker/index', $data );
		$this->load->view ( 'templates/footer', $data );
	}
}