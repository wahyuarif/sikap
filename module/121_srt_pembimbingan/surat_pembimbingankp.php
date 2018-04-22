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
    <script src="../module/121_srt_pembimbingan/surat_pembimbingankp.js" type="text/javascript"></script>
</head>
<body>
    <br>
    <!-- Container datagrid dan form -->
    <div class="container-fluid">
        <div class="row-fluid clearfix">


            <!-- Form Place -->
            <div class="col-md-6 column">
            <fieldset>
                <legend>Surat Pembimbingan Kp</legend>
                    <div class="form-group">

                        <label>Mahasiswa yang berkepentingan</label>
                        <div class="row">
                             <div class="col-md-4">
                            <input type="text" class="form-control" id="nim" name="nim" 
                                maxlength="15" required placeholder="Nim" readonly="true">
                            </div>
                            <div class="col-md-4">
                            <input type="text" class="form-control" id="nm_mhs" name="nm_mhs" 
                                maxlength="15" required placeholder="Nama mahasiswa" readonly="true">
                            </div>
                        </div>

                        <label>No Pengajuan</label>
                        <div class="row">
                             <div class="col-md-4">
                                <input type="text" class="form-control" id="prodi" name="prodi" 
                                maxlength="15" required placeholder="Prodi" readonly="true">
                            </div>
                            <div>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#suratModal">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        </div>
                        
                       

                    <!-- <button type="submit" id="save" name="save" value="save" class="btn btn-sm btn-success">Save</button> -->
                   <br>
                    <button class="btn btn-success" id="cetak">
                        <span class="glyphicon glyphicon-floppy-saved"></span> Cetak
                    </button> 

                    <button type="button" class="btn btn-info" id="reset">
                        <span class="glyphicon glyphicon-refresh"></span> Reset
                    </button>                   
                <!-- </form>/. End Form CRUD Book Master -->
            </fieldset>
    </div>  <!-- ./End Container datagrid dan form -->


    <!-- Modal Lookup Petugas -->
    <div class="modal fade" id="suratModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width:800px">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Lookup Surat</h4>
                </div>
                <div class="modal-body">
                    <table id="lookup_surat" width="100%" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nim</th>
                                <th>Nama Mahasiswa</th>
                                <th>Prodi</th>
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