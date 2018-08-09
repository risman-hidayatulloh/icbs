<?php

class Model_laporan_pembayaran extends CI_Model {

    public $table ="tbl_pembayaran";
    
    function SPP()
    {
        
    }
    
    function update() {
        $data = array(
            'nama_jenis_pembayaran'  => $this->input->post('nama_jenis_pembayaran', TRUE)
        );
        $id_jenis_pembayaran   = $this->input->post('id_jenis_pembayaran');
        $this->db->where('id_jenis_pembayaran',$id_jenis_pembayaran);
        $this->db->update($this->table,$data);
    }

}