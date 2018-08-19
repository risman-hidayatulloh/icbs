<?php

Class Users_santri extends CI_Controller {

    function __construct() {
        parent::__construct();
        //chekAksesModule();
        $this->load->library('ssp');
        $this->load->model('M_users_santri');
    }

    //cek user
    public function cekUser(){
        $id_level_user = $this->session->userdata('id_level_user');
        //cek session login
        if (!isset($id_level_user)) { 
            redirect('login');
        }//level santri
        else if ($this->session->id_level_user == 3){ 
            redirect('login');
        }//level sekolah
        // else if ($this->session->id_level_user == 2){ 
        //     redirect('users_santri');
        // }//level admin
        // else if ($this->session->id_level_user == 1){ 
        //     redirect('users_santri');
        // }
    }
    
    function data() {
        $this->cekUser();
        // nama tabel
        $table = 'tbl_user_santri';
        // nama PK
        $primaryKey = 'username';
        // list field
        $columns = array(
            array('db' => 'foto',
                'dt' => 'foto',
                'formatter' => function( $d) {
                   if(empty($d)){
                       return "<img width='30px' src='".  base_url()."/uploads/foto_user_santri/user-siluet.jpg'>";
                   }else{
                       return "<img width='20px' src='".  base_url()."/uploads/foto_user_santri/".$d."'>";
                   }   
                }
            ),
            array('db' => 'username', 'dt' => 'username'),
            array('db' => 'nama', 'dt' => 'nama'),
            array('db' => 'tempat_lahir', 'dt' => 'tempat_lahir'),
            array('db' => 'tanggal_lahir', 'dt' => 'tanggal_lahir'),
            array('db' => 'tahun_masuk', 'dt' => 'tahun_masuk'),
            array(
                'db' => 'username',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('users_santri/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('users_santri/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
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
        $this->cekUser();
        $this->template->load('template', 'users_santri/list');
    }

    function add() {
        $this->cekUser();
        if (isset($_POST['submit'])) {
            $uploadFoto = $this->upload_foto_santri();
            $this->M_users_santri->save($uploadFoto);
            redirect('users_santri');
        } else {
            $this->template->load('template', 'users_santri/add');
        }
    }
    
    function edit(){
        $this->cekUser();
        if(isset($_POST['submit'])){
            $uploadFoto = $this->upload_foto_santri();
            $this->M_users_santri->update($uploadFoto);
            redirect('users_santri');
        }else{
            $username           = $this->uri->segment(3);
            $data['santri'] = $this->db->get_where('tbl_user_santri',array('username'=>$username))->row_array();
            $this->template->load('template', 'users_santri/edit',$data);
        }
    }
    
    function delete(){
        $this->cekUser();
        $username = $this->uri->segment(3);
        if(!empty($username)){
            // proses delete data
            $this->db->where('username',$username);
            $this->db->delete('tbl_user_santri');
        }
        redirect('users_santri');
    }
    
    function upload_foto_santri(){
        $config['upload_path']          = './uploads/foto_user_santri/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 10240; // imb
        $this->load->library('upload', $config);
            // proses upload
        $this->upload->do_upload('userfile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
    
    
    function santri_aktif(){
        $this->cekUser();
        $this->template->load('template', 'users_santri/santri_aktif');
    }
    
    function load_data_santri_by_rombel(){
        $rombel = $_GET['rombel'];
        
        echo "<table class='table table-bordered'>
            <tr><th width='90'>username</th><th>NAMA</th></tr>";
        $this->db->where('id_rombel',$rombel);
        $santri = $this->db->get('tbl_user_santri');
        foreach ($santri->result() as $row){
            echo "<tr><td>$row->username</td><td>$row->nama</td></tr>";
        }
        echo"</table>";
    }
    
    function data_by_rombel_excel(){
        $this->load->library('CPHP_excel');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'username');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'santri');
        
        $rombel = $_POST['rombel'];
        $this->db->where('id_rombel',$rombel);
        $santri = $this->db->get('tbl_user_santri');
        $no=2;
        foreach ($santri->result() as $row){
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$no, $row->username);
            $objPHPExcel->getActiveSheet()->setCellValue('B'.$no, $row->nama);
            $no++;
        }
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
        $objWriter->save("data-santri.xlsx");
        $this->load->helper('download');
        force_download('data-santri.xlsx', NULL);
    }

}