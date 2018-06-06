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

	  table = $('#tabelflaporan').DataTable( {
		"ajax": urlAPI+"/app/module/bimbingan/get_laporan.php",
		"columns": [
			{"data": "no_pengajuan"},
			{"data": "flaporan"},
			{"data": "tgl_upload"}
		]
	});

	$('#tabelflaporan tbody').on('click', 'tr', function () {
		resetForm();
		var data = table.row(this).data();
        $('#kd_bimbingan').val(data["kd_bimbingan"]);
        loadData();
        $('#save').attr('disabled', 'disabled');
        $('#update').removeAttr('disabled');
        $('#delete').removeAttr('disabled');
        $('#kd_bimbingan').focus();
	});


	/* BUTTON EVENT--------------------------------------------------------*/

	    /* SAVE */
	    $('#upload').click(function(){
	    	uploadLaporan();
	    	resetForm();
	    	// $('.konten').load('321_bimbingan/bimbingan.php');
			});
		
		/* DELETE */
			$('#delete').click(function(){
			deleteLaporan();
			resetForm();
			// $('.konten').load('321_bimbingan/bimbingan.php');
			});

	/* END BUTTON EVENT_______________________________________________________*/


	/* CUSTOM FUNCTION --------------------------------------------------------*/

		function resetForm()
		{
			$('#upload').removeAttr('disabled');
			$('#delete').attr('disabled', 'disabled');
			$('input[type=file]').each(function(){
				$(this).val("");
			});
		}

		function loadData(){
			$.getJSON(urlAPI+'/app/module/laporan/laporan_load.php', function(json) {
				$('#no_pengajuan').val(json.no_pengajuan);
			});
		}

		function uploadLaporan(){
			var flaporan 	= $('#flaporan').val();
			$.ajax({
				url:  urlAPI+"/app/module/laporan/laporan_upload.php",
				type: 'POST',
				dataType: 'json',
				data: {
					'aksi'			:'upload',
					'flaporan'		:flaporan
				},
				success : function(data){
					alert(data.pesan);
				}, 
				error: function(data){
					alert(data.pesan);
				}
			});
		}

		function deleteLaporan(){
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

	/*END CUSTOM FUNCTION _____________________________________________________*/
});