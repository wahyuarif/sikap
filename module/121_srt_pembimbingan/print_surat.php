<html>
<head>
    <title>Cetak Struk</title>
    <style>
        @font-face{
            font-family: "sqr";
            src: url('../lib/fonts/square721.ttf');
        }

        @media print {
            html, body {
                font-family: "sqr";
                size: 12pt;
            }
        
            /* @page {
              size: 21.49cm 13.97cm;
            }
        
            .logo {
              width: 30%;
            } */
        
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
    <script src="../bower_components/wnumb/wNumb.js" type="text/javascript"></script>
    <script src="../bower_components/Jquery-Price-Format/jquery.priceformat.min.js" type="text/javascript"></script>
    <script src="../bower_components/PrintArea/demo/jquery.PrintArea.js" type="text/javascript"></script>

    <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-dt/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../bower_components/chosen/chosen.min.css"> -->

    <!-- Call Custom Library -->
    <script src="../module/228_cd_zisr/ld_zisr.js" type="text/javascript"></script>
<body>
<?php
    $tgl_donasi = $_GET['tgl_donasi'];
?>
<br>
    <div id="cetak">
    <div class="row col-md-1"></div>
    <div class="row col-md-8">
        <table width="100%">
            <tr>
                <td>
                    <b>LAPORAN PENERIMAAN HARIAN</b>
                    <input type="hidden" id="tgl_donasi" value="<?php echo $tgl_donasi; ?>">
                </td>
                <td>
                    <b>
                    <input type="text" size="2" class="form-control" name="A1" id="A1" value="Formulir A1">
                    </b>
                </td>
            </tr>
        </table>
      <p align="justify">Bissmillahirrohmaanirohiim Pada Hari ini <span contenteditable="true">---</span> <?php echo date('d F Y', strtotime($tgl_donasi)).","; ?> Alhamdulillah telah diterima dana Zakat, Infaq dan Shodaqoh dengan rincian:</p>
        Dokumen Kuitansi Penerimaan:<span contenteditable="true">---</span>Lembar
        <br><br>
        <table width="100%">
            <tr>
                <td id="kiri" valign="top">
                    <table width="100%" border="0" class="table table-bordered table-condensed">
                        <thead>
                            <tr>
                                <td>Keterangan</td>
                                <td align="right">Jumlah</td>
                            </tr>
                        </thead>
                        <tbody id="data-here"></tbody>
                        <tfoot>
                            <tr>
                                <td>Total Penerimaan: </td>
                                <td align="right"><span id="total_penerimaan"></span></td>
                            </tr>
                        </tfoot>
                    </table>
                    <table width="100%">
                        <tr align="center">
                            <td></td>
                            <td align="right">Purwokerto, <?php echo date('d F Y', strtotime($tgl_donasi)); ?></td>
                        </tr>
                        <tr align="center">
                            <td>ZISR/FO</td>
                            <td>Kasir</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td id="zisrfo" align="center" contenteditable="true">---</td>
                            <td align="center" contenteditable="true">---</td>
                        </tr>
                    </table>
                
                </td>
                <td>&nbsp;</td>
                <td id="kanan">
                    <table width="50%" class="table table-bordered table-condensed" id="denominasi">
                        <tr>
                            <td>Pecahan Kertas </td>
                            <td align="right">Jumlah</td>
                        </tr>
                        <tr align="right">
                            <td><div>100.000</div></td>
                            <td contenteditable="true">&nbsp;</td>
                        </tr>
                        <tr align="right">
                            <td><div align="right">50.000</div></td>
                            <td contenteditable="true">&nbsp;</td>
                        </tr>
                        <tr align="right">
                            <td><div align="right">20.000</div></td>
                            <td contenteditable="true">&nbsp;</td>
                        </tr>
                        <tr align="right">
                            <td><div align="right">10.000</div></td>
                            <td contenteditable="true">&nbsp;</td>
                        </tr>
                        <tr align="right">
                            <td><div align="right">5.000</div></td>
                            <td contenteditable="true">&nbsp;</td>
                        </tr>
                        <tr align="right">
                            <td><div align="right">2.000</div></td>
                            <td contenteditable="true">&nbsp;</td>
                        </tr>
                        <tr align="right">
                            <td><div align="right">1.000</div></td>
                            <td contenteditable="true">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Pecahan Logam </td>
                            <td align="right">Jumlah</td>
                        </tr>
                        <tr align="right">
                            <td><div align="right">1.000</div></td>
                            <td contenteditable="true">&nbsp;</td>
                        </tr>
                        <tr align="right">
                            <td><div align="right">500</div></td>
                            <td contenteditable="true">&nbsp;</td>
                        </tr>
                        <tr align="right">
                            <td><div align="right">200</div></td>
                            <td contenteditable="true">&nbsp;</td>
                        </tr>
                        <tr align="right">
                            <td><div align="right">100</div></td>
                            <td contenteditable="true">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    </div>
    <div align="center" class="row col-md-1">
        <button class="btn btn-warning" id="btn-cetak">Cetak</button>
    </div>

</body>
</html>