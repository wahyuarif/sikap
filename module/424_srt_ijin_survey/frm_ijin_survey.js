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

	/*Cetak*/
	$('#cetak').click(function(){
		cetakIjinSurvey();
		});

	function cetakIjinSurvey(){
		var no_pengajuan = $('#no_pengajuan').val();
        $('.konten').load('424_srt_ijin_survey/srt_ijin_survey.php','no_pengajuan='+no_pengajuan);
	}


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

	function loadData(){
		$.getJSON(urlAPI+'/app/module/srt_ijin_survey/surat_load.php', function(json) {
			$('#no_pengajuan').val(json.no_pengajuan);
			$('#nim').val(json.nim);
			$('#nm_mhs').val(json.nm_mhs);
			$('#prodi').val(json.prodi);
		});
	}

});