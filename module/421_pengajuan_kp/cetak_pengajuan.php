<html>
<head>
    <title>Cetak Form Pengajuan Kp</title>
    <style>
        @font-face{
            font-family: "sqr";
            src: url('../lib/fonts/square721.ttf');
        }
        @media print {
            html, body {
                font-family: "sqr";
            }
        
            /* @page {
              size: 21.49cm 13.97cm;
            }
        
            .logo {
              width: 30%;
            } */
        
        }

hr {

    height: 2px;

    background-color:#555;

    margin-top: 20px;

    margin-bottom: 20px;

    width: 75%;

}

    </style>
</head>
    <!-- Call JQuery Library -->
    <script src="../bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    
    <!-- Call DataTables Library -->
    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="../bower_components/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="../bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="../bower_components/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="../bower_components/print-area/demo/jquery.PrintArea.js" type="text/javascript"></script>

    <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-dt/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../bower_components/chosen/chosen.min.css"> -->

    <!-- Call Custom Library -->
    <script src="../module/421_pengajuan_kp/cetak_pengajuan.js" type="text/javascript"></script>
<body>
<?php
    $no_pengajuan = $_GET['no_pengajuan'];
?>

<input type="hidden" name="no_pengajuan" id="no_pengajuan" value="<?php echo $no_pengajuan; ?>">


<br>
    <div id="cetak">
    <div class="row col-md-1"></div>
    <div class="row col-md-8">
        <p>
            <b><u><center>FORMULIR PENGAJUAN LOKASI DAN TOPIK KERJA PRAKTEK(KP)</center></u></b>
            <br><br>
            Yang bertanda tangan dibawah ini,

            <br><br>
            <table>
                <tr>
                    <td width="80">Nama</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td id="nm_mhs" contenteditable="true"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td id="nim" contenteditable="true"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td id="prodi" contenteditable="true"></td>
                </tr>
            </table>
            <br>
            Dengan ini mengajukan lokasi dan topik kerja praktek sebagai berikut:
            <br><br>
            <table>
                
                <tr>
                    <td width="80">Lokasi Kp</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td id="nm_instansi" contenteditable="true"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Topik Kp</td >
                    <td>&nbsp;:&nbsp;</td>
                    <td id="judul" contenteditable="true"></td>
                </tr>
            </table>
            <br>
            Demikian Permohonan Usulan Judul Kerja Praktek atas terkabulnya saya ucapkan terimakasih. 
            <br><br><br> 
            <table width="100%" align="center">

                <tr>
                    <td></td>
                    <td>Wonosobo, <?php echo date('d F Y'); ?></td>
                </tr>
                <tr>
                    <td><br><br><br><br></td>
                    <td id="pemohon" contenteditable="true"></td>
                </tr>
                <tr>
                    <td><br><br><br><br></td>
                    <td><b>Pemohon</b></td>
                    <td></td>
                </tr>

            </table>
        </p>
        <p>
        <hr style="width: 100%; color: black; height: 3px; background-color:black;" /> 

         <table border=1px style="border-collapse:collapse" align="center">
        <tr>
            <td rowspan="2" width="100" height="100"><b>&nbsp;Status</b></td>
            <!-- <td>:</td> -->
            <td width="500"  height="100">
                <table width="500" height="100">
                    <tr>
                        <td>&nbsp;&nbsp;<input type="checkbox" name="">&nbsp;&nbsp;Diterima</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;<input type="checkbox" name="">&nbsp;&nbsp;Diterima Dengan Syarat</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;<input type="checkbox" name="">&nbsp;&nbsp;Tidak Diterima</td>
                    </tr>
                </table>
            </td>
        </tr>

        <!--  -->
        <tr>
            <table border=1px style="border-collapse:collapse" align="center">
            <tr>
                <td width="100" height="100">&nbsp;<b>Catatan</b></td>
                <!-- <td>:</td> -->
                <td>
                    <table width="500">
                        <tr>
                            <td width="145" height="150"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            </table>
        </tr>

        <!--  -->
        <tr>
            <table border=1px style="border-collapse:collapse" align="center">
                <tr>
                    <td width="100" height="100">&nbsp;<b>Reviewer</b></td>
                    <!-- <td>:</td> -->
                    <td>
                        <table width="500">
                            <tr>
                                <td width="145" height="100"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </tr>

    </table>
        </p>


    </div>
    </div>
    <div align="center" class="row col-md-1">
        <button class="btn btn-warning" id="btn-cetak">Cetak</button>
    </div>

</body>
</html>