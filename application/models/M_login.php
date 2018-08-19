<?php
class M_login extends CI_Model{
    
    function chekLoginSekolah($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        //$this->db->where('password',$password);
        $user = $this->db->get('tbl_user_sekolah')->row_array();
        return $user;
    }

    function chekLoginSantri($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        //$this->db->where('password',$password);
        $user = $this->db->get('tbl_user_santri')->row_array();
        return $user;
    }
    
}
