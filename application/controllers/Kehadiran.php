<?php

Class Kehadiran extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->template->load('template','kehadiran/kehadiran');
    }
}