<?php
class SalleXML extends CI_Model {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
	}
	public function get_messages_salle($nomDeSalle = false) {
		$retVal = array ();
		
		if (file_exists ( APPPATH . "input_xml/saleChat.xml" )) {
			$file = simplexml_load_file ( APPPATH . "input_xml/saleChat.xml" );
			$hasFound = false;
			if ($nomDeSalle === false) {
				$retVal = $file;
				return $retVal;
			}
			
			foreach ( $file->sale as $sale ) {
				if ($sale->nom->__toString () == $nomDeSalle) {
					$messages = $sale->messages;
					$hasFound = true;
					break;
				}
			}
			
			if ($hasFound) {
				foreach ( $messages->message as $message ) {
					$mess ['contenu'] = $message->contenu->__toString ();
					$mess ['date'] = $message ['date']->__toString ();
					$mess ['pseudo'] = $message ['pseudo']->__toString ();
					$mess ['id'] = $message ['id']->__toString ();
					$retVal [] = $mess;
				}
			}
		}
		return $retVal;
	}
	public function ajouteMessage($salle, $username) {
		$slug = url_title ( $this->input->post ( 'title' ), 'dash', TRUE );
		$hasFound = false;
		
		$data = array (
				'nom' => $salle,
				'contenu' => $this->input->post ( 'message' ),
				'date' => date ( "h:i:sa" ),
				'pseudo' => $username 
		);
		
		if (! file_exists ( APPPATH . "input_xml/saleChat.xml" )) {
			$xmlstring = '<?xml version="1.0" encoding="UTF-8"?><saleDeChat></saleDeChat>';
			$xml = new SimpleXMLElement ( $xmlstring );
			$xml->asXML ( APPPATH . "input_xml/saleChat.xml" );
		}
		
		$file = simplexml_load_file ( APPPATH . "input_xml/saleChat.xml" );
		
		foreach ( $file->sale as $sale ) {
			if ($sale->nom->__toString () == $data ['nom']) {
				$toutMessages = $sale->messages;
				$hasFound = true;
				break;
			}
		}
		
		$temp = $file->sale->children ( "nom" );
		
		if (! $hasFound) {
			
			$salle = $file->addChild ( "sale" );
			$salle->addChild ( 'nom', $data ['nom'] );
			
			$messagePlus = $salle->addChild ( 'messages' );
			
			$unMessage = $messagePlus->addChild ( "message" );
			$unMessage->addAttribute ( 'id', 0 );
		} else {
			$id = $this->getFinalIdPlus ( $toutMessages );
			$unMessage = $toutMessages->addChild ( "message" );
			$unMessage->addAttribute ( 'id', $id );
		}
		
		$unMessage->addAttribute ( 'date', $data ['date'] ); // $data ['date']
		$unMessage->addAttribute ( 'pseudo', $data ['pseudo'] );
		$unMessage->addChild ( 'contenu', $data ['contenu'] );
		
		$file->asXML ( APPPATH . "input_xml/saleChat.xml" );
	}
	public function delete($nomDeSalle, $id) {
		if (file_exists ( APPPATH . "input_xml/saleChat.xml" )) {
			$file = simplexml_load_file ( APPPATH . "input_xml/saleChat.xml" );
			
			$hasFound = false;
			foreach ( $file->sale as $sale ) {
				
				if ($sale->nom->__toString () == $nomDeSalle) {
					
					$messages = $sale->messages;
					$hasFound = true;
					break;
				}
			}
			
			if ($hasFound) {
				foreach ( $messages->message as $message ) {
					if ($message ['id']->__toString () == $id) {
						echo "allo";
						
						unset ( $message [0] );
						$file->asXML ( APPPATH . "input_xml/saleChat.xml" );
					}
				}
			}
		}
	}
	public static function getFinalIdPlus($messages) {
		$rep = - 1;
		foreach ( $messages->message as $message ) {
			$rep = ( int ) $message ['id']; // ->__toString();
		}
		return ( int ) ($rep + 1);
	}
}