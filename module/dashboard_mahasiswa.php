<?php
session_start();
if(!$_SESSION){
  header("location:../index.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Halaman Utama</title>
    
    <!-- Bootstrap core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../lib/css/menu.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../lib/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../lib/css/dashboard/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript">
      function konfirmasi()
        {
          tanya = confirm('Anda Yakin Akan Keluar..?');
          if(tanya==true){
            window.location = '../bin/logout.php';
          } else {
            return false;
          }
        }
    </script>
    <style>
      .navbar, .navbar-header{
        background-color:#117c77 ;
      }
      /* #E7A012; */
      @font-face{
        font-family: "sqr";
        src: url('../lib/fonts/font-awesome-4.7.0/fonts/fontawesome-webfont.ttf');
      }
      html, body {
        font-family: "sqr";
      }
    </style>
    <!-- square721.ttf -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
    <!-- TOP MENU -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="color:#FFFFFF" href="#">SIKAP</a></a>
      </div>

      <ul class="nav navbar-nav">
        <div class="navbar-form navbar-left" role="search">
          <input type="text" class="form-control" placeholder="Masukan No Menu" id="key_menu" name="key_menu">
        </div>
      </ul>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">       
          <li class="dropdown">
            <a class="dropdown-toggle" style="color:#FFFFFF" data-toggle="dropdown" href="#">
              <span class=""></span><div style="color: grey">1.Admin</div>
            </a>
            <ul class="dropdown-menu">
              <li class="dropdown-submenu">
                <!-- <a tabindex="-1" href="#">1.1-Master</a> -->
              </li>
              <!-- <li><a href="#">1.2-Transaksi</a></li> -->
              <li class="divider"></li>
              <!-- <li><a href="#">1.3-Laporan</a></li> -->
              </ul>
          </li>
          <li class="dropdown">
              <a class="dropdown-toggle" style="color:#FFFFFF" data-toggle="dropdown" href="#">
                <span class=""></span><div style="color: grey">2.Dekan</div> 
              </a>
              <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <!-- <a tabindex="-1" href="#">2.1-Master</a> -->
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">2.2-Transaksi</a>
                  </li>
                  <li class="divider"></li>
                  <li class="dropdown-submenu">
                    <!-- <a href="#">2.3-Laporan</a> -->
                  </li>
              </ul>
          </li>        

          <li class="dropdown">
            <a class="dropdown-toggle" style="color:#FFFFFF" data-toggle="dropdown" href="#">
              <span class=""></span> <div style="color: grey">3.Dosen Pembimbing</div>
            </a>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" style="color:#FFFFFF" data-toggle="dropdown" href="#">
              <span class=""></spa n> <b>4.Mahasiswa</b>
            </a>

            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a href="#">4.1-Master</a>
                  <ul class="dropdown-menu">
                    <li><a class="klik" id="411" href="#">4.1.1-Surat</a></li>
                  </ul>
                </li>
                <!--  -->
                <li class="dropdown-submenu">
                  <a href="#">4.2-Transaksi</a>
                  <ul class="dropdown-menu">
                    <li><a class="klik" id="421" href="#">4.2.1-Pengajuan Tempat KP</a></li>
                    <li><a class="klik" id="422" href="#">4.2.2-Bimbingan</a></li>
                    <li><a class="klik" id="423" href="#">4.2.3-Upload</a></li>
                    <li><a class="klik" id="424" href="#">4.2.4-Surat Ijin KP</a></li>
                  </ul>
                </li>
                <!--  -->

              <li class="divider"></li>

                <li class="dropdown-submenu">
                  <a href="#">4.2-Laporan</a>
                  <ul class="dropdown-menu">
                    <li><a class="klik" id="" href="#"></a></li>
                    <li><a class="klik" id="" href="#"></a></li>
                  </ul>
                </li>

            </ul>
          </li>
          
          <li class="dropdown navbar-right">
            <a href="#" style="color:#FFFFFF" onclick="konfirmasi()">
              <span class="glyphicon glyphicon-log-in"></span> Logout
            </a>
          </li>


        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>

  <div class="konten">
    
  </div>

    <!-- FOOTER -->
  <!-- <nav style="color:#FFFFFF" class="navbar navbar-default navbar-fixed-bottom navbar-right">
    <br>
    Copyright &copy;2018 FASTIKOM
  </nav> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../bower_components/jquery/dist/jquery.min.js"> <\/script>')</script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../lib/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../lib/js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {

          $('#key_menu').focus();
          $('label.tree-toggler').click(function () {
              $(this).parent().children('ul.tree').toggle(300);
          });
          // halaman yang di load default pertama kali
          $('.konten').load('home.php');
          //Router Menu Mouse Click Event
          $('.klik').click(function(){
            var menu = $(this).attr('id');
            if(menu == "111"){
              $('.konten').load('111_mahasiswa/mahasiswa.php');    
            }else if(menu == "112"){
              $('.konten').load('112_dosen/dosen.php');  
            }else if(menu == "121"){
              $('.konten').load('121_penentuandosbing/dosbing.php');                 
            }else if(menu == "421"){
              $('.konten').load('421_pengajuan_kp/pengajuan_kp.php');
            }else if(menu == "411"){
              $('.konten').load('411_surat/surat.php');
            }else if(menu == "311"){
              $('.konten').load('311_status_bimbingan/status_bimbingan.php');
            }else if(menu == "422"){
              $('.konten').load('422_bimbingan/bimbingan.php'); 
            }else if(menu == "423"){
              $('.konten').load('423_upload/upload.php'); 
            }else if(menu == "424"){
              $('.konten').load('424_srt_ijin_survey/frm_ijin_survey.php'); 
            }

          });
          
          //Router Menu Keypress Event
          $('#key_menu').keydown(function(e){
              if(e.keyCode == 13){
                var menu = $('#key_menu').val();
                if(menu == "0"){
                  $('.konten').load('home.php');                  
                }else if(menu == "111"){
                  $('.konten').load('111_mahasiswa/mahasiswa.php');    
                }else if(menu == "112"){
                  $('.konten').load('112_dosen/dosen.php');  
                }else if(menu == "121"){
                  $('.konten').load('121_penentuandosbing/dosbing.php');                 
                }else if(menu == "421"){
                  $('.konten').load('421_pengajuan_kp/pengajuan_kp.php');
                }else if(menu == "411"){
                  $('.konten').load('411_surat/surat.php');
                }else if(menu == "311"){
                  $('.konten').load('311_status_bimbingan/status_bimbingan.php');
                }else if(menu == "422"){
                  $('.konten').load('422_bimbingan/bimbingan.php'); 
                }else if(menu == "423"){
                  $('.konten').load('423_upload/upload.php'); 
                }else if(menu == "424"){
                  $('.konten').load('424_srt_ijin_survey/frm_ijin_survey.php'); 
                }else if(menu == "999"){
                  konfirmasi();                   
                }
              }
          });
      });      
    </script>
  </body>
</html>
<?php } ?>