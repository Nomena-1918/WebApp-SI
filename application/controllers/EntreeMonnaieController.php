<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntreeMonnaieController extends CI_Controller {
    
    public function entreeMonnaie(){

        $this->load->view('login/entreeMonnaie');
    }

    // public function getEtatMonnaie(){

    //     $this->db->select('idCode');
    //     $this->db->from('entreeMonnaie');
    //     $this->db->where('etat', '0');
    //     $query = $this->db->get();
    //     echo  var_dump($query->result_array()) ;
      
    // }

    public function getEtatMonnaie(){
        $this->load->model('Bdd');
        $tab = array();
        $tab['monnaies'] = $this->Bdd->select('monnaie');
        $this->load->view('login/entreeMonnaie',$tab);

    }
}