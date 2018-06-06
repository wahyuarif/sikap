<html>
<head>
<title>SIKAP | FASTIKOM</title>
<link href="lib/css/login.css" rel="stylesheet" type="text/css">
<style type="text/"></style>
</head>
<body>
    <div class="content">
    <div class="head"><br><br><img src="lib/img/logo_unsiq.png"  height="30%" /></div>
    <div class="framelog">
        <div class="frameh1"></div>
        <form method="post" action="">
            <table  align="center" >
                <tr>
                    <td >
                        <input class="text" type="text"  name="username" id="username" placeholder="Username"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="text" placeholder="Password" type="password" name="password" id="password"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input class="submit" type="submit" id="btn-login" onclick="cek_login();" value="Login"/>
                        </center>
                    </td>
                </tr>
            </table>
         </form>
    </div>

    <div class="foot">Copyright &copy 2018 - FASTIKOM | <a href="http://unsiq.ac.id">Univeristas Sains Al Quran</a></div>
    </div>
    <script type="text/javascript" src='lib/js/jquery.min.js'></script>
    <script type="text/javascript" src="lib/js/login.js"></script>
</body>
<script type="text/javascript">
    $('#username').focus();
</script>
</html>