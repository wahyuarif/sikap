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
	<script src="../module/111_mahasiswa/mahasiswa.js" type="text/javascript"></script>
</head>
<body>
	<br>
	<!-- Container datagrid dan form -->
	<div class="container-fluid">
		<div class="row-fluid clearfix">


			<!-- Form Place -->
			<div class="col-md-5 column">
			<fieldset>
				<legend>DATA MAHASISWA</legend>
			    <!-- Form CRUD Book Master -->
				<form class="form" id="frmanggota" action="" method="post">
					<div class="form-group">
					<label>Nim dan Prodi</label>
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="form-control" id="nim" name="nim" 
								maxlength="15"  placeholder="Nim...">
							</div>
							<div class="col-md-6">
							<div class="selectContainer">
				            <select class="form-control" name="prodi" id="prodi">
				                <option value="">Pilih Prodi</option>
				                <option value="Teknik Informatika">Teknik Informatika</option>
				                <option value="Teknik Mesin">Teknik Mesin</option>
				                <option value="Teknik Elektro">Teknik Elektro</option>
								<option value="Arsitektur">Arsitektur</option>
				                <option value="Manajemen Informatika">Manajemen Informatika</option>
				            </select>
				        	</div>
							</div>
						</div>

						<label>Nama</label>
						<input type="text" class="form-control" id="nm_mhs" name="nm_mhs" 
						 placeholder="Masukan Nama" required>

						<label>No Hp</label>
						<input type="text" class="form-control" id="no_hp" name="no_hp" 
						required placeholder="Masukan No hp">

						<label>Username</label>
						<input type="text" class="form-control" id="username" name="username" 
						required placeholder="Masukan Username">

						<label>Password</label>
						<div class="row">
							<div class="col-md-8">
								<input type="password" class="form-control" id="password" name="password" 
								required placeholder="Masukan Password">
							</div>
							
							<div class="col-md-4">
								<select class="form-control" name="status" id="status">
								<option value="">Status</option>
				                <option value="Aktif">Aktif</option>
				                <option value="Tidak Aktif">Tidak Aktif</option>
				            </select>
							</div>
						</div>
				
					</div>
					<button type="submit" id="save" name="save" value="save" class="btn btn-sm btn-success">Save</button>
					<button type="button" id="update" name="update" class="btn btn-sm btn-warning">Update</button>
					<button type="button" id="delete" name="delete" class="btn btn-sm btn-danger">Delete</button>	
					<button type="reset" id="reset" class="btn btn-sm btn-primary">Reset</button>						
				</form>
			</fieldset>
			</div><!-- /. End Form Place -->

			<!-- Datagrid Place -->
			<div class="col-md-7 column">
				<table id="tabelmhs" class="display" cellspacing="0">
					<thead>
						<tr>
							<th>Nim</th>
							<th>Nama Mahasiswa</th>
							<th>Prodi</th>
							<th>Phone</th>
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