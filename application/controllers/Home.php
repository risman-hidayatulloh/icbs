<?php

Class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        //chekAksesModule();
        //$this->load->library('ssp');
    }

    //cek user
    public function cekUser(){
        $id_level_user = $this->session->userdata('id_level_user');
        //cek session login
        if (!isset($id_level_user)) { 
            redirect('login');
        }
    }

    function index() {
        $this->cekUser();
        //login awal santri
        if($this->session->id_level_user == 3){
            $this->template->load('template', 'dashboard_santri');
        }//login selain santri
        else{  
            $this->template->load('template', 'dashboard_sekolah');
        }

    }

}