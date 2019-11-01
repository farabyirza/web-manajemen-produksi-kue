<?php
// error_reporting(0);
include 'koneksi.php';


$id = $_POST['id'];
$jumlah_dipilih = count($id);
$tgl = $_POST['tgl'];
$so = $_POST['so'];
$pst_tgl = $_POST['pst_tgl'];
$rencana_tb = $_POST['rencana_tb'];
$tgl_ambil_tb = $_POST['tgl_ambil_tb'];
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

// $id2 = $_POST['id'];
// $tgl2 = $_POST['tgl'];
// $so2 = $_POST['so'];
// $pst_tgl2 = $_POST['pst_tgl'];
// $rencana_tb2 = $_POST['rencana_tb'];
// $tgl_ambil_tb2 = $_POST['tgl_ambil_tb'];
// $rata_ori2 = $_POST['rata_ori'];
// $rata_cho2 = $_POST['rata_cho'];
// $rata_che2 = $_POST['rata_che'];
// $rata2 = $_POST['rata'];
// $rata_kk2 = $_POST['rata_kk'];
// $rata_kv2 = $_POST['rata_kv'];
// $rata_tc2 = $_POST['rata_tc'];
// $rata_pb2 = $_POST['rata_pb'];
// $pengambilan2 = $_POST['pengambilan'];
// $tgl_produksi2 = $_POST['tgl_produksi'];

// $id3 = $_POST['id'];
// $tgl3 = $_POST['tgl'];
// $so3 = $_POST['so'];
// $pst_tgl3 = $_POST['pst_tgl'];
// $rencana_tb3 = $_POST['rencana_tb'];
// $tgl_ambil_tb3 = $_POST['tgl_ambil_tb'];
// $rata_ori3 = $_POST['rata_ori'];
// $rata_cho3 = $_POST['rata_cho'];
// $rata_che3 = $_POST['rata_che'];
// $rata3 = $_POST['rata'];
// $rata_kk3 = $_POST['rata_kk'];
// $rata_kv3 = $_POST['rata_kv'];
// $rata_tc3 = $_POST['rata_tc'];
// $rata_pb3 = $_POST['rata_pb'];
// $pengambilan3 = $_POST['pengambilan'];
// $tgl_produksi3 = $_POST['tgl_produksi'];




for($x=0;$x<$jumlah_dipilih;$x++){
 $querydaily		= "INSERT INTO jadwal_pengambilan VALUES ('$id','$tgl','$so','$pst_tgl','$rencana_tb','$tgl_ambil_tb','$rata_ori','$rata_cho','$rata_che','$rata','$rata_kk','$rata_kv','$rata_tc','$rata_pb','$pengambilan','$tgl_produksi')";
}
// $querydaily2		= "INSERT INTO jadwal_pengambilan VALUES ('$id2','$tgl2','$so2','$pst_tgl2','$rencana_tb2','$tgl_ambil_tb2','$rata_ori2','$rata_cho2','$rata_che2','$rata2','$rata_kk2','$rata_kv2','$rata_tc2','$rata_pb2','$pengambilan2','$tgl_produksi2')";

// $querydaily3		= "INSERT INTO jadwal_pengambilan VALUES ('id3','$tgl3','$so3','$pst_tgl3','$rencana_tb3','$tgl_ambil_tb3','$rata_ori3','$rata_cho3','$rata_che3','$rata3','$rata_kk3','$rata_kv3','$rata_tc3','$rata_pb3','$pengambilan3','$tgl_produksi3')";

 $simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));
 // $simpandaily2		= mysqli_query($connect,$querydaily2)or die(mysqli_error($connect));
 // $simpandaily3		= mysqli_query($connect,$querydaily3)or die(mysqli_error($connect));

echo "Tanggal telah ditambah.";
// echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=penjadwalan">';			

?>
