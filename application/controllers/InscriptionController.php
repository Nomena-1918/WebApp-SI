<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InscriptionController extends CI_Controller {
    public function Register(){
    $this->load->view('login/register');
}

    public function Inscription(){
        $this->load->model('Bdd');
        $name = $this->input->post('name');
        $mail = $this->input->post('email');
        $mdp = $this->input->post('password');

        $donnees = array();
        $donnee['nomUsers'] = $name;
        $donnee['email'] = $mail;
        $donnee['mdp'] = $mdp;

        $this->Bdd->insert('user',$donnee);
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