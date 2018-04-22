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

    <!-- Call DataTables Library -->
    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

     <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-dt/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

	<!-- Call Custom Library -->
	<script src="../module/424_srt_ijin_survey/srt_ijin_survey.js" type="text/javascript"></script>
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
		        
								<input type="hidden" name="nim" id="nim">
								<input type="hidden" name="nm_mhs" id="nm_mhs">
								<input type="hidden" name="prodi" id="prodi">
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
					<button type="submit" id="save" name="save" value="save" class="btn btn-sm btn-success">Save</button>
					<!-- <button type="button" id="update" name="update" class="btn btn-sm btn-warning">Update</button> -->
					<button type="button" id="delete" name="delete" class="btn btn-sm btn-danger">Delete</button>

					<button type="button" id="cetak" class="btn btn-sm btn-warning">Cetak</button>

					<button type="reset" id="reset" class="btn btn-sm btn-primary">Reset</button>					
				<!-- </form>/. End Form CRUD Book Master -->
			</fieldset>
			</div><!-- /. End Form Place -->

</body>
</html>
<?php } ?>