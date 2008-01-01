$(document).ready(function() {
	resetForm();
	var table;
	  var urlAPI = "http://localhost/sikap_api";
	/* LOAD DATA TABLES LIBRARY */
	table = $('#tabeldosbing').DataTable( {
		"ajax": urlAPI+"/app/module/penentuandosbing/get_penentuan_dosbing.php",
		"columns": [
      	{"data": "no_pengajuan" },
      	{"data": "judul" },
		{"data": "nm_instansi" },
		{"data": "nm_dosen" },
		{"data": "nm_dosen2" },
		{"data": "nim" },
		{"data": "nm_mhs" },
		{"data": "status" }
		]
	});



	$('#tabeldosbing tbody').on('click', 'tr',  function () {
		resetForm();
		var data = table.row(this).data();
        $('#no_pengajuan').val(data["no_pengajuan"]);
        loadData();
        // $('#save').attr('disabled', 'disabled');
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

    var cn = 0;
	$('#lookup_dosbing tbody').on('click', 'tr', function (e) {
		var selected = $(this).toggleClass('selected');

		var table = $('#lookup_dosbing').DataTable();
        var data = table.row( this ).data();
        cn += 1;

        if(cn == 1) {
			$('#nik').val(data["nik"]);
        	$('#nm_dosen').val(data["nm_dosen"]);
        } else {
        	$('#nik2').val(data["nik"]);
        	$('#nm_dosen2').val(data["nm_dosen"]);
		}
        if (cn == 2) {
        	$('.close').click();
        } else if (cn > 2) {
        	cn = 0;
        	$('.close').click();
        }
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

	/* BUTTON EVENT */

    /* RESET */
    $('#reset').click(function(){
    	resetForm();
    	
    });

	/* UPDATE */
    $('#update').click(function(){
    	updateDosbing();
		resetForm();
    	$('.konten').load('212_penentuandosbing/dosbing.php');
		});
	
	/* DELETE */
		$('#delete').click(function(){
		deleteDosbing();
		resetForm();
		$('.konten').load('212_penentuandosbing/dosbing.php');
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
		$.getJSON(urlAPI+'/app/module/penentuandosbing/penentuan_dosbing_load.php', {aksi:aksi, no_pengajuan:no_pengajuan}, function(json) {
			$('#no_pengajuan').val(json.no_pengajuan);
			$('#judul').val(json.judul);
			$('#nm_mhs').val(json.nm_mhs);
			$('#nm_instansi').val(json.nm_instansi);
			$('#nik').val(json.nik);
			$('#nm_dosen').val(json.nm_dosen);
			$('#nik2').val(json.nik);
			$('#nm_dosen2').val(json.nm_dosen);
		});
	}


	function updateDosbing(){
		var no_pengajuan= $('#no_pengajuan').val();
		var nik			= $('#nik').val();
		var nik2		= $('#nik2').val();
		$.ajax({
			url:  urlAPI+"/app/module/penentuandosbing/penentuan_dosbing_update.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi'			:'update',
				'no_pengajuan'	:no_pengajuan,
				'nik'           :nik,
				'nik2'			:nik2
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