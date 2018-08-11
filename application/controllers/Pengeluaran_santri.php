<?php

Class Pengeluaran_santri extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->template->load('template','pengeluaran_santri/list');
    }
}