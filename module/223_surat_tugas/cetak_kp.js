$(document).ready(function() {
	var urlAPI = "http://localhost/sikap_api";

    $(function(){           
        var no_pengajuan = $('#no_pengajuan').val();

        $.getJSON(urlAPI+'/app/module/surat_tugas/data_load.php',{no_pengajuan:no_pengajuan}, function(json) {
            $('#nm_mhs').text(json.nm_mhs);
            $('#nim').text(json.nim);
            $('#prodi').text(json.prodi);
            $('#nm_dosen').text(json.nm_dosen);
            $('#dekan').text(json.wadek.nm_dosen);
            // console.log(json);
        });

    });


    $("#btn-cetak").click(function(){
        $('#cetak').printArea();
    });
});