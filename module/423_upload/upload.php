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
	<!-- <script src="../module/423_upload/upload.js" type="text/javascript"></script> -->
</head>
<body>
	<br>
	<!-- Container datagrid dan form -->
	<div class="container-fluid">
		<div class="row-fluid clearfix">


			<!-- Form Place -->
			<div class="col-md-5 column">
			<fieldset>
				<legend>UPLOAD FILE LAPORAN</legend>
			    <!-- Form CRUD Book Master -->
				<!-- <form class="form" id="frmanggota" action="" method="post"> -->
					<div class="form-group">
					<!-- <label>No Pengajuan</label>
					<form action="http://localhost/sikap_api/app/module/upload/aksi.php" method="POST" enctype="file/form-data">
						<input type="file" class="form-control" id="flaporan" name="flaporan" 
						required placeholder="Chose file ..." readonly="true">
					</form> -->
					<form action="http://localhost/sikap_api/app/module/upload/aksi.php" method="POST" enctype="file/form-data">
						<table>
					    <tr>
					        <td><input type="file" name="fupload"></td>
					    </tr>
					    <tr>
					        <td> <input type="submit" value="upload"></td>
					    </tr>
					   </table>
					</form>
					</div>
					<!-- <button type="submit" id="upload" name="upload" value="upload" class="btn btn-sm btn-success">Upload</button>
					<button type="button" id="delete" name="delete" class="btn btn-sm btn-danger">Delete</button>	
					<button type="reset" id="reset" class="btn btn-sm btn-primary">Reset</button>		 -->				
				<!-- </form>/. End Form CRUD Book Master -->
			</fieldset>
			</div><!-- /. End Form Place -->

			<!-- Datagrid Place -->
			<!-- <div class="col-md-7 column">
				<table id="tabelflaporan" class="display" cellspacing="0">
					<thead>
						<tr>
							<th>No. Pengajuan</th>
							<th>F Lapporan</th>
							<th>Tanggal Upload</th>
						</tr>
					</thead>
	                <tbody></tbody>
				</table>
			</div> --><!-- /. End Datagrid Place -->

		</div>
	</div>	<!-- ./End Container datagrid dan form -->
</body>
</html>
<?php } ?>

