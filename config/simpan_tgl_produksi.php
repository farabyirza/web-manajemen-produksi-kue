<?php
include 'koneksi.php';


$id 	   = $_POST['id']; 
$tgl_ambil_tb = $_POST['tgl_ambil_tb']; 

$query = "UPDATE jadwal_produksi SET tgl_ambil_tb='$tgl_ambil_tb' WHERE id='$id'";
$hasil = mysqli_query($connect, $query)or die (mysqli_error($connect));



echo "Tanggal telah ditambah.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=jadwal_produksi_full">';			
?>

                     