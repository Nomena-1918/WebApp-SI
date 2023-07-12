<?php
require_once(APPPATH . 'controllers/Mysession.php');    

class Plat extends CI_Controller{
    public function receive_plat() {
        $plat = $this->input->get('plat');
        $prix = $this->input->get('prix');
        $photo = $this->input->get('photo');
        $calorie = $this->input->get('calorie');

        $data_plat = array();
        $data_plat['nom'] = $plat;
        $data_plat['prix'] = $prix;
        $data_plat['picture'] = $photo;
        $data_plat['calorie'] = $calorie;
        
        $this->load->model('Bdd');
        $this->Bdd->insert('plat',$data_plat);
        $this->get_all_plat();

    }

    public function create_plat(){ $this->load->view('plat/plat'); }

    public function get_all_plat() {
        $this->load->model('Bdd');
        $plats['plats'] = $this->Bdd->select("plat");
        $this->load->view('allplat/table_advanced',$plats);
    }

    public function get_platBy_id($id) {
        $this->load->model('Bdd');
        $tab = array();
        $tab['id'] = "id";
        $tab['nom'] = "nom";
        $tab['picture'] = "picture";
        $tab['prix'] = "prix";
        $tab['calorie'] = "calorie";
        $plats['plat'] = $this->Bdd->select_where("plat","id",$id,$tab);
        // var_dump($plats['plat']->result_array());
        $this->load->view('plat/plat',$plats);
    }

    public function update_plat($id) {
        $tab = array();
        $tab['nom'] = $this->input->get('plat');
        $tab['prix'] = $this->input->get('prix');
        $tab['picture'] = $this->input->get('photo');
        $tab['calorie'] = $this->input->get('calorie');

        $this->load->model('Bdd');
        $this->Bdd->update('plat',"id",$id,$tab);
        $this->get_all_plat();
    }

}