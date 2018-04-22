$(document).ready(function() {
    var urlAPI          = "http://localhost/sikap_api";

    function cetak(){
        var nim = $('#nim').val();
        var nm_mhs = $('#nm_mhs').val();
        var prodi = $('#prodi').val();
        $('.konten').load('122_srt_pembimbingan/print_surat.js','tgl_donasi='+tgl_donasi);
    }

     $('#reset').click(function(){
        $('.konten').load('122_srt_pembimbingan/surat_pembimbingankp.php');
    });

    $('#cetak').click(function(){
        cetak();
    });

});


$(document).ready(function() {
    var table;
      var urlAPI = "http://localhost/sikap_api";

    // LOOKUP
    $('#lookup_surat').DataTable( {
        "ajax": urlAPI+"/app/module/surat/lookup_surat.php",
        "columns": [
            {"data": "nim"},
            {"data": "nm_mhs"},
            {"data": "prodi"}
        ]
    });

    $('#lookup_surat tbody').on('click', 'tr', function (e) {
        var table = $('#lookup_surat').DataTable();
        var data = table.row( this ).data();
        $('#nim').val(data["nim"]);
        $('#nm_mhs').val(data["nm_mhs"]);
        $('#prodi').val(data["prodi"]);
        $('.close').click();
    });


    /* EVENT KEY ENTER */
    $('#judul').keydown(function(e){
        if(e.keyCode == 13){
            $('#nm_mhs').focus();
        }
    });

    $('#nm_mhs').keydown(function(e){
        if(e.keyCode == 13){
            $('#nm_instansi').focus();
        }
    });

});