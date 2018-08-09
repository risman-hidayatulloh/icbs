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
        // $primaryKey = ;
        // list field
        $columns = array(
            array('db' => 'tanggal', 'dt' => 'tanggal'),
            array('db' => 'jumlah', 'dt' => 'jumlah'),
            array('db' => 'keterangan', 'dt' => 'keterangan')
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
        $data['spp'] = $this->Model_laporan_pembayaran->SPP()->result_array();

        $this->template->load('template','laporan_pembayaran/spp', $data);
    }
}