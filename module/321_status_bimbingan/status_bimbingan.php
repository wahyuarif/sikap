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
	<style type="text/css">
		.form-control{
			padding-bottom: auto;
			margin-bottom: 5px;
		}

		fieldset 
			{
				border: 1px solid #ddd !important;
				margin: 0;
				xmin-width: 0;
				padding: 10px;       
				position: relative;
				border-radius:4px;
				background-color:#f5f5f5;
				padding-left:10px!important;
			}	
			
		legend
			{
				font-size:14px;
				font-weight:bold;
				margin-bottom: 0px; 
				width: 35%; 
				border: 1px solid #ddd;
				border-radius: 4px; 
				padding: 5px 5px 5px 10px; 
				background-color: #ffffff;
			}
	</style>
	<!-- Call JQuery Library -->
    <script src="../bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Call DataTables Library -->
    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script src="../bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script> 
    <script src="../bower_components/moment/min/moment.min.js" type="text/javascript"></script>   
    <script src="../bower_components/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
    <!-- <script src="../bower_components/wnumb/wNumb.js" type="text/javascript"></script> -->
    <!-- <script src="../bower_components/Jquery-Price-Format/jquery.priceformat.min.js" type="text/javascript"></script> -->
    <!-- <script src="../bower_components/PrintArea/demo/jquery.PrintArea.js" type="text/javascript"></script> -->


	 <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-dt/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
	
	<!-- Call Custom Library -->
	<script src="../module/321_status_bimbingan/status_bimbingan.js" type="text/javascript"></script>
</head>
<body>
	<br>
	<!-- Container datagrid dan form -->
	<div class="container-fluid">
		<div class="row-fluid clearfix">


			<!-- Form Place -->
			<div class="col-md-4 column">
			<fieldset>
				<legend>BIMBINGAN</legend>
			    <!-- Form CRUD Book Master -->
				<!-- <form class="form" id="frmanggota" action="" method="post"> -->
					<div class="form-group">
					<label>No Pengajuan</label>
						<input type="text" class="form-control" id="no_pengajuan" name="no_pengajuan" 
						required placeholder="Masukan No Pengajuan ..." readonly="true">

					<label>Kode Bimbingan dan Tanggal</label>
						<div class="row">
							<div class="col-md-8">
								<input type="text" class="form-control" id="kd_bimbingan" name="kd_bimbingan" 
								required placeholder="Masukan Kode ..." readonly="true">
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="tgl_bimbingan" name="tgl_bimbingan" 
								required placeholder="Tanggal Bimbingan" readonly="true">
							</div>
						</div>

						<label>Bahasan</label>
						<input type="text" class="form-control" id="bahasan" name="bahasan" 
						required placeholder="Masukan bahasan ...">
											
					</div>
					<!-- <button type="submit" id="save" name="save" value="save" class="btn btn-sm btn-success">Save</button> -->
					<button type="button" id="update" name="update" class="btn btn-sm btn-warning fa fa-check-circle-o" data-toggle="tooltip" title="Update"></button>
					<button type="button" id="delete" name="delete" class="btn btn-sm btn-danger fa fa-times-circle-o" data-toggle="tooltip" title="Delete"></button>	
					<button type="reset" id="reset" class="btn btn-sm btn-primary fa fa-refresh" data-toggle="tooltip" title="Reset"></button>						
				<!-- </form>/. End Form CRUD Book Master -->
			</fieldset>
			</div><!-- /. End Form Place -->

			<!-- Datagrid Place -->
			<div class="col-md-8 column">
				<table id="tabelStatusBimbingan" class="display" cellspacing="0">
					<thead>
						<tr>
							<th>No. Pengajuan</th>
							<th>Kode Bimbingan</th>
							<th>Tanggal</th>
							<th>Bahasan</th>
							<th>Nim</th>
							<th>Nama</th>

							
							<!-- <th></th> -->
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