$(document).ready(function() {
	resetForm();
	var table;
	  var urlAPI = "http://localhost/sikap_api";
	table = $('#tabelStatusBimbingan').DataTable( {
		"ajax": urlAPI+"/app/module/status_bimbingan/get_status_bimbingan.php",
		"columns": [
			{"data": "no_pengajuan"},
			{"data": "kd_bimbingan"},
			{"data": "tgl_bimbingan"},
			{"data": "bahasan"},
			{"data": "nim"},
			{"data": "nm_mhs"}
			 
		]
	});

	$(function () {
		$('#datetimepicker1').datetimepicker({
			format:'YYYY-MM-DD'
		});
	});



	$('#tabelStatusBimbingan tbody').on('click', 'tr', function () {
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
    });

    /* SAVE */
    $('#save').click(function(){
    	saveStatusBimbingan();
    	resetForm();
    	$('.konten').load('311_status_bimbingan/status_bimbingan.php');
		});
	
	/* UPDATE */
    $('#update').click(function(){
    	updateStatusBimbingan();
		resetForm();
    	$('.konten').load('311_status_bimbingan/status_bimbingan.php');
		});
	
	/* DELETE */
		$('#delete').click(function(){
		deleteStatusBimbingan();
		resetForm();
		$('.konten').load('311_status_bimbingan/status_bimbingan.php');
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
		var kd_bimbingan = $('#kd_bimbingan').val();
		// var bahasan = $('#bahasan').val();
		$.getJSON(urlAPI+'/app/module/status_bimbingan/status_bimbingan_load.php', {aksi:aksi, kd_bimbingan:kd_bimbingan}, function(json) {
			$('#no_pengajuan').val(json.no_pengajuan);
			$('#kd_bimbingan').val(json.kd_bimbingan);
			$('#tgl_bimbingan').val(json.tgl_bimbingan);
			$('#bahasan').val(json.bahasan);
			
		});
	}

	// function saveStatusBimbingan(){
	// 	var kd_bimbingan 	= $('#kd_bimbingan').val();
	// 	var bahasan 		= $('#bahasan').val();
	// 	var tgl_bimbingan 	= $('#tgl_bimbingan').val();
	// 	var no_pengajuan 	= $('#no_pengajuan').val();
	// 	$.ajax({
	// 		url:  urlAPI+"/app/module/status_bimbingan/status_bimbingan_save.php",
	// 		type: 'POST',
	// 		dataType: 'json',
	// 		data: {
	// 			'aksi'			:'save',
	// 			'kd_bimbingan'  :kd_bimbingan,  
	// 			'bahasan'		:bahasan,
	// 			'tgl_bimbingan' :tgl_bimbingan,
	// 			'no_pengajuan'	:no_pengajuan
	// 		},
	// 		success : function(data){
	// 			alert(data.pesan);
	// 		}, 
	// 		error: function(data){
	// 			alert(data.pesan);
	// 		}
	// 	});
	// }

	function updateStatusBimbingan(){
		var bahasan	= $('#bahasan').val();
		var kd_bimbingan= $('#kd_bimbingan').val();
		// var status= $('#status').val();
		$.ajax({
			url:  urlAPI+"/app/module/status_bimbingan/status_bimbingan_update.php",
			type: 'POST',
			dataType: 'json',
			data: {
				'aksi':'update',
				'bahasan':bahasan,
				'kd_bimbingan':kd_bimbingan
				// 'status':status				
			},
			success : function(data){
				alert(data.pesan);
			}, 
			error: function(data){
				alert(data.pesan);
			}
		});
	}

	function deleteStatusBimbingan(){
		var nim = $('#nim').val();
		$.ajax({
			url:  urlAPI+"/app/module/status_bimbingan/status_bimbingan_delete.php",
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