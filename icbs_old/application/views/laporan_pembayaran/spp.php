<div class="col-md-12">

    <div style="margin-bottom: 10px;"></div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Data Pembayaran SPP <?php echo $_SESSION['nama_lengkap']; ?>
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable2" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>BULAN</th>
                        <th>TANGGAL BAYAR</th>
                        <th>JUMLAH</th>
                        <th>KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $count = 1;
                    foreach ($spp as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php 
                            if($count%2==0) { echo "Agustus";
                            } else { echo "Juli"; } ?></td>
                        <td><?php echo $value['tanggal']; ?></td>
                        <td><?php echo $value['jumlah']; ?></td>
                        <td><?php echo $value['keterangan']; ?></td>
                    </tr>
                <?php
                    $count++;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Upload</h4>
      </div>
      <div class="modal-body">
          <p>Silahkan pilih file excel hasil export data siswa dari aplikasi dapodik.</p>
          <table class="table table-bordered">
              <tr><td width="100">Pilih File</td><td><input type="file" name="file"></td></tr>
          </table>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-sm">Upload Data</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>