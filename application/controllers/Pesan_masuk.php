<?php

Class Pesan_masuk extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    //cek user
    public function cekUser(){
        $id_level_user = $this->session->userdata('id_level_user');
        //cek session login
        if (!isset($id_level_user)) { 
            redirect('login');
        }//level admin
        else if ($this->session->id_level_user == 1){ 
            redirect('login');
        }//level sekolah
        else if ($this->session->id_level_user == 2){ 
            redirect('login');
        }
    }

    function index() {
        $this->cekUser();
        $this->template->load('template', 'users_santri/pesan_masuk');
    }


}