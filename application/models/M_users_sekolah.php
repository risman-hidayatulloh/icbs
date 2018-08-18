<?php

class M_users_sekolah extends CI_Model {

    public $table ="tbl_user_sekolah";
    
    function save($foto) {
        $data = array(
            'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
            'username'        => $this->input->post('username', TRUE),
            'password'        => md5($this->input->post('password', TRUE)),
            'id_level_user'   => $this->input->post('id_level_user', TRUE),
            'foto'            => $foto
        );
        $this->db->insert($this->table,$data);
    }
    
    function update($foto) {
        if(empty($foto)){
            // jangan update field foto
        $data = array(
            'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
            'username'        => $this->input->post('username', TRUE),
            'password'        => md5($this->input->post('password', TRUE)),
            'id_level_user'   => $this->input->post('id_level_user', TRUE)
        );
        }else{
            // update field foto
        $data = array(
            'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
            'username'        => $this->input->post('username', TRUE),
            'password'        => md5($this->input->post('password', TRUE)),
            'id_level_user'   => $this->input->post('id_level_user', TRUE),
            'foto'            => $foto
        );
        }
        $id_user_sekolah   = $this->input->post('id_user_sekolah');
        $this->db->where('id_user_sekolah',$id_user_sekolah);
        $this->db->update($this->table,$data);
    }

}