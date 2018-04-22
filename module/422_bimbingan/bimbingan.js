$(document).ready(function() {
	resetForm();
	var table;
	  var urlAPI = "http://localhost/sikap_api";
	  
	  $(function () {
			loadData();
			$('#datetimepicker1').datetimepicker({
				format:'YYYY-MM-DD'
			});
	  });

	  table = $('#tabelbimbingan').DataTable( {
		"ajax": urlAPI+"/app/module/bimbingan/get_bimbingan.php",
		"columns": [
			{"data": "no_pengajuan"},
			{"data": "kd_bimbingan"},
			{"data": "tgl_bimbingan"},
			{"data": "bahasan"}
		]
	});

	$('#tabelbimbingan tbody').on('click', 'tr', function () {
		resetForm();
		var data = table.row(this).data();
        $('#kd_bimbingan').val(data["kd_bimbingan"]);
        loadData();
        $('#save').attr('disabled', 'disabled');
        $('#update').removeAttr('disabled');
        $('#delete').removeAttr('disabled');
        $('#kd_bimbingan').focus();
	});

	/* EVENT KEY ENTER */
	
	$('#tgl_bimbingan').keydown(function(e){
		if(e.keyCode == 13){
			$('#bahasan').focus();
		}
	});

	$('#bahasan').keydown(function(e){
		if(e.keyCode == 13){
			$('#no_pengajuan').focus();
		}
	});

	
	/* BUTTON EVENT */

    /* RESET */
    $('#reset').click(function(){
		resetForm();
		$('.konten').load('321_bimbingan/bimbingan.php');
    });

    /* SAVE */
    $('#save').click(function(){
    	saveBimbingan();
    	resetForm();
    	$('.konten').load('321_bimbingan/bimbingan.php');
		});
	
	/* UPDATE */
    $('#update').click(function(){
    	updateBimbingan();
		resetForm();
    	$('.konten').load('321_bimbingan/bimbingan.php');
		});
	
	/* DELETE */
		$('#delete').click(function(){
		deleteBimbingan();
		resetForm();
		$('.konten').load('321_bimbingan/bimbingan.php');
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
	}

	function loadData(){
		$.getJSON(urlAPI+'/app/module/bimbingan/bimbingan_load.php', function(json) {
			$('#no_pengajuan').val(json.no_pengajuan);
		});
	}

	function saveBimbingan(){
		var kd_bimbingan 	= $('#kd_bimbingan').val();
		var bahasan 		= $('#bahasan').val();
		var tgl_bimbingan 	= $('#tgl_bimbingan').val();
		var no_pengajuan 	= $('#no_pengajuan').val();
		$.ajax({
			url:  urlAPI+"/app/module/bimbingan/bimbingan_save.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi'			:'save',
				'kd_bimbingan'  :kd_bimbingan,  
				'bahasan'		:bahasan,
				'tgl_bimbingan' :tgl_bimbingan,
				'no_pengajuan'	:no_pengajuan
			},
			success : function(data){
				alert(data.pesan);
			}, 
			error: function(data){
				alert(data.pesan);
			}
		});
	}

	function updateBimbingan(){
		var nim 	= $('#nim').val();
		var nm_mhs 	= $('#nm_mhs').val();
		var prodi 	= $('#prodi').val();
		var no_hp 	= $('#no_hp').val();
		var username= $('#username').val();
		var password= $('#password').val();
		var status 	= $('#status').val();
		$.ajax({
			url:  urlAPI+"/app/module/bimbingan/bimbingan_update.php",
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

	function deleteBimbingan(){
		var nim = $('#nim').val();
		$.ajax({
			url:  urlAPI+"/app/module/bimbingan/bimbingan_delete.php",
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