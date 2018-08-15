<!DOCTYPE html>
<html>
<head>
	<title>Laporan Kehadiran Santri</title>
</head>
<body>
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
	        <i class="fa fa-external-link-square"></i> Data Kehadiran <?php echo $_SESSION['nama_lengkap']; ?>
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
						<th>No</th>
						<th>Tahun Ajaran</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>2016/2017</td>
						<td><a href="">Lihat Detail</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>2017/2018</td>
						<td><a href="">Lihat Detail</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>