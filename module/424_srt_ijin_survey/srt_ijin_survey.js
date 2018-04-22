$(document).ready(function() {
	var urlAPI = "http://localhost/sikap_api";

    $(function(){           
        var no_pengajuan = $('#no_pengajuan').val();

        $.getJSON(urlAPI+'/app/module/srt_ijin_survey/data_load.php',{no_pengajuan:no_pengajuan}, function(json) {
            $('#nm_mhs').text(json.nm_mhs);
            $('#pemohon').text(json.nm_mhs);
            $('#nim').text(json.nim);
            $('#prodi').text(json.prodi);
            $('#nm_instansi').text(json.nm_instansi);
            $('#judul').text(json.judul);
        });

    });

	$('#cetak').click(function(){
	cetakPengajuanKp();
	});

	 function cetakPengajuanKp(){
 		var no_pengajuan 	= $('#no_pengajuan').val();
		 $('.konten').load('424_srt_ijin_survey/srt_ijin_survey.php','no_pengajuan='+no_pengajuan);
	}

    function loadData(){
		var aksi = "load";
		var no_pengajuan = $('#no_pengajuan').val();
		$.getJSON(urlAPI+'/app/module/srt_ijin_survey/surat_load.php', {aksi:aksi, no_pengajuan:no_pengajuan}, function(json) {
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


    $("#btn-cetak").click(function(){
        $('#cetak').printArea();
    });
});