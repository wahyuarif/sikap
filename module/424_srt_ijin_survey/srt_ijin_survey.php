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
        }
    .wrapper{
        position: relative;
        margin: auto;
        width: 900px;
        background: black;
    }

    </style>
</head>
    <!-- Call JQuery Library -->
    <link rel="stylesheet" href="../lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
    $nik = $_SESSION['nik'];
?>

<br>
    <div id="cetak">
    <div class="row col-md-1"></div>
    <div class="row col-md-8">
        <p>
            <table>
                <center><img class="wrapper" src="../lib/img/kop.png"></center>
                <tr>
                    <td width="80">No</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td id="no_surat" contenteditable="true"></td>
                </tr>
                <tr>
                    <td width="80">Lamp</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td id="" contenteditable="true"></td>
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

            <table align="right">
                <tr>
                    <td>Kepada Yth.</td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: right"> <b>Kepala&nbsp;</b> </td>
                    <td id="nm_instansi" contenteditable="true" style="font-weight: bold"></td>
                </tr>              
                <tr>
                    <td>di-</td>
                </tr> 
                <tr>
                    <td style="text-align: right">Tempat</td>
                </tr>

            </table>
            
        </p>

        <br><br><br>

        <p style="text-align: justify; text-justify: inter-word">
            <i><b>Assalamu’alaikum Wr. Wb.</b></i><br>
            &nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan adanya kegiatan Mata Kuliah Kerja Praktek (KP) Fakultas Teknik
            dan Ilmu Komputer Universitas Sains Al-Qur’an (UNSIQ) Jawa Tengah di Wonosobo, 
            maka yang bertanda tangan di bawah ini: 
        </p>

        <p>
            <table style="font-weight: bold">
                <tr>
                    <td width="80">Nama</td>
                    <td>:</td>
                    <td id="nm_dosen" contenteditable="true">*input disini</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jabatatan</td>
                    <td>:</td>
                    <td style="text-align: top" id="jabatan" contenteditable="true"></td>
                </tr>
            </table>

            <br>
            Dengan ini kami mohon kesediaan Bapak/ Ibu untuk memberikan ijin kepada <br>
            mahasiswa kami untuk melaksanakan Kerja Praktek (KP) di tempat yang bapak/ ibu pimpin. <br>
            Adapun mahasiswa tersebut adalah:
        </p>

           <table>
                <tr>
                <td width="80">Nama</td>
                <td>:</td>
                <td id="nm_mhs" contenteditable="true"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td id="nim" contenteditable="true"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
                <td id="prodi" contenteditable="true"></td>
            </tr>
           </table>
           <br>

        <p>
            Di samping itu, kami juga mohon kesediaaan Bapak/ Ibu untuk memberikan data dan <br>
            memberikan bimbingan kepada mahasiswa kami sampai dengan Kerja Praktek selesai. <br>
            Demikian surat permohonan ijin ini, atas kerjasamanya kami ucapkan terima kasih. <br>

            <i><b>Wassalamu’alaikum Wr.Wb.</b></i>
        </p>
        <br><br>

        <!-- Footer Wakil Dekan -->
        <table align="right">
            <tr>
                <td align="center">Wonosobo, <?php echo date('d F Y'); ?></td>
            </tr>
            <tr>
                <td align="center">a.n Dekan</td>
            </tr>
            <tr>
                <td align="center">Wakil Dekan</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="center"><div id="dekan"></div></td>
            </tr>
        </table>

    </div>
    </div>

    <div align="center" class="row col-md-1">
        <button class="btn-lg  btn-warning fa fa-print" data-toggle="tooltip" title="Cetak"" id="btn-cetak"></button>
    </div>

</body>
</html>
<?php } ?>