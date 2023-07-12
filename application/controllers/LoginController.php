<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {


public function Login(){
    $this->load->view('login/login');
}

  public function getUser($tab){
    $this->load->model('Bdd');
    $mail = $this->input->post('email');
    $mdp = $this->input->post('password');
 
    $data['users'] = $this->Bdd->select('utilisateur');
    $check = array();
    $check['tocheck'] = false;
    $check['message'] = "Veuillez verifier vos infos";
    
    foreach($data['users']->result_array() as $row) { 
      if($tab['email']==$row['email'] && $tab['mdp']==$row['mdp']){
        $check['tocheck'] = true;
        $idUser = $row['id'];
       // $this->load->view('');
      }

    }
    if($check['tocheck'] == false){
      $this->load->view('login/login', $check);
      
    }
    else {
      $this->session->set_userdata('idUser', $idUser);

      // Sélection base types objectif
      $this->load->model('Bdd');
      $data['result']=$this->Bdd->select('typeobjectif');

      // La vue spécifique à load
      $data['content_view'] = 'choix_objectif/form_choix_objectif'; 
          
      // Load du template
      $this->load->view('template', $data);

    }

  }

  public function isAdmin(){
    $checkA = $this->input->post('checkAdmin');
    $tab = array();
    $tab['email'] = $this->input->post('email');
    $tab['mdp'] = $this->input->post('password');

       if ($checkA != null) {
        $this->getAdmin($tab);
       }else {
        $this->getUser($tab);
       }
       
  }
  
  public function getAdmin($tab){
    $this->load->model('Bdd');

    $data['admins'] = $this->Bdd->select('profiladmin');
    $check = array();
    $check['tocheck'] = false;
    $check['message'] = "Veuillez verifier vos infos";
    foreach($data['admins']->result_array() as $row){ 
      if($tab['email']==$row['email'] && $tab['mdp']==$row['mdp']){
        $check['tocheck'] = true;
        $this->load->view('plat/get_all_plat');
      }

    }
    if($check['tocheck'] == false){
      $this->load->view('login/login', $check);
      
    }

  }



}