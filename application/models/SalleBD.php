<?php
class SalleBD extends CI_Model {
	public function __construct() {
		$this->load->database ();
	}

	// retourne les message de la BD et les message d'une salle selons le id
	public function get_messages_salle($salle_id_salle = FALSE) {
		$retVal = array ();

		if ($salle_id_salle === FALSE) {
			$query = $this->db->get ( 'messages' );
			return $query->result_array ();
		}

		$query = $this->db->get_where ( 'messages', array (
				'salle_id_salle' => $salle_id_salle
		) );

		foreach ( $query->result () as $row ) {
			$mess ['idmessage'] = $row->idmessage;
			$mess ['contenu'] = $row->message;
			$mess ['date'] = $row->date;
			$mess ['pseudo'] = $this->getUserName ( $row->users_id );
			$mess ['id'] = $row->users_id;
			$retVal [] = $mess;
		}
		return $retVal;
	}

	// ajout un message a la BD selons la salle et l'utilisateur
	public function ajouteMessage($salle_id_salle, $username) {
		$slug = url_title ( $this->input->post ( 'title' ), 'dash', TRUE );
		$data = array (
				'salle_id_salle' => $salle_id_salle,
				'message' => $this->input->post ( 'message' ),
				'date' => date ( "h:i:sa" ),
				'users_id' => $this->getUserId ( $username )
		);

		$this->db->insert ( 'messages', $data );
	}
	public function getUserName($users_id) {
		$query = $this->db->query ( "SELECT `username` FROM `users` where id='" . "$users_id" . "' " );
		$row = $query->row ();

		if (isset ( $row )) {
			$username = $row->username;
		} else {
			$username = "Invalide";
		}
		return $username;
	}

	// convertis un username en id
	public function getUserId($users_name) {
		$query = $this->db->query ( "SELECT `id` FROM `users` where username='" . "$users_name" . "' " );
		$row = $query->row ();

		if (isset ( $row )) {
			$userid = $row->id;
		} else {
			$userid = "Invalide";
		}
		return $userid;
	}

	// convertis un id de salle en nom
	public function getSalleName($id) {
		$query = $this->db->query ( "SELECT `nom` FROM `salles` where id_salle ='" . "$id" . "' " );
		$row = $query->row ();

		if (isset ( $row )) {
			$salleName = $row->nom;
		} else {
			$salleName = "Invalide";
		}
		return $salleName;
	}

	// retourne la liste et les information de tout les users
	public function getUsers() {
		$query = $this->db->get ( 'users' );
		return $query->result_array ();
	}

	// efface un message de la BD
	public function effaceMessage($idmessage) {
		$this->db->where ( 'idmessage', $idmessage );
		$this->db->delete ( 'messages' );
	}

	// efface un user de a BD
	public function deleteUser($iduser) {
		$this->db->where ( 'id', $iduser );
		$this->db->delete ( 'users' );
	}
}