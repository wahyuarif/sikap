$(document)		.ready(function() {
	resetForm();
	var table;
	  var urlAPI = "http://localhost/sikap_api";
	//   var urlAPI = "http://101.50.2.45/ian_api";
	/* LOAD DATA TABLES LIBRARY */
	table = $('#tabeldosen').DataTable( {
		"ajax": urlAPI+"/app/module/dosen/get_dosen.php",
		"columns": [
      	{"data": "nik" },
      	{"data": "nm_dosen" },
		{"data": "jabatan" }
			  
		]
	});

	$('#tabeldosen tbody').on('click', 'tr',  function () {
		resetForm();
		var data = table.row(this).data();
        $('#nik').val(data["nik"]);
        loadData();
        $('#save').attr('disabled', 'disabled');
        $('#update').removeAttr('disabled');
        $('#delete').removeAttr('disabled');
        $('#nik').focus();
	});



	/* EVENT KEY ENTER */
	$('#nm_dosen').keydown(function(e){
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
    	saveDosen();
    	resetForm();
    	$('.konten').load('112_dosen/dosen.php');
		});
	
	/* UPDATE */
    $('#update').click(function(){
    	updateDosen();
		resetForm();
    	$('.konten').load('112_dosen/dosen.php');
		});
	
	/* DELETE */
		$('#delete').click(function(){
		deleteDosen();
		resetForm();
		$('.konten').load('112_dosen/dosen.php');
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
		var aksi = "load";
		var nik = $('#nik').val();
		$.getJSON(urlAPI+'/app/module/dosen/dosen_load.php', {aksi:aksi, nik:nik}, function(json) {
			$('#nik').val(json.nik);
			$('#nm_dosen').val(json.nm_dosen);
			$('#jabatan').val(json.jabatan);
			$('#username').val(json.username);
			$('#password').val(json.password);
			$('#status').val(json.status);
		});
	}

	function saveDosen(){
		var nik 		= $('#nik').val();
		var nm_dosen 	= $('#nm_dosen').val();
		var jabatan 	= $('#jabatan').val();
		var username 	= $('#username').val();
		var password 	= $('#password').val();
		var status 		= $('#status').val();
		$.ajax({
			url:  urlAPI+"/app/module/dosen/dosen_save.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi'		:'save',
				'nik'		:nik,
				'nm_dosen'	:nm_dosen,
				'jabatan'	:jabatan,
				'username'	:username,
				'password'	:password,
				'status'	:status
			},
			success : function(data){
				alert(data.pesan);
			}, 
			error: function(data){
				alert(data.pesan);
			}
		});
	}

	function updateDosen(){
		var nik 	= $('#nik').val();
		var nm_dosen= $('#nm_dosen').val();
		var jabatan = $('#jabatan').val();
		var username= $('#username').val();
		var password= $('#password').val();
		var status	= $('#status').val();
		$.ajax({
			url:  urlAPI+"/app/module/dosen/dosen_update.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi'		:'update',
				'nik'		:nik,
				'nm_dosen'	:nm_dosen,
				'jabatan'	:jabatan,
				'username'	:username,
				'password'	:password,
				'status'	:status
			},
			success : function(data){
				alert(data.pesan);
			}, 
			error: function(data){
				alert(data.pesan);
			}
		});
	}

	function deleteDosen(){
		var nik = $('#nik').val();
		$.ajax({
			url:  urlAPI+"/app/module/dosen/dosen_delete.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi':'delete',
				'nik':nik
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