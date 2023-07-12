<?php
require_once(APPPATH . 'controllers/Mysession.php');    

class Sport extends CI_Controller{
    public function load_sport() {
        $this->load->view('sport/sport');
    }

    public function create_sport(){
        $this->load->model('Bdd');
        $sport_name = $this->input->get('sport');
           
        $data = array();
        $data['nom'] = $sport_name;
        $this->Bdd->insert('sport',$data);
        $this->load->view('allsport/table_advanced');
    }

    public function get_all_sport() {
        $this->load->model('Bdd');
        $sports['sports'] = $this->Bdd->select("sport");
        $this->load->view('sport/table_advanced',$sports);
    }

    public function get_sportBy_id($id) {
        $this->load->model('Bdd');
        $tab = array();
        $tab['id'] = "id";
        $tab['nom'] = "nom";
        $sports['sport'] = $this->Bdd->select_where("sport","id",$id,$tab);
        // var_dump($sports['sport']->result_array());
        $this->load->view('sport/sport',$sports);
    }

    public function update_sport($id) {
        $tab = array();
        $tab['nom'] = $this->input->get('sport');

        $this->load->model('Bdd');
        $this->Bdd->update('sport',"id",$id,$tab);
        $this->get_all_sport();
    }
}