    <div class="container">    

        <div class="space12">
            <div class="btn-group btn-group-justified">
                <a class="btn btn-teal" href="javascript:;">
                    <i class="clip-user-5"></i> </br>
                       <?php   //$jumlah_users_sekolah=$this->db->get('tbl_user_sekolah')->num_rows();
                                //echo $jumlah_users_sekolah;
                            $this->db->select('*');
                            $this->db->where('id_level_user = 1');
                            $query = $this->db->get('tbl_user_sekolah');
                            $num = $query->num_rows();
                            echo $num;
                        ?>
                    </br> Admin
                </a>
                <a class="btn btn-blue active" href="javascript:;">
                    <i class="clip-user-5"></i> </br>
                       <?php   //$jumlah_users_sekolah=$this->db->get('tbl_user_sekolah')->num_rows();
                                //echo $jumlah_users_sekolah;
                            $this->db->select('*');
                            $this->db->where('id_level_user = 2');
                            $query = $this->db->get('tbl_user_sekolah');
                            $num = $query->num_rows();
                            echo $num;
                        ?>
                    </br> Karyawan 
                </a>
                <a class="btn btn-teal" href="javascript:;">
                    <i class="clip-user-3"></i> </br>
                    0
                    </br> Santri
                </a>
            </div>
        </div>
        <div class="space12">
            <div class="btn-group btn-group-justified">
                <a class="btn btn-teal" href="javascript:;">
                    <i class="fa fa-money"></i> </br>
                    Pemasukan
                    </br> Rp. 0 ,-
                </a>
                <a class="btn btn-blue active" href="javascript:;">
                    <i class="fa fa-money"></i> </br>
                    pengeluaran
                    </br> Rp. 0 ,-
                </a>
                <!-- <a class="btn btn-teal" href="javascript:;">
                    <i class="clip-user-3"></i> </br>
                    0
                    </br> Santri
                </a> -->
            </div>
        </div>                       

        <!-- start: PAGE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- start: TOGGLING SERIES PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Laporan Keuangan
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-container">
                            <div id="placeholder2" class="flot-placeholder"></div>
                            <p id="choices"></p>
                        </div>
                    </div>
                </div>
                <!-- end: TOGGLING SERIES PANEL -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- start: INTERACTIVITY PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Interactivity
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-container">
                            <div id="placeholder3" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
                <!-- end: INTERACTIVITY PANEL -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- start: REAL-TIME PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Real-time
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-small-container">
                            <div id="placeholder4" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
                <!-- end: REAL-TIME PANEL -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- start: CATEGORIES PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Categories
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-small-container">
                            <div id="placeholder5" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
                <!-- end: CATEGORIES PANEL -->
            </div>
            <div class="col-md-6">
                <!-- start: ANNOTATIONS PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Annotations
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-small-container">
                            <div id="placeholder6" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
                <!-- end: ANNOTATIONS PANEL -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- start: DEFAULT PIE PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Default Pie
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-small-container">
                            <div id="placeholder7" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
                <!-- end: DEFAULT PIE PANEL -->
            </div>
            <div class="col-md-6">
                <!-- start: LABEL FORMATTER PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Label Formatter
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-small-container">
                            <div id="placeholder8" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
                <!-- end: LABEL FORMATTER PANEL -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- start: LABEL STYLE PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Label Style
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-small-container">
                            <div id="placeholder9" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
                <!-- end: LABEL STYLE PANEL -->
            </div>
            <div class="col-md-6">
                <!-- start: RECTANGULAR PIE PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Rectangular Pie
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-small-container">
                            <div id="placeholder10" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
                <!-- end: RECTANGULAR PIE PANEL -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- start: TILTED PIE PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Tilted Pie
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-small-container">
                            <div id="placeholder11" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
                <!-- end: TILTED PIE PANEL -->
            </div>
            <div class="col-md-6">
                <!-- start: INTERACTIVITY PANEL -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Interactivity
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                            </a>
                            <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#">
                                <i class="fa fa-resize-full"></i>
                            </a>
                            <a class="btn btn-xs btn-link panel-close" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-small-container">
                            <div id="placeholder12" class="flot-placeholder"></div>
                        </div>
                    </div>
                </div>
                <!-- end: INTERACTIVITY PANEL -->
            </div>
        </div>
        <!-- end: PAGE CONTENT-->
    </div> 

    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
        <script src="../../bower_components/respond/dest/respond.min.js"></script>
        <script src="../../bower_components/Flot/excanvas.min.js"></script>
        <script src="../../bower_components/jquery-1.x/dist/jquery.min.js"></script>
        <![endif]-->
    <!--[if gte IE 9]><!-->
    <!-- build:script resurces.jQuery --><!-- /build -->
    <!--<![endif]-->
    <!-- build:script bundle --><!-- /build -->
    <!-- build:script main --><!-- /build -->
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

    <!-- grafik -->
    <script src="<?php echo base_url(); ?>/assets/js/charts.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

    <script>
        jQuery(document).ready(function () {
            //Main.init();
            Charts.init();
        });
    </script>