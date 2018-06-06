<?php
session_start();
  if($_SESSION['status']!='LOGIN'){
    header("location:../index.php");
  } else {
?>

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
    .wrapper{
        position: relative;
        margin: auto;
        width: 900px;
        background: black;
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
    <script src="../module/223_surat_tugas/cetak_kp.js" type="text/javascript"></script>
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
            
            <center><img class="wrapper" src="../lib/img/kop.png"></center>
            
            <b><u><center>SURAT TUGAS PEMBIMBINGAN KERJA PRAKTEK</center></u></b><br>
            <center><b>No. 718/FTIK-UNSIQ/XII/2012</b></center>
            <br><br>
            <b><i>Assalamu’alaikum Wr. Wb.</i></b> <br>
            

            <p>
                Dekan Fakultas Teknik dan Ilmu Komputer (FTIK) Universitas Sains Al Qur’an <br>(UNSIQ) Jawa Tengah di Wonosobo memberikan tugas kepada :
                <br><br>
                <table>
                     <tr>
                        <td width="80">Nama</td>
                        <td>:</td>
                        <td id="nm_dosen" contenteditable="true">*input disini</td>
                    </tr>
                </table>
            </p>

            <p>
                Untuk memberikan bimbingan Kerja Praktek (KP) kepada mahasiswa tersebut di bawah <br>ini :
                <br>
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
            </p>

            <p>
                Selama melakukan pembimbingan, harus dailaksanakan dengan sungguh-sungguh dan <br>
                tidak menyimpang dari kaidah keilmuannya. Pembimbing Kerja Praktek (KP)  <br>
                maksimal dilakukuan selama 6 bulan . Jika sampai batas waktu yang telah ditentukan mahasiswa <br>
                tersebut di atas belum menyelesaikan KP, maka KP tersebut dianggap gugur dan <br>
                mahasiswa harus mengambil judul KP yang baru. <br><br>

                Demikian agar dilaksanakan sebagaimana mestinya. <br><br>
                <b><i>Wassalamu’alaikum Wr. Wb.</i></b>

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