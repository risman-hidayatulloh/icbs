<?php

Class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        //chekAksesModule();
        //$this->load->library('ssp');
    }

    function index() {
        $this->template->load('template', 'dashboard');
    }

    public function viewDataBayar(){
        //$this->cekUser();
        //load model
        $this->load->model('Model_home');
        $data['data'] = $this->Model_home->getAllPembayaran()->result();
        //$this->index();
        $this->template->load('template', 'dashboard',$data);
        
    }

    public function filterDataBayar(){
        //$this->cekUser();
        $filter = $this->input->post('berdasarkan');
        if($filter == "Pembayaran"){
            $this->viewDataBayar();
        }else{
            if($filter == 'Tanggal'){
                $filter = 'DAY';
            }else if($filter == 'Bulan'){
                $filter = 'MONTH';
            }else{
                $filter = 'YEAR';
            }
            $this->load->model('Model_home');
            $data['data'] = $this->Model_home->getFilterPembayaran($filter)->result();
            //$this->index();
            //$this->load->view('admin/datapembayaranview',$data);
        }
    }

}