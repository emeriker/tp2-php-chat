<?php
class Gestion extends MY_Controller {
	public function __construct() {
		parent::__construct ();

		$this->load->model ( 'SalleXML' );
		$this->load->model ( 'SalleBD' );
	}
	public function index() {
		if (! $_SESSION ['isAdmin']) {
			redirect ( 'auth/login', 'refresh' );
		}
		$this->accueil ();
	}
	public function accueil() {
		$data ['title'] = 'Gestion';

		$data ['users'] = $this->SalleBD->getUsers ();
		$data ['messagesBD'] = $this->SalleBD->get_messages_salle ();

		$data ['messagesXMLAdministration'] = $this->SalleXML->get_messages_salle ( "Administration" );
		$data ['messagesXMLPlaintes'] = $this->SalleXML->get_messages_salle ( "Plaintes" );
		$data ['messagesXMLLibre'] = $this->SalleXML->get_messages_salle ( "Libre" );

		$this->load->view ( 'templates/header', $data );
		$this->load->view ( 'tinker/gestion', $data );
		$this->load->view ( 'templates/footer' );
	}
	public function deleteMessageBD($id) {
		$this->SalleBD->effaceMessage ( $id );
		redirect ( 'gestion', 'refresh' );
	}
	public function deleteMessageXML($id, $nomSalle) {
		$this->SalleXML->delete ( $nomSalle, $id );
		redirect ( 'gestion', 'refresh' );
	}
	public function deleteUser($iduser) {
		$this->SalleBD->deleteUser ( $iduser );
		redirect ( 'gestion', 'refresh' );
	}
}