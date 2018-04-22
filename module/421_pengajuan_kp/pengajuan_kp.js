$(document).ready(function() {
	resetForm();
	var table;
	  var urlAPI = "http://localhost/sikap_api";
	/* LOAD DATA TABLES LIBRARY */
	table = $('#tabelpengajuankp').DataTable( {
		"ajax": urlAPI+"/app/module/pengajuan_kp/get_pengajuan_kp.php",
		"columns": [
      		{"data": "no_pengajuan" },
			{"data": "nm_instansi" },
			{"data": "judul" },
			{"data": "alamat" },
			{"data": "status" }
			  
		]
	});

	$('#tabelpengajuankp tbody').on('click', 'tr', function () {
		resetForm();
		var data = table.row(this).data();
        $('#no_pengajuan').val(data["no_pengajuan"]);
        loadData();
        $('#save').attr('disabled', 'disabled');
        $('#cetak').removeAttr('disabled', 'disabled');
        $('#delete').removeAttr('disabled');
        $('#no_pengajuan').focus();
	});

	/* EVENT KEY ENTER */
	
	
	$('#judul').keydown(function(e){
		if(e.keyCode == 13){
			$('#nm_instansi').focus();
		}
	});
	
	
	$('#nm_instansi').keydown(function(e){
		if(e.keyCode == 13){
			$('#no_hp').focus();
		}
	});

	$('#no_hp').keydown(function(e){
		if(e.keyCode == 13){
			$('#jml_pegawai').focus();
		}
	});

	$('#jml_pegawai').keydown(function(e){
		if(e.keyCode == 13){
			$('#alamat').focus();
		}
	});


	
	/* BUTTON EVENT */

    /* RESET */
    $('#reset').click(function(){
    	resetForm();
    	
    });

    /* SAVE */
    $('#save').click(function(){
    	savePengajuanKp();
    	resetForm();
    	$('.konten').load('421_pengajuan_kp/pengajuan_kp.php');
		});
	
	
	/* DELETE */
	$('#delete').click(function(){
		deletePengajuanKp();
		resetForm();
		$('.konten').load('421_pengajuan_kp/pengajuan_kp.php');
		});

	/*Cetak*/
	$('#cetak').click(function(){
		cetakPengajuanKp();
		});


		/* CUSTOM FUNCTION */
	function resetForm()
	{
		$('#save').removeAttr('disabled');
		$('#cetak').attr('disabled', 'disabled');
		$('#delete').attr('disabled', 'disabled');
		$('input[type=text]').each(function(){
			$(this).val("");
		});

		$('input[type=password]').each(function(){
			$(this).val("");
		});
	}

	function cetakPengajuanKp(){
		var no_pengajuan = $('#no_pengajuan').val();
        $('.konten').load('421_pengajuan_kp/cetak_pengajuan.php','no_pengajuan='+no_pengajuan);
	}

	function loadData(){
		var aksi = "load";
		var no_pengajuan = $('#no_pengajuan').val();
		$.getJSON(urlAPI+'/app/module/pengajuan_kp/pengajuan_kp_load.php', {aksi:aksi, no_pengajuan:no_pengajuan}, function(json) {
			$('#no_pengajuan').val(json.no_pengajuan);
			$('#judul').val(json.judul);
			$('#nm_instansi').val(json.nm_instansi);
			$('#alamat').val(json.alamat);
			$('#phone').val(json.phone);

			// berikut tidak ditampilkan di form, hanya untuk ngambil data
			$('#nim').val(json.nim);
			$('#nm_mhs').val(json.nm_mhs);
			$('#prodi').val(json.prodi);
		});
	}

	function savePengajuanKp(){
		var judul 		= $('#judul').val();
		var nm_instansi = $('#nm_instansi').val();
		var alamat 		= $('#alamat').val();
		var phone 		= $('#phone').val();
		$.ajax({
			url:  urlAPI+"/app/module/pengajuan_kp/pengajuan_kp_save.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi'			:'save',
				'judul'			:judul,
				'nm_instansi'	:nm_instansi,
				'alamat'		:alamat,
				'phone'			:phone,
			},
			success : function(data){
				alert(data.pesan);
			}, 
			error: function(data){
				alert(data.pesan);
			}
		});
	}



	function deletePengajuanKp(){
		var no_pengajuan = $('#no_pengajuan').val();
		$.ajax({
			url:  urlAPI+"/app/module/pengajuan_kp/pengajuan_kp_delete.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi':'delete',
				'no_pengajuan':no_pengajuan
			},
			success : function(data){
				alert(data.pesan);
			}, 
			error: function(data){
				alert(data.pesan);
			}
		});

	}
});