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
	<script src="../module/212_penentuandosbing/dosbing.js" type="text/javascript"></script>
</head>
<body>
	<br>
	<!-- Container datagrid dan form -->
	<div class="container-fluid">
		<div class="row-fluid clearfix">


			<!-- Form Place -->
			<div class="col-md-4 column">
			<fieldset>
				<legend>Penentuan DosBing</legend>
			    <!-- Form CRUD Book Master -->
				<!-- <form class="form" id="frmanggota" action="" method="post"> -->
					<div class="form-group">

						<label>No Pengajuan</label>
						<input type="text" class="form-control" id="no_pengajuan" name="no_pengajuan" 
						required placeholder="No Pengajuan" readonly="true">

						<label>Judul</label>
						<input type="text" class="form-control" id="judul" name="judul" 
						required placeholder="Masukan Judul ...">

						<label>Nama Mahasiswa dan Instansi</label>
						<div class="row">
							<div class="col-md-6">
							<input type="text" class="form-control" id="nm_mhs" name="nm_mhs" 
								maxlength="15" required placeholder="Nama mahasiswa ...">
							</div>
							<div class="col-md-6">
							<input type="text" class="form-control" id="nm_instansi" name="nm_instansi" 
								maxlength="15" required placeholder="Nama instansi ...">
							</div>
						</div>

						<label>Dosen Pem. 1</label>
		                <div class="row">
		                    <div class="col-md-4">
		                        <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" readonly="" />		                    </div>
		                    <div class="col-md-6">
		                        <input type="text" class="form-control" name="nm_dosen" id="nm_dosen" placeholder="Nama Dosen" readonly="" />
		                    </div>
		                    <div class="col-md-1">
		                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dosenModal">
		                        	<span class="fa fa-search"></span>
		                        </button>
		                    </div>
		                </div>

		                <label>Dosen Pem. 2</label>
		                <br>*option
		                <div class="row">
		                    <div class="col-md-4">
		                        <input type="text" class="form-control" name="nik2" id="nik2" placeholder="Nik" readonly="" />		                    </div>
		                    <div class="col-md-6">
		                        <input type="text" class="form-control" name="nm_dosen2" id="nm_dosen2" placeholder="Nama Dosen" readonly="" />
		                    </div>
		                    <div class="col-md-1">
		                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dosenModal">
		                        	<span class="glyphicon glyphicon-search"></span>
		                        </button>
		                    </div>
		                </div>
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
				<table id="tabeldosbing" class="display" cellspacing="0">
					<thead>
						<tr>
							<th>No Pengajuan</th>
							<th>Judul</th>
							<th>Instansi</th>
							<th>Dos. Pem1</th>
							<th>Dos. Pem2</th>
							<th>Nim</th>
							<th>Nama</th>
							<th>Status</th>
						</tr>
					</thead>
	                <tbody></tbody>
				</table>
			</div><!-- /. End Datagrid Place -->

		</div>
	</div>	<!-- ./End Container datagrid dan form -->


	<!-- Modal Lookup Petugas -->
	<div class="modal fade" id="dosenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog" style="width:800px">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                	<span aria-hidden="true">&times;</span>
	                </button>
	                <h4 class="modal-title" id="myModalLabel">Lookup Dos. Bing.</h4>
	            </div>
	            <div class="modal-body">
	                <table id="lookup_dosbing" width="100%" class="table table-bordered table-hover table-striped">
	                    <thead>
	                        <tr>
	                            <th>Nik</th>
	                            <th>Nama Dosen</th>
	                        </tr>
	                    </thead>
	                    <tbody>
        				</tbody>
	                </table>  
	            </div>
	        </div>
	    </div>
	</div>


</body>
</html>
<?php } ?>