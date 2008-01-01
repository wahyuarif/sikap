$(document).ready(function() {
    resetForm();
    var table;
      var urlAPI = "http://localhost/sikap_api";
    /* LOAD DATA TABLES LIBRARY */
    table = $('#tabeldosbing').DataTable( {
        "ajax": urlAPI+"/app/module/surat_tugas/get_srt_tugas.php",
        "columns": [
            {"data": "no_pengajuan" },
            {"data": "nm_dosen" },
            {"data": "nm_dosen2" },
            {"data": "nim" },
            {"data": "nm_mhs" },
            {"data": "status" }

        ]
    });

    $('#status').change(function(){
        alert($(this).val());
    });



    $('#tabeldosbing tbody').on('click', 'tr',  function () {
        resetForm();
        var data = table.row(this).data();
        $('#no_pengajuan').val(data["no_pengajuan"]);
        loadData();
        $('#cetak').removeAttr('disabled', 'disabled');
        $('#update').removeAttr('disabled');
        $('#delete').removeAttr('disabled');
        $('#no_pengajuan').focus();
    });


    // LOOKUP
    
    $('#lookup_dosbing').DataTable( {
        "ajax": urlAPI+"/app/module/penentuandosbing/lookup_dosbing.php",
        "columns": [
            {"data": "nik"   },
            {"data": "nm_dosen" }
        ]
    });


    $('#lookup_dosbing tbody').on('click', 'tr', function (e) {
        var selected = $(this).toggleClass('selected');

        var table = $('#lookup_dosbing').DataTable();
        var data = table.row( this ).data();

        $('#nik').val(data["nik"]);
        $('#nm_dosen').val(data["nm_dosen"]);
        // $('.close').click();
    });


    /* EVENT KEY ENTER */
    /*............................*/
    /* BUTTON EVENT */

    /* RESET */
    $('#reset').click(function(){
        resetForm();
        
    });

    /* UPDATE */
    
    /* Cetak */
    $('#cetak').click(function(){
        cetakSurat();
    });

    /* CUSTOM FUNCTION */
    function resetForm() {
        $('input[type=text]').each(function(){
            $(this).val("");
        });
    }

    function cetakSurat(){
        var no_pengajuan = $('#no_pengajuan').val();
        var stat = $('#status').val();
        if (stat == "kp") {
            $('.konten').load('223_surat_tugas/cetak_kp.php','no_pengajuan='+no_pengajuan);
        } else {
            $('.konten').load('223_surat_tugas/cetak_ta.php','no_pengajuan='+no_pengajuan);
        } 

    function loadData(){
        var aksi = "load";
        var no_pengajuan = $('#no_pengajuan').val();
        $.getJSON(urlAPI+'/app/module/surat_tugas/surat_tgs_load.php', {aksi:aksi, no_pengajuan:no_pengajuan}, function(json) {
            $('#no_pengajuan').val(json.no_pengajuan);
            $('#judul').val(json.judul);
            $('#nm_mhs').val(json.nm_mhs);
            $('#nim').val(json.nim);
            $('#nm_instansi').val(json.nm_instansi);
            $('#nik').val(json.nik);
            $('#nm_dosen').val(json.nm_dosen);
            $('#nik2').val(json.nik2);
            $('#nm_dosen2').val(json.nm_dosen2);
            $('#prodi').val(json.prodi);

        });
    }


    function updateDosbing(){
        var no_pengajuan= $('#no_pengajuan').val();
        var nik         = $('#nik').val();
        $.ajax({
            url:  urlAPI+"/app/module/penentuandosbing/penentuan_dosbing_update.php",
            type: 'POST',
            dataType: 'json',
            data: {
                'aksi'          :'update',
                'no_pengajuan'  :no_pengajuan,
                'nik'           :nik
            },
            success : function(data){
                alert(data.pesan);
            }, 
            error: function(data){
                alert(data.pesan);
            }
        });
    }

    function deleteDosbing(){
        var no_pengajuan = $('#no_pengajuan').val();
        $.ajax({
            url:  urlAPI+"/app/module/penentuandosbing/dosbing_delete.php",
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