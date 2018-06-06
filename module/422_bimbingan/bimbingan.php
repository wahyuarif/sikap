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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Call JQuery Library -->
    <script src="../bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>

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
	<link rel="stylesheet" href="../lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-dt/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
	
	<!-- Call Custom Library -->
	<script src="../module/422_bimbingan/bimbingan.js" type="text/javascript"></script>
</head>
<body>
	<br>
	<!-- Container datagrid dan form -->
	<div class="container-fluid">
		<div class="row-fluid clearfix">


			<!-- Form Place -->
			<div class="col-md-5 column">
			<fieldset>
				<legend>INPUT BIMBINGAN</legend>
			    <!-- Form CRUD Book Master -->
				<!-- <form class="form" id="frmanggota" action="" method="post"> -->
				<div class="form-group">
				<label>No Pengajuan</label>
				<input type="text" class="form-control" id="no_pengajuan" name="no_pengajuan" required placeholder="Masukan No Pengajuan ..." readonly="true">

					<label>Kode Bimbingan dan Tanggal</label>
						<div class="row">
							<div class="col-md-8">
								<input type="text" class="form-control" id="kd_bimbingan" name="kd_bimbingan" required placeholder="Kode Bimbingan" readonly="true">
							</div>
							<div class="col-md-4">
								<div class='input-group date' id="datetimepicker1">
									<input type='text' class="form-control" id="tgl_bimbingan" size="25" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
											
				</div>

					<button type="submit" id="save" name="save" value="save" class="btn btn-sm btn-success fa fa-save" data-toggle="tooltip" title="Save"></button>
					<button type="button" id="update" name="update" class="btn btn-sm btn-warning fa fa-check-circle-o" data-toggle="tooltip" title="Update"></button>
					<button type="button" id="delete" name="delete" class="btn btn-sm btn-danger fa fa-times-circle-o" data-toggle="tooltip" title="Delete"></button>	
					<button type="reset" id="reset" class="btn btn-sm btn-primary fa fa-refresh" data-toggle="tooltip" title="Reset"></button>						
				<!-- </form>/. End Form CRUD Book Master -->
				
			</fieldset>
			</div><!-- /. End Form Place -->

			<!-- Datagrid Place -->
			<div class="col-md-7 column">
				<table id="tabelbimbingan" class="display" cellspacing="0">
					<thead>
						<tr>
							<th>No. Pengajuan</th>
							<th>Kode Bimbingan</th>
							<th>Tanggal</th>
							<th>Bahasan</th>
							
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

