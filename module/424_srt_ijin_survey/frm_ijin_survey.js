$(document).ready(function() {
	resetForm();
	var table;
	  var urlAPI = "http://localhost/sikap_api";
	/* LOAD DATA TABLES LIBRARY */

	 $(function () {
			loadData();
	  });
	
	
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
		var nim = $('#nim').val();
        $('.konten').load('424_srt_ijin_survey/srt_ijin_survey.php','nim='+nim);
	}


		/* CUSTOM FUNCTION */
	function resetForm()
	{
		$('#cetak').attr('disabled');
		$('input[type=text]').each(function(){
			$(this).val("");
		});

		$('input[type=password]').each(function(){
			$(this).val("");
		});
	}

	function loadData(){
		$.getJSON(urlAPI+'/app/module/srt_ijin_survey/data_load.php', function(json) {
			$('#nim').val(json.nim);
			$('#nm_mhs').val(json.nm_mhs);
			$('#prodi').val(json.prodi);
			$('#nm_instansi').val(json.nm_instansi);
			$('#no_surat').val(json.no_surat);
			$('#nm_dosen').val(json.nm_dosen);
			$('#jabatan').val(json.jabatan);
			console.log(json);
		});
	}

});