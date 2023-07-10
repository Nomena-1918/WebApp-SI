<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Choix_objectif extends CI_Controller {

	// Load view form
	public function index()
	{
		// Sélection base types objectif
		$this->load->model('Bdd');
		$data['result']=$this->Bdd->select('typeobjectif');

		// La vue spécifique à load
		$data['content_view'] = 'choix_objectif/form_choix_objectif'; 
        
		// Load du template
		$this->load->view('template', $data);
	}

	// Récupération des données de formulaire
	// Sélection Proposition programme régime depuis base
	// Load view détails programme avec data
	public function traitementForm() {

	}
}