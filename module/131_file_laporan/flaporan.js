$(document).ready(function() {
	resetForm();
	var table;
	  var urlAPI = "http://localhost/sikap_api";
		/* LOAD DATA TABLES LIBRARY */
	table = $('#tabelmhs').DataTable( {
		"ajax": urlAPI+"/app/module/file_laporan/get_flaporan.php",
		"columns": [
			{"data": "no_pengajuan" },
      		{"data": "nim"},
      		{"data": "nm_mhs"},
      		{"data": "prodi"},
			{"data": "judul"}

		]
	});

	$('#tabelmhs tbody').on('click', 'tr', function () {
		resetForm();
		var data = table.row(this).data();
        $('#nim').val(data["nim"]);
        loadData();
        $('#save').attr('disabled', 'disabled');
        $('#update').removeAttr('disabled');
        $('#delete').removeAttr('disabled');
        $('#nim').focus();
	});

	/* EVENT KEY ENTER */
	$('#nm_mhs').keydown(function(e){
		if(e.keyCode == 13){
			$('#no_hp').focus();
		}
	});

	$('#no_hp').keydown(function(e){
		if(e.keyCode == 13){
			$('#username').focus();
		}
	});

	$('#username').keydown(function(e){
		if(e.keyCode == 13){
			$('#password').focus();
		}
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
    	$('.konten').load('111_mahasiswa/mahasiswa.php');
		});
	
	/* UPDATE */
    $('#update').click(function(){
    	updateMahasiswa();
		resetForm();
    	$('.konten').load('111_mahasiswa/mahasiswa.php');
		});
	
	/* DELETE */
		$('#delete').click(function(){
		deleteMahasiswa();
		resetForm();
		$('.konten').load('111_mahasiswa/mahasiswa.php');
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

		$('input[type=password]').each(function(){
			$(this).val("");
		});
	}

	function loadData(){
		$.getJSON(urlAPI+'/app/module/file_laporan/flaporan_load.php', function(json) {
			$('#no_pengajuan').val(json.no_pengajuan);
			$('#nim').val(json.nim);
			$('#nm_mhs').val(json.nm_mhs);
			$('#prodi').val(json.prodi);
			$('#jurusan').val(json.jurusan);
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

	function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
	    }
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