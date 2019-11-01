	<?php
	include 'koneksi.php';

	$id = $_GET ['id'];

	$delete 	= "DELETE FROM anggota_resmi WHERE id='$id'";
	$querydelete	= mysqli_query($connect, $delete);

	if ($querydelete)
	    {
	    	echo "<strong><center>Data Berhasil Dihapus";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../index.php?halaman=data_anggota'>";
	    }
	else {
	    	//echo "<strong><center>Data Gagal Diubah";
	    	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
	    	print"
	    	<script>
	    	alert(\"Data Gagal Diubah!\");
	    	history.back(-1);
	    	</script>";
	    }
	    ?>