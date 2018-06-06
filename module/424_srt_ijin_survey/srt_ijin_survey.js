$(document).ready(function() {
	var urlAPI = "http://localhost/sikap_api";

    $(function(){           
        var nim = $('#nim').val();

        $.getJSON(urlAPI+'/app/module/srt_ijin_survey/data_load.php',{nim:nim}, function(json) {
            $('#nm_mhs').text(json.nm_mhs);
            $('#nim').text(json.nim);
            $('#prodi').text(json.prodi);
            $('#nm_instansi').text(json.nm_instansi);
            $('#nm_dosen').text(json.wadek.nm_dosen);
            $('#dekan').text(json.wadek.nm_dosen);//tanda tangan
            $('#jabatan').text(json.wadek.jabatan);
            console.log(json);
        });

    });


    $("#btn-cetak").click(function(){
        $('#cetak').printArea();
    });
});