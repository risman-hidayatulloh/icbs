<?php

class Model_laporan_pembayaran extends CI_Model {

    public $table ="tbl_pembayaran";
    
    function SPP()
    {
        $nis = $_SESSION['nis'];
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('nim', $nis);
        $this->db->where('id_jenis_pembayaran', 3);
        $this->db->order_by('tanggal', 'ASC');

        return $this->db->get();
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