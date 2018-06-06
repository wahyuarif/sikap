<?php
session_start();
  if($_SESSION['status']!='LOGIN'){
    header("location:../index.php");
  } else {
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="../lib/css/custom.css">
	<!-- Call JQuery Library -->
    <script src="../bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>

    <!-- Call DataTables Library -->
    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

     <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-dt/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

	<!-- Call Custom Library -->
	<script src="../module/131_file_laporan/flaporan.js" type="text/javascript"></script>
</head>
<body>
	<br>
	<!-- Container datagrid dan form -->
	<div class="container-fluid">
		<div class="row-fluid clearfix">

			<!-- Datagrid Place -->
			<div class="col-md-12 column">
				<table id="tabelmhs" class="display" cellspacing="0">
					<thead>
						<tr>
							<th>No. Pengajuan</th>
							<th>Nim</th>
							<th>Nama</th>
							<th>Prodi</th>
							<th>Judul</th>
						</tr>
					</thead>
	                <tbody></tbody>
				</table>
			</div><!-- /. End Datagrid Place -->

		</div>
	</div>	<!-- ./End Container datagrid dan form -->
</body>
</html>
<?php } ?>