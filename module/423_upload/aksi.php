<?php  
    include "../../../bin/koneksi.php";


	$lokasi_file = $_FILES['fupload'] ['tmp_name'];
	$flaporan	 = $_FILES['fupload'] ['name'];

	// pilih folder untuk penyimpanan
	$folder 	= "files";
	$tgl_upload = date("Ymd");

	if (move_uploaded_file($lokasi_file, $folder)) {
		echo "Nama file : <b>$flaporan</b> sukses diupload "; 

		$query = "INSERT INTO upload_doc (flaporan, tgl_upload) VALUES ('$flaporan', '$tgl_upload')";
		mysqli_query($konek, $query);
	}else
	{
		echo "file gagal diupload!";
	}

	
