<?php
// error_reporting(0);
include 'koneksi.php';


$id = $_POST['id'];
$plusid = count($id); 
$tgl = $_POST['tgl'];
$so = $_POST['so'];
$pst_tgl = $_POST['pst_tgl'];
$rencana_tb = $_POST['rencana_tb'];
$tgl_ambil_tb = $_POST['tgl_ambil_tb'];
$tgl_ambil_tb2 = $_POST['tgl_ambil_tb2'];
$tgl_ambil_tb3 = $_POST['tgl_ambil_tb3'];
$tgl_ambil_tb4 = $_POST['tgl_ambil_tb4'];
$tgl_ambil_tb5 = $_POST['tgl_ambil_tb5'];
$tgl_ambil_tb6 = $_POST['tgl_ambil_tb6'];
$tgl_ambil_tb7 = $_POST['tgl_ambil_tb7'];
$rata_ori = $_POST['rata_ori'];
$rata_cho = $_POST['rata_cho'];
$rata_che = $_POST['rata_che'];
$rata = $_POST['rata'];
$rata_kk = $_POST['rata_kk'];
$rata_kv = $_POST['rata_kv'];
$rata_tc = $_POST['rata_tc'];
$rata_pb = $_POST['rata_pb'];
$pengambilan = $_POST['pengambilan'];
$tgl_produksi = $_POST['tgl_produksi'];
$tgl_produksi2 = $_POST['tgl_produksi2'];
$tgl_produksi3 = $_POST['tgl_produksi3'];
$tgl_produksi4 = $_POST['tgl_produksi4'];
$tgl_produksi5 = $_POST['tgl_produksi5'];
$tgl_produksi6 = $_POST['tgl_produksi6'];
$tgl_produksi7 = $_POST['tgl_produksi7'];


for($x=0;$x<$plusid;$x++){
 $querydaily		= "INSERT INTO jadwal_pengambilan VALUES ('$id[$x]','$tgl','$so','$pst_tgl','$rencana_tb','$tgl_ambil_tb','$tgl_ambil_tb2','$tgl_ambil_tb3','$tgl_ambil_tb4','$tgl_ambil_tb5','$tgl_ambil_tb6','$tgl_ambil_tb7','$rata_ori','$rata_cho','$rata_che','$rata','$rata_kk','$rata_kv','$rata_tc','$rata_pb','$pengambilan','$tgl_produksi','$tgl_produksi2','$tgl_produksi3','$tgl_produksi4','$tgl_produksi5','$tgl_produksi6','$tgl_produksi7')";
}
 $simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));

echo "Tanggal telah ditambah.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=penjadwalan">';			

?>
