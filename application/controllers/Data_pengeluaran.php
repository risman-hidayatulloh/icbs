<?php

Class Data_pengeluaran extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    //cek user
    public function cekUser(){
        $id_level_user = $this->session->userdata('id_level_user');
        //cek session login
        if (!isset($id_level_user)) { 
            redirect('login');
        }//level santri
        else if ($this->session->id_level_user == 3){ 
            redirect('login');
        }
    }

    function index() {
        $this->cekUser();
        $this->template->load('template', 'users_sekolah/data_pengeluaran');
    }


}