<?php

Class santri extends CI_Controller {

    function __construct() {
        parent::__construct();
        //chekAksesModule();
        $this->load->library('ssp');
        $this->load->model('M_santri');
    }

    
    
    function data() {
   
        // nama tabel
        $table = 'tbl_santri';
        // nama PK
        $primaryKey = 'nim';
        // list field
        $columns = array(
            array('db' => 'foto',
                'dt' => 'foto',
                'formatter' => function( $d) {
                   if(empty($d)){
                       return "<img width='30px' src='".  base_url()."/uploads/user-siluet.jpg'>";
                   }else{
                       return "<img width='20px' src='".  base_url()."/uploads/".$d."'>";
                   }   
                }
            ),
            array('db' => 'nim', 'dt' => 'nim'),
            array('db' => 'nama', 'dt' => 'nama'),
            array('db' => 'tempat_lahir', 'dt' => 'tempat_lahir'),
            array('db' => 'tanggal_lahir', 'dt' => 'tanggal_lahir'),
            array(
                'db' => 'nim',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('santri/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('santri/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
                }
            )
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

    function index() {
        $this->template->load('template', 'santri/list');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $uploadFoto = $this->upload_foto_santri();
            $this->M_santri->save($uploadFoto);
            redirect('santri');
        } else {
            $this->template->load('template', 'santri/add');
        }
    }
    
    function edit(){
        if(isset($_POST['submit'])){
            $uploadFoto = $this->upload_foto_santri();
            $this->M_santri->update($uploadFoto);
            redirect('santri');
        }else{
            $nim           = $this->uri->segment(3);
            $data['santri'] = $this->db->get_where('tbl_santri',array('nim'=>$nim))->row_array();
            $this->template->load('template', 'santri/edit',$data);
        }
    }
    
    function delete(){
        $nim = $this->uri->segment(3);
        if(!empty($nim)){
            // proses delete data
            $this->db->where('nim',$nim);
            $this->db->delete('tbl_santri');
        }
        redirect('santri');
    }
    
    function upload_foto_santri(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024; // imb
        $this->load->library('upload', $config);
            // proses upload
        $this->upload->do_upload('userfile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
    
    
    function santri_aktif(){
        $this->template->load('template', 'santri/santri_aktif');
    }
    
    function load_data_santri_by_rombel(){
        $rombel = $_GET['rombel'];
        
        echo "<table class='table table-bordered'>
            <tr><th width='90'>NIM</th><th>NAMA</th></tr>";
        $this->db->where('id_rombel',$rombel);
        $santri = $this->db->get('tbl_santri');
        foreach ($santri->result() as $row){
            echo "<tr><td>$row->nim</td><td>$row->nama</td></tr>";
        }
        echo"</table>";
    }
    
    function data_by_rombel_excel(){
        $this->load->library('CPHP_excel');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'NIM');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'santri');
        
        $rombel = $_POST['rombel'];
        $this->db->where('id_rombel',$rombel);
        $santri = $this->db->get('tbl_santri');
        $no=2;
        foreach ($santri->result() as $row){
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$no, $row->nim);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$no, $row->nama);
            $no++;
        }
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
        $objWriter->save("data-santri.xlsx");
        $this->load->helper('download');
        force_download('data-santri.xlsx', NULL);
    }

}