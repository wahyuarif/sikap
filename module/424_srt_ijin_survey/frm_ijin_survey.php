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

     <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-dt/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

	<!-- Call Custom Library -->
	<script src="../module/424_srt_ijin_survey/frm_ijin_survey.js" type="text/javascript"></script>
</head>
<body>
	<br>
	<!-- Container datagrid dan form -->
	<div class="container-fluid">
		<div class="row-fluid clearfix">


			<!-- Form Place -->
			<div class="col-md-4 column">
			<fieldset>
				<legend>SURAT IJIN SURVEY</legend>
			    <!-- Form CRUD Book Master -->
				<!-- <form class="form" id="frmanggota" action="" method="post"> -->
					<div class="form-group">
						<label>No. Surat</label>
						<input type="text" class="form-control" id="no_surat" name="no_surat" 
						required placeholder="No Surat ...">

						<!-- <label>No Pengajuan</label>
						<input type="text" class="form-control" id="no_pengajuan" name="no_pengajuan" 
						required placeholder="No Pengajuan ..." readonly="true"> -->

		            <!-- Imput Hiden, hanya untuk ngambil data -->
		        
								<input type="text" name="nim" id="nim">
								<input type="text" name="nm_mhs" id="nm_mhs">
								<input type="text" name="prodi" id="prodi">
								<input type="text" name="nm_instansi" id="nm_instansi">
								<input type="text" name="nm_dosen" id="nm_dosen">
								<input type="text" name="jabatan" id="jabatan">
		            <!-- end hiden type -->
								
							<!-- <label>Judul Kp</label>
							<input type="text" class="form-control" id="judul" name="judul" 
							required placeholder="Masukan judul ..."> -->
					
						<!-- <label>Nama Instansi dan Phone</label>
						<div class="row">
							<div class="col-md-8">
								<input type="text" class="form-control" id="nm_instansi" name="nm_instansi" 
								required placeholder="Nama instansi ...">
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="phone" name="phone" 
								required placeholder="Phone ...">
							</div>
						</div> -->

						<!-- <label>Alamat</label>
						<input type="text" class="form-control" id="alamat" name="alamat" 
						required placeholder="Masukan alamat..."> -->

					
					</div>
					<button type="submit" id="save" name="save" value="save" class="btn btn-sm btn-success fa fa-save" data-toggle="tooltip" title="Save"></button>
					<!-- <button type="button" id="update" name="update" class="btn btn-sm btn-warning">Update</button> -->
					<button type="button" id="delete" name="delete" class="btn btn-sm btn-danger fa fa-times-circle-o" data-toggle="tooltip" title="Delete"></button>
					<button type="button" id="cetak" class="btn btn-sm btn-warning fa fa-print" data-toggle="tooltip" title="Cetak"></button>
					<button type="reset" id="reset" class="btn btn-sm btn-primary fa fa-refresh" data-toggle="tooltip" title="Reset"></button>
				<!-- </form>/. End Form CRUD Book Master -->
			</fieldset>
			</div><!-- /. End Form Place -->

</body>
</html>
<?php } ?>