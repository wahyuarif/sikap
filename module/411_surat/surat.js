$(document).ready(function() {
	resetForm();
	var table;
	  var urlAPI = "http://localhost/sikap_api";
	/* LOAD DATA TABLES LIBRARY */
	table = $('#tabelsurat').DataTable( {
		"ajax": urlAPI+"/app/module/surat/get_surat.php",
		"columns": [
			{"data": "nm_mhs"},
			{"data": "nim" },
      		{"data": "prodi"}
			  
		]
	});

	$('#tabelsurat tbody').on('click', 'tr', function () {
		resetForm();
		var data = table.row(this).data();
        $('#nim').val(data["nim"]);
        loadData();
        $('#save').attr('disabled', 'disabled');
        $('#update').removeAttr('disabled');
        $('#delete').removeAttr('disabled');
        $('#nim').focus();
	});

	
	/* BUTTON EVENT */

    /* RESET */
    $('#reset').click(function(){
    	resetForm();
    	
    });

    /* SAVE */
    $('#save').click(function(){
    	saveMahasiswa();
    	resetForm();
    	$('.konten').load('421_surat/surat.php');
		});
	
	/* UPDATE */
    $('#update').click(function(){
    	updateMahasiswa();
		resetForm();
    	$('.konten').load('421_surat/surat.php');
		});
	
	/* DELETE */
		$('#delete').click(function(){
		deleteMahasiswa();
		resetForm();
		$('.konten').load('421_surat/surat.php');
		});


		/* CUSTOM FUNCTION */
	function resetForm()
	{
		$('#save').removeAttr('disabled');
		$('#update').attr('disabled', 'disabled');
		$('#delete').attr('disabled', 'disabled');
		$('input[type=text]').each(function(){
			$(this).val("");
		});

		$('input[type=password ]').each(function(){
			$(this).val("");
		});
	}


	function loadData(){
		$.getJSON(urlAPI+'/app/module/surat/surat_load.php', function(json) {
			$('#nim').val(json.nim);
		});
	}


	function saveMahasiswa(){
		var nim 	= $('#nim').val();
		var nm_mhs 	= $('#nm_mhs').val();
		var prodi 	= $('#prodi').val();
		var no_hp 	= $('#no_hp').val();
		var username= $('#username').val();
		var password= $('#password').val();
		var status 	= $('#status').val();
		$.ajax({
			url:  urlAPI+"/app/module/mahasiswa/mahasiswa_save.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi':'save',
				'nim':nim,
				'nm_mhs':nm_mhs,
				'prodi':prodi,
				'no_hp':no_hp,
				'username':username,
				'password':password,
				'status':status
			},
			success : function(data){
				alert(data.pesan);
			}, 
			error: function(data){
				alert(data.pesan);
			}
		});
	}

	function updateMahasiswa(){
		var nim 	= $('#nim').val();
		var nm_mhs 	= $('#nm_mhs').val();
		var prodi 	= $('#prodi').val();
		var no_hp 	= $('#no_hp').val();
		var username= $('#username').val();
		var password= $('#password').val();
		var status 	= $('#status').val();
		$.ajax({
			url:  urlAPI+"/app/module/mahasiswa/mahasiswa_update.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi':'update',
				'nim':nim,
				'nm_mhs':nm_mhs,
				'prodi':prodi,
				'no_hp':no_hp,
				'username':username,
				'password':password,
				'status':status
			},
			success : function(data){
				alert(data.pesan);
			}, 
			error: function(data){
				alert(data.pesan);
			}
		});
	}

	function deleteMahasiswa(){
		var nim = $('#nim').val();
		$.ajax({
			url:  urlAPI+"/app/module/mahasiswa/mahasiswa_delete.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi':'delete',
				'nim':nim
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