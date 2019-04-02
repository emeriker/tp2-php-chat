<?php
class Salles extends MY_Controller {
	public function __construct() {
		parent::__construct ();

		$this->load->model ( 'SalleXML' );
		$this->load->model ( 'SalleBD' );

	}
	public function index() {
		$this->accueil();
	}

	public function accueil(){

		$data ['title'] = 'Salles';

		$this->load->view ( 'templates/header', $data );
		$this->load->view ( 'tinker/salles', $data );
		$this->load->view ( 'templates/footer' );
	}

	public function salleXML($salle) {
		$this->load->helper ( array (
				'form',
				'url'
		) );

		$data ['title'] = $salle;

		$this->load->library ( 'form_validation' );


		$this->form_validation->set_rules ( 'message', 'Message', 'required|max_length[256]|callback_motVulguaire|callback_specialCharacter', array (
				'required' => 'You have not provided %s ahahhaha.',
				'max_length' => 'Votre message est trop long',
				'motVulguaire' => 'Votre message est vulguaire',
				'callback_specialCharacter' => 'Speciale'
		) );

		if (!($this->form_validation->run () == FALSE)) {
			var_dump($data);
			$this->SalleXML->ajouteMessage($salle,$_SESSION['user_name']);
		}

		$data['messages'] = $this->SalleXML->get_messages_salle($salle);

		$this->load->view ( 'templates/header', $data );
		$this->load->view ( 'tinker/salleDiscution', $data);
		$this->load->view ( 'templates/footer');
	}

	public function salleBD($salle_id_salle ) {


		$this->load->helper ( array (
				'form',
				'url'
		) );

		$data ['title'] = $this->SalleBD->getSalleName($salle_id_salle);
		$data ['id'] = $salle_id_salle;

		$this->load->library ( 'form_validation' );

		$this->form_validation->set_rules ( 'message', 'Message', 'required|max_length[256]|callback_motVulguaire|callback_specialCharacter', array (
				'required' => 'You have not provided %s ahahhaha.',
				'max_length' => 'Votre message est trop long',
				'motVulguaire' => 'Votre message est vulguaire',
				'specialCharacter' => 'Votre message contient des charactere special'
		) );

		if (!($this->form_validation->run () == FALSE)) {
			$this->SalleBD->ajouteMessage($salle_id_salle,$_SESSION['user_name']);
		}

		$data['messages'] = $this->SalleBD->get_messages_salle($salle_id_salle);

		$this->load->view ( 'templates/header', $data );
		$this->load->view ( 'tinker/salleDiscution2', $data);
		$this->load->view ( 'templates/footer');
	}

	public function motVulguaire($str){
		$motVulguaire = ['con','gros','gros con','con gros','vraiement con','wow tes con','etc'];
		$count = count($motVulguaire);
		$vulguaire = false;
		
		for ($i = 0; $i < $count; $i++){
			$vulguaire = ($vulguaire||(strpos($str, $motVulguaire[$i])!==false));
		}
		
		return !$vulguaire;
	}

	public function specialCharacter($str){
		return !(preg_match('/[!-`]/', $str)==1);
		
	}
}