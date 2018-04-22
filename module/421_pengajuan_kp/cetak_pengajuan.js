$(document).ready(function() {
	var urlAPI = "http://localhost/sikap_api";

    $(function(){           
        var no_pengajuan = $('#no_pengajuan').val();

        $.getJSON(urlAPI+'/app/module/pengajuan_kp/data_load.php',{no_pengajuan:no_pengajuan}, function(json) {
            $('#nm_mhs').text(json.nm_mhs);
            $('#pemohon').text(json.nm_mhs);
            $('#nim').text(json.nim);
            $('#prodi').text(json.prodi);
            $('#nm_instansi').text(json.nm_instansi);
            $('#judul').text(json.judul);
        });

    });


    $("#btn-cetak").click(function(){
        $('#cetak').printArea();
    });
});