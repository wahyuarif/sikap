$(document).ready(function() {
	resetForm();
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