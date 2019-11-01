<?php
 error_reporting(0);
// include 'konek.php';


// Include / load file koneksi.php
include "koneksi.php";

// Ambil data yang dikirim dari form
$id = $_POST['id']; // Ambil data id dan masukkan ke variabel nis // Ambil data id dan masukkan ke variabel id
$tgl = date("Y-m-d");
$so = $_POST['so']; 

$soa_ori = $_POST['soa_ori']; 
$soa_cho = $_POST['soa_cho']; 
$soa_che = $_POST['soa_che'];
$soa_tb = $_POST['soa_tb'];
$soa_pb = $_POST['soa_pb'];
$soa_kk = $_POST['soa_kk'];
$soa_kv = $_POST['soa_kv'];
$soa_tc = $_POST['soa_tc'];

$pen_ori = $_POST['pen_ori'];
$pen_cho = $_POST['pen_cho'];
$pen_che = $_POST['pen_che'];
$pen_tb = $_POST['pen_tb'];
$pen_pb = $_POST['pen_pb'];
$pen_kk = $_POST['pen_kk'];
$pen_kv = $_POST['pen_kv'];
$pen_tc = $_POST['pen_tc'];

$pst_tgl = $_POST['pst_tgl'];
$pst_ori = $_POST['pst_ori'];
$pst_cho = $_POST['pst_cho'];
$pst_che = $_POST['pst_che'];
$pst_tb = $_POST['pst_tb'];
$pst_kk = $_POST['pst_kk'];
$pst_kv = $_POST['pst_kv'];
$pst_tc = $_POST['pst_tc'];
$pst_pb = $_POST['pst_pb'];
$rencana_tb = $_POST['rencana_tb'];

$akhir_ori = $_POST['akhir_ori'];
$akhir_cho = $_POST['akhir_cho'];
$akhir_che = $_POST['akhir_che'];
$akhir_tb = $_POST['akhir_tb'];
$akhir_kk = $_POST['akhir_kk'];
$akhir_kv = $_POST['akhir_kv'];
$akhir_tc = $_POST['akhir_tc'];
$akhir_pb = $_POST['akhir_pb'];

$rata_ori = $_POST['rata_ori'];
$rata_cho = $_POST['rata_cho'];
$rata_che = $_POST['rata_che'];
$rata = $_POST['rata'];
$rata_kk = $_POST['rata_kk'];
$rata_kv = $_POST['rata_kv'];
$rata_tc = $_POST['rata_tc'];
$rata_pb = $_POST['rata_pb'];


$tgl_ambil_tb = $_POST['tgl_ambil_tb'];


 $querydaily		= "INSERT INTO tbl_daily VALUES (
 'id',
 '$tgl',
 '$so',
 '$soa_ori',
 '$soa_cho',
 '$soa_che',
 '$soa_tb',
 '$soa_pb',
 '$soa_kk',
 '$soa_kv',
 '$soa_tc',

 '$pen_ori',
 '$pen_cho',
 '$pen_che',
 '$pen_tb',
 '$pen_pb',
 '$pen_kk',
 '$pen_kv',
 '$pen_tc',

 '$pst_tgl',
 '$pst_ori',
 '$pst_cho',
 '$pst_che',
 '$pst_tb',
 '$pst_kk',
 '$pst_kv',
 '$pst_tc',
 '$pst_pb',
 '$rencana_tb',

 '$akhir_ori',
 '$akhir_cho',
 '$akhir_che',
 '$akhir_tb',
 '$akhir_kk',
 '$akhir_kv',
 '$akhir_tc',
 '$akhir_pb',
 
 '$rata_ori',
 '$rata_cho',
 '$rata_che',
 '$rata',
 '$rata_kk',
 '$rata_kv',
 '$rata_tc',
 '$rata_pb',
 '$tgl_ambil_tb')";
 $simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));



echo "Data telah berhasil disimpan.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=data_daily">';

?>

