<?php  
    include "../bin/koneksi.php";
    session_start();

    $path = "files/";
	$lokasi_file = $_FILES['fupload'] ['tmp_name'];
	$pdf	 = $_FILES['fupload'] ['name'];

	// pilih folder untuk penyimpanan
	$tgl_upload = date("Ymd");
	$filename_pdf = $path . $pdf;
	$filename_docx = $path . $_FILES['file_docx']['name'];

	$data_pengajuan = mysqli_query($konek, 'select no_pengajuan from pengajuan where nim="'.$_SESSION['nik'].'"');
	$pengajuan = mysqli_fetch_assoc($data_pengajuan);

	if (move_uploaded_file($lokasi_file, $filename_pdf) && move_uploaded_file($_FILES['file_docx']['tmp_name'], $filename_docx)) {
		echo "Nama file : <b>$filename_pdf & $filename_docx</b> sukses diupload "; 
		$query = "INSERT INTO upload_doc (laporan_pdf, laporan_docx, no_pengajuan, tgl_upload) VALUES ('$filename_pdf', '$filename_docx', '{$pengajuan['no_pengajuan']}', '$tgl_upload')";
		mysqli_query($konek, $query);

	}
	else
	{
		echo "file gagal diupload!";
	}
?>
	
