<?php
 error_reporting(0);

include "koneksi.php";

$id = $_POST['id']; 

$sisa_ori = $_POST['sisa_ori']; 
$sisa_cho = $_POST['sisa_cho'];
$sisa_che = $_POST['sisa_che'];
$sisa_tb = $_POST['sisa_tb'];
$sisa_kk = $_POST['sisa_kk'];
$sisa_kv = $_POST['sisa_kv'];
$sisa_tc = $_POST['sisa_tc'];

$tgl_ambil_tb = $_POST['tgl_ambil_tb'];
$tgl_produksi = $_POST['tgl_produksi'];
$rata_ori = $_POST['rata_ori'];
$rata_cho = $_POST['rata_cho'];
$rata_che = $_POST['rata_che'];
$rata_tb = $_POST['rata_tb'];
$rata_kk = $_POST['rata_kk'];
$rata_kv = $_POST['rata_kv'];
$rata_tc = $_POST['rata_tc'];

$produksi_ori = $_POST['produksi_ori'];
$produksi_cho = $_POST['produksi_cho'];
$produksi_che = $_POST['produksi_che'];
$produksi_tb = $_POST['produksi_tb'];
$produksi_kk = $_POST['produksi_kk'];
$produksi_kv = $_POST['produksi_kv'];
$produksi_tc = $_POST['produksi_tc'];



 $querydaily		= "INSERT INTO jadwal_produksi VALUES ('$id','$sisa_ori','$sisa_cho','$sisa_che','$sisa_tb','$sisa_kk','$sisa_kv','$sisa_tc','$tgl_ambil_tb','$tgl_produksi','$rata_ori','$rata_cho','$rata_che','$rata_tb','$rata_kk','$rata_kv','$rata_tc','$produksi_ori','$produksi_cho','$produksi_che','$produksi_tb','$produksi_kk','$produksi_kv','$produksi_tc')";
 $simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));


echo "Data telah berhasil disimpan.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=jadwal_produksi_full">';

?>

