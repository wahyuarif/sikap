$(document).ready(function() {
    var urlAPI = "http://localhost/sikap_api";

    $(function(){       
        var tgl_donasi = $('#tgl_donasi').val();

        loadFooter();
        loadTotal();

        $.ajax({
            url:urlAPI+'/app/module/ld_zisr/ld_zisr_struk.php',
            type:'POST',
            data:{tgl_donasi:tgl_donasi},
            success:function(data){
                $('#data-here').html(data);
            }
        });

    });

    function loadTotal(){
        var tgl_donasi = $('#tgl_donasi').val();
        $.getJSON(urlAPI+'/app/module/ld_zisr/total_load.php',{tgl_donasi:tgl_donasi}, function(json) {
			$('#total_penerimaan').text(formatMataUang(json.total));
		});
    }

    function loadFooter(){
        $.getJSON(urlAPI+'/app/module/ld_zisr/footer_load.php', function(json) {
			$('#zisrfo').text(json.nama_petugas);
		});
    }

    $("#btn-cetak").click(function(){
        $('#cetak').printArea();
    });
});