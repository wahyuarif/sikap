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
	<link rel="stylesheet" href="../lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- Call JQuery Library -->
    <script src="../bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>

    <!-- Call DataTables Library -->
    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

     <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-dt/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

	<!-- Call Custom Library -->
	<script src="../module/421_pengajuan_kp/pengajuan_kp.js" type="text/javascript"></script>
</head>
<body>
	<br>
	<!-- Container datagrid dan form -->
	<div class="container-fluid">
		<div class="row-fluid clearfix">


			<!-- Form Place -->
			<div class="col-md-4 column">
			<fieldset>
				<legend>PENGAJUAN TEMPAT KP/TA</legend>
			    <!-- Form CRUD Book Master -->
				<!-- <form class="form" id="frmanggota" action="" method="post"> -->
					<div class="form-group">

						<label>No Pengajuan</label>
						<input type="text" class="form-control" id="no_pengajuan" name="no_pengajuan" 
						required placeholder="No Pengajuan ..." readonly="true">

		            <!-- Imput Hiden, hanya untuk ngambil data -->
		        
								<input type="hidden" name="nim" id="nim">
								<input type="hidden" name="nm_mhs" id="nm_mhs">
								<input type="hidden" name="prodi" id="prodi">
		            <!-- end hiden type -->
								
							<label>Judul</label>
							<input type="text" class="form-control" id="judul" name="judul" 
							 placeholder="Masukan judul(KP/TA)">
					
						<label>Nama Instansi dan Phone</label>
						<div class="row">
							<div class="col-md-8">
								<input type="text" class="form-control" id="nm_instansi" name="nm_instansi" 
								required placeholder="Nama instansi ...">
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="phone" name="phone" 
								required placeholder="Phone ...">
							</div>
						</div>

						<label>Alamat</label>
						<input type="text" class="form-control" id="alamat" name="alamat" 
						required placeholder="Masukan alamat...">

					
					</div>
					
					<button type="submit" id="save" name="save" value="save" class="btn btn-sm btn-success fa fa-save" data-toggle="tooltip" title="Save"></button>
					<!-- <button type="button" id="update" name="update" class="btn btn-sm btn-warning">Update</button> -->
					<button type="button" id="delete" name="delete" class="btn btn-sm btn-danger fa fa-times-circle-o" data-toggle="tooltip" title="Delete"></button>

					<button type="button" id="cetak" class="btn btn-sm btn-warning fa fa-print" data-toggle="tooltip" title="Cetak"></button>

					<button type="reset" id="reset" class="btn btn-sm btn-primary fa fa-refresh" data-toggle="tooltip" title="Reset"></button>					

					<button type="buton" id="upload" class="btn btn-sm btn-primary fa fa-upload " data-toggle="tooltip" title="Upload"></button>						
				<!-- </form>/. End Form CRUD Book Master -->
			</fieldset>
			<br>
			<p>
				<b id="note">Note!</b><br>
				<b id="note">*</b> Dosen pembimbing akan diisi oleh <b>Ka Prodi</b><br>
				<b id="note">*</b> Cetak dapat berfungsi apabila status pengajuan disetujui <br>
				<b id="note">*</b> Langkah selanjutnya, mahasiswa dapat Upload <b>Surat Permohonan KP</b> <br>&nbsp;&nbsp;&nbsp;dan <b>Surat Balasan dari Perusahaan</b>
			</p>
			</div><!-- /. End Form Place -->

			<!-- Datagrid Place -->
			<div class="col-md-8 column">
				<table id="tabelpengajuankp" class="display" cellspacing="0">
					<thead>
						<tr>
							<th>No. Pengajuan</th>
							<th>Dos. Pembimbing</th>
							<th>Instansi</th>
							<th>Judul</th>
							<th>Alamat</th>
							<th>Status</th>
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