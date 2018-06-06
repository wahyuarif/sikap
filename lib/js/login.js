function cek_login()
{

	/*
    * event ketika tombol Cari Di Klik Maka Akan Memanggil function prosesAjax
    *
	$('#btn-login').click(function(){
		loginAjax();
	});*/

    /*
    * event ketika tombol Ketika Menekan Tombol Enter Pada Keyboard
    * Maka Akan Memanggil function prosesAjax
    */
	$('form').submit(function(e){
		e.preventDefault();
		loginAjax();
	});
}

function loginAjax()
{
	/* Mengambil Data Dari Textbox */
	var username = $('#username').val();
	var password = $('#password').val();
	var path_login = "http://localhost/sikap_api/bin/login.php";

	/* Menggunakan Ajax */
	$.ajax({
		url 		: path_login,
		data 		: {username:username, password:password},
		type 		: 'POST',
		dataType	: 'html',
		success:function(response){
			var data = $.parseJSON(response);
			if(data.level=="Administrator"){
				alert(data.pesan);
				window.location='module/dashboard.php';
			}else if(data.level=="Mahasiswa"){
				alert(data.pesan);
				window.location='module/dashboard_mahasiswa.php';
			}else if(data.level=="Dosen"){
				alert(data.pesan);
				window.location='module/dashboard_dosen.php';
			}else if(data.level=="Ka Prodi"){
				alert(data.pesan);
				window.location='module/dashboard_kaprodi.php';
			}
			else{
				alert(data.pesan);
				// window.location='index.php';
			}

		}, 

		error: function(response){
			var data = $.parseJSON(response);
			alert(data.pesan);
			window.location='index.php';
		}
	});
}