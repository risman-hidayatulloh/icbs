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
            $loginUserSekolah = $this->M_login->chekLoginSekolah($username, $password);
            $loginUserSantri = $this->M_login->chekLoginSantri($username, $password);
            
            // sukses login user sekolah            
            if (!empty($loginUserSekolah)) {
                $this->session->set_userdata($loginUserSekolah);
                redirect('home');
            }
            // login guru
            elseif (!empty($loginUserSantri)) {
                // session - database
                $session = array(
                    'nama_lengkap'  =>  $loginUserSantri['nama'],
                    'id_level_user' =>  3,
                    'foto' =>  $loginUserSantri['foto'],
                    'tahun_masuk' =>  $loginUserSantri['tahun_masuk'],
                    'username'       =>  $loginUserSantri['username']);
                $this->session->set_userdata($session);
                redirect('home');
            }
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