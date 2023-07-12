<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Choix_objectif extends CI_Controller {
/*
	// Load view form
	public function index()
	{
		// Vahatra pour test
		$this->session->set_userdata('idUser', 1);

		// Sélection base types objectif
		$this->load->model('Bdd');
		$data['result']=$this->Bdd->select('typeobjectif');

		// La vue spécifique à load
		$data['content_view'] = 'choix_objectif/form_choix_objectif'; 
        
		// Load du template
		$this->load->view('template', $data);
	}
*/
	// Récupération des données de formulaire
	// Sélection Proposition programme régime depuis base
	// Load view détails programme avec data
	public function traitementForm() {

		// Programme détaillé
		$idTypeObjectif = $this->input->post('idObjectif');
        $idUser = $this->session->userdata('idUser');

		// Programme détaillé avec durée
		$valeur = $this->input->post('valeur');

		$data['valObjectif'] = $valeur;

		// Données sans durée
		$this->db->select('*');
		$this->db->from('v_programme_utilisateur');
		$this->db->where('id', $idUser);
		$this->db->where('idtypeobjectif', $idTypeObjectif);

		$data['resultQuery'] = $this->db->get();

		$sumPrixJour = 0;
		$sumVariationPoids = 0;

		// variation totale et prix total
		foreach ($data['resultQuery']->result() as $row) {
			$sumPrixJour += $row->prixplat;
			$sumVariationPoids += $row->variationpoids;
		}

		// Nombre jours
		$data['dureepro'] = ceil($valeur/abs($sumVariationPoids));

		// Variation poids par jour
		$data['sumVariationPoids'] = $sumVariationPoids;

		// Prix total par jour
		$data['sumPrixJour'] = $sumPrixJour;

		// Prix total programme
		$data['sumPrixTotal'] = $sumPrixJour * $data['dureepro'];

		// Si c'est IMC idéal(IMC=poids/taille(m)^^2), 
		// petit traitement ici pour calculer
		// l'objectif de poids (++ ou --)
		// ...

		$this->load->helper('date');

		$dateDebut = $this->input->post('dateDebut');
		$data['dateDebut']=$dateDebut;

		$data['dateFin'] = date_add(date_create($dateDebut), date_interval_create_from_date_string($data['dureepro']." days"));

		$tab['entree_monnaie_total'] = 'entree_monnaie_total';
		$tab['sortie_monnaie_total'] = 'sortie_monnaie_total';
		$tab['monnaie_restante'] = 'monnaie_restante';

		// Porte-monnaie actuel
		$data['portemonnaie_actuel']=$this->Bdd->select_where('v_portemonnaie_actuel', 'id', $idUser, $tab);

		// La vue spécifique à load
		$data['content_view'] = 'choix_objectif/detail_programme_adequat';
		
		// Load du template
		$this->load->view('template', $data);
	}
}