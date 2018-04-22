<?php
session_start();
  if($_SESSION['status']!='LOGIN'){
    header("location:../index.php");
  } else {
?>
<!DOCTYPE html>
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
    <script src="../module/424_srt_ijin_survey/srt_ijin_survey.js" type="text/javascript"></script>
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
            <table>
                <tr>
                    <td width="80">No</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td id="nm_mhs" contenteditable="true"></td>
                </tr>
                <tr>
                    <td width="80">Lamp</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td id="nm_mhs" contenteditable="true"></td>
                </tr>
                <tr>
                    <td>Hal</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td><b><u>Permohonan Ijin Kerja Praktek </u></b></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <br>
            <p align="right">
                Kepada Yth.
                <br> 
                <br>
                <br>
                di –
                Tempat
            </p>
            <table align="right">                   

            </table>
            
        </p>
        <p style="text-align: justify; text-justify: inter-word">
            <i><b>Assalamu’alaikum Wr. Wb.</b></i><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan adanya kegiatan Mata Kuliah Kerja Praktek (KP) Fakultas Teknik
            dan Ilmu Komputer Universitas Sains Al-Qur’an (UNSIQ) Jawa Tengah di Wonosobo, 
            maka yang bertanda tangan di bawah ini: 
        </p>

        <p>
            <table style="font-weight: bold">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jabatatan</td>
                    <td>:</td>
                </tr>
            </table>
            <br>
            Dengan ini kami mohon kesediaan Bapak/ Ibu untuk memberikan ijin kepada <br>
            mahasiswa kami untuk melaksanakan Kerja Praktek (KP) di tempat yang bapak/ ibu pimpin. <br>
            Adapun mahasiswa tersebut adalah:
        </p>

           <table>
                <tr>
                <td>Nama</td>
                <td>:</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
            </tr>
           </table>
           <br>
        <p>
            Di samping itu, kami juga mohon kesediaaan Bapak/ Ibu untuk memberikan data dan <br>
            memberikan bimbingan kepada mahasiswa kami sampai dengan Kerja Praktek selesai. <br>
            Demikian surat permohonan ijin ini, atas kerjasamanya kami ucapkan terima kasih. <br>

            <i><b>Wassalamu’alaikum Wr.Wb.</b></i>
        </p>
        </p>
    </div>
    </div>
    <div align="center" class="row col-md-1">
        <button class="btn btn-warning" id="btn-cetak">Cetak</button>
    </div>

</body>
</html>
<?php } ?>