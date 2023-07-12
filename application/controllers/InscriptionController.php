<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InscriptionController extends CI_Controller {
    public function Register(){
    $this->load->view('login/register');
}

    public function Inscription(){
        $donnee = array();
        $donnee['name'] = $this->input->post('name');
        $donnee['email'] = $this->input->post('email');
        $donnee['mdp'] = $this->input->post('password');
        $donnee['genre'] = $this->input->post('genre');
        $donnee['dtn'] = $this->input->post('dtn');

        $this->load->model('Bdd');
        $this->Bdd->insert('utilisateur',$donnee);
    }

    public function Inscription_Admin(){
        $this->load->model('Bdd');
        $name = $this->input->post('name');
        $mail = $this->input->post('email');
        $mdp = $this->input->post('password');

        $donnees = array();
        $donnee['nom'] = $name;
        $donnee['email'] = $mail;
        $donnee['mdp'] = $mdp;

        $this->Bdd->insert('profilAdmin',$donnee);
    }


}