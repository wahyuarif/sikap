$(document).ready(function() {
	resetForm();
	var table;
	  var urlAPI = "http://localhost/sikap_api";
	/* LOAD DATA TABLES LIBRARY */
	table = $('#tabelpengajuan').DataTable( {
		"ajax": urlAPI+"/app/module/status_pengajuan/get_status_pengajuan.php",
		"columns": [
      	{"data": "no_pengajuan" },
		{"data": "nm_instansi" },
		{"data": "alamat" },
		{"data": "nim" },
		{"data": "nm_mhs" },
		{"data": "status" }
			  
		]
	});



	$('#tabelpengajuan tbody').on('click', 'tr',  function () {
		resetForm();
		var data = table.row(this).data();
        $('#no_pengajuan').val(data["no_pengajuan"]);
        loadData();
        $('#update').removeAttr('disabled');
        $('#delete').removeAttr('disabled');
        $('#status').focus();
	});


	/* EVENT KEY ENTER */

	$('#status').keydown(function(e){
		if(e.keyCode == 13){
			$('#status').focus();
		}
	});

	/* BUTTON EVENT */

    /* RESET */
    $('#reset').click(function(){
    	resetForm();
    	
    });

	/* UPDATE */
    $('#update').click(function(){
    	updateStatusPengajuan();
		resetForm();
    	$('.konten').load('211_status_pengajuan/status_pengajuan.php');
		});
	
	/* DELETE */
		$('#delete').click(function(){
		deleteStatusPengajuan();
		resetForm();
		$('.konten').load('211_status_pengajuan/status_pengajuan.php');
		});

		/* CUSTOM FUNCTION */
	function resetForm()
	{
		// $('#save').removeAttr('disabled');
		$('#update').attr('disabled', 'disabled');
		$('#delete').attr('disabled', 'disabled');
		$('input[type=text]').each(function(){
			$(this).val("");
		});

		$('input[type=password]').each(function(){
			$(this).val("");
		});
	}

	function loadData(){
		var aksi = "load";
		var no_pengajuan = $('#no_pengajuan').val();
		$.getJSON(urlAPI+'/app/module/status_pengajuan/status_pengajuan_load.php', {aksi:aksi, no_pengajuan:no_pengajuan}, function(json) {
			$('#no_pengajuan').val(json.no_pengajuan);
			$('#nm_instansi').val(json.nm_instansi);
			$('#alamat').val(json.alamat);
			$('#status').val(json.status);
		});
	}

	function updateStatusPengajuan(){
		var no_pengajuan= $('#no_pengajuan').val();
		// var nik			= $('#nik').val();
		var status		= $('#status').val();
		$.ajax({
			url:  urlAPI+"/app/module/status_pengajuan/status_pengajuan_update.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi'			:'update',
				'no_pengajuan'	:no_pengajuan,
				'status'		:status
				// 'nik'           :nik
			},
			success : function(data){
				alert(data.pesan);
			}, 
			error: function(data){
				alert(data.pesan);
			}
		});
	}

	function deleteStatusPengajuan(){
		var no_pengajuan = $('#no_pengajuan').val();
		$.ajax({
			url:  urlAPI+"/app/module/status_pengajuan/dosbing_delete.php",
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