<?php
class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct ();

		$_SESSION ['isConnecter'] = false;
		$_SESSION ['isAdmin'] = false;
		$_SESSION ['user_name'] = "Inconnu";

		$this->load->helper ( 'url_helper' );
		$this->load->library ( 'ion_auth' );

		$this->isAdmin ();
		$this->isConnecter ();
		if($_SESSION ['isConnecter']){
			$this->updateUserName();
		}

	}
	function isConnecter() {
		// verifie si il est logger
		if ($this->ion_auth->logged_in ()) {
			$_SESSION ['isConnecter'] = true;
		} else {
			$_SESSION ['isConnecter'] = false;
		}
	}
	function isAdmin() {
		// verifie si il est logger
		if ($this->ion_auth->is_admin ()) {
			$_SESSION ['isAdmin'] = true;
		} else {
			$_SESSION ['isAdmin'] = false;
		}
	}

	function updateUserName(){
		$user = $this->ion_auth->user()->row();
		$_SESSION ['user_name'] = $user->username;
	}
}