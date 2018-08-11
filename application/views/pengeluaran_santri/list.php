<!DOCTYPE html>
<html>
<head>
	<title>Catatan Pengeluaran Santri</title>
</head>
<body>
<div class="col-md-12">
	<table>
		<tr>
			<td class="col-md-10">
				<label>Pilih bulan: </label>
			</td>
		</tr>
		<tr>
			<td class="col-md-10">
				<select id="pilih_bulan" class="form-control">
					<option value="juli2018" class="form-control">Juli 2018</option>
					<option value="agustus2018" class="form-control">Agustus 2018</option>
				</select>
			</td>
			<td class="col-md-2">
				<button id="btnPilihBulan" class="btn btn-primary">Terapkan</button>
			</td>
		</tr>
	</table>
	<br/>
	<br/>
	<br/>
	<br/>

	<div id='panel'></div>
	<script type="text/javascript">
		$(document).ready(function () {
			$(document).on('click', '#btnPilihBulan', function () {
				var val = $('#pilih_bulan').val();
				if (val==="juli2018") {
					$('#panel').html("<div class='panel panel-default'>"+
						"<div class='panel-heading'>"+
					        "<i class='fa fa-external-link-square'></i> Bulan: Juli 2018"+
					        "<div class='panel-tools'>"+
					            "<a class='btn btn-xs btn-link panel-collapse collapses' href='#'> </a>"+
					            "<a class='btn btn-xs btn-link panel-config' href='#panel-config' data-toggle='modal'> <i class='fa fa-wrench'></i> </a>"+
					            "<a class='btn btn-xs btn-link panel-refresh' href='#'> <i class='fa fa-refresh'></i> </a>"+
					            "<a class='btn btn-xs btn-link panel-expand' href='#'> <i class='fa fa-resize-full'></i> </a>"+
					            "<a class='btn btn-xs btn-link panel-close' href='#'> <i class='fa fa-times'></i> </a>"+
					        "</div>"+
					    "</div>"+
						"<div class='panel-body'>"+
					        "<table id='mytable2' class='table table-striped table-bordered table-hover table-full-width dataTable' cellspacing='0' width='100%'>"+
								"<thead>"+
									"<tr>"+
										"<th>No</th>"+
										"<th>Tanggal</th>"+
										"<th>Item</th>"+
										"<th>Jumlah Item</th>"+
										"<th>Jumlah Pembayaran</th>"+
									"</tr>"+
								"</thead>"+
								"<tbody>"+
									"<tr>"+
										"<td>1</td>"+
										"<td>28 Juli 2018</td>"+
										"<td>Buku Gambar A3</td>"+
										"<td>1</td>"+
										"<td>Rp 14.000,-</td>"+
									"</tr>"+
									"<tr>"+
										"<td>2</td>"+
										"<td>31 Juli 2018</td>"+
										"<td>Aqua 60ml</td>"+
										"<td>2</td>"+
										"<td>Rp 7.000,-</td>"+
									"</tr>"+
								"</tbody>"+
							"</table>"+
						"</div>"+
					"</div>");
				} else {
					$('#panel').html("<div class='panel panel-default'>"+
						"<div class='panel-heading'>"+
					        "<i class='fa fa-external-link-square'></i> Bulan: Agustus 2018"+
					        "<div class='panel-tools'>"+
					            "<a class='btn btn-xs btn-link panel-collapse collapses' href='#'> </a>"+
					            "<a class='btn btn-xs btn-link panel-config' href='#panel-config' data-toggle='modal'> <i class='fa fa-wrench'></i> </a>"+
					            "<a class='btn btn-xs btn-link panel-refresh' href='#'> <i class='fa fa-refresh'></i> </a>"+
					            "<a class='btn btn-xs btn-link panel-expand' href='#'> <i class='fa fa-resize-full'></i> </a>"+
					            "<a class='btn btn-xs btn-link panel-close' href='#'> <i class='fa fa-times'></i> </a>"+
					        "</div>"+
					    "</div>"+
						"<div class='panel-body'>"+
					        "<table id='mytable2' class='table table-striped table-bordered table-hover table-full-width dataTable' cellspacing='0' width='100%'>"+
								"<thead>"+
									"<tr>"+
										"<th>No</th>"+
										"<th>Tanggal</th>"+
										"<th>Item</th>"+
										"<th>Jumlah Item</th>"+
										"<th>Jumlah Pembayaran</th>"+
									"</tr>"+
								"</thead>"+
								"<tbody>"+
									"<tr>"+
										"<td>1</td>"+
										"<td>09 Agustus 2018/td>"+
										"<td>Buku Tulis Sinar Dunia 58 Lembar</td>"+
										"<td>2</td>"+
										"<td>Rp 12.000,-</td>"+
									"</tr>"+
									"<tr>"+
										"<td>2</td>"+
										"<td>10 Agustus 2018</td>"+
										"<td>Bolpen Snowman v5</td>"+
										"<td>3</td>"+
										"<td>Rp 12.000,-</td>"+
									"</tr>"+

									"<tr>"+
										"<td>3</td>"+
										"<td>12 Agustus 2018</td>"+
										"<td>Type-X</td>"+
										"<td>1</td>"+
										"<td>Rp 5.000,-</td>"+
									"</tr>"+
								"</tbody>"+
							"</table>"+
						"</div>"+
					"</div>");
				}
			});
		});

		/*function showOne(val) {
			
		}*/
	</script>
</div>
</body>

</html>