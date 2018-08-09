<?php

Class laporan_pembayaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_laporan_pembayaran');
    }

    function data() {
        // nama tabel
        $table = 'tbl_pembayaran';
        // nama PK
        $primaryKey = 'id_pembayaran';
        // list field
        $columns = array(
            array('db' => 'nim', 'dt' => 'nim'),
            array('db' => 'nama', 'dt' => 'nama'),
            array('db' => 'tempat_lahir', 'dt' => 'tempat_lahir'),
            array('db' => 'tanggal_lahir', 'dt' => 'tanggal_lahir')
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );

        echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }

    function spp() {
        $data = $this->Model_laporan_pembayaran->SPP();

        $this->template->load('template','laporan_pembayaran/spp');
    }
}