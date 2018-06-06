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
	<script src="../module/421_surat/surat.js" type="text/javascript"></script>
</head>
<body>
	<br>
	<!-- Container datagrid dan form -->
	<div class="container-fluid">
		<div class="row-fluid clearfix">


			<!-- Form Place -->
			<div class="col-md-5 column">
			<fieldset>
				<legend>PRINT SURAT</legend>
					<div class="form-group">
						<label>Daftar Surat</label>
						<div class="selectContainer">
				            <select class="form-control" name="prodi" id="prodi">
				                <option value="">Pilih Surat</option>
				                <option value="Teknik Informatika">Surat Ijin Survey</option>
				                <option value="Teknik Mesin">Surat Permohonan Kerja Prakterk</option>
				            </select>
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
				<table id="tabelsurat" class="display" cellspacing="0">
					<thead>
						<tr>
							<th>Nama Mahasiswa</th>
							<th>Nim</th>
							<th>Prodi</th>
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