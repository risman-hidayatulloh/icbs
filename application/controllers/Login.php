<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_login');
        //$this->load->model('Model_guru');
    }

    function index() {
        $data['title'] = "Login - Informasi Akademik";
        $this->load->view('login/auth', $data);
    }

    function chek_login() {
        if (isset($_POST['submit'])) {
            // proses login disini

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $loginUser = $this->M_login->chekLogin($username, $password);
            //$loginGuru = $this->Model_guru->chekLogin($username, $password);
            if (!empty($loginUser)) {
                // sukses login user
                $this->session->set_userdata($loginUser);
                redirect('home');
            }
            // elseif (!empty($loginGuru)) {
            //     // login guru
            //     $session = array(
            //         'nama_lengkap'  =>  $loginGuru['nama_guru'],
            //         'id_level_user' =>  3,
            //         'nis' =>  $loginGuru['nuptk'],
            //         'id_guru'       =>  $loginGuru['id_guru']);
            //     $this->session->set_userdata($session);
            //     redirect('laporan_pembayaran/spp');
            // }
            else {
                // gagal login
                redirect('login');
            }
        } else {
            redirect('login');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}