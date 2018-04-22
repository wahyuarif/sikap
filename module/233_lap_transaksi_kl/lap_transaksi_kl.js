$(document).ready(function() {
	var urlAPI = "http://localhost/ian_api";
	// var urlAPI = "http://101.50.2.45/ian_api";
	var urlGetCombo     = urlAPI+'/app/lib/combo_program.php';

	$(function () {
		$('#datetimepicker1').datetimepicker({
			format:'YYYY-MM-DD'
		});
	
		$('#datetimepicker2').datetimepicker({
			format:'YYYY-MM-DD'
		});

		$('#dtprog1').datetimepicker({
			format:'YYYY-MM-DD'
		});
	
		$('#dtprog2').datetimepicker({
			format:'YYYY-MM-DD'
		});

		 /** Combobox Periode Ajax */
		 $.getJSON(urlGetCombo,function(json){
            $('#program').html('');
            $.each(json, function(index, row) {
                $('#program').append('<option value='+row.kode_program+'>'+row.program+'</option>');
            });
        });
	});

	$("#load_penerimaan").click(function(){
        loadPenerimaan();
	});

	$("#load_penerimaan_program").click(function(){
        loadPenerimaanProgram();
	});
	
	$("#cetak").click(function(){
        $('#data-here').printArea();
    });

	function loadPenerimaan(){
		var dari_tgl = $('#dari').val();
		var sampai_tgl = $('#sampai').val();
		$.ajax({
            url:urlAPI+'/app/module/lap_transaksi_kl/load_penerimaan_kl.php',
            type:'POST',
            data:{dari_tgl:dari_tgl, sampai_tgl:sampai_tgl},
            success:function(data){
                $('#data-here').html(data);
            }
        });
	}

	function loadPenerimaanProgram(){
		var dari_prog_tgl = $('#dari_prog').val();
		var sampai_prog_tgl = $('#sampai_prog').val();
		var program = $('#program').val();
		$.ajax({
            url:urlAPI+'/app/module/lap_transaksi_kl/load_penerimaan_program.php',
            type:'POST',
            data:{dari_prog_tgl:dari_prog_tgl, sampai_prog_tgl:sampai_prog_tgl,program:program},
            success:function(data){
                $('#data-here').html(data);
            }
        });
	}


});